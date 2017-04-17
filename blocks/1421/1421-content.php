<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1421">
	<div class="col-xs-12 ptb-10">
        <div class="widget instagram-widget panel">
            <h3 class="widget-title">Instagram</h3>
            <div class="widget-body">
                <div class="row m-5">
                    <div class="p-5 col-xs-4">
                        <img src="images/instagram_01.jpg" alt="">
                    </div>
                    <div class="p-5 col-xs-4">
                        <img src="images/instagram_02.jpg" alt="">
                    </div>
                    <div class="p-5 col-xs-4">
                        <img src="images/instagram_03.jpg" alt="">
                    </div>
                    <div class="p-5 col-xs-4">
                        <img src="images/instagram_04.jpg" alt="">
                    </div>
                    <div class="p-5 col-xs-4">
                        <img src="images/instagram_05.jpg" alt="">
                    </div>
                    <div class="p-5 col-xs-4">
                        <img src="images/instagram_06.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Subscribe -->
    <div class="col-xs-12">
        <div class="widget subscribe-widget panel">
            <h3 class="widget-title">Latest tweets</h3>
            <div class="widget-body">
                <ul class="list-unstyled">
                    <li>
                        <p>
                            <i class="twitter-icon fa fa-twitter"></i>
                            <a href="#">@masum_rana :</a>
                            <span>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="twitter-icon fa fa-twitter"></i>
                            <a href="#">@masum_rana :</a>
                            <span>Recusandae sed, aperiam earum sapiente rem neque officiis quaerat.</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="twitter-icon fa fa-twitter"></i>
                            <a href="#">@masum_rana :</a>
                            <span>Sed quaerat, error harum sunt, sapiente voluptas temporibus porro quam, magnam dolores recusandae.</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="twitter-icon fa fa-twitter"></i>
                            <a href="#">@masum_rana :</a>
                            <span>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>