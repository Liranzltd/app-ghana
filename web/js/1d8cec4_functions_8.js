function validatedDate(value,el)
{
  var resp = true;
  var dt = moment(value, "DD-MM-YYYY");
  if(!moment(value,'DD/MM/YYYY',true).isValid())
  {
    resp = false;
  }
  if($(el).hasClass('issueDate'))
  {
    if(moment().diff(dt, 'days') < 0)
    {
      resp = false;
    }
  }
  return resp;
}
function checkRegistered(field,value)
{
  $.ajax({
    url: '/validate-info',
    data: { field: field, value: value },
    success:  function(response)
    {
      if(response.status == 'exists')
      {
        $('#'+field).parent().addClass('has-error');
        $('#'+field).prev().text(response.message);
      }
      else
      {
        $('#'+field).parent().removeClass('has-error');
        $('#'+field).prev().text('Registration Number');
      }
    }
  });
}
function validateSection(el,selector)
{
  var curStep = el.closest('#'+selector);
  var curInputs = curStep.find("input[type='text'],input[type='url'],input[type='radio'],input[type='email'],input[type='number'],input[type='file'],input[type='checkbox'],select,textarea"),
  isValid = true,
  uploaded_size = 0,
  error_msg = "Please correct highlighted fields to proceed";
  for(var i=0; i<curInputs.length; i++)
  {

      if(!$('#'+curInputs[i].id).closest('.form-group').is(":hidden"))
      {
        if (!curInputs[i].validity.valid){
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }

        if($(curInputs[i]).attr('type') == 'file')
        {
          if(curInputs[i].files.length != 0)
          {
            uploaded_size = uploaded_size + curInputs[i].files[0].size;
          }
        }
      }

  }
  if(uploaded_size > 12200000)
  {
    isValid = false;
    error_msg = "The files uploaded exceed the maximum allowed limit of 12 MB";
  }

  if(curStep[0].className == 'slider')
  {

    if(isValid)
    {
      curStep.prepend('<div class="loading-overlay"></div>');
      return true;
      //HTMLFormElement.prototype.submit.call($("#company-registration")[0]);
    }
    else
    {
      swal({
        title: "Error!",
        text: error_msg,
        type: "error",
        confirmButtonText: "Ok"
        });
        return false;
    }
  }
  else {
    return isValid;
  }
}
function showResponse(response, statusText, xhr, $form)
{
  $(document).find('.loading-overlay').fadeOut('fast',function () {
      $(this).remove();
  });

  swal({
    title: response.title,
    text: response.section,
    type: response.type,
    showCloseButton: false,
    showConfirmButton: false,
    timer: 2000
  }).then(
    function () {

    },
    // handling the promise rejection
    function (dismiss) {
      if (dismiss === 'timer') {

        if(response.btn == 'save and continue')
        {
          //alert(response.url);
          //window.location = response.url + '/'+ parseInt(response.tab);
          showAlert(response);
        }
        else if(response.btn == 'save')
        {
          var tab = parseInt(response.tab)-1;
          var url = tab > 0 ? response.url + '/'+tab : response.url;
          window.location = url;
          showAlert(response);
        }
        else{
          // console.log(response.readyForValidation);
          if(response.readyForValidation == false)
          {
            window.location = response.url;
          }
          else {
            swal({
              title: "Congratulations!",
              html: "<p>Thank you for completing your registration on the <b>African Partner Pool, (APP)</b> platform!</p><p>As you await verification, we would like to introduce you to the <b>APP Business-Network.</b></p><p>This is a private networking platform within the APP that allows you to:<ul><li>Connect with other members in our interactive online community</li><li>Build valuable networks with like-minded business people</li><li>Promote and grow your businesses and exchange ideas</li><li>Partner, create & share opportunities</li></ul></p>",
              type: "success",
              showCancelButton: true,
              confirmButtonColor: '#DD6B55',
              cancelButtonColor: '#d33',
              cancelButtonText: "Remain at this form",
              confirmButtonText: 'Join APP-Network'
            }).then(function () {
              window.location = 'https://kenya-app.hivebrite.com/saml/sso';
            });
          }
        }
      }
    }
  )
}
function showAlert(reponse)
{
  var html = '  <div class="alert alert-'+response.type +' alert-dismissible" role="alert">' +
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' +
        '<strong>'+reponse.title+'</strong> '+ reponse.section +
      '</div>';
      html.insertAfter(".stepwizard");
}
