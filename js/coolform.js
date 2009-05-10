var reg = new RegExp("@");
var email = document.getElementById('cEmail').value;

function validateform(thisform)
{
  var fields = '';
  var errorcount = 0;
  if(document.getElementById('cName').value == "")
  {
    errorcount++;
    if(errorcount > 1)
        fields = fields + " and Name";
    else
        fields = fields + "Name";
  }

  if(document.getElementById('cEmail').value == "" || !reg.test(email))
  {
    errorcount++;
    if(errorcount > 1)
        fields = fields + " and Email";
    else
        fields = fields + "Email";
  }

  if(document.getElementById('cMsg').value == "")
  {
    errorcount++;
    if(errorcount > 1)
        fields = fields + " and Message";
    else
        fields = fields + "Message";
  }

  if(errorcount > 0)
  {
    document.getElementById('errormessage').innerHTML = '<span class="coolformerror">Invalid Fields: '+fields+'</span>';
    return false;
  }

  return true;
}
