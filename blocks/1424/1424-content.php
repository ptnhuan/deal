<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1424">
	<div class="container">
		<section class="wishlist-area">
			<div class="container">
				<div class="wishlist-wrapper">
					<h3 class="wishlist-title">My Wishlist</h3>
					<table class="wishlist">
                        <tbody>
                    		<tr class="panel alert">
                                <td class="col-sm-8 col-md-9">
                                    <div class="media-left is-hidden-sm-down">
                                        <figure class="product-thumb">
                                            <img class="img-responsive" src="images/product_11.jpg" alt="product">
                                        </figure>
                                    </div>
                                    <div class="media-body valign-middle">
                                        <h5 class="title"><a href="#">Diamond engagement ring</a></h5>
                                        <div class="rating">
                                            <span class="rating-stars rate-allow" data-rating="2">
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        	</span>
                                            <span class="rating-reviews">
	                        					( <span>100</span> rates )
                                            </span>
                                        </div>
                                        <h4 class="price"><span class="price-sale">$380.00</span>$340.00</h4>
                                        <button class="btn-rounded is-hidden-sm-up mt-15">Add To Cart</button>
                                    </div>
                                </td>
                                <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                    <button class="btn btn-rounded btn-sm">Add To Cart</button>
                                </td>
                                <td class="col-sm-1">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr><!--End Item-->
                            <tr class="panel alert">
                                <td class="col-sm-8 col-md-9">
                                    <div class="media-left is-hidden-sm-down">
                                        <figure class="product-thumb">
                                            <img class="img-responsive" src="images/product_12.jpg" alt="product">
                                        </figure>
                                    </div>
                                    <div class="media-body valign-middle">
                                        <h5 class="title"><a href="#">Diamond engagement ring</a></h5>
                                        <div class="rating">
                                            <span class="rating-stars rate-allow" data-rating="2">
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        	</span>
                                            <span class="rating-reviews">
	                        					( <span>100</span> rates )
                                            </span>
                                        </div>
                                        <h4 class="price"><span class="price-sale">$380.00</span>$340.00</h4>
                                        <button class="btn-rounded is-hidden-sm-up mt-15">Add To Cart</button>
                                    </div>
                                </td>
                                <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                    <button class="btn btn-rounded btn-sm">Add To Cart</button>
                                </td>
                                <td class="col-sm-1">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr><!--End Item-->
                            <tr class="panel alert">
                                <td class="col-sm-8 col-md-9">
                                    <div class="media-left is-hidden-sm-down">
                                        <figure class="product-thumb">
                                            <img class="img-responsive" src="images/product_13.jpg" alt="product">
                                        </figure>
                                    </div>
                                    <div class="media-body valign-middle">
                                        <h5 class="title"><a href="#">Diamond engagement ring</a></h5>
                                        <div class="rating">
                                            <span class="rating-stars rate-allow" data-rating="2">
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        	</span>
                                            <span class="rating-reviews">
	                        					( <span>100</span> rates )
                                            </span>
                                        </div>
                                        <h4 class="price"><span class="price-sale">$380.00</span>$340.00</h4>
                                        <button class="btn-rounded is-hidden-sm-up mt-15">Add To Cart</button>
                                    </div>
                                </td>
                                <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                    <button class="btn btn-rounded btn-sm">Add To Cart</button>
                                </td>
                                <td class="col-sm-1">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr><!--End Item-->
                            <tr class="panel alert">
                                <td class="col-sm-8 col-md-9">
                                    <div class="media-left is-hidden-sm-down">
                                        <figure class="product-thumb">
                                            <img class="img-responsive" src="images/product_14.jpg" alt="product">
                                        </figure>
                                    </div>
                                    <div class="media-body valign-middle">
                                        <h5 class="title"><a href="#">Diamond engagement ring</a></h5>
                                        <div class="rating">
                                            <span class="rating-stars rate-allow" data-rating="2">
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        	</span>
                                            <span class="rating-reviews">
	                        					( <span>100</span> rates )
                                            </span>
                                        </div>
                                        <h4 class="price"><span class="price-sale">$380.00</span>$340.00</h4>
                                        <button class="btn-rounded is-hidden-sm-up mt-15">Add To Cart</button>
                                    </div>
                                </td>
                                <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                    <button class="btn btn-rounded btn-sm">Add To Cart</button>
                                </td>
                                <td class="col-sm-1">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr><!--End Item-->
                            <tr class="panel alert">
                                <td class="col-sm-8 col-md-9">
                                    <div class="media-left is-hidden-sm-down">
                                        <figure class="product-thumb">
                                            <img class="img-responsive" src="images/product_15.jpg" alt="product">
                                        </figure>
                                    </div>
                                    <div class="media-body valign-middle">
                                        <h5 class="title"><a href="#">Diamond engagement ring</a></h5>
                                        <div class="rating">
                                            <span class="rating-stars rate-allow" data-rating="2">
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        	</span>
                                            <span class="rating-reviews">
	                        					( <span>100</span> rates )
                                            </span>
                                        </div>
                                        <h4 class="price"><span class="price-sale">$380.00</span>$340.00</h4>
                                        <button class="btn-rounded is-hidden-sm-up mt-15">Add To Cart</button>
                                    </div>
                                </td>
                                <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                    <button class="btn btn-rounded btn-sm">Add To Cart</button>
                                </td>
                                <td class="col-sm-1">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr><!--End Item-->
                            <tr class="panel alert">
                                <td class="col-sm-8 col-md-9">
                                    <div class="media-left is-hidden-sm-down">
                                        <figure class="product-thumb">
                                            <img class="img-responsive" src="images/product_16.jpg" alt="product">
                                        </figure>
                                    </div>
                                    <div class="media-body valign-middle">
                                        <h5 class="title"><a href="#">Diamond engagement ring</a></h5>
                                        <div class="rating">
                                            <span class="rating-stars rate-allow" data-rating="2">
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        		<i class="fa fa-star-o"></i>
				                        	</span>
                                            <span class="rating-reviews">
	                        					( <span>100</span> rates )
                                            </span>
                                        </div>
                                        <h4 class="price"><span class="price-sale">$380.00</span>$340.00</h4>
                                        <button class="btn-rounded is-hidden-sm-up mt-15">Add To Cart</button>
                                    </div>
                                </td>
                                <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                    <button class="btn btn-rounded btn-sm">Add To Cart</button>
                                </td>
                                <td class="col-sm-1">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr><!--End Item-->
                        </tbody>
                    </table>
				</div>
			</div>
		</section>
	</div>
</div>