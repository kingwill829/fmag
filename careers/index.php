<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_header = $site_root . "/fmag/includes/header.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";

	include_once($include_header); 
	include_once($include_nav);
?>

<div class="container">
	

		<h1>Join the Find Me a Gift Team</h1>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>

		<div class="tac">
			Current Vacancies
		</div>
		
		<div class="tac">
			Working Here
		</div>

		<div class="tac">
			Our Core Values
		</div>	
	
	

	
	
	
</div>

<?php
	include_once($include_footer);
?>