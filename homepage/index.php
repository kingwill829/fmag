<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_header = $site_root . "/fmag/includes/header.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";
	// $include_custom_css = $site_root . "/fmag/core_assets/css/checkout.css";

	include_once($include_header); 
	include_once($include_nav);
?>

<div class="container mart_d">
	<div class="panel marb_d">
		Main promotion
	</div>

	<div class="panel marb_d">
		Seasonal promotion
	</div>

</div>

<?php
	include_once($include_footer);
?>