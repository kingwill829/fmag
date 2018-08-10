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
		<h1 class="tac">Secure Checkout</h1>
	</div>
	<div class="col-md-8">
		
		<div class="marb_d dno-l">
			<div class="marb_d module-container">
				<h2 class="tac">Shopped with us before?</h2>
				<button class="button__sub">Sign in for faster checkout</button>
			</div>
			<div>
				<h2 class="tac">Checkout as a guest</h2>
			</div>			
		</div>		
		

		
		<div class="module-container checkout-module">
			<div class="checkout-module__left">
				<i class="fas fa-map-marker-alt"></i>
			</div>
			<div class="checkout-module__right">
				<h2>&nbsp;Name &amp; Delivery Address</h2>
				
				<div class="checkout-field">
					<label for="email" class="dno">Email</label>
					<div>
						<input type="email" name="email" placeholder="email"/>
					</div>
				</div>
				
				<div class="checkout-field">
					<label for="customer-name" class="dno">Your Name</label>
					<div>
						<input type="text" name="customer-name" placeholder="Your name" />
					</div>
				</div>
	
				<div class="checkout-field">
					<label for="delivery-postcode" class="dno">Delivery Postcode</label>
					<div>
						<input type="text" name="delivery-postcode" placeholder="Postcode" />
					</div>
				</div>
				
				<div class="checkout-field">
					<button class="marb_h wd_h-d button__sub">Find Address</button>
					
					<div>
						<a href="#">Enter Address Manually</a>
					</div>
				</div>
			</div>			
		</div>
		
		<div class="module-container checkout-module">
			<div class="checkout-module__left">
				<i class="fas fa-truck"></i>
			</div>
			
			<div class="checkout-module__right">
				<h2>Delivery Method</h2>
				
				<div>
					<table>
							<tr>
								<th></th>
								<th>Method</th>
								<th>Time</th>
								<th>Price</th>
							</tr>		
							
							<tr>
								<td><input type="radio"></td>
								<td>Standard</td>
								<td>2-5 working days</td>
								<td>&pound;3.99</td>
							</tr>		
							
							<tr>
								<td><input type="radio"></td>
								<td>Next Day</td>
								<td>Next working day</td>
								<td>&pound;6.99</td>
							</tr>		
					</table>
					
					
				</div>
				
			</div>
		</div>		

		<div class="module-container checkout-module">
			<div class="checkout-module__left">
				<i class="fas fa-credit-card"></i>
			</div>
			
			<div class="checkout-module__right">	
				<h2>Payment</h2>
				<div class="marb_d">
					<label>
						<input type="checkbox" checked class="" />&nbsp;Bill to delivery Address
					</label>
				</div>
				
				<div lang="en" class="marb_d">
					<button class="googlepay long" title="Buy with Google Pay"></button>
				</div>
				
				<div class="marb_d">
					<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-large.png" alt="Buy now with PayPal" />
				</div>
				
				<div class="wd_h-d">
					<button id="revealPayment" class="button__sub">Pay with debit / credit card</button>
				</div>
				
				<div class="credit-card--hidden mart_d wd_h-d">
					<div class="payment__card">
						<div class="card-wrapper marb_d"></div>
						<form class="form">
						    <input type="text" name="number" placeholder="Card Number">
						    <input type="text" name="name" placeholder="Your Name"/>
						    <input type="text" name="expiry" placeholder="Expiry Date" class="wd_h2" />
						    <input type="text" name="cvc" placeholder="cvc" class="wd_h2"  />
						</form>
					</div>
					
					<button class="button__cta">Complete Payment</button>
				</div>	
			</div>
		</div>
				
	</div>

	<div class="col-md-4">
		<div class="marb_d dno-m">
			<h2>Shopped with us before?</h2>
			<button class="button__sub">Sign in for faster checkout</button>
		</div>		
		<div class="module-container">
			<h2>Order Summary</h2>
		</div>
	</div>

</div>


<script src="/fmag/checkout/card-master/dist/card.js"></script>
<script>
var card = new Card({
    form: '.form',
    container: '.card-wrapper',

    placeholders: {
        number: '**** **** **** ****',
        name: 'Adam Gore',
        expiry: '**/****',
        cvc: '***'
    }
});
</script>
<?php
	include_once($include_footer);
?>