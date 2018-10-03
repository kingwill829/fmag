<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_head = $site_root . "/fmag/includes/head.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_masthead = $site_root . "/fmag/includes/masthead.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";
	$include_custom_css = "/fmag/core_assets/css/new-homepage.css";

	include_once($include_head);
	include_once($include_masthead);
	include_once($include_nav); 
?>




<div class="landing-page-band">
	<div class="landing-page-banner__headline">		
		<h1>Christmas Gifts</h1>

		<div class="tac landing-page-banner__snippet">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida lacus sed leo euismod, quis iaculis augue vulputate. Duis ac dapibus orci, eget gravida nibh. Ut dapibus tincidunt lacus ac bibendum. Curabitur ornare libero odio
		</div>

		<div class="landing-panel__button">
			Shop Now
		</div>	
	</div>

	<picture>
		<source media="(max-width:480px)" srcset="images/home-banner-480.jpg">
		<source media="(max-width:767px)" srcset="images/home-banner-767.jpg">
		<source media="(max-width:991px)" srcset="images/home-banner-991.jpg">
		<img src="images/home-banner.jpg" width="2700" height="852" />
	</picture>

</div>

<div class="container">
	<div class="mart_d landing-page__links tac">
		<h2 class="tac">Christmas Gifts for Everyone</h2>

		<div class="landing-page__link">
			<a class="circle" href="#">
				Christmas Gifts For Men
			</a>
		</div>
		
		<div class="landing-page__link">	
			<a class="circle" href="#">
				Christmas Gifts For Women
			</a>
		</div>

		<div class="landing-page__link">
			<a class="circle" href="#">
				Christmas Gifts For Men
			</a>
		</div>
		
		<div class="landing-page__link">	
			<a class="circle" href="#">
				Christmas Gifts For Women
			</a>
		</div>
	</div>	
</div>	



<?php
	include_once($include_footer);
?>