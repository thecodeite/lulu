<?php

$name       = $_POST['name'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$message    = $_POST['message'];

$url        = $_POST['url'];
$recipient  = $_POST['recipient'];

// check for real MX domain
list( $userName, $mailDomain ) = explode( "@", $email ); 

if ( checkdnsrr( $mailDomain, "MX" ) )
{

$email_message = <<< EMAIL

Name: $name
Email: $email 
Telephone: $phone.

$message

EMAIL;

mail( $recipient,'Website Contact Form', $email_message, "From: $email" );
	echo "
	<script type=\"text/javascript\">
		//window.location = '$url';
		window.location = 'http://luluplews.com/contact-thankyou';
	</script>
	";
} 
else 
{
	echo "
	<script type='text/javascript'>
		//window.location = '$url';
		window.location = 'http://luluplews.com/contact-thankyou';
	</script>
	";
}