<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_head = $site_root . "/fmag/includes/head.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";
	$include_custom_css = "/fmag/core_assets/css/checkout.css";
	
	include_once($include_head);
?>

<div class="container mart_d">
	<div class="col-md-12">
		<h1 class="tac">Secure Checkout</h1>
	</div>
	<div class="col-md-8">
		
		<div class="marb_d dno-l">
			<div class="marb_d module-container">
				<h2 class="tac">Shopped with us before?</h2>
				
				<div class="checkout-sign-in marb_d">
					<div class="checkout-field">
						<label for="email" class="dno">Email</label>
						<div>
							<input type="email" name="email" placeholder="Email"/>
						</div>
					</div>

					<div class="checkout-field">
						<label for="password" class="dno">Password</label>
						<div>
							<input type="password" name="password" placeholder="Password"/>
						</div>
					</div>
				</div>
				
				<button class="button__sub checkout-sign-in__button"><span class="fas fa-sign-in-alt"></span>  Sign in for faster checkout</button>
				
				<div class="mart_h">
					<div class="tac">Or checkout with</div>
					<div class="tac">
						<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" />
					</div>
				</div>				
				
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
				<h2>Delivery Name &amp; Address</h2>
				
				<div class="checkout-field">
					<label for="email" class="dno">Email</label>
					<div>
						<input type="email" name="email" placeholder="Email*"/>
					</div>
				</div>
				
				<div class="checkout-field">
					<label for="first-name" class="dno">Card Expiry</label>
			   	<input type="text" name="first-name" placeholder="First Name*" class="wd_h" />
			   	
				  <label for="last-name" class="dno">CVC</label>
				  <input type="text" name="last-name" placeholder="Last Name*" class="wd_h fr-d" />
				</div>

				<div class="checkout-field">
					<label for="customer-name" class="">Country*</label>
					<div>
						<select>
							<option>United Kingdom</option>
						</select>
					</div>
				</div>
	
				<div class="checkout-field wd_h-d">
					<label for="delivery-postcode" class="dno">Delivery Postcode</label>
					<div>
						<input type="text" name="delivery-postcode" placeholder="Postcode*" />
					</div>
				</div>
				
				<div class="checkout-field">
					<button class="marb_h wd_h-d button__sub"><span class="fas fa-location-arrow"></span> Find Address</button>
					<div>
						<a href="#">Enter Address Manually</a>
					</div>
				</div>	


				<div>
					<div class="split-component marb_d">
						<div class="split-component__left marr_h">
							<span class="far fa-square"></span>
						</div>		
						<div class="split-component__right">	
							<div class="checkout-payment__options-credit">
								Does this address have no parking?
							</div>
						</div>
					</div>		
							
					<div class="split-component marb_d">
						<div class="split-component__left marr_h">
							<span class="far fa-square"></span>
						</div>		
						<div class="split-component__right">	
							<div class="checkout-payment__options-credit">
								Is there restricted access to this property?
							</div>
						</div>
					</div>	
						
					<div class="split-component">
						<div class="split-component__left marr_h">
							<span class="fas fa-check-square cg"></span>
						</div>		
						<div class="split-component__right">	
							<div class="checkout-payment__options-credit">
								Bill to delivery Address
							</div>
						</div>
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
				<div class="delivery-option__note pada_d marb_h">
					<h2>Important Information</h2>
					<p class="marb_0">Personalised & photo products, posters, activities, chocolates, garden games, hampers & fancy-dress items have a production lead time and/or an earlier 'order before' time for delivery. <strong>Please check the specific product page to avoid disappointment</strong>.</p>
				</div>
				<div>
					<div class="delivery-option split-component padb_h marb_h">
						<div class="split-component__left marr_h">
							<span class="fas fa-check-square cg"></span>
							<!--<span class="fas fa-check-square"></span>-->
						</div>				
						<div class="split-component__right">
							<div class="delivery-option__title">
								UK Standard
							</div>	
							<div class="cg">				
								2-5 Working Days
							</div>
							<div>
								&pound;3.99
							</div>	
						</div>
					</div>
								
					<div class="delivery-option split-component padb_h marb_h">
						<div class="split-component__left marr_h">
							<span class="far fa-square"></span>
						</div>	
						<div class="split-component__right">
							<div class="delivery-option__title">
								Next Working Day
							</div>
							<div class="cg">				
								Fri Aug 30th
							</div>
							<div>
								&pound;6.99
							</div>
							<div class="delivery-option__note pada_h">
								Order before 4pm Mon to Fri
							</div>
						</div>
					</div>
				</div>
				<div class="tac">
					<button class="wd_h-d button__sub"><span class="fa fa-chevron-down"></span> More Delivery Options</button>
				</div>			
			</div>
		</div>		
		
		<div class="module-container checkout-module">
			<div class="checkout-module__left">
				<i class="fas fa-gift"></i>
			</div>	
			
			<div class="checkout-module__right">	
				<h2>Gift Wrap</h2>
				
				<div class="split-component">
					<div class="split-component__left marr_h">
						<span class="far fa-square"></span>
					</div>		
					<div class="split-component__right">	
						<div class="checkout-payment__options-credit">
							Add Gift Wrap
						</div>
					</div>
				</div>
			</div>				
		</div>
		
		<div class="module-container checkout-module">
			<div class="checkout-module__left">
				<i class="fas fa-credit-card"></i>
			</div>
			
			<div class="checkout-module__right">	
				<h2>Payment</h2>
				<div class="checkout-discount-code marb_d wd_h-d">
					<div class="co marb_h" id="showDiscountField">
						Discount Code <span class="fa fa-plus"></span>
					</div>
					<div class="checkout-discount-code__hidden dno">
						<input type="text" class="marb_h" />
						<div>
							<button class="button__sub">Apply</button>
						</div>
					</div>
				</div>
				
				<div class="checkout-payment__options">
					
					<div class="split-component marb_d">
						<div class="split-component__left marr_h">
							<span class="fas fa-check-square cg"></span>
						</div>		
						<div class="split-component__right">	
							<div class="checkout-payment__options-credit">
								Debit / Credit Card
							</div>
						</div>
					</div>

					<div class="split-component marb_d">
						<div class="split-component__left marr_h">
							<span class="far fa-square"></span>
						</div>		
						<div class="split-component__right">	
							<div class="checkout-payment__options-paypal">
								<img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" />
							</div>
						</div>
					</div>
										
					<div class="split-component marb_d">
						<div class="split-component__left marr_h">
							<span class="far fa-square"></span>
						</div>		
						<div class="split-component__right">	
							<div class="checkout-payment__options-gpay">
								<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Google_Pay_%28GPay%29_Logo.svg/320px-Google_Pay_%28GPay%29_Logo.svg.png" />
							</div>
						</div>
					</div>

					<div class="split-component marb_d">
						<div class="split-component__left marr_h">
							<span class="far fa-square"></span>
						</div>		
						<div class="split-component__right">	
							<div class="checkout-payment__options-applepay">
								<img src="https://cdn.worldvectorlogo.com/logos/apple-pay.svg" />
							</div>
						</div>
					</div>

				</div>
				
				<div class="checkout-field">
					<label for="card-number" class="dno">Card Number</label>
					<div>
						<input type="text" pattern="[0-9]*" name="card-number" placeholder="Card Number" />
					</div>
				</div>				
				
				<div class="checkout-field">
					<label for="card-name" class="dno">Your Name</label>
					<div>
						<input type="text" name="card-name" placeholder="Name on Card" />
					</div>
				</div>				

				<div class="checkout-field">
					<label for="card-expiry" class="dno">Card Expiry</label>
			   	<input type="text" name="card-expiry" placeholder="Card Expiry" class="wd_h" />
			   	
				  <label for="card-cvc" class="dno">CVC</label>
				  <input type="text" name="card-cvc" placeholder="CVC" class="wd_h fr-d" />
				</div>

				<div class="split-component marb_d">
					<div class="split-component__left marr_h">
						<span class="far fa-square"></span>
					</div>		
					<div class="split-component__right">	
						Save my details for future purchases?
					</div>
				</div>
				
				<div class="wd_h-d fr-d">
					<button class="button__cta">Complete Order</button>
				</div>
				
				<div style="clear:both"></div>
				
				<div class="checkout-optin">		
					<h2>From time to time we'd like to send you emails containing</h2>		
					<ul class="marb_h">			
						<li>Amazing offers and discounts</li>			
						<li>Early access to new products</li>			
						<li>Exclusive member benefits</li>		
					</ul>		
					<label>
						<input type="radio" name="saveNewsletterSignup" value="1" checked="checked">Yes please send me these
					</label>
					<br>
					<label>
						<input type="radio" name="saveNewsletterSignup" value="0">No thank you
					</label>	
				</div>
												
			</div>
		</div>
				
	</div>

	<div class="col-md-4">
		<div class="module-container dno-m">
			
				<h2>Shopped with us before?</h2>
				<div class="checkout-sign-in marb_d">
					<div class="checkout-field">
						<label for="email" class="dno">Email</label>
						<div>
							<input type="email" name="email" placeholder="Email"/>
						</div>
					</div>
	
					<div class="checkout-field">
						<label for="password" class="dno">Password</label>
						<div>
							<input type="password" name="password" placeholder="Password"/>
						</div>
					</div>
				</div>
				<button class="button__sub checkout-sign-in__button"><span class="fas fa-sign-in-alt"></span>  Sign in for faster checkout</button>
				
				<div class="mart_h">
					<div class="tac">Or checkout with</div>
					<div class="tac">
						<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" />
					</div>
				</div>

		</div>	
		
		<div class="module-container" id="fixedCheckoutSummary">
			<h2>Order Summary</h2>
			
			<div id="basket_full_summary_eco">
				<div class="basket-sidebar__row marb_h">
					<div class="fr">&pound;142.99</div>
					Laser Cosmos Projector x1
				</div>
				<div class="basket-sidebar__row marb_h">
					<div class="fr">&pound;142.99</div>
					Name a Star x1
				</div>
				<div class="basket-sidebar__row marb_d">
					<div class="fr">&pound;142.99</div>
					Gift of Nothing x1
				</div>
								
				<div class="basket-sidebar__row marb_h">
					<div class="fr">&pound;142.99</div>
					Sub-Total
				</div>
				<div class="basket-sidebar__row marb_d">
					<div class="fr">&pound;3.99</div>
					Delivery from<span class="no-wrap">: Find Me A Gift<span class="basket-more click vam marl_h" onclick="detailPopup(1);" title="click for more information"> </span></span>
				</div>
	
				<div class="basket-sidebar__row bld">
					<div class="fr">&pound;146.98</div>
					Total
				</div>
			</div>
		</div>
	</div>

</div>

<div class="footer tac"><span class="copy">&copy;</span> <span class="co">Find Me A Gift</span> 2000 to 2018. All Rights Reserved.</div>
</body>
<script>
$( document ).ready(function() {
	$('body').addClass('checkout'); 
	$('.checkout-sign-in__button').click(function() {
		$(this).siblings('.checkout-sign-in').slideDown();
		$(this).html('<span class="fas fa-sign-in-alt"></span> Sign In');
		$(this).after('<div class="co mart_h">Forgot Password</div>');
		$(this).removeClass('button__sub');
		$(this).addClass('button__cta');
		$(this).blur();
	})
	
	$('#showDiscountField').click(function() {
		$('.checkout-discount-code__hidden').slideToggle();
	});
});
</script>

