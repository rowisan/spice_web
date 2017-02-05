<?php
$logoImg = $host.'images/header/logo2.png';
$customer = $customerName;
$product = $itemName;
$productImg = $host.'images/products/' . $itemCode . '/1.jpg';
$inqueryId = $inquiryId;
$dateSubmitted = date("Y-m-d H:i:s");
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' style=' margin: 0;'>
    <head>
        <meta name='viewport' content='width=device-width' />
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

        <style type='text/css'>
            img {
                max-width: 100%;
            }
            body {
                -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;
            }
            body {
                background-color: #f6f6f6;
                color:#303030;
                font-family: 'Lato', sans-serif;
            }
            p{
                font-size: 12px;
                margin:0;
                padding: 0;
                line-height: 16px;
                color:#606060;
            }
            a{
                font-size: 12px;
                margin:0;
                padding: 0;
                line-height: 16px;
                color:#588426;
                text-decoration: none;
            }
            @media only screen and (max-width: 640px) {
                body {
                    padding: 0 !important;    
                }
                h1 {
                    font-weight: 800 !important; margin: 20px 0 5px !important;
                }
                h2 {
                    font-weight: 800 !important; margin: 20px 0 5px !important;
                }
                h3 {
                    font-weight: 800 !important; margin: 20px 0 5px !important;
                }
                h4 {
                    font-weight: 800 !important; margin: 20px 0 5px !important;
                }
                h1 {
                    font-size: 22px !important;
                }
                h2 {
                    font-size: 18px !important;
                }
                h3 {
                    font-size: 16px !important;
                }
                .container {
                    padding: 0 !important; width: 100% !important;
                }
                .content {
                    padding: 0 !important;
                }
                .content-wrap {
                    padding: 10px !important;
                }
                .invoice {
                    width: 100% !important;
                }
            }
        </style>
    </head>

    <body style='-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;' bgcolor='#f6f6f6'>

        <table class='body-wrap' style='width: 100%; background-color: #f6f6f6; margin: 0;' bgcolor='#f6f6f6'><tr style='margin: 0;'><td style='vertical-align: top; margin: 0;' valign='top'></td>
                <td class='container' width='600' style='vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;' valign='top'>
                    <div class='content' style='max-width: 600px; display: block; margin: 0 auto; padding: 20px;'>
                        <table class='main' width='100%' cellpadding='0' cellspacing='0' style='border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;' bgcolor='#fff'>
                            <tr style='margin: 0;'>
                                <td class='alert alert-warning' style='box-sizing: border-box; font-size: 16px; vertical-align: top; color: #fff; font-weight: 500; text-align: center; border-radius: 3px 3px 0 0; background-color: #202020; margin: 0; padding: 20px;' align='center' bgcolor='#FF9F00' valign='top'>
                                    <img src='<?php echo $logoImg; ?>' style='max-width: 200px;'/>
                                </td>
                            </tr>
                            <tr style='margin: 0;'>
                                <td class='content-wrap' style='vertical-align: top; margin: 0; padding: 20px;' valign='top'>
                                    <table width='100%' cellpadding='0' cellspacing='0' style='box-sizing: border-box; font-size: 15px; margin: 0;'>
                                        <tr style='margin: 0;'>
                                            <td class='content-block' style='vertical-align: top; margin: 0; padding: 0 0 20px;' valign='top'>
                                                Hi <strong style='margin: 0;'><?php echo $custemer; ?>,</strong> Greetings from Essential Spice Exports.
                                            </td>
                                        </tr>
                                        <tr style='margin: 0;'>
                                            <td class='content-block' style='vertical-align: top; margin: 0; padding: 0 0 20px;' valign='top'>
                                                <table>
                                                    <tr style='vertical-align: top;'>
                                                        <td style='max-width: 40%'>
                                                            <img src='<?php echo $productImg; ?>' style='max-width: 100%;'/>
                                                        </td>
                                                        <td style='max-width: 60%; padding-left: 20px;'>
                                                            <h4 style='margin: 0; color : #588426'>Product - <?php echo $product; ?></h4>
                                                            <p style='margin: 0;'>Inquiry ID : <?php echo $inqueryId; ?></p>
                                                            <p style='margin: 0;'>Date submitted : <?php echo $dateSubmitted; ?></p>
                                                            <p style='float: left;'>
                                                                <br>
                                                                We have received you request and one of our staff will attend to your inquiry at our earliest.<br>
                                                                Thank you for contacting <?php echo $companyName?>.<br>
                                                                Have a Nice day!!!
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr style='margin: 0;'>
                                            <td class='content-block' style='vertical-align: top; margin: 0; padding: 0 0 20px;' valign='top'>
                                                <a href='#' class='btn-primary' style='color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #348eda; margin: 0; border-color: #348eda; border-style: solid; border-width: 10px 20px;'>View Product Page</a>
                                            </td>
                                        </tr>
                                        <tr style='margin: 0;'>
                                            <td class='content-block' style='vertical-align: top; margin: 0; padding: 0 0 20px;' valign='top'>
                                                <p>Thanks for choosing <a href='<?php echo $host; ?>'><?php echo $companyName; ?></a></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <div class='footer' style='width: 100%; clear: both; color: #999; margin: 0; padding: 20px;'>
                            <table width='100%' style='margin: 0;'>
                                <tr style='margin: 0;'>
                                    <td class='aligncenter content-block' style='box-sizing: border-box; font-size: 11px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;' align='center' valign='top'>
                                        Design by <a href='#' style='font-size: 11px; color: #999; text-decoration: underline; margin: 0;'>RoWi</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
                <td style='vertical-align: top; margin: 0;' valign='top'></td>
            </tr></table>
    </body>
</html>