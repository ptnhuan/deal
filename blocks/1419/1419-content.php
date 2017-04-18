<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1419">
	<div class="col-xs-12 ptb-10">
        <div class="widget best-rated-deals panel">
            <h3 class="widget-title">Best Rated Deals</h3>
            <div class="widget-body">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="images/thumb_01.jpg" alt="Thumb" width="80">
                        </a>
                    </div>
                    <div class="media-body">
                        <h6>
                        	<a href="#">Aenean ut orci vel massa</a>
                      	</h6>
                        <div class="stars">
                        	<span class="rating">
                        		<span class="rating-stars" data-rating="4">
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
                        		</span>
                        	</span>
                        </div>
                        <h4 class="price">$60.00 <span class="price-sale">$200.00</span></h4>
                    </div>
                </div><!-- End media -->
				<div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="images/thumb_02.jpg" alt="Thumb" width="80">
                        </a>
                    </div>
                    <div class="media-body">
                        <h6>
                        	<a href="#">Aenean ut orci vel massa</a>
                      	</h6>
                        <div class="stars">
                        	<span class="rating">
                        		<span class="rating-stars" data-rating="4">
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
                        		</span>
                        	</span>
                        </div>
                        <h4 class="price">$60.00 <span class="price-sale">$200.00</span></h4>
                    </div>
                </div><!-- End media -->
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="images/thumb_03.jpg" alt="Thumb" width="80">
                        </a>
                    </div>
                    <div class="media-body">
                        <h6>
                        	<a href="#">Aenean ut orci vel massa</a>
                      	</h6>
                        <div class="stars">
                        	<span class="rating">
                        		<span class="rating-stars" data-rating="4">
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
                        		</span>
                        	</span>
                        </div>
                        <h4 class="price">$60.00 <span class="price-sale">$200.00</span></h4>
                    </div>
                </div><!-- End media -->
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="images/thumb_04.jpg" alt="Thumb" width="80">
                        </a>
                    </div>
                    <div class="media-body">
                        <h6>
                        	<a href="#">Aenean ut orci vel massa</a>
                      	</h6>
                        <div class="stars">
                        	<span class="rating">
                        		<span class="rating-stars" data-rating="4">
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
			                        <i class="fa fa-star-o"></i>
                        		</span>
                        	</span>
                        </div>
                        <h4 class="price">$60.00 <span class="price-sale">$200.00</span></h4>
                    </div>
                </div><!-- End media -->                
            </div>
        </div>
    </div>
</div>