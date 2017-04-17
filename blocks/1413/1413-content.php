<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1413">
	<div class="cart-area">
		<div class="container">
			<div class="cart-wrapper">
				<h3 class="cart-title">My Cart</h3>
				<table id="cart_list" class="cart-list">
                    <thead class="panel">
                        <tr>
                            <th>Product name</th>
                            <th>Unit price</th>
                            <th>Quantity</th>
                            <th>Sub total</th>
                            <th></th>
                        </tr>
                    </thead>
	                <tbody>
	                    <tr class="panel alert">
	                        <td>
	                            <div class="media-left is-hidden-sm-down">
	                                <figure class="product-thumb">
	                                    <img class="img-responsive" src="images/product_01.jpg" alt="product">
	                                </figure>
	                            </div>
	                            <div class="media-body valign-middle">
	                                <h6 class="title"><a href="#">Diamond engagement ring</a></h6>
	                                <div class="type"><span>Type : </span>Women's Cloths</div>
	                            </div>
	                        </td>
	                        <td>$235</td>
	                        <td>
	                            <input class="quantity-label" type="number" value="02">
	                        </td>
	                        <td>
	                            <div class="sub-total">$470</div>
	                        </td>
	                        <td>
	                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
	                                <i class="fa fa-trash-o"></i>
	                            </button>
	                        </td>
	                    </tr><!--End Item-->
	                    <tr class="panel alert">
	                        <td>
	                            <div class="media-left is-hidden-sm-down">
	                                <figure class="product-thumb">
	                                    <img class="img-responsive" src="images/product_02.jpg" alt="product">
	                                </figure>
	                            </div>
	                            <div class="media-body valign-middle">
	                                <h6 class="title"><a href="#">Diamond engagement ring</a></h6>
	                                <div class="type"><span>Type : </span>Women's Cloths</div>
	                            </div>
	                        </td>
	                        <td>$235</td>
	                        <td>
	                            <input class="quantity-label" type="number" value="02">
	                        </td>
	                        <td>
	                            <div class="sub-total">$470</div>
	                        </td>
	                        <td>
	                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
	                                <i class="fa fa-trash-o"></i>
	                            </button>
	                        </td>
	                    </tr><!--End Item-->
	                    <tr class="panel alert">
	                        <td>
	                            <div class="media-left is-hidden-sm-down">
	                                <figure class="product-thumb">
	                                    <img class="img-responsive" src="images/product_03.jpg" alt="product">
	                                </figure>
	                            </div>
	                            <div class="media-body valign-middle">
	                                <h6 class="title"><a href="#">Diamond engagement ring</a></h6>
	                                <div class="type"><span>Type : </span>Women's Cloths</div>
	                            </div>
	                        </td>
	                        <td>$235</td>
	                        <td>
	                            <input class="quantity-label" type="number" value="02">
	                        </td>
	                        <td>
	                            <div class="sub-total">$470</div>
	                        </td>
	                        <td>
	                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
	                                <i class="fa fa-trash-o"></i>
	                            </button>
	                        </td>
	                    </tr><!--End Item-->
	                    <tr class="panel alert">
	                        <td>
	                            <div class="media-left is-hidden-sm-down">
	                                <figure class="product-thumb">
	                                    <img class="img-responsive" src="images/product_04.jpg" alt="product">
	                                </figure>
	                            </div>
	                            <div class="media-body valign-middle">
	                                <h6 class="title"><a href="#">Diamond engagement ring</a></h6>
	                                <div class="type"><span>Type : </span>Women's Cloths</div>
	                            </div>
	                        </td>
	                        <td>$235</td>
	                        <td>
	                            <input class="quantity-label" type="number" value="02">
	                        </td>
	                        <td>
	                            <div class="sub-total">$470</div>
	                        </td>
	                        <td>
	                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
	                                <i class="fa fa-trash-o"></i>
	                            </button>
	                        </td>
	                    </tr><!--End Item-->
	                </tbody>
	            </table>
	            <!--#include<1424>-->
			</div>
		</div>
	</div>	
</div>