<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_header = $site_root . "/fmag/includes/header.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";

	include_once($include_header); 
	include_once($include_nav);
?>

<div class="container">
	
</div>
		<h1>Join the Find Me a Gift Team</h1>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
		
		<div class="careers-grid">
			<div class="careers-panel tac brand--orange">
				<div class="careers-panel__inner">
					Current vacancies
				</div>
			</div>
	
			<div class="careers-panel tac brand--grey">
				<div class="careers-panel__inner">
					Working here
				</div>
			</div>
	
			<div class="careers-panel tac brand--blue">
				<div class="careers-panel__inner">
					Meet the team
				</div>
			</div>
					
			<div class="careers-panel tac brand--green">
				<div class="careers-panel__inner">
					Our core values
				</div>
			</div>
		</div>

	
	
 
	
	
	
</div>

<?php
	include_once($include_footer);
?>