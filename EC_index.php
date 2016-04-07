<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>for the win online shop</title>
	<link rel="icon" href="./images/favicon.ico">
	<link rel="stylesheet" href="css/common.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
    	animation: "slide"
    });
  });

</script>
</head>
<body>
	<!--↓↓ヘッダー↓↓-->
	<header id="header" class="">
		<div class="description"></div>
		<div id="fixedBox" class="nav">
			<div class="globalnavi">
				<div class="globalnavi_in cf">
					<div class="h_logo">
						<h1><a href=""><img class="over" src="./images/site-logo.png" alt=""></a></h1>
					</div>
					<?php
						for($i=2;$i < 12 ; $i++){
							if($i<=9){
								echo"<ul>\n<li class=\"gn_0$i\">\n<a href=\"#\"></a>\n</ul>";
							}else{
								echo"<ul>\n<li class=\"gn_$i\">\n<a href=\"#\"></a>\n</ul>";
								
							}
						}
					?>
					
				</div>
			</div>
		</div>
	</header>
	<!-- ↑↑ヘッダー↑↑ -->

	<!--↓↓コンテンツ↓↓-->
	<div id="wrap">
		<div id="slideshow">
			<div id="m">
				<h2>コンテンツ</h2>
				<div class="flexslider">
				  <ul class="slides">
				    <li>
				      <img src="../images/slide1.jpg" />
				      <p class="flex-caption">Modern PHP: New Features and Good Practices/￥3,347</p>
				    </li>
				    <li>
				      <img src="../images/slide2.jpg" />
				      <p class="flex-caption">LOVE CD+DVD, Import, Special Edition/￥2,757</p>
				    </li>
				    <li>
				      <img src="../images/slide3.jpg" />
				      <p class="flex-caption">APPLE iMac 27 /￥187,110</p>
				    </li>
				  </ul>
				</div>
			</div>
		</div>
		<?php

		require 'common.php';
		$pdo = connect();
		$st = $pdo->query("SELECT * FROM product")


		?>
	</div>
	<!--↑↑コンテンツ↑↑-->

	<!--↓↓フッター↓↓-->
	<footer>
		<div class="copyright">
			&copy;for the win, Inc.
		</div>
	</footer>
	<div id="to_top">
	<p><a href="#header"></a></p>
	</div>
	<!--↑↑フッター↑↑-->
<script>
jQuery(function($) {
var nav    = $('#fixedBox'),
    offset = nav.offset();
var to_top = $('#to_top');
  
$(window).scroll(function () {
  if($(window).scrollTop() > offset.top) {
    nav.addClass('fixed');
    to_top.addClass('pageup');
  } else {
    nav.removeClass('fixed');
    to_top.removeClass('pageup');
  }
});
});
	</script>
</body>
</html>