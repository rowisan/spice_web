<?php
ini_set("SMTP", $smtp);
ini_set("smtp_port", $smtp_port);
ini_set("sendmail_from", $sendmail_from);
ini_set("username", $username);
ini_set("password", $password);


$headers .= "Content-Transfer-Encoding: 7bit" . "\r\n";

$to = $email;
$subject = $companyName . " Inquiry - " . $itemCode;
ob_start();
include ($template);
$body = ob_get_clean();

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Transfer-Encoding: 7bit" . "\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-15" . "\r\n";

// More headers
$headers .= $from . "\r\n";
$headers .= $replyTo . "\r\n";

$deliverReport = mail($to, $subject, $body, $headers);
?> 