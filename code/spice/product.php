<?php
$item = $_GET['item'];

$query = "select * from item where item.item_code = '" . $item . "' and status = 'A' LIMIT 1";
$result = mysqli_query($db, $query);
$r = mysqli_fetch_array($result);
$name = $r['name'];
$description = $r['description'];
$history = $r['history'];
$products = $r['product'];
$common_name = $r['common_name'];
$botanical_name = $r['botanical_name'];
$family = $r['family'];
$species = $r['species'];

$msg = '';
$customerName = '';
$phone = '';
$email = '';
$message = '';
$url = $queryString;
$query = parse_url($url, PHP_URL_QUERY);
parse_str($query);
?>

<!-- Product style-->
<section class="container clearfix common-pad-inner about-info-box">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">

            <div class="sec-header3">
                <h2><?php echo $name . ' ' . $msg; ?></h2>
            </div>
        </div>
    </div>
    <div class="row rest-pad">
        <div class="pull-right col-lg-4 col-md-4 col-xs-12">
            <div class="book-r-form">
                <img src="<?php echo $host; ?>images/products/<?php echo $item; ?>/1.jpg" alt="" class="img-responsive">
                <div class="product-intro">
                    <h5><?php echo $name . ' ' . $customerName; ?></h5>
                    <!-- Product Overview style-->
                    <div class="room-overview">
                        <h4>Product Intro</h4>
                        <div class="table-responsive"> 
                            <table class="table table-striped"> 
                                <colgroup> 
                                    <col class="col-xs-1"> 
                                    <col class="col-xs-7"> 
                                </colgroup>
                                <tbody>
                                    <?php
                                    if ($common_name != '') {
                                        ?>
                                        <tr> <th scope="row"> <code>Common Name:</code> </th> <td><?php echo $common_name; ?></td> </tr>
                                        <?php
                                    }
                                    if ($botanical_name != '') {
                                        ?>
                                        <tr> <th scope="row"> <code>Botanical Name: </code> </th> <td><i><?php echo $botanical_name; ?></i></td> </tr>
                                        <?php
                                    }
                                    if ($family != '') {
                                        ?>
                                        <tr> <th scope="row"> <code>family :</code> </th> <td><?php echo $family; ?></td> </tr> 
                                        <?php
                                    }
                                    if ($species != '') {
                                        ?>
                                        <tr> <th scope="row"> <code>species :</code> </th> <td><?php echo $species; ?></td> </tr> 
                                        <?php
                                    }
                                    ?>
                                </tbody> 
                            </table> 
                        </div>
                    </div>
                    <!-- Product Overview style-->
                </div>
                <div class="room-price">
                    <!--<div class="col-md-12"><div class="chk-button"><a href="contact" class="res-btn">Order Now <i class="fa fa-cart-plus"></i></a></div></div>-->
                    <h6>Have &nbsp; any</h6>
                    <p>Question !</p>
                    <h5>About &nbsp; this  &nbsp; product</h5>
                </div>
                <form method="POST" action="admin/inquiry.php">
                    <input id="itemCode" name="itemCode" type="hidden" value="<?php echo $item; ?>"/>
                    <input id="itemName" name="itemName" type="hidden" value="<?php echo $name; ?>"/>
                    <div class="book-form">
                        <div class="col-md-12">
                            <b>Name</b>
                            <input class="form-control" id="customerName" name="customerName" placeholder="Your name" type="text" required="">
                        </div>
                        <div class="col-md-12">
                            <b>Phone No.</b>
                            <input class="form-control" id="phone" name="phone" placeholder="Your Phone No" type="text">
                        </div>
                        <div class="col-md-12">
                            <b>E mail</b>
                            <input class="form-control" id="email" name="email" placeholder="Your E mail" type="email" required="">
                        </div>
                        <div class="col-md-12">
                            <b>Message</b>
                            <textarea  class="form-control" id="message" name="message" placeholder="Message" type="text" required=""></textarea>
                        </div>
                        <div class="col-md-12"><div class="chk-button"><button type="submit" class="res-btn">Submit Inquiry</button></div></div>
                    </div> 
                </form>
            </div>
        </div>

        <!--  Description   -->
        <div class="col-lg-8 col-md-8 col-xs-12" >
            <div class="rest-content">
                <section class="our-menu-wrapper container clearfix common-pad col-md-12" id="product-description">

                    <div class="our-menu-tab">

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Products</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">History</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="myTabContent tab-content">
                            <!--General Description-->
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="tab-inner-cont">

                                    <div class="media media-border">
                                        <div class="media-left">
                                            <?php echo $description == '' ? 'No Description Found.' : $description; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--General Description-->

                            <!--Product Description-->
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="tab-inner-cont">
                                    <div class="media media-border">
                                        <?php
                                        echo $products == '' ? 'No Producs Found.' : $products;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!--Product Description-->

                            <!--History Description-->
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <div class="tab-inner-cont">
                                    <div class="media media-border">
                                        <?php echo $history == '' ? 'No History details Found.' : $history; ?>
                                    </div>
                                </div>
                            </div>
                            <!--History Description-->
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!--  Description   -->
    </div>
</section> 
<!-- Product style-->
