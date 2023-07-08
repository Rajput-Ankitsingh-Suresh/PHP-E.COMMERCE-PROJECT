Script To Send Mail:

<?php
$to_email = "asr91198@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: rajputankit5570@gmail.com ";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
