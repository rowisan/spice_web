<?php
include 'admin/variable.php';
if (isset($_GET['error'])) {
    $pageName = strtolower($_GET['error']);
    $pageTitle = $pageName;
    switch ($pageName) {
        case '404':
            $pageName = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $queryString = $_SERVER['REQUEST_URI'];
            if (in_array($pageName, $productList)) {
                $pageTitle = str_replace("_", " ", $pageName);
                $pagePath = $pageTitle;
                $_GET['item'] = $pageName;
                $pageName = 'product.php';
            } else {
                $pageName = '404.php';
                $pageTitle = '404 - Page Not Found';
                $pagePath = '404';
            }
            break;
        case '500':

            $pageName = '500.php';
            $pageTitle = '500 - Internal Server Error';
            $pagePath = '500';
            break;
    }
} else {
    $pageName = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $pageTitle = $pageName;
    $pagePath = $pageName;
    switch ($pageName) {
        case 'contact':
            $pageTitle = 'Contact Us';
            $pagePath = 'Contact Us';
            break;
        case 'aboutus':
            $pageTitle = 'About Us';
            $pagePath = 'About Us';
            break;
        case 'history':
            $pageTitle = 'History';
            $pagePath = 'History';
            break;
    }
    $pageName = $pageName . '.php';
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title><?php echo $companyName; ?> || <?php echo $pageTitle; ?></title>
        <!-- reponsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- strock gap icons -->
        <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
        <link rel="stylesheet" href="css/animate.min.css">

        <!--    owl-carousel-->
        <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css"> 
        <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">

        <!-- Main Css  -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">

    </head>
    <body>
        <!-- Header style-->
        <?php include('header.php'); ?>

        <!-- Header  Inner style-->
        <?php include('header_inner.php'); ?>


        <!-- page Content -->
        <?php include($pageName); ?>

        <!-- Header style-->
        <?php include('footer.php'); ?>


        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <!-- owl carousel  -->   
        <script src="vendors/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/zebra_datepicker.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script><!-- jQuery ui js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script src="js/contact.js"></script> 
        <script src="js/custom.js"></script>
        <script>
            $(window).scroll(function () {

                if ($(this).scrollTop() > 100)
                {
                    $('.navbar-header-img').hide();
                }
                else
                {
                    $('.navbar-header-img').show();
                }
            });
//            $(window).load(function () {
//                // PAGE IS FULLY LOADED  
//                // FADE OUT YOUR OVERLAYING DIV
//                $('#overlay').fadeOut();
//            });

            //<![CDATA[
            $(window).load(function () { // makes sure the whole site is loaded
                $("#status").fadeOut(); // will first fade out the loading animation
                $("#preloader").fadeOut("slow"); // will fade out the white DIV that covers the website.
            })
            //]]>
        </script>
    </body> 

</html>