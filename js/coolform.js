
function validateform()
{
  var errormsg = "Missing Fields: ";
  var errorcount = 0;
  if(document.conForm.cName.value.replace(/^\s+|\s+$/g, '') == "")
  {
    errorcount++;
    if(errorcount > 1)
        errormsg = errormsg + " and Name";
    else
        errormsg = errormsg + "Name";
  }

  if(document.conForm.cEmail.value.replace(/^\s+|\s+$/g, '') == "")
  {
    errorcount++;
    if(errorcount > 1)
        errormsg = errormsg + " and Email";
    else
        errormsg = errormsg + "Email";
  }

  if(document.conForm.cMsg.value.replace(/^\s+|\s+$/g, '') == "")
  {
    errorcount++;
    if(errorcount > 1)
        errormsg = errormsg + " and Message";
    else
        errormsg = errormsg + "Message";
  }

  if(errorcount > 0)
  {
    document.getElementById('errormessage').innerHTML = '<span class="coolformerror">'+errormsg+'</span>';
    return false;
  }
  else
  {
    return true;
  }
}
