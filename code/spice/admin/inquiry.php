<?php

include 'variable.php';
$from = $inquiryFrom;
$replyTo = $inquiryReply;
$customerName = $_POST['customerName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$customerEmail = $email;
$message = $_POST['message'];
$itemCode = $_POST['itemCode'];
$itemName = $_POST['itemName'];
$inquiryId = '';
$msg = '';

$sql = "INSERT INTO `inquiry` (`item_code`, `customer_name`, `phone`, `email`, `message`, `status`) VALUES ('" . $itemCode . "', '" . $customerName . "', '" . $phone . "', '" . $email . "', '" . $message . "', 'P');";

if (mysqli_query($db, $sql)) {
    $inquiryId = '#'.mysqli_insert_id($db);

    //Mail to client
    $template = 'template/inquiry_customer_template.php';
    include 'mail.php';
    $clientMail = $deliverReport;

    $email = $inquiryOfficers;
    $template = 'template/inquiry_officer_template.php';
    include 'mail.php';
    $officerMail = $deliverReport;

    if ($clientMail == 1 || $officerMail == 1) {
        $clientMailStatus = 'P';
        $$officerMailStatus = 'P';
        if ($clientMail == 1) {
            $clientMailStatus = 'I';
        }
        if ($officerMail == 1) {
            $officerMailStatus = 'I';
        }
        $sql = "UPDATE `inquiry` SET `inform_customer`='" . $clientMailStatus . "', inform_officer='" . $officerMailStatus . "' WHERE  `index_no`=" . $inquiryId . ";";
        mysqli_query($db, $sql);
    }

    //Mail to Suport

    $msg = $clientMail.' success '.$officerMail;
    echo $msg;
} else {
    $msg = 'error ' . mysqli_error($db);
}
mysqli_close($db);
echo '<META HTTP-EQUIV="refresh" CONTENT="0; URL=' . $host . $itemCode . '?msg=' . $msg . '">';
?>