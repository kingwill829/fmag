<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_head = $site_root . "/fmag/includes/head.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_masthead = $site_root . "/fmag/includes/masthead.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";

	include_once($include_head);
	include_once($include_masthead);
	include_once($include_nav); 
?>


<div class="container mart_d">
	<div class="col-md-6">
		<div class="main-product-image marb_d">
			<div class="product-image__thumbs">
				<div class="product-image__thumbs--0 product-image__thumbs--active">
					<img src="https://resources4.findmeagift.com/site_media/images/products/p_thumb/shv001_forget_me_not_heart_pendant_lifestyle_1800_1.jpg" alt="main image thumb 1" />
				</div>

				<div class="product-image__thumbs--1">
					<img src="https://resources2.findmeagift.com/site_media/images/products/p_thumb/shv001_forget_me_not_heart_pendant_lifestyle_1800_2.jpg" alt="main image thumb 2" />
				</div>

				<div class="product-image__thumbs--2">
					<img src="https://resources4.findmeagift.com/site_media/images/products/p_thumb/shv001_forget_me_not_heart_pendant_lifestyle3_1800.jpg" alt="main image thumb 3" />
				</div>
			</div>

			<div class="product-image__main">
				<div class="siema">
					<div data-product-image="0">
						<img src="https://resources3.findmeagift.com/site_media/images/products/p_main/shv001_forget_me_not_heart_pendant_lifestyle_1800_1.jpg" alt="main image 1" />
					</div>
					<div data-product-image="1">
						<img src="https://resources2.findmeagift.com/site_media/images/products/p_main/shv001_forget_me_not_heart_pendant_lifestyle_1800_2.jpg" alt="main image 2" />
					</div>
					<div data-product-image="2">
						<img src="https://resources4.findmeagift.com/site_media/images/products/p_main/shv001_forget_me_not_heart_pendant_lifestyle3_1800.jpg" alt="main image 3"/>
					</div>
				</div>
				<div class="main-product-image__icon prev">
					<span class="fa-stack">
					  <i class="fa fa-circle fa-stack-2x icon-background"></i>
					  <i class="fa fa-chevron-left fa-stack-1x"></i>
					</span>
				</div>

				<div class="main-product-image__icon next">
					<span class="fa-stack">
					  <i class="fa fa-circle fa-stack-2x icon-background"></i>
					  <i class="fa fa-chevron-right fa-stack-1x"></i>
					</span>
				</div>
			</div>


		</div>

	</div>
	<div class="col-md-6">
		<div class="product-details">
			<div id="product_title_panel">
				<div class="product-details__primary-info content-container--border">
					<h1 itemprop="name" id="prod-title" class="product-details__sale-flag_h1">Forget Me Not Heart Pendant</h1>
					<div class="product-details__price marb_d">		
						<div class="product-details__price--was marb_h">
							Was <span>&pound;34.99</span>		
						</div>		
						<div class="product-details__price--primary marb_h" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">			
							<link itemprop="priceCurrency" content="GBP">			
							<link itemprop="availability" href="http://schema.org/InStock">Now
							<span id="actionPanelPricesThePrice" itemprop="price" content="24.99">&pound;24.99</span>		
						</div>		
						<div class="product-details__price--secondary marb_h">28% Off - You Save &pound;10.00!</div>	
					</div>

					<div class="product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">	<meta itemprop="ratingValue" content="4.727272">
						<span class="no-wrap marr_h">
							<span class="fa fa-lg fa-star co"></span> 
							<span class="fa fa-lg fa-star co"></span> 
							<span class="fa fa-lg fa-star co"></span> 
							<span class="fa fa-lg fa-star co"></span> 
							<span class="fa fa-lg fa-star-half-o co"></span>
						</span> 
						<a href="#reviews" class="highlight-text no-wrap">
							<span itemprop="reviewCount">11</span> Customer Reviews
						</a>	
					</div>
				</div>

				<div id="product_buy_panel">
					<input type="hidden" name="popup_type" id="popup_type" value="1">
					<input type="hidden" name="update_id" id="update_id" value="22749">
					<div class="product-details__buy content-container--border">
						<div id="errorPanel" style="display:none;"></div>	
						<button class="button__cta marb_d" type="button" onclick="return addToBasket();" id="productBuy">Add to Basket&nbsp; <span class="fa fa-chevron-right"></span></button>	
						<div class="product-details__buy-qty mobile-hide marb16">		
							<label for="qtyBox">Quantity</label>		
							<input type="text" name="qty" id="qtyBox" class="marl_h" value="1">	
						</div>	
						<div class="product-details__buy-stock-status marb_d cg">
							<span class="cg"><i class="fa fa-check marr_h"></i>In Stock</span>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

	<div style="clear:both"></div>


</div>

<?php
	include_once($include_footer);
?>

<script src="siema.min.js"></script>
<script>
 const mySiema = new Siema({
 });


	$('.main-product-image__icon').click(function() {
		var result = $('.product-image__thumbs--active').index();
		var countImages = $('.product-image__thumbs div').length;

		

		if ($(this).hasClass('next')) {
			mySiema.next();
		} else {
			mySiema.prev();
		}
	})

	$('.product-image__thumbs div').click(function() {
		var activeThumb = $(this);
		var activeThumbIndex = activeThumb.index()

		mySiema.goTo(activeThumbIndex);
	})




</script>