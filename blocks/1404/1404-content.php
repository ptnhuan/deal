<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1404">
   <div class="container">
   		<div class="explain-process-area">
            <div class="row row-rl-10">
                <div class="col-md-4 row-pd-rl-10">
                    <div class="panel">
                        <div class="row row-rl-5 row-xs-cell">
                            <div class="col-xs-4 valign-middle">
                                <img src="images/tablet.png" alt="">
                            </div>
                            <div class="panel-content">
                                <h5>Deals &amp; Coupons</h5>
                                <p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 row-pd-rl-10">
                    <div class="panel">
                        <div class="row row-rl-5 row-xs-cell">
                            <div class="col-xs-4 valign-middle">
                                <img src="images/online-shop-6.png" alt="">
                            </div>
                            <div class="panel-content">
                                <h5>Find Best Offers</h5>
                                <p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 row-pd-rl-10">
                    <div class="panel">
                        <div class="row row-rl-5 row-xs-cell">
                            <div class="col-xs-4 valign-middle">
                                <img src="images/money.png" alt="">
                            </div>
                            <div class="panel-content">
                                <h5>Save Money</h5>
                                <p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>