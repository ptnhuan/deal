<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1406">
	<div class="container">
		<section class="latest-coupons-area">
			<header class="panel ">
				<h3 class="section-title">Latest Deals</h3>
                <a href="#" class="btn btn-stores">View All</a>
			</header>
			<div class="coupon">
				<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="owl-carousel owl-theme owl-carousel-coupon">
                        	<div class="item-coupon">
                                <div class="coupon-single panel">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon">Featured</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="images/coupon_01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="list-inline mb-10">
                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>125 Used</li>
                                                </ul>
                                                <h4 class="sale-off">10% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                                    <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                                </h5>
                                                <p class="date"><i class="lnr lnr-clock mr-10"></i>Expires On 01/01/2018</p>
                                                <div class="showcode">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        	</div><!--End Item Coupon-->
                            <div class="item-coupon">
                                <div class="coupon-single panel">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="images/coupon_02.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="list-inline mb-10">
                                                    <li class="color-muted"><i class="ico lnr lnr-smile mr-5"></i>California</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
                                                </ul>
                                                <h4 class="sale-off">15% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                                    <a href="#">15% off 2 select Amazon Fire cases</a>
                                                </h5>
                                                <p class="date"><i class="lnr lnr-clock mr-10"></i>Expires On 05/02/2018</p>
                                                <div class="showcode">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Item Coupon-->
                            <div class="item-coupon">
                                <div class="coupon-single panel">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="images/coupon_03.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="list-inline mb-10">
                                                    <li class="color-muted"><i class="ico lnr lnr-smile mr-5"></i>Coupon</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
                                                </ul>
                                                <h4 class="sale-off">20% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                                    <a href="#">Flat 40% off hotel bookings in 10 cities</a>
                                                </h5>
                                                <p class="date"><i class="lnr lnr-clock mr-10"></i>Expires On 15/01/2018</p>
                                                <div class="showcode">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Item Coupon-->
                            <div class="item-coupon">
                                <div class="coupon-single panel">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="images/coupon_04.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="list-inline mb-10">
                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
                                                </ul>
                                                <h4 class="sale-off">30% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                                    <a href="#">There is no place like home 25% off</a>
                                                </h5>
                                                <p class="date"><i class="lnr lnr-clock mr-10"></i>Expires On 02/03/2018</p>
                                                <div class="showcode">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Item Coupon-->
                            <div class="item-coupon">
                                <div class="coupon-single panel">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon">Featured</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="images/coupon_05.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="list-inline mb-10">
                                                    <li class="color-muted"><i class="ico lnr lnr-smile mr-5"></i>Coupon</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
                                                </ul>
                                                <h4 class="sale-off">10% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                                    <a href="#">10% off $399+ refurbished laptops</a>
                                                </h5>
                                                <p class="date"><i class="lnr lnr-clock mr-10"></i>Expires On 20/02/2018</p>
                                                <div class="showcode">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Item Coupon-->
                            <div class="item-coupon">
                                <div class="coupon-single panel">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" src="images/coupon_06.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="list-inline mb-10">
                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
                                                </ul>
                                                <h4 class="sale-off">25% OFF</h4>
                                                <h5 class="deal-title mb-10">
                                                    <a href="#">There is no place like home 25% off</a>
                                                </h5>
                                                <p class="date"><i class="lnr lnr-clock mr-10"></i>Expires On 14/01/2018</p>
                                                <div class="showcode">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
                                                    <div class="coupon-hide">X455-17GT-OL58</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Item Coupon-->
                        </div>
                    </div>
                </div>
			</div>
		</section>
	</div>
</div>