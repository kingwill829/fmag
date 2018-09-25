<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_head = $site_root . "/fmag/includes/head.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_masthead = $site_root . "/fmag/includes/masthead.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";
	$include_custom_css = "/fmag/core_assets/css/add-to-basket.css";

	include_once($include_head);
	include_once($include_masthead);
	include_once($include_nav); 
?>

<div class="container">
	<div class="col-md-3">
		<button class="button marb_d" data-featherlight="lightbox-1.html">Lightbox 1</button>
	</div>




</div>

<?php
	include_once($include_footer);
?>