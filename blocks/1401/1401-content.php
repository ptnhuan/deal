<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1401">
	<div class="top-menu">
		<div class="container">
  			<nav class="navbar ">
  				<!-- Navbar Header -->
		      	<div class="navbar-header">
		      		<span class="navbar-toggle pull-left btn-menu" data-toggle="collapse" data-target="#nav-top-menu">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
			    </div><!-- End Navbar Header -->
			    <!-- Navbar Top Menu -->
		        <div id="nav-top-menu" class="collapse menu-content">
			        <ul class="menu nav navbar-nav">
			            <li class="active"><a class="item-menu" href="#">Home</a></li>
			            <li class="dropdown-mega-menu">
			          		<a class="item-menu" data-toggle="collapse" data-parent="#accordion" href="#sub-1">Deals<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
			          		<div class="mega-menu collapse" id="sub-1">
	                            <div class="row">
	                                <div class="col-md-3">
	                                    <ul class="pl-15 list-unstyled">
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
								                        <i class="fa fa-star-o"></i>
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
								                        <i class="fa fa-star-o"></i>
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
								                        <i class="fa fa-star-o"></i>
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
			          		<a class="item-menu" data-toggle="collapse" data-parent="#accordion" href="#sub-2">Coupons<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
			          		<ul id="sub-2" class="sub-menu list-unstyled collapse">
				                <li><a href="#">Grid View</a></li>
				                <li><a href="#">Grid With Sidebar</a></li>
				                <li><a href="#">List View</a></li>
				            </ul>
			          	</li>
			          	<li>
			          		<a class="item-menu" data-toggle="collapse" data-parent="#accordion" href="#sub-3">Stores<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
			          		<ul id="sub-3" class="collapse sub-menu list-unstyled">
				                <li><a href="#">Stores Search</a></li>
				                <li><a href="#">Stores Categories</a></li>
				                <li><a href="#">Store Single 1</a></li>
				                <li><a href="#">Store Single 2</a></li>
				            </ul>
			          	</li>
			          	<li>
			          		<a class="item-menu" data-toggle="collapse" data-parent="#accordion" href="#sub-4">Contact Us<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
			          		<ul id="sub-4" class="collapse sub-menu list-unstyled">
				                <li><a href="#">Contact Us 1</a></li>
				                <li><a href="#">Contact Us 2</a></li>
				            </ul>
			          	</li>
			          	<li>
			          		<a class="item-menu" data-toggle="collapse" data-parent="#accordion" href="#sub-5">Blog<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
			          		<ul id="sub-5" class="sub-menu list-unstyled collapse">
				                <li>
				                	<a data-toggle="collapse" data-parent="#accordion" href="#sub-5-1">Classic View<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled sub-sub-menu collapse" id="sub-5-1">
						                <li><a href="#">Right Sidenar</a></li>
						                <li><a href="#">Left Sidebar</a></li>
						                <li><a href="#">Full Width</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a data-toggle="collapse" data-parent="#accordion" href="#sub-5-2">Grid View<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled sub-sub-menu collapse" id="sub-5-2">
						                <li><a href="#">3 Columns</a></li>
						                <li><a href="#">2 Columns</a></li>
						                <li><a href="#">Right Sidebar</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a data-toggle="collapse" data-parent="#accordion" href="#sub-5-3">List View<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled collapse" id="sub-5-3">
						                <li><a href="#">Right Sidenar</a></li>
						                <li><a href="#">Left Sidebar</a></li>
						                <li><a href="#">Full Width</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a data-toggle="collapse" data-parent="#accordion" href="#sub-5-4">Blog Single<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled sub-sub-menu collapse" id="sub-5-4">
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
			          		<a class="item-menu" data-toggle="collapse" data-parent="#accordion" href="#sub-6">Pages<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
			          		<ul id="sub-6" class="sub-menu list-unstyled collapse">
				                <li><a href="#">Home Default</a></li>
				                <li><a href="#">Sign In</a></li>
				                <li><a href="#">Sign Up</a></li>
				                <li><a href="#">404 Page</a></li>
				                <li><a href="#">FAQ Page</a></li>
				                <li><a href="#">Cart Page</a></li>
				                <li>
				                	<a data-toggle="collapse" data-parent="#accordion" href="#sub-6-1">Checkout<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled sub-sub-menu collapse" id="sub-6-1">
						                <li><a href="#">Checkout method</a></li>
						                <li><a href="#">Billing Information</a></li>
						                <li><a href="#">Payment Information</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a data-toggle="collapse" data-parent="#accordion" href="#sub-6-2">Contact Us<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled sub-sub-menu collapse" id="sub-6-2">
						                <li><a href="#">Contact Us 1</a></li>
						                <li><a href="#">Contact Us 2</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a data-toggle="collapse" data-parent="#accordion" href="#sub-6-3">Deals Pages<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled sub-sub-menu collapse" id="sub-6-3">
						                <li><a href="#">Grid View</a></li>
						                <li><a href="#">List View</a></li>
						                <li><a href="#">Deal Single</a></li>
						            </ul>
				                </li>
				                <li>
				                	<a data-toggle="collapse" data-parent="#accordion" href="#sub-6-4">Coupons Pages<span class="indicator"><i class="fa fa-angle-right"></i></span></a>
				                	<ul class="list-unstyled sub-sub-menu collapse" id="sub-6-4">
						                <li><a href="#">Grid View</a></li>
						                <li><a href="#">Grid With Sidebar</a></li>
						                <li><a href="#">List View</a></li>
						            </ul>
				                </li>
				                <li><a href="#">Terms & conditions</a></li>
				            </ul>
			          	</li>
			        </ul>
		        </div><!-- End Navbar Top Menu -->
		        <!-- Navbar Menu Fixed -->
		        <div class="nav-menu-fixed">
                    <a href="#">RTL VERSION<i class="fa fa-long-arrow-right"></i></a>
                </div><!-- End Navbar Menu Fixed -->
			</nav>
		</div>
	</div>
</div>