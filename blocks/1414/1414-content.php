<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1414">
	<div class="container">
		<div class="cart-price">
			<h5>Cart total</h5>
			<ul class="panel list-unstyled">
                <li>
                    <div class="item-name">Subtotal</div>
                    <div class="price">$68.50</div>
                </li>
                <li>
                    <div class="item-name">Shipping</div>
                    <div class="price">$68.50</div>
                </li>
                <li>
                    <div class="item-name"><strong>Order total</strong></div>
                    <div class="price"><span>$150.50</span></div>
                </li>
            </ul>
            <div class="t-right">
		        <a href="#" class="btn btn-rounded btn-lg">CHECKOUT</a>
		    </div>
		</div>
	</div>
</div>