<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1403">
	<div class="col-lg-9 col-md-8 col-xs-12 pull-right">
		<div class="swiper-container">
            <div class="swiper-wrapper">
                <figure class="swiper-slide">  
                    <a href="#">
                        <img src="images/deal_01.jpg" alt=""/>
                    </a>
                    <div class="label-discount">-50%</div>
                    <ul class="deal-actions list-unstyled">
                        <li>
                            <span><i class="fa fa-heart"></i></span>
                        </li>
                        <li>
                            <span><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                            <span><i class="fa fa-camera"></i></span>
                        </li>
                    </ul>
                    <div class="deal-about">
                        <div class="rating">
                            <span data-rating="5">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                            <span class="rating-reviews">
                                ( <span>251</span> Reviews )
                            </span>
                        </div>
                        <h3 class="deal-title">
                            <a href="#">The Crash Bad Instant Folding Twin Bed</a>
                        </h3>
                    </div>  
                </figure>
                <figure class="swiper-slide">  
                    <a href="#">
                        <img src="images/deal_02.jpg" alt=""/>
                    </a>
                    <div class="label-discount">-50%</div>
                    <ul class="deal-actions list-unstyled">
                        <li>
                            <span><i class="fa fa-heart"></i></span>
                        </li>
                        <li>
                            <span><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                            <span><i class="fa fa-camera"></i></span>
                        </li>
                    </ul>
                    <div class="deal-about">
                        <div class="rating">
                            <span class="rating-stars" data-rating="5">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                            <span class="rating-reviews">
                                ( <span>232</span> Reviews )
                            </span>
                        </div>
                        <h3 class="deal-title">
                            <a href="#">Western Digital USB 3.0 Hard Drives</a>
                        </h3>
                    </div>  
                </figure>
                <figure class="swiper-slide">  
                    <a href="#">
                        <img src="images/deal_03.jpg" alt=""/>
                    </a>
                    <div class="label-discount">-30%</div>
                    <ul class="deal-actions list-unstyled">
                        <li>
                            <span><i class="fa fa-heart"></i></span>
                        </li>
                        <li>
                            <span><i class="fa fa-share-alt"></i></span>
                        </li>
                        <li>
                            <span><i class="fa fa-camera"></i></span>
                        </li>
                    </ul>
                    <div class="deal-about">
                        <div class="rating">
                            <span class="rating-stars" data-rating="5">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                            <span class="rating-reviews">
                                ( <span>160</span> Reviews )
                            </span>
                        </div>
                        <h3 class="deal-title">
                            <a href="#">Hampton Bay LED Light Ceiling Exhaust Fan</a>
                        </h3>
                    </div>  
                </figure>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><span class="btn-next fa fa-chevron-right"></span></div>
            <div class="swiper-button-prev"><span class="btn-prev fa fa-chevron-left"></span></div>
        </div>
	</div>
</div>