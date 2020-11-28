function printLines(arr)
{
  var lines = '';

  for(i in arr)
  {
    if(arr[i] != '')
    {
      lines = lines + '<p><strong>'+ capitalise(i) +'</strong><br/>'+ arr[i] +'</p>';
    }
  }
  if(lines != '')
  {
    lines = lines + '<hr/>';
  }
  return lines;
}
function capitalise(str)
{
  return str.replace(str[0], str[0].toUpperCase());
}
function showdialog(dialog)
{
  dialog.showModal();
}
