$("document").ready(function() {
  triggerDate();
  var fcount = 0;
  fetchData($('#organisationType').val(),$('#company_id').val());

  $('.toggleHidden').each(function (index, obj)
  {
    if(obj.checked)
    {
      var el = $('#'+obj.id);
      toggleRadios(el.val(),el.data('reveal'));
    }
  });

  var active = $(".active"),
    activeSlider = active.data("tab"),
    tabCoords = active.position(),
    sliderWidth = active.outerWidth();
  $(".hover").width(sliderWidth);
  $(".hover").css("left", tabCoords.left);
  $("#" + activeSlider).fadeIn(500);

  $(".tab").click(function() {
    $(".tab").removeClass("active");
    var hover = $(".hover"),
      tabCoords = $(this).position(),
      newWidth = $(this).outerWidth(),
      slider = $(this).data("tab");
    $(this).addClass("active");
    hover.css("left", tabCoords.left);
    hover.width(newWidth);
    $(".slider").fadeOut(200);
    setTimeout(function() {
      $("#" + slider).fadeIn(300);
    }, 200);
  });

  $("svg").click(function() {
    $(this).addClass("forked");
    $("footer a").css("color", "#ff5a5a");
    setTimeout(function() {
      $("svg").removeClass("forked");
      $("footer a").css("color", "#55b2da");
    }, 2000);
  });
  $(document).on('change','.uploads',function()
  {
    var el = $(this).closest('.recordset');
    if(validateSection($(this),el.attr('id')))
    {
      //var row = $(this).closest('.rowcont');
      var singlepost = el.find('input,textarea,select').serializeArray();
      singlepost.push({name: 'company_id', value: $('#company_id').val()});

      var formData = new FormData();
      formData.append($(this).attr('name'),$(this)[0].files[0])

      $.each(singlepost,function(i,item)
      {
        formData.append(item.name,item.value);
      });
      uploadFile($(this),formData);
      fcount++;
      updateFcount(fcount);
    }
  });
});

$(".dynamic-rows").czMore({
  onAdd: function()
  {
    var el = $($(this)[0].target);
    //console.log(el.prev().prev());
    //hidden.remove();
  }
});

$('.btnPlus').on('click',function()
{
  var el = $(this).prev().prev().prev();
  //console.log(el);
  if(el.attr('class') == "requiredCheck")
  {
    el.remove();
  }

});

$('.toggleHidden').on('click',function()
{
  var array = $(this).data('reveal').split(',');
  for (var a in array)
  {
      toggleRadios($(this).val(),array[a]);
  }


});

function toggleRadios(val,el)
{
  if(val == 'Yes')
  {
    $('#'+el).removeClass('hidden');
  }
  else
  {
    $('#'+el).addClass('hidden');
  }
}

$('.removeExisting').on('click',function(e){
  e.preventDefault();

  //console.log($(this).data());
  $.ajax({
    url:  '/portal/remove-component',
    data: $(this).data(),
    success:  function(response)
    {

    }
  });
  $(this).next().remove();
  $(this).remove();
});

$('.saveBtn').on('click',function(e)
{
  e.preventDefault();
  $('#current_page').val($(this).data('btn'));
  //alert($('#company_id').val());
  $('#btn').val($(this).data('btn'));
  if(validateSection($(this),$(this).data('section')))
  {
    var options = {
        success: showResponse,
        clearForm: false,
        resetForm: false
    };
    $('#company-registration').ajaxSubmit(options);
    nextTab();
  }

});

$('#fcount').on('click',function(e)
{
  e.preventDefault();
  if(validateSection($(this),$(this).data('section')))
  {
    nextTab();
  }
});

$('#organisationType').on('change',function()
{
  fetchData($(this).val(),$('#company_id').val());
});

function updateFcount(fcount)
{
  $('#fcount').html('You have uploaded '+ fcount +' file(s)');
}

function nextTab()
{
  if(window.location.pathname == "/portal/register-company")
  {
    window.location = "/portal/supplier/my-companies";
  }
  else {
    $('html, body').animate({
          scrollTop: $("ul.tabs").offset().top
      }, 2000);
    var el = $("ul.tabs").find("li.active");
    if(el.find(".fas").length < 0)
    {
      el.append('<i class="fas fa-check" aria-hidden="true"></i>');
    }
    el.next().trigger('click');
  }
}

