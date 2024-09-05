






<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "hangor-357@hotmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# RESULT PAGE
$location = "index.html";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
# SEE ALSO: How to protect a php Email Form using php mail  or mb_send_mail against Mail Header Injection
$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, $sender ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##





function sendmail($to, $subject, $message, $from, $messageAdmin, $toAdmin) {
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";
	
	$result = mail($to,$subject,$message,$headers);
    mail($toAdmin,$subject,$messageAdmin,$headers);
	
	if ($result) return 1;
	else return 0;
}

##header( "Location: $location" );###

?>
float:left;
position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
