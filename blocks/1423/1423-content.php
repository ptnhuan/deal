<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1423">
	<div class="container">
        <div class="page-content col-xs-12 col-sm-7 col-md-8">
            <!-- Blog Area -->
            <section class="blog-area">
                <div class="row row-tb-20">
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_01.jpg" style="background-image: url(images/post_01.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_02.jpg" style="background-image: url(images/post_02.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_03.jpg" style="background-image: url(images/post_03.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_04.jpg" style="background-image: url(images/post_04.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_05.jpg" style="background-image: url(images/post_05.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_06.jpg" style="background-image: url(images/post_06.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_07.jpg" style="background-image: url(images/post_07.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_08.jpg" style="background-image: url(images/post_08.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_09.jpg" style="background-image: url(images/post_09.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_10.jpg" style="background-image: url(images/post_10.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_11.jpg" style="background-image: url(images/post_11.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Blog Post -->
                    <div class="blog-post col-xs-12">
                        <article class="entry panel">
                            <div class="row content">
                                <div class="col-xs-12 col-md-6 col-lg-5 p-0 row-md-cell">
                                    <figure class="embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="images/post_12.jpg" style="background-image: url(images/post_12.jpg);">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                </div>
                                <div class="row-md-cell col-xs-12 col-md-6 col-lg-7 sub-content">
                                    <div class="entry-wrapper">
                                        <header class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="#">Restaurant Employer Read Clients Orders On His iPad</a>
                                            </h3>
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li> <i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>

                                        <div class="entry-content">
                                            <p>Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <!-- .entry-wrapper -->

                                        <footer class="entry-footer text-right">
                                            <a href="#" class="btn">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End Blog Post -->
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
            <!-- End Blog Area -->

        </div>
	</div>
</div>