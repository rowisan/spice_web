
<section  class="top-bar dhomev">	
    <div class="top-bar dhomev-back"></div>
    <div class="container">
        <div class="pull-left left-infos contact-infos">
            <ul class="list-inline">
                <li>
                    <a href="#"><i class="fa fa-phone"></i> <?php echo $tel1; ?></a>
                </li><!-- comment for inline hack
                --><li>
                    <a href="#"><i class="fa fa-map-marker"></i> <?php echo $companyAddress; ?></a>
                </li><!-- comment for inline hack
                --><li>
                    <a href="#"><i class="fa fa-envelope"></i> <?php echo $infoEmail; ?></a>
                </li>
            </ul>
        </div><!-- /.pull-left left-infos -->
        <div class="pull-right right-infos link-list">
            <ul class="list-inline">
                <li>
                    <a href="contact">Login</a>
                </li><!-- comment for inline hack
                --><li>
                    <a href="contact">Registration</a>
                </li>
            </ul>
        </div><!-- /.pull-right right-infos link-list -->
    </div><!-- /.container -->
</section><!-- /.top-bar -->
<div class="container">
    <div class="navbar-header-img">
        <a href="home" class="navbar-brand">
            <img alt="Awesome Image" src="images/header/logo2.png">
        </a>
    </div>

</div>
<nav class="navbar navbar-default  _fixed-header _light-header stricky main-navigation-wrapper" id="main-navigation-wrapper">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="home" class="navbar-brand">
                <img alt="Awesome Image" src="images/header/logo2.png">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav navbar-nav ">
                <li><a href="home" >Home</a>
                </li>
                <li><a href="aboutus" >About Us</a>
                </li>
                <li><a href="history" >History</a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products <span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul class="dropdown-submenu dropdown-menu">
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
                </li>
                <li><a href="contact" >Contact us</a></li>
            </ul>

        </div>
    </div>
</nav>
<!-- Header  Slider style-->
