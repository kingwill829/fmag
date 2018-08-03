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
				<button>Sign in for faster checkout</button>
			</div>
			<div>
				<h2 class="tac">Checkout as a guest</h2>
			</div>			
		</div>		
		

		
		<div class="module-container module-container--checkout">
			
			<h2><i class="fas fa-map-marker-alt"></i>&nbsp;Name &amp; Delivery Address</h2>
			
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
				<button class="marb_h wd_h-d">Find Address</button>
				
				<div>
					<a href="#">Enter Address Manually</a>
				</div>
			</div>
						
		</div>
		
		<div class="module-container module-container--checkout">
			<h2><i class="fas fa-truck"></i>&nbsp;Delivery Method</h2>
			
			<form>
				<label class="checkout-field checkout-field__delivery-method" for="standard">
					<div class="checkout-field__delivery-method-info">
						<div>
							<input type="radio" name="delivery-method" value="standard" id="standard">
						</div>
						<div class="">
							<div>Standard Delivery</div>
							<div>3 - 5 working days</div>
						</div>
					</div>
					
					<div class="checkout-field__delivery-method-price">
						&pound;3.99
					</div>				
				</label>
				
				<label class="checkout-field checkout-field__delivery-method" for="next-day">
					<div class="checkout-field__delivery-method-info">
						<div>
							<input type="radio" name="delivery-method" value="next-day" id="next-day">
						</div>
						<div class="">
							<div>Next Working Day</div>
							<div>Tomorrow</div>
						</div>
					</div>
					
					<div class="checkout-field__delivery-method-price">
						&pound;5.99
					</div>				
				</label>
			</form>
		</div>		

		<div class="module-container module-container--checkout">
			<h2><i class="fas fa-credit-card"></i>&nbsp;Payment</h2>
				
			<div class="marb_d">
				<label>
					<input type="checkbox" checked class="" />&nbsp;Bill to delivery Address
				</label>
			</div>
			
			<div lang="en" class="marb_d">
				<button class="googlepay long" title="Buy with Google Pay"></button>
			</div>
			
			<div class="marb_d wd_h-d">
				<button id="revealPayment">Pay with debit / credit card</button>
			</div>
			
			<div class="credit-card--hidden wd_h-d">
				<div class="payment__card">
					<div class="card-wrapper marb_d"></div>
					<form class="form">
					    <input type="text" name="number" placeholder="Card Number">
					    <input type="text" name="name" placeholder="Your Name"/>
					    <input type="text" name="expiry" placeholder="Expiry Date" class="wd_h2" />
					    <input type="text" name="cvc" placeholder="cvc" class="wd_h2"  />
					</form>
				</div>
				
				<button class="">Complete Payment</button>
			</div>
			
			
		</div>
				
	</div>

	<div class="col-md-4">
		<div class="marb_d dno-m">
			<h2>Shopped with us before?</h2>
			<button>Sign in for faster checkout</button>
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