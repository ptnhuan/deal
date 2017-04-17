<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1412">
	<div class="page-main">
		<div class="container">
			<section class="stores-area">
				<h3 class="title-stores">View deals by stores</h3>
				<div class="row content-stores text-center">
					<!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_01.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_02.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_03.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_04.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_05.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_06.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_07.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_08.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_09.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_10.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_11.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_12.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store--> 
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_01.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_02.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_03.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_04.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_05.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_06.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_07.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_08.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_09.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_10.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_11.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                    <!-- Item Store-->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 p-15">
                        <a href="#" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img class="img-responsive" src="images/brand_12.jpg" alt="">
                                </div>
                            </div>
                            <h6 class="store-name">Amazon</h6>
                        </a>
                    </div><!-- End Item Store-->
                </div>
                <!-- Page Pagination -->
                <div class="page-pagination panel text-center pagination-area">
                    <nav>
                        <ul class="page-pagination">
                            <li><a class="page-numbers pre" href="#">Previous</a>
                            </li>
                            <li><a href="#" class="page-numbers">1</a>
                            </li>
                            <li><span class="page-numbers current">2</span>
                            </li>
                            <li><a href="#" class="page-numbers">3</a>
                            </li>
                            <li><a href="#" class="page-numbers">4</a>
                            </li>
                            <li><span class="page-numbers dots">...</span>
                            </li>
                            <li><a href="#" class="page-numbers">20</a>
                            </li>
                            <li><a href="#" class="page-numbers next">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End Page Pagination -->
			</section>
		</div>
	</div>
</div>