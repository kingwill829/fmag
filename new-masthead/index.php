<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_head = $site_root . "/fmag/includes/head.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_masthead = $site_root . "/fmag/includes/masthead.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";
	$include_custom_css = "/fmag/core_assets/css/new-masthead.css";

	include_once($include_head);
?>

	<div class="band-head">
		
			<div class="masthead">



				<div class="mobile-masthead">
					<div class="tac" id="mobileMenuIcon">
						<span class="fa fa-bars"></span>
						<div>Menu</div>
					</div>

					<div class="mobile-masthead__logo">
						<a href="/fmag/">
							<picture>
							  <source type="image/svg+xml" srcset="https://www.findmeagift.co.uk/site_media/images/general/fmag-logo.svg">
							  <img src="https://www.findmeagift.co.uk/site_media/images/general/fmag-logo-checkout.png" alt="Find Me A Gift Logo" title="Find Me A Gift" width="392" height="59">
							</picture>
						</a>
					</div>
					<div>
						<a href="/information.asp">
							<span class="fa fa-user link_0"></span>
						</a>
						<a href="/basket.asp">
							<span class="fa fa-shopping-cart link_0"></span>
						</a>
					</div>
				</div>

				<div class="masthead__site_search" id="siteSearch">
					<form method="GET" action="/search_results.asp" onsubmit="return validateSearch();" id="search-form" class="layout-form">
						<input type="text" name="keywords" id="keywords" class="site-search-field ui-autocomplete-input" placeholder="Find me..." value="" autocomplete="off">
						<div class="masthead__site-search-button cursor-hover" onclick="$j('#search-form').submit();">
							<span class="fa fa-search"></span>
						</div>
					</form>
				</div>

			</div>
		
	</div>

<?php
	include_once($include_nav);
	include_once($include_footer);
?>