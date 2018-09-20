<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_css = "/fmag/core_assets/css/style.css";
	$include_js = "/fmag/core_assets/js/site.js";
	$include_functions = $site_root . "/fmag/core_assets/functions.php";
	$include_products = $site_root . "/fmag/core_assets/data/products.php";
	require $include_products;
	include_once $include_functions;

?>

<!DOCTYPE html>
<html class="no-js no-svg">
<head>
	<meta charset="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	
	<!-- Featherlight lightbox CSS -->
	<link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" type="text/css" rel="stylesheet" />
	
	<!-- Default CSS -->
	<link rel="stylesheet" href="<?php echo($include_css); ?>" type="text/css" />
	
	<?php
		if (isset($include_custom_css)) :?>
			<!-- Custom CSS -->
			<link rel="stylesheet" href="<?php echo($include_custom_css); ?>" type="text/css" />
	<?php endif; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo($include_js); ?>" type="text/javascript"></script>
	

	
	
	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>