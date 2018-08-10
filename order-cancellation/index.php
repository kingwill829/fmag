<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_header = $site_root . "/fmag/includes/header.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";

	include_once($include_header); 
	include_once($include_nav);
?>

<div class="container">	
	<div class="col-md-12">
		<h1>My Orders</h1>

		<div class="order-history">
			
			<div class="order-history__order module-container">
				<div class="order-history__order-summary">
					<div class="marb_h">
						<div class="order-history__item order-history__item-date">
							Date: <span>16/11/2018</span>
						</div>
						<div class="order-history__item order-history__item-number">
							Order Number: <span>6068984</span>
						</div>
						<div class="order-history__item order-history__item-amount">
							Amount: <span>&pound;22.99</span>
						</div>
						<div class="order-history__item order-history__item-shipped">
							Shipping: <span>Bob Jenks</span>
						</div>
						<div class="order-history__item order-history__item-amount">
							Status: <span>Incomplete</span>
						</div>
					</div>
					<div class="co order-history__order-show padlr_d padb_h">
						<div>
							View Order Details	
						</div>
						<div class="order-history__order-show-icon">
							<span class="fa fa-plus">&nbsp;</span>
						</div>
					</div>
					<div class="order-history__order-details">
						
						<h3 class="padlr_d">Order Details</h3>
						<table class="marb_d">
							<tr>
								<th>Item</th>
								<th>Qty</th>
								<th>Price</th>
							</tr>
							
							<tr>
								<td>Dapper Shoe Shine Kit</td>
								<td>1</td>
								<td>&pound;10.99</td>
							</tr>
						
							<tr>
								<td>Inflatable Beer Cooler</td>
								<td>1</td>
								<td>&pound;7.99</td>
							</tr>
						</table>		
						
						<div class="padlr_d">
							<div class="marb_d">
								<h3>Payment Method</h3>
								<div>
									<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/200px-Visa_Inc._logo.svg.png"  width="50" style="padding-right:10px;" />
									**** **** **** 6372
								</div>
							</div>	
							<hr />
							<div class="marb_d">
								<h3>Delivery Address</h3>
								<div>Bob Jenks</div>
								<div>Northfield Road</div>
								<div>Southam</div>
								<div>CV47 0FG</div>
								<div>United Kingdom</div>
							</div>	
							<hr />
							<div class="marb_d">
								<h3>Billing Address</h3>
								<div>Bob Jenks</div>
								<div>Northfield Road</div>
								<div>Southam</div>
								<div>CV47 0FG</div>
								<div>United Kingdom</div>
							</div>
						</div>										
					</div>
				</div>
				<div class="order-history__order-actions pada_d">
					<button class="button marb_d" data-featherlight="lightbox.html">Amend Order</button>
					<button class="button marb_h">Cancel Order</button>
					<div>
						You can amend your order for the next 22 minutes
					</div>
				</div>
			</div>

			<div class="order-history__order module-container">
				<div class="order-history__order-summary">
					<div class="marb_h">
						<div class="order-history__item order-history__item-date">
							Date: <span>16/11/2018</span>
						</div>
						<div class="order-history__item order-history__item-number">
							Order Number: <span>6068984</span>
						</div>
						<div class="order-history__item order-history__item-amount">
							Amount: <span>&pound;22.99</span>
						</div>
						<div class="order-history__item order-history__item-shipped">
							Shipping: <span>Bob Jenks</span>
						</div>
						<div class="order-history__item order-history__item-amount">
							Status: <span>Incomplete</span>
						</div>
					</div>
					<div class="co order-history__order-show padlr_d padb_h">
						<div>
							View Order Details	
						</div>
						<div class="order-history__order-show-icon">
							<span class="fa fa-plus">&nbsp;</span>
						</div>
					</div>
					<div class="order-history__order-details">
						
						<h3 class="padlr_d">Order Details</h3>
						<table class="marb_d">
							<tr>
								<th>Item</th>
								<th>Qty</th>
								<th>Price</th>
							</tr>
							
							<tr>
								<td>Dapper Shoe Shine Kit</td>
								<td>1</td>
								<td>&pound;10.99</td>
							</tr>
						
							<tr>
								<td>Inflatable Beer Cooler</td>
								<td>1</td>
								<td>&pound;7.99</td>
							</tr>
						</table>		
						
						<div class="padlr_d">
							<div class="marb_d">
								<h3>Payment Method</h3>
								<div><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" /></div>
							</div>	
							<hr />
							<div class="marb_d">
								<h3>Delivery Address</h3>
								<div>Bob Jenks</div>
								<div>Northfield Road</div>
								<div>Southam</div>
								<div>CV47 0FG</div>
								<div>United Kingdom</div>
							</div>	
							<hr />
							<div class="marb_d">
								<h3>Billing Address</h3>
								<div>Bob Jenks</div>
								<div>Northfield Road</div>
								<div>Southam</div>
								<div>CV47 0FG</div>
								<div>United Kingdom</div>
							</div>
						</div>										
					</div>
				</div>
			</div>


		</div>		
		
	</div>
</div>




<?php
	include_once($include_footer);
?>