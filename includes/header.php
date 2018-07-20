<?php
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";
	$include_css = "http://localhost:81/fmag/core_assets/css/style.css";
	$include_js = "http://localhost:81/fmag/core_assets/js/site.js";

?>

<!DOCTYPE html>
<html class="no-js no-svg">
<head>
	<meta charset="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	


	<link rel="stylesheet" href="<?php echo($include_css); ?>" type="text/css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo($include_js); ?>" type="text/javascript"></script>
	
	
	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>
	
	<div class="band-head">
		<div class="container">
			<div class="masthead">

				<div class="masthead__logo">
					<a href="/fmag/">
						<picture>
						  <source type="image/svg+xml" srcset="https://www.findmeagift.co.uk/site_media/images/general/fmag-logo.svg">
						  <img src="https://www.findmeagift.co.uk/site_media/images/general/fmag-logo-checkout.png" alt="Find Me A Gift Logo" title="Find Me A Gift" width="392" height="59">
						</picture>
					</a>
				</div>

				<div class="mobile-masthead">
					<span class="mobile-masthead__icon-label" id="mobileMenuIcon">
						<span class="fa fa-bars"></span>&nbsp;Menu
					</span>
					<span id="siteSearchIcon" class="fa fa-search"></span>
					<a href="/information.asp">
						<span class="fa fa-user link_0"></span>
					</a>
					<a href="/basket.asp">
						<span class="fa fa-shopping-cart link_0"></span>
					</a>
				</div>

				<div class="masthead__site_search" id="siteSearch">
					<form method="GET" action="/search_results.asp" onsubmit="return validateSearch();" id="search-form" class="layout-form">
						<input type="text" name="keywords" id="keywords" class="site-search-field ui-autocomplete-input" placeholder="Find me..." value="" autocomplete="off">
						<div class="masthead__site-search-button cursor-hover" onclick="$j('#search-form').submit();">
							<span class="fa fa-search"></span>
						</div>
					</form>
				</div>


				<div class="masthead__sub-nav">
					<ul>
						<li><a href="/secure/login.asp">My Account</a></li>
						<li><a href="/contact-us.asp">Contact</a></li>
						<li><a href="/information.asp">Help</a></li>
						<li id="myWishlistIcon" style="display: none;"><a href="/wishlist.html"><span class="fa fa-heart orange" title="View your wishlist."></span></a></li>
					</ul>
				</div>

				
				<div class="masthead__basket clearfix" onclick="location='/basket.asp'">
					<span id="miniBasketItemTotal"><span class="fa fa-shopping-cart"></span>&nbsp;0.00</span>&nbsp;|&nbsp;<span id="miniBasketItemCount">&nbsp;Item</span>
				</div>

			</div>
		</div>
	</div>