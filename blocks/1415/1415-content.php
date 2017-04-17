<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1415">
	<div class="page-content">
		<div class="container">
			<section class="section faq-area">
				<h3 class="faq-title">Frequently Asked Questions</h3>
				<div class="panel-group">
					<h4 class="payments">Payments</h4>
				</div>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h5 class="panel-title">
	    		            	<a data-toggle="collapse" data-parent="#accordion" href="#faq-0">Nunc ut erat at massa elementum tempus ?</a>
	    		            </h5>
	                    </div>
	                    <div id="faq-0" class="panel-collapse collapse in">
	                        <div class="panel-body">
	                            <p class="mb-30">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus.</p>
	                            <p>Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</p>
	                        </div>
	                    </div>
	                </div><!-- End Item-->
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h5 class="panel-title">
	    		            	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-1">Nunc ut erat at massa elementum tempus ?</a>
	    		            </h5>
	                    </div>
	                    <div id="faq-1" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p class="mb-30">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus.</p>
	                            <p>Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</p>
	                        </div>
	                    </div>
	                </div><!-- End Item-->
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h5 class="panel-title">
	    		            	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-2">Nunc ut erat at massa elementum tempus ?</a>
	    		            </h5>
	                    </div>
	                    <div id="faq-2" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p class="mb-30">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus.</p>
	                            <p>Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</p>
	                        </div>
	                    </div>
	                </div><!-- End Item-->
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h5 class="panel-title">
	    		            	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-3">Nunc ut erat at massa elementum tempus ?</a>
	    		            </h5>
	                    </div>
	                    <div id="faq-3" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p class="mb-30">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus.</p>
	                            <p>Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</p>
	                        </div>
	                    </div>
	                </div><!-- End Item-->
	                <h3 class="sub-title">How we work</h3>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h5 class="panel-title">
	    		            	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-4">Nunc ut erat at massa elementum tempus ?</a>
	    		            </h5>
	                    </div>
	                    <div id="faq-4" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p class="mb-30">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus.</p>
	                            <p>Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</p>
	                        </div>
	                    </div>
	                </div><!-- End Item-->
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h5 class="panel-title">
	    		            	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-5">Nunc ut erat at massa elementum tempus ?</a>
	    		            </h5>
	                    </div>
	                    <div id="faq-5" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p class="mb-30">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus.</p>
	                            <p>Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</p>
	                        </div>
	                    </div>
	                </div><!-- End Item-->
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h5 class="panel-title">
	    		            	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-6">Nunc ut erat at massa elementum tempus ?</a>
	    		            </h5>
	                    </div>
	                    <div id="faq-6" class="panel-collapse collapse">
	                        <div class="panel-body">
	                            <p class="mb-30">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, rhoncus sem. Vivamus vel velit semper, sagittis ante vel, tempor augue. Proin quis justo auctor, auctor risus vitae, tempor enim. Aliquam erat volutpat. Phasellus facilisis aliquam eleifend. Donec eget nisl elementum, luctus velit ut, viverra tellus.</p>
	                            <p>Aenean id aliquam velit, eget consequat neque. Suspendisse potenti. Praesent id cursus odio, eget aliquet lectus. Pellentesque id commodo diam. Aliquam in urna tincidunt, ullamcorper sapien at, imperdiet ex. Mauris laoreet pellentesque mi quis ornare. Donec non pulvinar nulla. Aenean suscipit tellus ut ex luctus, eu rhoncus nisi viverra. Curabitur sit amet erat nulla.</p>
	                        </div>
	                    </div>
	                </div><!-- End Item-->
	            </div>
			</section>
		</div>
	</div>
</div>