<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1401">
	<div style="height: 50px;"></div>
	<div class="top-menu">
		<div class="container">
  			<nav class="navbar ">
		      	<div class="navbar-header">
		      		<span class="navbar-toggle collapsed pull-left btn-menu" data-toggle="collapse" data-target="#nav-top-menu">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
			    </div>
		        <div id="nav-top-menu" class="collapse menu-content">
			        <ul class="menu nav navbar-nav">
			            <li class="active"><a href="#">Home</a></li>
			            <li class="dropdown-mega-menu">
			          		<a>Deals<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
			          		<div class="mega-menu">
	                            <div class="row">
	                                <div class="col-md-3">
	                                    <ul class="list-unstyled">
	                                       	<li><a href="#">Grid View</a></li>
	                                        <li><a href="#">Grid With Sidebar</a></li>
	                                        <li><a href="#">List View</a></li>
	                                        <li><a href="#">Deal Single</a></li>
	                                    </ul>
	                                </div>
	                                <div class="col-md-3">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="images/deal_03.jpg" style="background-image: url(images/deal_03.jpg);">
                                            <div class="label-discount">-15%</div>
                                            <div class="deal-about">
                                                <div class="rating">
                                                    <span class="rating-stars" data-rating="2">
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o star-active"></i>
								                        <i class="fa fa-star-o"></i>
								                    </span>
                                                </div>
                                                <h6 class="deal-title">
								                    <a href="#" class="color-lighter">Aenean ut orci vel massa</a>
								                </h6>
                                            </div>
                                        </figure>
                                    </div>
	                                <div class="col-md-3">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="images/deal_04.jpg" style="background-image: url(images/deal_04.jpg);">
                                            <div class="label-discount">-15%</div>
                                            <div class="deal-about">
                                                <div class="rating">
                                                    <span class="rating-stars" data-rating="2">
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o star-active"></i>
								                        <i class="fa fa-star-o"></i>
								                    </span>
                                                </div>
                                                <h6 class="deal-title">
								                    <a href="#" class="color-lighter">Aenean ut orci vel massa</a>
								                </h6>
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="images/deal_03.jpg" style="background-image: url(images/deal_05.jpg);">
                                            <div class="label-discount">-15%</div>
                                            <div class="deal-about">
                                                <div class="rating">
                                                    <span class="rating-stars" data-rating="2">
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o star-active"></i>
								                        <i class="fa fa-star-o"></i>
								                    </span>
                                                </div>
                                                <h6 class="deal-title">
								                    <a href="#" class="color-lighter">Aenean ut orci vel massa</a>
								                </h6>
                                            </div>
                                        </figure>
                                    </div>
	                            </div>
	                        </div>
			          	</li>
			          	<li>
			          		<a>Coupons<span class="indicator" data-toggle="collapse" data-target="#nav-top-menu-1"><i class="fa fa-angle-down"></i></span></a>
			          		<ul id="nav-top-menu-1" class="sub-menu list-unstyled collapse">
				                <li><a href="#">Grid View</a></li>
				                <li><a href="#">Grid With Sidebar</a></li>
				                <li><a href="#">List View</a></li>
				            </ul>
			          	</li>
			          	<li>
			          		<a>Stores<span class="indicator" data-toggle="collapse" data-target="#nav-top-menu-2"><i class="fa fa-angle-down"></i></span></a>
			          		<ul id="nav-top-menu-2" class="collapse sub-menu list-unstyled">
				                <li><a href="#">Stores Search</a></li>
				                <li><a href="#">Stores Categories</a></li>
				                <li><a href="#">Store Single 1</a></li>
				                <li><a href="#">Store Single 2</a></li>
				            </ul>
			          	</li>
			          	<li>
			          		<a>Contact Us<span class="indicator" data-toggle="collapse" data-target="#nav-top-menu-3"><i class="fa fa-angle-down"></i></span></a>
			          		<ul id="nav-top-menu-3" class="collapse sub-menu list-unstyled">
				                <li><a href="#">Contact Us 1</a></li>
				                <li><a href="#">Contact Us 2</a></li>
				            </ul>
			          	</li>
			          	<li>
			          		<a>Blog<span data-toggle="collapse" data-target="#nav-top-menu-4" class="indicator"><i class="fa fa-angle-down"></i></span></a>
			          		<ul class="sub-menu list-unstyled">
				                <li>
				                	<a href="#">Classic View<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled">
						                <li><a href="#">Right Sidenar</a></li>
						                <li><a href="#">Left Sidebar</a></li>
						                <li><a href="#">Full Width</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a href="#">Grid View<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled">
						                <li><a href="#">3 Columns</a></li>
						                <li><a href="#">2 Columns</a></li>
						                <li><a href="#">Right Sidebar</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a href="#">List View<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled">
						                <li><a href="#">Right Sidenar</a></li>
						                <li><a href="#">Left Sidebar</a></li>
						                <li><a href="#">Full Width</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a href="#">Blog Single<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled">
						                <li><a href="#">Standard Post</a></li>
						                <li><a href="#">Gallery Post</a></li>
						                <li><a href="#">Youtube Video</a></li>
						                <li><a href="#">Vimeo Video</a></li>
						                <li><a href="#">Google Map</a></li>
						                <li><a href="#">Quote Post</a></li>
						                <li><a href="#">Audio Post</a></li>
						            </ul>
				                </li>
				            </ul>
			          	</li>
			          	<li>
			          		<a>Pages<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
			          		<ul class="sub-menu list-unstyled">
				                <li><a href="#">Home Default</a></li>
				                <li><a href="#">Sign In</a></li>
				                <li><a href="#">Sign Up</a></li>
				                <li><a href="#">404 Page</a></li>
				                <li><a href="#">FAQ Page</a></li>
				                <li><a href="#">Cart Page</a></li>
				                <li>
				                	<a href="#">Checkout<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled">
						                <li><a href="#">Checkout method</a></li>
						                <li><a href="#">Billing Information</a></li>
						                <li><a href="#">Payment Information</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a href="#">Contact Us<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled">
						                <li><a href="#">Contact Us 1</a></li>
						                <li><a href="#">Contact Us 2</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a href="#">Deals Pages<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled">
						                <li><a href="#">Grid View</a></li>
						                <li><a href="#">List View</a></li>
						                <li><a href="#">Deal Single</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a href="#">Coupons Pages<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled">
						                <li><a href="#">Grid View</a></li>
						                <li><a href="#">Grid With Sidebar</a></li>
						                <li><a href="#">List View</a></li>
						            </ul>
				                </li>
				                <li><a href="#">Terms & conditions</a></li>
				            </ul>
			          	</li>
			        </ul>
		        </div>
			</nav>
		</div>
	</div>
</div>