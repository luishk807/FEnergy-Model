<?php
session_start();
$check=0;
$name = ucwords(strtolower($_REQUEST["namex"]));
$name = trim($name);
$phone = trim($_REQUEST["phone"]);
$email = trim(strtolower($_REQUEST["email"]));
$comment = trim($_REQUEST["comment"]);
$subject = "Email From Jane Doe Page By ".$name;
$message = $name." requested to be contacted";
$message .="<br/><br/>".$name." contact information is as follows: <br/><br/>";
$message .="Name: ".$name."<br/>";
$message .="Phone: ".$phone."<br/>";
$message .="Email: ".$email."<br/>";
if(!empty($message))
{
	$message .="<br/><br/>";
	$message .="Comment or question left by ".$name.":<br/>";
	$message .=nl2br($comment);
}
$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .='Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .="From: JaneDoePage<no-reply@janedoepage.com>\r\n"."X-Mailer: PHP/".phpversion();
$email_to="luishk807@hotmail.com";
if($result = mail($email_to,$subject, $message,$headers))
	echo "Email Sent, Thank You<br/>";
else
	echo "Thank Your For Your Email<br/>";
?>