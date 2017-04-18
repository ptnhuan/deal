<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1417">
	<div class="container">
		<div class="col-md-8 col-xs-12">
			<section class="coupons-area">
				<!-- Page Control -->
				<header class="page-control panel">
                    <ul class="list-control-view list-inline">
                        <li><a href="#"><i class="fa fa-bars"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-th"></i></a>
                        </li>
                    </ul>
                    <div class="btn-select">
                        <select class="form-control input-sm">
                            <option>SORT BY</option>
                            <option>Newest items</option>
                            <option>Best sellers</option>
                            <option>Best rated</option>
                            <option>Price: low to high</option>
                            <option>Price: high to low</option>
                        </select>
                    </div>
                </header><!-- End Page Control -->
                <!-- Coupons Content -->
                <div class="coupons-content">
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="ribbon-wrapper is-hidden-xs-down">
                                <div class="ribbon">Featured</div>
                            </div>
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_01.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_02.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_03.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_04.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="ribbon-wrapper is-hidden-xs-down">
                                <div class="ribbon">Featured</div>
                            </div>
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_05.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="ribbon-wrapper is-hidden-xs-down">
                                <div class="ribbon">Featured</div>
                            </div>
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_06.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_07.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_08.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_09.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="ribbon-wrapper is-hidden-xs-down">
                                <div class="ribbon">Featured</div>
                            </div>
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_10.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_11.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                	<div class="col-xs-12 ptb-20">
                		<div class="coupon-single panel">
                            <div class="content row">
                                <div class="col-sm-5 p-0 content-img">
                                    <figure>
                                        <img class="img-responsive" src="images/coupon_12.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-7 content-body p-0">
                                    <div class="panel-body">
                                        <ul class="deal-meta list-inline">
                                            <li class="color-green"><i class="lnr lnr-smile"></i>Verifed</li>
                                            <li class="color-muted"><i class="lnr lnr-users"></i>125 Used</li>
                                        </ul>
                                        <h5 class="deal-title">
                                         <a href="#">10% off select XPS &amp; Alienware laptops</a>
                                      </h5>
                                        <p class="deal-date color-muted"><i class="lnr lnr-clock"></i>Expires in 1 day 30 hours</p>
                                        <div class="showcode">
                                            <button class="show-code btn btn-sm btn-block">Show Code</button>
                                            <div class="coupon-hide">X455-17GT-OL58</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                	</div><!-- End Item -->
                </div><!-- End Coupons Content -->
                <!-- Page Pagination -->
                <div class="page-pagination panel text-center pagination-area">
                    <nav>
                        <ul class="page-pagination">
                            <li><a class="page-numbers pre" href="#">Previous</a>
                            </li>
                            <li><a href="#" class="page-numbers">1</a>
                            </li>
                            <li><span class="page-numbers current">2</span>
                            </li>
                            <li><a href="#" class="page-numbers">3</a>
                            </li>
                            <li><a href="#" class="page-numbers">4</a>
                            </li>
                            <li><span class="page-numbers dots">...</span>
                            </li>
                            <li><a href="#" class="page-numbers">20</a>
                            </li>
                            <li><a href="#" class="page-numbers next">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End Page Pagination -->
			</section>
		</div>
	</div>
</div>