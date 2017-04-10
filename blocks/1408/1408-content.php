<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1408">
	<div class="container">
		<section class="blog-area">
			<header class="panel ">
				<h3 class="section-title">Latest News</h3>
                <a href="#" class="btn btn-stores">Visit Blog</a>
			</header>
			<div class="row row-tb-20">
                <!-- Blog Post -->
                <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                    <article class="entry panel">
                        <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9">
                            <img src="images/post_01.jpg">
                            <div class="entry-date">
                                <h4>13</h4>
                                <h6>JUN</h6>
                            </div>
                        </figure>
                        <div class="entry-wrapper">
                            <header class="entry-header">
                                <h4 class="entry-title">
                                    <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                </h4>
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                        <li><i class="icon fa fa-comments"></i>14 Comments </li>
                                    </ul>
                                </div>
                            </header>
                            <div class="entry-content">
                                <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                            </div>
                            <footer class="entry-footer text-right">
                                <a href="#" class="btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                            </footer>
                        </div>
                    </article>
                </div><!-- End Blog Post -->

                <!-- Blog Post -->
                <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                    <article class="entry panel">
                        <figure class="entry-media embed-responsive embed-responsive-16by9">
                            <iframe src="https://player.vimeo.com/video/28786762?portrait=0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" __idm_id__="813986817"></iframe>
                            <div class="entry-date">
                                <h4>13</h4>
                                <h6>JUN</h6>
                            </div>
                        </figure>
                        <div class="entry-wrapper">
                            <header class="entry-header">
                                <h4 class="entry-title">
                                    <a href="#">Amazing Classic Interior Design With Perfect Lighting</a>
                                </h4>
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                        <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                    </ul>
                                </div>
                            </header>
                            <div class="entry-content">
                                <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                            </div>
                            <footer class="entry-footer text-right">
                                <a href="#" class="btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                            </footer>
                        </div>
                    </article>
                </div><!-- End Blog Post -->

                <!-- Blog Post -->
                <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                    <article class="entry panel">
                        <figure class="entry-media embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/mcixldqDIEQ?v=mcixldqDIEQ" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            <div class="entry-date">
                                <h4>13</h4>
                                <h6>JUN</h6>
                            </div>
                        </figure>
                        <div class="entry-wrapper">
                            <header class="entry-header">
                                <h4 class="entry-title">
                                    <a href="#">English Breakfast Tea With Tasty Donut Desserts</a>
                                </h4>
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                        <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                    </ul>
                                </div>
                            </header>
                            <div class="entry-content">
                                <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                            </div>
                            <footer class="entry-footer text-right">
                                <a href="#" class="btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                            </footer>
                        </div>
                    </article>
                </div><!-- End Blog Post -->
            </div>
		</section>
	</div>
</div>