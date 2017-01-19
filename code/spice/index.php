<?php include 'admin/variable.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title><?php echo $companyName; ?></title>
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
        <!-- Header  Slider style-->

        <div id="minimal-bootstrap-carousel" class="carousel default-home-slider slide carousel-fade shop-slider" data-ride="carousel">           
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active slide-1" style="background-image: url(images/slider/10.jpg);backgroudn-position: center right;">

                    <div class="carousel-caption nhs-caption nhs-caption6">
                        <div class="thm-container">
                            <div class="box valign-middle">
                                <div class="content text-center">
                                    <h2 data-animation="animated fadeInUp" class="this-title"><?php echo $slide1Header; ?></h2>
                                    <p data-animation="animated fadeInDown"><?php echo $slide1SubHeader; ?></p>
                                    <a data-animation="animated fadeInLeft" href="#" class="nhs-btn3">Order Now</a>
                                    <a data-animation="animated fadeInRight" href="#" class="nhs-btn">Our Products</a>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="item  slide-2" style="background-image: url(images/slider/11.jpg);backgroudn-position: center right;">

                    <div class="carousel-caption nhs-caption nhs-caption7">
                        <div class="thm-container">
                            <div class="box valign-middle">
                                <div class="content text-left pull-left">
                                    <h2 data-animation="animated fadeInUp" class="this-title"><?php echo $slide2Header; ?></h2>
                                    <p data-animation="animated fadeInDown"><?php echo $slide2SubHeader; ?></p>
                                    <a data-animation="animated fadeInLeft" href="#" class="nhs-btn3">Order Now</a>
                                    <a data-animation="animated fadeInRight" href="#" class="nhs-btn">Our Products</a>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="item  slide-2" style="background-image: url(images/slider/12.jpg);backgroudn-position: center right;">

                    <div class="carousel-caption nhs-caption nhs-caption6">
                        <div class="thm-container">
                            <div class="box valign-middle">
                                <div class="content text-center">
                                    <h2 data-animation="animated fadeInUp" class="this-title"><?php echo $slide3Header; ?></h2>
                                    <p data-animation="animated fadeInDown"><?php echo $slide3SubHeader; ?></p>
                                    <a data-animation="animated fadeInLeft" href="#" class="nhs-btn3">Order Now</a>
                                    <a data-animation="animated fadeInRight" href="#" class="nhs-btn">Our Products</a>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Header  Slider style-->        

        <!-- Our Products style--> 
        <section class="container clearfix common-pad nasir-style">
            <div class="sec-header sec-header-pad">
                <h2>Our Products</h2>
                <h3>Buy best quality products with us</h3>
            </div>
            <div class="product-slider">
                <div class="roomsuite-slider-two">  
                    <?php
                    foreach ($objProductList as $value) {
                        ?>
                        <div class="product-suite product-suite-htwo">
                            <div class="item">
                                <div class="ro-img"><img src="images/products/<?php echo trim($value['item_code']); ?>/1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="ro-txt">
                                    <h2><?php echo trim($value['name']); ?></h2>
                                    <p><?php echo trim($value['short_description']); ?></p>
                                    <div class="ro-text-two">
                                        <div class="left-p-two "><a href="<?php echo trim($value['item_code']); ?>" class="more">Read More &nbsp; <i class="fa fa-angle-double-right "></i></a></div>
                                    </div>         
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </section>
        <!--Product Section-->

<!--        <section class="resort-counert clearfix">

            <div class="container">
                <div class="row">-->
        <!--<div class="col-md-3 col-sm-6">
         <div class="rest-fact-counter">
                                        <div class="text-box">
                                                <h4 class="timer" data-from="0" data-to="121"></h4>						
                                        </div>
                    <div class="text-box2"><p>new<span>friendships</span></p></div>
                                </div>
         
         </div>
        <div class="col-md-3 col-sm-6"><div class="rest-fact-counter">
                                        <div class="text-box">
                                                <h4 class="timer" data-from="0" data-to="254"></h4>						
                                        </div>
                    <div class="text-box2"><p>five start<span>ratings</span></p></div>
                                </div></div>
         <div class="col-md-3 col-sm-6"><div class="rest-fact-counter">
                                        <div class="text-box">
                                                <h4 class="timer" data-from="0" data-to="430"></h4>						
                                        </div>
                    <div class="text-box2"><p>International<span>Guests</span></p></div>
                                </div></div>
         <div class="col-md-3 col-sm-6"><div class="rest-fact-counter">
                                        <div class="text-box">
                                                <h4 class="timer" data-from="0" data-to="782"></h4>						
                                        </div>
                    <div class="text-box2"><p>Served<span>Breakfast</span></p></div>
                                </div></div>--
        
        </div>
     
     </div>
    
    </section>   
        
        <!-- About Us style-->    

        <div class="resot-activities clearfix">

            <div class="container clearfix common-pad">
                <div class="row">

                    <div class="col-lg-6 col-md-6 activities-cont">

                        <div class="sec-header3">
                            <h2>About <?php echo $companyName; ?></h2>
                            <h3>It's actually a look in to our history</h3>
                        </div>
                        <p>Sri Lanka historically renowned under names as Tabrobane, Serendib, 
                            And Ceylon was famous for its high quality spices throughout history. 
                            In ancient times it maintained relations with the Greeks,
                            Romans and Arabs through its spice trade.The old 14th century 
                            trade route maps of the world have proved that almost all trade routes passed through Srilanka... </p>

                        <a href="aboutus" class="res-btn">About us<i class="fa fa-arrow-right"></i></a>

                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="row nasir-welboxes">

                            <div class="single_wel_cont col-sm-12">  
                                <a class="wel-box" href="aboutus">
                                    <div class="icon-box"><i class="fa fa-eye"></i></div>
                                    <h4>Our Vision</h4>
                                    <div class="overlay transition3s">
                                        <div class="icon_position_table">
                                            <div class="icon_container border_round">
                                                <h2>Our Vision</h2>
                                                <p>It's actually a look in to our history. Long before Ceylon became famed as the land of tea, 
                                                    the country was renowned for a commodity that was even more valuable and Quality Spices. </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single_wel_cont col-sm-12">  
                                <a class="wel-box" href="aboutus">
                                    <div class="icon-box"><i class="fa fa-cogs"></i></div>
                                    <h4>Our Mission</h4>
                                    <div class="overlay transition3s">
                                        <div class="icon_position_table">
                                            <div class="icon_container border_round">
                                                <h2>Our Mission</h2>
                                                <p>To achieve the high standards of quality we are committed to delivering, 
                                                    we at Spice of Life source our products from only the best Sri Lankan producers...</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- About Us style-->    

        <!-- History style-->
        <section class="history-htwo clearfix">

            <div class="container clearfix common-pad">

                <div class="row">

                    <div class="col-md-9 our-offer-left">
                        <div class="sec-header3">
                            <h2>The history of spices in Srilanka</h2>
                            <h3>About ceylon spices</h3>
                        </div>
                        <p>Sri Lanka historically renowned under names as Tabrobane, Serendib,
                            And Ceylon was famous for its high quality spices throughout history.
                            In ancient times it maintained relations with the Greeks,Romans and Arabs through its spice trade.The old 14th century trade route maps of the world have proved that almost all trade routes passed through Srilanka.The main reasons for this popularity were the spices and ivory
                            Found in the tropical island.The portugese,Dutch and English found the country attractive when they conquered Asia,
                            mainly due it’s spice and ivory trade.Tropical Srilanka with its diverse micro climates and soil types 
                            has many spices growth in the island some of them endemise which has been the cause for this.  
                        </p>
                        <p>
                            Fifty six percent (56%) of Srilanka agricultural exports consist of spices. 
                            These varieties of condiments are used to flavor and aromatize various forms of 
                            cuisines across the world. Cinnamon is the most important spice commodity among the spice sector. 
                            People in ancient Srilanka used cinnamon for many purposes such as medicine,spice,perfumery material & 
                            soft drink. At present the cinnamon is widely used in bakery products,pharmaceutical 
                            preparations & cosmetics world wide. Cinnamon exports is primary form as 
                            well as in value added form such as cut pieces,powder form and crushed 
                            Cinnamon is considered as unique product exporting from Srilanka. 
                            Srilanka is the world's largest producer & exporter of Cinnamon.
                            Pepper is the second important commodity among spices and 
                            Srilankan pepper has high intrinsic quality.</p>  
                        <a href="history">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="col-md-3 offer-right">

                        <div class="offer-img-box1">
                            <div class="spa-offer">
                                <div class="img_holder">
                                    <img src="images/history/4.png" class="img-responsive" alt="">
                                    <!--                                    <div class="overlay">
                                                                            <div class="room-ad-cont">
                                                                                <h3>56%<span> off</span></h3>
                                                                                <h4>Srilanka agricultural exports consist of spices.</h4>
                                                                                <a href="history">Read more</a>
                                                                            </div>              
                                                                        </div>-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>  
        <!-- History style-->

        <!-- Footer style-->
        <?php include('footer.php'); ?> 

        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <!-- owl carousel  -->   
        <script src="vendors/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/zebra_datepicker.js"></script>
        <!-- jQuery appear -->
        <script src="vendors/jquery-appear/jquery.appear.js"></script>    
        <!-- jQuery countTo -->
        <script src="vendors/jquery-countTo/jquery.countTo.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>    
        <script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>   
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
//<![CDATA[
            $(window).load(function () { // makes sure the whole site is loaded
                $("#status").fadeOut(); // will first fade out the loading animation
                $("#preloader").fadeOut("slow"); // will fade out the white DIV that covers the website.
            })
//]]>
        </script>
    </body> 

</html>