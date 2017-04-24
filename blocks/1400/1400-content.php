<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1400">
   <!-- Header -->
   <header>
   		<div class="header-top">
   			<div class="container">
   				<div class="row">
   					<div class="col-lg-4 col-md-5 header-top-left hidden-sm hidden-xs">
   						<ul class="list-inline pull-left">
   							<li><a href="#"><i class="fa fa-question-circle"></i>Discounts Guide</a></li>
   							<li><a href="#"><i class="fa fa-support"></i>Customer Assistance</a></li>
   						</ul>
   					</div>
   					<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 header-top-right">
   						<ul class="list-inline pull-right">
   							<li>
   								<a href="#"><i class="fa fa-flag-en"></i>English <i class="fa fa-caret-down"></i></a>
   								<ul class="list-unstyled sub-top-menu text-left">
   									<li>
		   								<a href="#"><i class="fa fa-flag-en"></i>English</a>
		   							</li>
		   							<li>
		   								<a href="#"><i class="fa fa-flag-ar"></i>العربية</a>
		   							</li>
   								</ul>
   							</li>
   							<li>
   								<a href="#"><i class="fa fa-usd"></i>USD <i class="fa fa-caret-down"></i></a>
   								<ul class="list-unstyled sub-top-menu text-left">
   									<li><a href="#">USD - US Dollar</a></li>
                              <li><a href="#">EUR - Euro</a></li>
                              <li><a href="#">CNY - Chinese Yuan</a></li>
                              <li><a href="#">RUB - Russian Ruble</a></li>
   								</ul>
   							</li>
   							<li>
   								<a href="#"><i class="fa fa-lock"></i>Sign In</a>
   							</li>
   							<li>
   								<a href="#"><i class="fa fa-user"></i>Sign Up</a>
   							</li>
   						</ul>
   					</div>
   				</div>
   			</div>
   		</div>
   		<div class="header-content">
   			<div class="container">
   				<div class="row content">
   					<div class="logo col-lg-3 col-md-3 col-sm-12">
   						<a href="#"><img width="250" src="images/logo.png"></a>
   					</div>
   					<div class="search col-lg-9 col-md-9 col-xs-12 clearfix">
                     <div class="row">
                        <div class="col-sm-8 col-xs-12 form-search">
                           <form class="input-group">
                              <input class="form-control input-lg search-input" type="text" name="search" placeholder="Enter Keywork Here ...">
                              <div class="input-group-btn">
                                 <div class="input-group">
                                    <select class="form-control input-lg search-select">
                                       <option>Select Your Category</option>
                                       <option>Deals</option>
                                       <option>Coupons</option>
                                       <option>Discounts</option>
                                    </select>
                                    <div class="input-group-btn">
                                       <button class="input-lg btn-block btn btn-search" style="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="col-sm-4 col-xs-12 cart right">
                           <div class="header-cart text-left">
                              <a href="#">
                                 <span class="lnr lnr-cart icon"></span>
                                 <div>
                                    <span class="cart-number">0</span>
                                 </div>
                                 <span class="title">Cart</span>
                              </a>
                           </div>
                           <div class="header-wishlist text-left">
                              <a href="#">
                                 <span class="icon lnr lnr-heart"></span>
                                 <span class="title">Wish List</span>
                              </a>
                           </div>            
                        </div>
                     </div>
   					</div>
   				</div>
   			</div>
   		</div>
   </header><!-- End Header -->

</div>