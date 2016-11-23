<?php

$EmailFrom = "chrisli41@gmail.com";
$EmailTo = "chrisli41@gmail.com";
$Subject = "Contact Information";
$Name = Trim(stripslashes($_POST['first_name']));
$LastName = Trim(stripslashes($_POST['last_name']));
$Email = Trim(stripslashes($_POST['email']));
$Message = Trim(stripslashes($_POST['comment']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= " ";
$Body .= "Last Name: ";
$Body .= $LastName;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>