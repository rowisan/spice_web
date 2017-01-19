<?php

include 'loader.php';
//Common
$host = 'http://www.thilicreation.com/spice_new/';
$companyName = 'Spice Lanka';
$companyAddress = 'No 152, Kandy, Central, Sri Lanka.';
$companyEmail = '';
$infoEmail = 'info@spice-lanka.com';
$supportEmail = 'suport@spice-lanka.com';
$tel1 = '(+94) 812 123 456';
$tel2 = '(+94) 812 123 451';
$slide1Header = 'Spice Lanka Vision';
$slide1SubHeader = 'It\'s actually a look in to our history. Long before Ceylon 
                    became famed as the land of tea, the country was renowned for 
                    a commodity that was even more valuable and Quality Spices.';
$slide2Header = 'This Is The Best Place';
$slide2SubHeader = '56% of Srilanka agricultural exports consist of spices. '
        . '         These varieties of condiments are used to flavor and aromatize '
        . '         various forms of cuisines across the world.';
$slide3Header = 'Spice Lanka Mission';
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

