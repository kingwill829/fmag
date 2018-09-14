<?php
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";
	$include_css = "/fmag/core_assets/css/style.css";
	$include_js = "/fmag/core_assets/js/site.js";
	

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

	<link rel="stylesheet" href="<?php echo($include_css); ?>" type="text/css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo($include_js); ?>" type="text/javascript"></script>
	

	
	
	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>
	
<header class="tac">
	<div class="header_container">
		<div class="header_contact dilb co fl" onclick="contactUs();">
			<span class="fa fa-comments"></span>
			<span class="dbl">Contact Us</span>
		</div>
		<a href="https://www.findmeagift.co.uk/" title="Find Me a Gift">
			<picture>
				<img src="https://www.findmeagift.co.uk/site_media/images/general/fmag-logo-checkout.png" alt="Find Me A Gift Logo" title="Find Me A Gift" width="392" height="59" class="logo">
			</picture>
		</a>
		<div class="dilb co fr">
			&nbsp;
		</div>
	</div>
</header>