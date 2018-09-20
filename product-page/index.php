<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_head = $site_root . "/fmag/includes/head.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_masthead = $site_root . "/fmag/includes/masthead.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";
	$include_custom_css = "/fmag/core_assets/css/jobs.css";

	include_once($include_head);
	include_once($include_masthead);
	include_once($include_nav); 
?>


<div class="container mart_d">
	<div class="col-sm-6 col-md-6">
		<div class="product-image">
			<div class="product-image__main">
				<img src="https://resources1.findmeagift.com/site_media/images/products/p_main/ccp120-star-wb-amz-1001x1001.jpg" />
			</div>
			<div class="product-image__thumbnails">
				<div class="product-image__thumb">
					<img src="https://resources1.findmeagift.com/site_media/images/products/p_main/ccp120-star-wb-amz-1001x1001.jpg" />
				</div>
				<div class="product-image__thumb">
					<img src="https://resources1.findmeagift.com/site_media/images/products/p_main/ccp120-star-wb-amz-1001x1001.jpg" />
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-6">
		<div class="product-detail">
			<div class="product-detail__header">
				<div class="product-detail__heading">
					<h1>Name a Star Gift Set</h1>

					<div class="product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">		<meta itemprop="ratingValue" content="4.780104">	
						<span class="no-wrap">
							<span class="fa fa-star"></span> 
							<span class="fa fa-star"></span> 
							<span class="fa fa-star"></span> 
							<span class="fa fa-star"></span> 
							<span class="fa fa-star"></span>
						</span> 
						<span href="#reviews" class="no-wrap co"><span itemprop="reviewCount">(573)</span></span>
					</div>

				</div>

				<div class="product-detail__price">
					<div class="product-detail__price--main product-detail__price--main-sale marb_h"><span>&pound;</span>7.99</div>
					<div class="product-detail__price--was marb_h">was &pound;<span>12.99</span></div>
				</div>
			</div>
			<div class="product-detail__price--save marb_h tac">SAVE 30%</div>
			<div style="clear:both"></div>
		</div>

		<div class="product-detail">
			<div class="product-detail__buy">
				<div class="product-detail__input-text">
					<label>Please enter the recipient's name</label>
					<input type="text" placeholder="Recipient Name" class="marb_h" />
				</div>
				<button class="product-detail__buy-button button__cta marb_d">Add to basket <span class="fa fa-chevron-right"></span></button>
			</div>
			<div class="product-detail__quantity marb_h">
				<div class="product-detail__quantity-minus">
					<span class="fa fa-minus"></span>
				</div>
				<div class="product-detail__quantity-value">
					1
				</div>
				<div class="product-detail__quantity-plus">
					<span class="fa fa-plus"></span>
				</div>
			</div>

			<div class="product-detail__info">
				<div class="product-detail__info-item product-detail__stock marb_h">
					<span class="fa fa-check cg">&nbsp;</span>In Stock
				</div>

				<div class="product-detail__info-item product-detail__stock marb_h">
					<span class="fa fa-times co">&nbsp;</span>Temporarily Unavailable
				</div>

				<div class="product-detail__info-item product-detail__oos marb_h">
					<span class="fa fa-times cr">&nbsp;</span>Out of Stock
				</div>

				<div class="product-detail__info-item product-detail__low-stock marb_h cr">
					<span class="fa fa-shopping-cart">&nbsp;</span>Low on Stock - Checkout Now!
				</div>

				<div class="product-detail__info-item product-detail__wishlist marb_h">
					<span class="fa fa-heart-o">&nbsp;</span>Add to wishlist
				</div>

				<div class="product-detail__info-item product-detail__dispatch marb_d">
					<span class="fas fa-shipping-fast">&nbsp;</span>Dispatched with 48 hours
				</div>

				<div class="product-detail__social marb_d">
					<span class="fa fa-whatsapp"></span>
					<span class="fa fa-facebook"></span>
					<span class="fa fa-twitter"></span>
					<span class="fa fa-instagram"></span>
					<span class="fa fa-pinterest"></span>
				</div>
			</div>
		</div>
	



		<div class="product-recommendations">
			<h2 class="tac">You might also like</h2>
			<?php 
				build_product_thumbnails($products);
			?>
		</div>
	</div>

	<div style="clear:both"></div>

	<div class="col-md-12">
		<div class="product-info">
			<div class="product-info__desktop-nav">
				<div class="product-info__desktop-nav-item product-info__desktop-nav-item--active" rel="product-description">
					Product Description
				</div>
				<div class="product-info__desktop-nav-item" rel="product-info">
					Key Info
				</div>
				<div class="product-info__desktop-nav-item" rel="product-video">
					Product Video
				</div>	
				<div class="product-info__desktop-nav-item" rel="delivery">
					Shipping &amp; Returns
				</div>				
			</div>

			<div class="product-info__item product-info__item--active" id="product-description">
				<div class="product-info__item-header" rel="product-description">
					<h2>Product Description</h2>
					<div class="product-info__item-icon open">
					  <span></span>
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
				</div>
				<div class="product-info__item-detail">
					<h2 class="tac">The World's First and Best-selling 3D Printing Pen</h2>
					<p>Fancy a new mask for Halloween this year, or a birdhouse for the garden? Pluck one out of thin air with the incredible 3Doodler Create. A 3D printer you can hold like a pen! Anything you can imagine will become a reality as soon as you draw it.</p>
					<p>A crowd-funded Kickstarter project, the 3Doodler has grown and progressed as one of the most innovative and widely-owned creative devices of our time.</p>
					<p>Perfect for hours of entertaining, the 3Doodler will engage you for hours during family-time and will really test your imagination.</p>
					
					<h2 class="tac">How Does It Work?</h2>
					<p>Heated plastic filament comes out of the pen instead of ink, and cools almost instantly. So you can literally draw in the air, or on paper or a surface, whatever you prefer.</p>
					<p>You can follow stencils while you hone your 3D drawing skills, and then let loose and create whatever your brain cooks up. Make something magical and enjoy the 3Doodler with your whole family.</p>
					
					<h2 class="tac">Key Features</h2>
					<ul class="default-list">
					    <li>Ambidextrous pen</li>
					    <li>Sleek anodized aluminium casing</li>
					    <li>Dual speed control so you can doodle at your own pace</li>
					    <li>Online resources provide stencils and creative ideas</li>
					</ul>					
					
				</div>
			</div>

			<div class="product-info__item" id="product-info">
				<div class="product-info__item-header" rel="product-info">
					<h2>Key Info</h2>
					<div class="product-info__item-icon">
					  <span></span>
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
				</div>
				<div class="product-info__item-detail">

					<div class="row">
						<div class="col-md-4">
							<h2>Product Specification</h2>
							<ul class="default-list marb_d">
							    <li>Height: 19cm</li>
							    <li>Width: 13cm</li>
							    <li>Depth: 8cm</li>
							    <li>Weight: 607g</li>
							    <li>Product Code: ben001</li>
							</ul>					
						</div>
						
						<div class="col-md-4">
							<h2 class="">Important Information</h2>
							<ul class="default-list marb_d">
							    <li>Comes with a UK plug</li>
							    <li>Do not touch the tip of the pen as this can become extremely hot</li>
							    <li>This is not a toy. Recommended for adult use</li>
							</ul>							
						</div>
						
						<div class="col-md-4">
							<h2 class="">What's In the Box?</h2>
							<ul class="default-list marb_d">
							    <li>1 x 3Doodler</li>
							    <li>1 x ABS Plastic Packs</li>
							    <li>1 x UK Plug</li>
							</ul>							
						</div>
					</div>
					
				</div>
			</div>

			<div class="product-info__item" id="product-video">
				<div class="product-info__item-header" rel="product-video">
					<h2 class="tac">Product Video</h2>
					<div class="product-info__item-icon">
					  <span></span>
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
				</div>
				<div class="product-info__item-detail">
					<div class="video-container">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/pSmAdC86kOw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
			
			<div class="product-info__item" id="delivery">
				<div class="product-info__item-header" rel="delivery">
					<h2 class="tac">Shipping &amp; Returns</h2>
					<div class="product-info__item-icon">
					  <span></span>
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
				</div>
				<div class="product-info__item-detail">
					<ul class="default-list marb_d">
					    <li>&pound;3.99 Standard Delivery - 3 to 5 working days</li>
					    <li>&pound;4.99 Express Delivery - 2 to 4 working days</li>
					    <li>&pound;5.99 Next Working Day Delivery - Order before 4:30pm</li>
					</ul>
				</div>
			</div>
		</div>


	</div>

</div>

<?php
	include_once($include_footer);
?>