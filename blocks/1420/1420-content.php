<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1420">
	<div class="col-xs-12 ptb-10">
        <div class="widget subscribe-widget panel">
            <h3 class="widget-title">Subscribe to mail</h3>
            <div class="widget-content">
                <p class="color-mid">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                <form method="post" action="#">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your Email Address" required="required">
                        <span class="input-group-btn">
                            <button class="btn" type="submit">Sign Up</button>
                        </span>
                    </div>
                </form>    
            </div>
        </div>
    </div><!-- End Subscribe -->
    <div class="col-xs-12">
        <div class="widget trend-store-widget panel">
            <h3 class="widget-title">Trending Stores</h3>
            <div class="widget-body">
                <div class="trend-store-item media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" width="90" src="images/brand_01.jpg" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="stars">
                            <a href="#">Amazon</a>
                            <span class="rating">
                                <span class="rating-stars" data-rating="4">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                            </span>
                        </h5>
                        <p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
                    </div>
                </div><!-- End Item -->
                <div class="trend-store-item media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" width="90" src="images/brand_02.jpg" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="stars">
                            <a href="#">Amazon</a>
                            <span class="rating">
                                <span class="rating-stars" data-rating="4">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                            </span>
                        </h5>
                        <p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
                    </div>
                </div><!-- End Item -->
                <div class="trend-store-item media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" width="90" src="images/brand_03.jpg" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="stars">
                            <a href="#">Amazon</a>
                            <span class="rating">
                                <span class="rating-stars" data-rating="4">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                            </span>
                        </h5>
                        <p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
                    </div>
                </div><!-- End Item -->
            </div>
        </div>
    </div>
</div>