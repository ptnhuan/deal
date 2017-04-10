<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1407">
	<div class="container">
		<section class="stores-area">
			<header class="panel ">
				<h3 class="section-title">Popular Stores</h3>
                <a href="#" class="btn btn-stores">All Stores</a>
			</header>
			<div class="brand">
				<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="owl-carousel owl-theme owl-carousel-brand">
                        	<div class="item-brand">
                                <a href="#" class="panel is-block">
                                    <div class="brand-responsive">
                                        <div class="store-logo">
                                            <img src="images/brand_01.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name">Car Toys</h6>
                                </a>
                        	</div><!--End Item Brand-->
                        	<div class="item-brand">
                                <a href="#" class="panel is-block">
                                    <div class="brand-responsive">
                                        <div class="store-logo">
                                            <img src="images/brand_02.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name">Ashford</h6>
                                </a>
                        	</div><!--End Item Brand-->
                        	<div class="item-brand">
                                <a href="#" class="panel is-block">
                                    <div class="brand-responsive">
                                        <div class="store-logo">
                                            <img src="images/brand_03.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name">DELL</h6>
                                </a>
                        	</div><!--End Item Brand-->
                        	<div class="item-brand">
                                <a href="#" class="panel is-block">
                                    <div class="brand-responsive">
                                        <div class="store-logo">
                                            <img src="images/brand_04.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name">Card Cash</h6>
                                </a>
                        	</div><!--End Item Brand-->
                        	<div class="item-brand">
                                <a href="#" class="panel is-block">
                                    <div class="brand-responsive">
                                        <div class="store-logo">
                                            <img src="images/brand_05.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name">Finish Line</h6>
                                </a>
                        	</div><!--End Item Brand-->
                        	<div class="item-brand">
                                <a href="#" class="panel is-block">
                                    <div class="brand-responsive">
                                        <div class="store-logo">
                                            <img src="images/brand_06.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name">JC Penny</h6>
                                </a>
                        	</div><!--End Item Brand-->
                        	<div class="item-brand">
                                <a href="#" class="panel is-block">
                                    <div class="brand-responsive">
                                        <div class="store-logo">
                                            <img src="images/brand_07.jpg" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name">Callaway Golf</h6>
                                </a>
                        	</div><!--End Item Brand-->
                        </div>
                    </div>
                </div>
			</div>
		</section>
	</div>
</div>