<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1410">
	<section class="footer-top-area">
		<div class="container">
			<div class="row main-footer">
				<div class="col-sm-12 col-md-7 ptb-20 plr-15">
                    <div class="row row-tb-20">
                        <div class="footer-col col-sm-6">
                            <div class="footer-about">
                                <img class="img-responsive" src="images/logo_light.png" alt="">
                                <p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dolores quidem mollitia id ipsa nisi necessitatibus iure repudiandae aperiam, odit ipsam dolor fugiat corporis nesciunt illo nemo minus.</p>
                            </div>
                        </div>
                        <div class="footer-col col-sm-6">
                            <div class="footer-top-twitter">
                                <h2 class="color-lighter">Twitter Feed</h2>
                                <ul class="list-unstyled">
                                    <li>
                                        <p class="color-light"><i class="ico fa fa-twitter"></i><a href="#">@masum_rana :</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in reprehenderit.</p>
                                    </li>
                                    <li>
                                        <p class="color-light"><i class="ico fa fa-twitter"></i><a href="#">@masum_rana :</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione id corrupti iusto cupiditate omnis.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 dp ptb-20 plr-15">
                    <div class="row row-tb-20">
                        <div class="footer-col col-sm-6">
                            <div class="footer-links">
                                <h2 class="color-lighter">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">Latest Deals</a>
                                    </li>
                                    <li><a href="#">Newest Coupons</a>
                                    </li>
                                    <li><a href="#">Contact Us</a>
                                    </li>
                                    <li><a href="#">Error 404</a>
                                    </li>
                                    <li><a href="#">Terms of Use</a>
                                    </li>
                                    <li><a href="#">FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-col col-sm-6">
                            <div class="footer-top-instagram">
                                <h2 class="color-lighter">Instagram Widget</h2>
                                <div class="row content">
                                    <div class="item col-xs-4">
                                        <img src="images/instagram_01.jpg" alt="">
                                    </div>
                                    <div class="item col-xs-4">
                                        <img src="images/instagram_02.jpg" alt="">
                                    </div>
                                    <div class="item col-xs-4">
                                        <img src="images/instagram_03.jpg" alt="">
                                    </div>
                                    <div class="item col-xs-4">
                                        <img src="images/instagram_04.jpg" alt="">
                                    </div>
                                    <div class="item col-xs-4">
                                        <img src="images/instagram_05.jpg" alt="">
                                    </div>
                                    <div class="item col-xs-4">
                                        <img src="images/instagram_06.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear ptb-20 plr-15">
                    <div class="payment-methods text-center">
                        <span><img src="images/paypal.jpg" alt=""></span>
                        <span><img src="images/visa.jpg" alt=""></span>
                        <span><img src="images/mastercard.jpg" alt=""></span>
                        <span><img src="images/discover.jpg" alt=""></span>
                        <span><img src="images/american.jpg" alt=""></span>
                    </div>
                </div>
			</div>
		</div>
	</section>
    <footer class="footer-bottom-area text-center">
        <div class="container">
            <div class="row">
                <p>Copyright © 2016 . All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Back Top -->
    <div id="bttop" class="bttop is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div><!-- End Back Top -->
    <!-- Buy Theme -->
    <a href="#" class="buy-theme" data-href="#" target="#" id="buy_theme">
        <i class="fa fa-credit-card"></i>
    </a><!-- End Buy Theme -->
</div>