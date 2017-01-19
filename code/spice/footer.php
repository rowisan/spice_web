
<!-- footer  style-->

<footer>
    <section class="clearfix footer-wrapper">
        <section class="container clearfix footer-pad">   

            <div class="widget about-us-widget col-md-4 col-sm-6">
                <a href="home"><img src="images/footer/logo.png" alt="" class="img-responsive"></a>

                <p>It's actually a look in to our history. Long before Ceylon became famed as the land of tea...</p>
                <a href="aboutus">Read More <i class="fa fa-angle-double-right"></i></a>
                <ul class="nav">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>  
                </ul>

            </div>


            <div class="widget widget-links col-md-2 col-sm-6">
                <h4 class="widget_title">Our Products</h4>
                <div class="widget-contact-list"> 
                    <ul>
                        <?php
                        foreach ($productList as $value) {
                            ?>
                            <li><a href="<?php echo $value; ?>" >
                                    <?php echo str_replace("_", " ", $value); ?>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>  
                </div>
            </div>
            <div class="widget widget-links col-md-2 col-sm-6">
                <h4>Quick Links</h4>


                <div class="widget-contact-list"> 
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="aboutus">About Us</a></li> 
                        <li><a href="history">History</a></li>  					   
                        <li><a href="contact">Contact Us</a></li>

                    </ul>  
                </div>
            </div>
            <div class="widget get-in-touch col-md-4 col-sm-6">
                <h4 class="widget_title">Get In Touch</h4>
                <div class="widget-contact-list">
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <div class="fleft location_address">
                                <b><?php echo $companyName; ?></b><br><?php echo $companyAddress; ?>
                            </div>

                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <div class="fleft contact_no">
                                <?php
                                if ($tel1 != '') {
                                    echo '<a href="tel:' . $tel1 . '">' . $tel1 . '</a> ';
                                }
                                if ($tel1 != '' && $tel2 != '') {
                                    echo ' / ';
                                }
                                if ($tel2 != '') {
                                    echo '<a href="tel:' . $tel2 . '">' . $tel2 . '</a>';
                                }
                                ?>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <div class="fleft contact_mail">
                                <a href="mailto:<?php echo $infoEmail; ?>"><?php echo $infoEmail; ?></a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
    </section> 
    <section class="container clearfix footer-b-pad">
        <div class="footer-copy"><div class="pull-left fo-txt">
                <p>Copyright &copy; <?php echo $companyName . ' 2016 - ' . date("Y"); ?>. All rights reserved. </p>
            </div>
            <div class="pull-right fo-txt">
                <p>Created by: <a href="#">RoWi</a></p>
            </div>

        </div>
    </section> 
</footer> 
<!-- footer  style--> 
