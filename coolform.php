<?php
if($_GET['mailsent'] == 1)
{
  //global $current_user;
  //get_currentuserinfo();
  //$recipient = $current_user->user_email; //recipient
  $recipient = get_option('cool_email_option');
  $mail_body = $_POST[cMsg]; //mail body
  $subject = "Message from your Blog"; //subject
  $header = "From: ". $_POST[cName]."<".$_POST[cEmail].">"; //optional headerfields
  mail($recipient, $subject, $mail_body, $header);
  $errormessage = "<span class='coolformsuccess'>Mail Sent Successfully</span>";
}
?>
<h2><?php echo get_option('cool_title_option'); ?></h2>
<p>Fill this form or you can directly email me at: nischalmaniar [at] gmail [dot] com</p>
<form name='conForm' id='conForm' method="POST" action="./?mailsent=1" onsubmit="return validateform(this)">
<div id="errormessage"><?php echo $errormessage; ?></div>
<p><label class='cLabel'> Name</label></p><p><input class="democlass" type='text' size="50" name='cName' id='cName' value="<?php echo $_POST[cName]; ?>"/></p>
<p><label class='cLabel'> Email</label></p><p><input type='text' size="50" name='cEmail' id='cEmail' value="<?php echo $_POST[cEmail]; ?>"/></p>
<p><label class='cLabel'> Message</label></p><p><textarea  rows="10"  cols="55" name='cMsg' id='cMsg'><?php echo $_POST[cMsg]; ?></textarea></p>
<p><input type="submit" name="cSubmit" id="cSubmit" value="Submit" />
</form>