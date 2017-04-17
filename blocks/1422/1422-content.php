<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1422">
    <!-- Latest Reviews -->
    <div class="col-xs-12">
        <div class="widget posted-reviews-widget panel">
            <h3 class="widget-title">Recent Reviews</h3>
            <div class="widget-body">
                <!-- Review -->
                <div class="review media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-circle" src="images/avatar_01.jpg" alt="Thumb" width="80">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="stars">
                         <a href="#">John Doe</a>
                         <span class="rating">
                         <span class="rating-stars" data-rating="3">
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o star-active"></i>
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o"></i>
                         </span>
                         </span>
                      </h5>
                        <p class="color-mid">Vivamus sem massa, cursus at mollis eu, euismod id risus. Ve...</p>
                    </div>
                </div>
                <!-- End Review -->
                <!-- Review -->
                <div class="review media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-circle" src="images/avatar_02.jpg" alt="Thumb" width="80">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="stars">
                         <a href="#">John Doe</a>
                         <span class="rating">
                         <span class="rating-stars" data-rating="3">
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o star-active"></i>
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o"></i>
                         </span>
                         </span>
                      </h5>
                        <p class="color-mid">Vivamus sem massa, cursus at mollis eu, euismod id risus. Ve...</p>
                    </div>
                </div>
                <!-- End Review -->
                <!-- Review -->
                <div class="review media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-circle" src="images/avatar_03.jpg" alt="Thumb" width="80">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="stars">
                         <a href="#">John Doe</a>
                         <span class="rating">
                         <span class="rating-stars" data-rating="3">
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o star-active"></i>
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o"></i>
                         </span>
                         </span>
                      </h5>
                        <p class="color-mid">Vivamus sem massa, cursus at mollis eu, euismod id risus. Ve...</p>
                    </div>
                </div>
                <!-- End Review -->
                <!-- Review -->
                <div class="review media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-circle" src="images/avatar_04.jpg" alt="Thumb" width="80">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="stars">
                         <a href="#">John Doe</a>
                         <span class="rating">
                         <span class="rating-stars" data-rating="3">
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o star-active"></i>
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o"></i>
                         </span>
                         </span>
                      </h5>
                        <p class="color-mid">Vivamus sem massa, cursus at mollis eu, euismod id risus. Ve...</p>
                    </div>
                </div>
                <!-- End Review -->
            </div>
        </div>
    </div><!-- End Latest Reviews -->
    <!-- Contact Us Widget -->
	<div class="col-xs-12">
        <div class="widget contact-us-widget panel">
            <h3 class="widget-title">Got any questions?</h3>
            <div class="widget-body">
                <p class="color-mid">If you are having any questions, please feel free to ask.</p>
                <a href="#" class="btn btn-block"><i class="fa fa-envelope-o"></i>Drop Us a Line</a>
            </div>
        </div>
    </div><!-- End Contact Us Widget -->
</div>