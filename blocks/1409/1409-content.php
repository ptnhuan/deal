<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1409">
	<div class="container">
	   	<section class="subscribe-area">
	   		<div class="newsletter-form">
                <h4><i class="fa fa-envelope-o"></i>Sign up for our weekly email newsletter</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi animi magni accusantium architecto possimus.</p>
                <form method="post" action="#">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email Address" required="required">
                        <span class="input-group-btn">
                            <button class="btn" type="submit">Subscribe</button>
                        </span>
                    </div>
                </form>
                <p class="small"><small>We’ll never share your email address with a third-party.</small> </p>
            </div>
	   	</section>
	</div>
</div>