function fetchData(val,org)
{
  if(val != '')
  {
    $.ajax({
      url: '/fetch-requirements',
      data: { organisationType: val, company: org },
      success: function(response)
      {
        fillData(response);
        triggerDate();
      }
    });
  }
}
function fillData(data)
{
  html = '';
  $.each(data,function(i,item)
  {
    var required = '', expires = false, multiple = '', row_html = '', requiresUpload = '';
    if(item.required == 1)
    {
      required = ' <span class="text-danger">(required)</span>';
    }
    if(item.expires == 1)
    {
      expires = true;
    }
    if(item.multiple)
    {
      multiple = true;
    }
    if(item.requiresUpload)
    {
      requiresUpload = true;
    }
    html = html + '<div class="col-xs-12"><h4>'+ item.name +' '+ required +'</h4><hr/></div>' +
    '<div id="container_'+ i +'" class="recordset">';
    row_html =  addRow(i,expires,item.id,'',item.values[0],required,requiresUpload);
    html =  html + row_html + '</div>';

    if(multiple)
    {
      html = html + '<div class="col-xs-12"><button class="docs-btn docs-btn btn btn-xs btn-fill btn-primary" type="button" id="btn_add_'+i+'" data-index="'+i+'" data-expires="'+expires+'" data-item="'+ item.id +'" data-requiresUpload="'+item.requiresUpload+'" data-required="'+item.required+'">Add document fields</button></div>';
    }

  });

  $('#docs_container').html(html);
  $('[id^=btn_add_]').on("click", function()
  {
    var index = parseInt($(this).data('index'));
    var count = $('#container_'+ index +' input[type="hidden"]').length;
    var date_id = addRow(count+1,$(this).data('expires'),$(this).data('item'),'container_'+ index,{documentNumber: '', issuedBy: '', expiryDate: '', issueDate: '', id: ''},$(this).data('required'),$(this).data('requiresUpload'));
    triggerDate();
  });
}
function addRow(i,expires,doc_id,container,values,required,requiresUpload)
{
  var link = '';
  var frequired = 'required';
  if(!required)
  {
    frequired = '';
    required = '';
  }
  else
  {
    required = ' <span class="text-danger">(required)</span>';
  }
  if(values.link !== "")
  {
    link = '<a href="'+ values.link +'" target="_blank">View uploaded file</a>';
    frequired = '';
  }

  //required == '*' ? 'required' : '';
  var html = '';
  html = '<div class="row"><div class="form-group col-xs-12 col-md-6"><label class="control-label">Document Number</label><input type="text" value="'+ values.documentNumber +'" name="documents[documentNumber][]" id="documents_'+ i +'_documentNumber" class=""></div>' +
  '<div class="form-group col-xs-12 col-md-6"><label class="control-label">Issued By</label><input type="text" value="'+ values.issuedBy +'" name="documents[issuedBy][]" id="documents_'+ i +'_issuedBy" class=""></div>' +
  '<div class="form-group col-xs-12 col-md-4"><label class="control-label">Issue Date </label><input type="text" class="date datepicker" readonly="readonly" name="documents[issueDate][]" value="'+ values.issueDate +'" /></div>';
value="'+ values.issuedBy +'";
  if(expires)
  {
    html = html + '<div class="form-group col-xs-12 col-md-4"><label class="control-label">Expiry Date '+required+'</label><input type="text" class="date datepicker" readonly="readonly" name="documents[expiryDate][]" value="'+ values.issueDate +'" /></div>';
  }
  else
  {
    html = html + '<div class="form-group col-xs-12 col-md-4 hidden"><input type="hidden" name="documents[expiryDate][]" placeholder="use format DD/MM/YYYY" value="" id="documents_'+ i +'_expiryDate" class=""></div>';
  }
  if(requiresUpload)
  {
    html = html + '<div class="form-group col-xs-12 col-md-4"><label class="control-label">File '+required+'</label><input type="file" name="documents[file]['+doc_id+']" id="documents_'+ i +'_file" data-url="/portal/singleUpload" class=" uploads" '+frequired+' accept=".gif,.jpg,.jpeg,.png,.doc,.docx,.pdf">'+link+'</div>';
  }
  html = html + '<input type="hidden" name="documents[documentType][]" value="'+doc_id+'"></div>';
  if(container == '')
    return html;
  else
  {
    $('#'+container).append(html);
  }
  $('#documents_'+ i +'_file').fileupload();
  // $(document).ready(function() {
  // //$(".bfh-datepicker").bfhdatepicker('toggle');
  // });
}
function triggerDate()
{
  $(".datepicker").datepicker({
    firstDay: 1,
    showOtherMonths: true,
    changeMonth: true,
    changeYear: true,
    dateFormat: "dd/mm/yy"
  });
  $(".date").mousedown(function() {
    $(".ui-datepicker").addClass("active");
  });
}

function uploadFile(el,formdata)
{
  $.ajax({
      url: '/portal/singleUpload',
      type: 'POST',
      data: formdata,
      dataType: 'json',
      processData: false, // Don't process the files
      contentType: false, // Set content type to false as jQuery will tell the server its a query string request
      xhr: function() {
        var myXhr = $.ajaxSettings.xhr();
        if (myXhr.upload) {
            // For handling the progress of the upload
            myXhr.upload.addEventListener('progress', function(e) {
                if (e.lengthComputable) {
                    $('progress').attr({
                        value: e.loaded,
                        max: e.total,
                    });
                }
            } , false);
        }
        return myXhr;
    },
    success:  function(data)
    {
      el.next().remove();
      el.after('<a href="/portal/downloadfile/'+data.file+'">View uploaded file</a>');
      el.removeAttr('required');

    }
  });
}
