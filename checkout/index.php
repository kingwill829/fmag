<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_header = $site_root . "/fmag/includes/header.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";

	include_once($include_header); 
	include_once($include_nav);
?>

<div class="container mart_d">
	<div class="col-md-12">
		<h1 class="tac">Welcome to Our Secure Checkout</h1>
		
		<div class="module-container marb_d">
			<h2>Name &amp; Delivery Addresss</h2>
			
			<div class="checkout-field">
				<label for="email">Email</label>
				<div>
					<input type="email" name="email" />
				</div>
			</div>
			
		</div>
		
		<div class="module-container marb_d">
			<h2>Delivery</h2>
		</div>		

		<div class="module-container marb_d">
			<h2>Payment</h2>
		</div>
				
	</div>


</div>



<?php
	include_once($include_footer);
?>