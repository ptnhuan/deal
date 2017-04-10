<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1405">
	<div class="container">
		<section class="latest-deals-area">
			<header class="panel ">
				<h3 class="section-title">Latest Deals</h3>
                <a href="#" class="btn btn-stores">View All</a>
			</header>
			<div class="row row-masnory">
                <!--Item Deal-->
                <div class="ptb-20 col-sm-6 col-lg-4">
                    <div class="deal-single panel">
                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="images/deal_01.jpg" style="background-image: url(images/deal_01.jpg);">
                            <div class="label-discount">-50%</div>
                            <ul class="deal-actions">
                                <li>
                                    <span>
                                        <i class="fa fa-heart"></i>
                                    </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-share-alt"></i></span>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-camera"></i>
                                    </span>
                                </li>
                            </ul>
                            <div class="time-left">
                                <span>
                                    <i class="ico fa fa-clock-o"></i>
                                    <span class="t-uppercase" data-countdown="2019/09/01 01:30:00">124 Weeks 04 Days 23 : 01 : 38</span>
                                </span>
                            </div>
                            <div class="deal-store-logo">
                                <img class="img-responsive" src="images/brand_01.jpg" alt="">
                            </div>
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                                <div class="rating">
                                    <span class="rating-stars" data-rating="5">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <span class="rating-reviews">
                    ( <span>241</span> rates )
                                    </span>
                                </div>
                                <h3 class="deal-title">
                                    <a href="#">The Crash Bad Instant Folding Twin Bed</a>
                                </h3>
                                <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i>United State</li>
                                    <li><i class="ico fa fa-shopping-basket"></i>120 Bought</li>
                                </ul>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Item deal-->
                <!--Item Deal-->
                <div class="ptb-20 col-sm-6 col-lg-4">
                    <div class="deal-single panel">
                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="images/deal_01.jpg" style="background-image: url(images/deal_02.jpg);">
                            <div class="label-discount">-30%</div>
                            <ul class="deal-actions">
                                <li>
                                    <span>
                                        <i class="fa fa-heart"></i>
                                    </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-share-alt"></i></span>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-camera"></i>
                                    </span>
                                </li>
                            </ul>
                            <div class="time-left">
                                <span>
                                    <i class="ico fa fa-clock-o"></i>
                                    <span class="t-uppercase" data-countdown="2019/09/01 01:30:00">182 Weeks 04 Days 23 : 01 : 38</span>
                                </span>
                            </div>
                            <div class="deal-store-logo">
                                <img class="img-responsive" src="images/brand_02.jpg" alt="">
                            </div>
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                                <div class="rating">
                                    <span data-rating="5">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <span class="rating-reviews">
                    ( <span>241</span> rates )
                                    </span>
                                </div>
                                <h3 class="deal-title">
                                    <a href="#">Western Digital USB 3.0 Hard Drives</a>
                                </h3>
                                <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i>United Kingdom</li>
                                    <li><i class="ico fa fa-shopping-basket"></i>42 Bought</li>
                                </ul>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><span class="price-sale">$150.00</span>$100.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Item deal-->
                <!--Item Deal-->
                <div class="ptb-20 col-sm-6 col-lg-4">
                    <div class="deal-single panel">
                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="images/deal_01.jpg" style="background-image: url(images/deal_03.jpg);">
                            <div class="label-discount">-30%</div>
                            <ul class="deal-actions">
                                <li>
                                    <span>
                                        <i class="fa fa-heart"></i>
                                    </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-share-alt"></i></span>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-camera"></i>
                                    </span>
                                </li>
                            </ul>
                            <div class="time-left">
                                <span>
                                    <i class="ico fa fa-clock-o"></i>
                                    <span class="t-uppercase" data-countdown="2019/09/01 01:30:00">124 Weeks 04 Days 23 : 01 : 38</span>
                                </span>
                            </div>
                            <div class="deal-store-logo">
                                <img class="img-responsive" src="images/brand_03.jpg" alt="">
                            </div>
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                                <div class="rating">
                                    <span class="rating-stars" data-rating="5">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <span class="rating-reviews">
                    ( <span>241</span> rates )
                                    </span>
                                </div>
                                <h3 class="deal-title">
                                    <a href="#">Hampton Bay LED Light Ceiling Exhaust Fan</a>
                                </h3>
                                <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i>United State</li>
                                    <li><i class="ico fa fa-shopping-basket"></i>120 Bought</li>
                                </ul>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Item deal-->
                <!--Item Deal-->
                <div class="ptb-20 col-sm-6 col-lg-4">
                    <div class="deal-single panel">
                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="images/deal_01.jpg" style="background-image: url(images/deal_04.jpg);">
                            <div class="label-discount">-15%</div>
                            <ul class="deal-actions">
                                <li>
                                    <span>
                                        <i class="fa fa-heart"></i>
                                    </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-share-alt"></i></span>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-camera"></i>
                                    </span>
                                </li>
                            </ul>
                            <div class="time-left">
                                <span>
                                    <i class="ico fa fa-clock-o"></i>
                                    <span class="t-uppercase" data-countdown="2019/09/01 01:30:00">124 Weeks 04 Days 23 : 01 : 38</span>
                                </span>
                            </div>
                            <div class="deal-store-logo">
                                <img class="img-responsive" src="images/brand_04.jpg" alt="">
                            </div>
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                                <div class="rating">
                                    <span class="rating-stars" data-rating="5">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <span class="rating-reviews">
                    ( <span>241</span> rates )
                                    </span>
                                </div>
                                <h3 class="deal-title">
                                    <a href="#">Timberland Men's Thorton Waterproof Boots</a>
                                </h3>
                                <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i>United State</li>
                                    <li><i class="ico fa fa-shopping-basket"></i>120 Bought</li>
                                </ul>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Item deal-->
                <!--Item Deal-->
                <div class="ptb-20 col-sm-6 col-lg-4">
                    <div class="deal-single panel">
                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="images/deal_01.jpg" style="background-image: url(images/deal_05.jpg);">
                            <div class="label-discount">-60%</div>
                            <ul class="deal-actions">
                                <li>
                                    <span>
                                        <i class="fa fa-heart"></i>
                                    </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-share-alt"></i></span>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-camera"></i>
                                    </span>
                                </li>
                            </ul>
                            <div class="time-left">
                                <span>
                                    <i class="ico fa fa-clock-o"></i>
                                    <span class="t-uppercase" data-countdown="2019/09/01 01:30:00">124 Weeks 04 Days 23 : 01 : 38</span>
                                </span>
                            </div>
                            <div class="deal-store-logo">
                                <img class="img-responsive" src="images/brand_05.jpg" alt="">
                            </div>
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                                <div class="rating">
                                    <span class="rating-stars" data-rating="5">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <span class="rating-reviews">
                    ( <span>241</span> rates )
                                    </span>
                                </div>
                                <h3 class="deal-title">
                                    <a href="#">New and Refurbished Lenovo Laptops</a>
                                </h3>
                                <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i>United State</li>
                                    <li><i class="ico fa fa-shopping-basket"></i>120 Bought</li>
                                </ul>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Item deal-->
                <!--Item Deal-->
                <div class="ptb-20 col-sm-6 col-lg-4">
                    <div class="deal-single panel">
                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="images/deal_01.jpg" style="background-image: url(images/deal_06.jpg);">
                            <div class="label-discount">-60%</div>
                            <ul class="deal-actions">
                                <li>
                                    <span>
                                        <i class="fa fa-heart"></i>
                                    </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-share-alt"></i></span>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-camera"></i>
                                    </span>
                                </li>
                            </ul>
                            <div class="time-left">
                                <span>
                                    <i class="ico fa fa-clock-o"></i>
                                    <span class="t-uppercase" data-countdown="2019/09/01 01:30:00">124 Weeks 04 Days 23 : 01 : 38</span>
                                </span>
                            </div>
                            <div class="deal-store-logo">
                                <img class="img-responsive" src="images/brand_06.jpg" alt="">
                            </div>
                        </figure>
                        <div class="deal-single-content">
                            <div class="pr-md-10">
                                <div class="rating">
                                    <span class="rating-stars" data-rating="5">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <span class="rating-reviews">
                    ( <span>241</span> rates )
                                    </span>
                                </div>
                                <h3 class="deal-title">
                                    <a href="#">Buying a TV Is Easy When You Know These Terms</a>
                                </h3>
                                <ul class="deal-meta list-inline">
                                    <li><i class="ico fa fa-map-marker"></i>United State</li>
                                    <li><i class="ico fa fa-shopping-basket"></i>120 Bought</li>
                                </ul>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                            </div>
                            <div class="deal-price">
                                <h3 class="price text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Item deal-->

            </div>
		</section>
	</div>
</div>