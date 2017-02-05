<?php

include 'loader.php';
//Common
//$host = 'http://www.essentialspicelk.com/';
$host = '/www/spice/';
$companyName = 'Essential Spice Exports';


$companyAddress = 'No:77/1B, Medagoda, Pujapitiya, Kandy, Sri Lanka.';
$companyAddressWlb = 'No:77/1B, Medagoda, <br>Pujapitiya, Kandy, Sri Lanka.';
$companyEmail = '';
$infoEmail = 'info@essentialspicelk.com';
$supportEmail = 'suport@essentialspicelk.com';
$tel1 = '+94779 959790';
$tel2 = '+9481 2300728';

$contactName1 = 'Dilshad Dissanayake';
$contactAddressWlb1 = $companyAddressWlb;
$contactEmail1 = 'dilshad@essentialspicelk.com';
$contactTel11 = '+94779 959790';
$contactTel21 = '+9481 2300728';

$slide1Header = 'Essential Spice Exports Vision';
$slide1SubHeader = 'It\'s actually a look in to our history. Long before Ceylon 
                    became famed as the land of tea, the country was renowned for 
                    a commodity that was even more valuable and Quality Spices.';
$slide2Header = 'This Is The Best Place';
$slide2SubHeader = '56% of Srilanka agricultural exports consist of spices. '
        . '         These varieties of condiments are used to flavor and aromatize '
        . '         various forms of cuisines across the world.';
$slide3Header = 'Essential Spice Exports Mission';
$slide3SubHeader = 'To achieve the high standards of quality we are committed to 
                    delivering, we at Spice of Life source our products from only 
                    the best Sri Lankan producers...';

//Email
$smtp = 'smtp.gmail.com';
$smtp_port = '465';
$sendmail_from = 'Name <roshan2signup@gmail.com>';
$username = 'roshan2signup@gmail.com';
$password = 'r@ROWI2.R';

$inquiryFrom = 'From: <roshan2signup@gmail.com>';
$inquiryOfficers = 'roshan2signup@gmail.com,wijendra.sped@gmail.com';
$inquiryReply = 'Reply-To: <roshan2signup@gmail.com>';

$contactFrom = 'From: <roshan2signup@gmail.com>';
$contactOfficers = 'roshan2signup@gmail.com,wijendra.sped@gmail.com';
$contactReply = 'Reply-To: <roshan2signup@gmail.com>';

//Product
session_start();
include 'config.php';
if (isset($_SESSION['productList'])) {
    $productList = $_SESSION['productList'];
    $objProductList = $_SESSION['objProductList'];
} else {
    $query = "select item_code, short_description, name from item where status = 'A'";
    $result = mysqli_query($db, $query);
    $productList = array();
    $objProductList = array();
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $productList[$count] = trim($row['item_code']);
            $objProductList[$count] = $row;
            $count++;
        }
        $_SESSION['productList'] = $productList;
        $_SESSION['objProductList'] = $objProductList;
    }
//    $_SESSION['productList'] = array('black_pepper', 'nutmeg', 'clove', 'cardamom');
    $productList = $_SESSION['productList'];
}
?>

