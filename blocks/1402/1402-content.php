<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1402">
	<div class="col-lg-3 col-md-4 col-xs-12">
		<aside>
			<ul class="list-unstyled panel">
				<li>
					<a href="#"><i class="fa fa-cutlery"></i>Food &amp; Drink<span>40</span></a>
				</li>
                <li>
                	<a href="#"><i class="fa fa-calendar"></i>Events<span>42</span></a>
                </li>
                <li>
                	<a href="#"><i class="fa fa-female"></i>Beauty<span>48</span></a>
                </li>
                <li>
                	<a href="#"><i class="fa fa-bolt"></i>Fitness<span>33</span></a>
                </li>
                <li>
                	<a href="#"><i class="fa fa-image"></i>Furniture<span>50</span></a>
                </li>
                <li>
                	<a href="#"><i class="fa fa-umbrella"></i>Fashion<span>33</span></a>
                </li>
                <li>
                	<a href="#"><i class="fa fa-shopping-cart"></i>Shopping<span>37</span></a>
                </li>
                <li>
                	<a href="#"><i class="fa fa-home"></i>Home &amp; Graden<span>30</span></a>
                </li>
                <li>
                	<a href="#"><i class="fa fa-plane"></i>Travel<span>48</span></a>
                </li>
                <li class="all-cat">
                	<a href="#">All Categories</a>
                </li>
			</ul>
		</aside>
	</div>
</div>