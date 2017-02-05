<!-- Contact style-->
<section class="container clearfix common-pad booknow">
    <div class="contact">
        <h2>Send a Message</h2>
    </div> 

    <div class="row nasir-contact">
        <div class="col-md-8">

            <div class="book-left-content input_form">
                <form method="POST" action="<?php echo $host; ?>admin/contact_process.php" class="contact-form">
                    <div class="row">   
                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                            <span>Your Name</span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name"></div>   
                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                            <span>Your Email</span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"></div>
                    </div>  

                    <div class="row">   
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <span>Subject</span>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <span>Message</span>
                            <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><button type="submit" class="res-btn">Submit Now</button></div>
                    </div>
                </form>
                <?php
                if(isset($_GET['msg'])){
                    if($_GET['msg'] == 'SUCCESS'){?>
                        <div id="success"><p>Your message sent successfully.</p></div>
                    <?php } else {?>
                        <div id="error"><p>Something is wrong. Message cant be sent!</p></div>
                        <?php
                    }
                }
                ?>
            </div>


        </div>
        <div class="col-md-4">

            <div class="contact-info">

                <h2>Contact Info</h2>
                <h4 class="contact-sub">Genaral Info</h4>
                <div class="media-contact clearfix">
                    <div class="media-contact-icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="media-contact-info">
                        <p><?php echo $companyName.', <br> '. $companyAddressWlb; ?></p>
                    </div>
                </div>   
                <div class="media-contact clearfix">
                    <div class="media-contact-icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="media-contact-info">
                        <p>
                            <a href="mailto:<?php echo $infoEmail; ?>"><?php echo $infoEmail; ?></a><br>
                            <a href="mailto:<?php echo $supportEmail; ?>"><?php echo $supportEmail; ?></a>
                        </p>
                    </div>
                </div>
                <div class="media-contact clearfix">
                    <div class="media-contact-icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="media-contact-info">
                        <p><?php echo $tel1; ?></p>
                        <p><?php echo $tel2; ?></p>
                    </div>
                </div> 

                <?php for($i = 1; $i <= 1; $i++){
                    ?>
                <hr>
                <h4 class="contact-sub"><?php echo ${'contactName' . $i}; ?></h4>
                <div class="media-contact clearfix">
                    <div class="media-contact-icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="media-contact-info">
                        <p><?php echo ${'contactAddressWlb'.$i}; ?></p>
                    </div>
                </div>   
                <div class="media-contact clearfix">
                    <div class="media-contact-icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="media-contact-info">
                        <p>
                            <a href="mailto:<?php echo ${'contactEmail'.$i}; ?>"><?php echo ${'contactEmail'.$i}; ?></a>
                        </p>
                    </div>
                </div> 

                <div class="media-contact clearfix">
                    <div class="media-contact-icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="media-contact-info">
                        <p><?php echo ${'contactTel1'.$i}; ?></p>
                        <p><?php echo ${'contactTel2'.$i}; ?></p>
                    </div>
                </div> 
            </div>
<?php } ?>


        </div>  

    </div>

</section> 

<!-- Contact style-->
<!-- TT-CONTACT-MAP -->
<div class="tt-contact-map map-block" id="map-canvas"  data-lat="51.477254" data-lng="-0.026888" data-zoom="14"></div>
<div class="addresses-block">
    <a data-lat="51.477254" data-marker="images/marker.png" data-lng="-0.026888" data-string="1. Here is some address or email or phone or something else..."></a>                 
</div>

        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
        <script src="js/map.js"></script>