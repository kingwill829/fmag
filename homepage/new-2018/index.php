<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_header = $site_root . "/fmag/includes/header.php";

	include_once($include_header); 
	include_once($include_nav);
?>

	<div class="container">
		<div class="col-md-12">
			
			<div class="landing-top marb_d">
				<div class="landing-top__hero marb_d">
					<img src="images/main-hero-1200.jpg" />
					<div class="landing-panel__button">
						Shop Now
					</div>		
				</div>
				
				<div class="landing-top__secondary marb_d">
					<div class="landing-top__secondary-top">
						<img src="images/secondary-desktop.jpg" />
						<div class="landing-panel__button">
							Shop Now
						</div>	
					</div>
					<div class="landing-top__secondary-bottom">
						<h2 class="tac">Get Exclusive Deals &amp; Offers</h2>
						<input type="email" class="marb_d" />
						<button>Join</button>
					</div>
				</div>
			</div>
			
			<h2 class="tac">Trending Gifts</h2>
			<div class="slider">
				<div class="slider__item">
					<img src="https://resources2.findmeagift.com/site_media/images/products/286/pal625_cactus_lamp_lifestyle_1800.jpg" />
				</div>
	
				<div class="slider__item">
					<img src="https://resources2.findmeagift.com/site_media/images/products/286/hal001-coat-of-arms-poster-lifestyle-FC-1800x1800.jpg" />
				</div>
		
				<div class="slider__item">
					<img src="https://resources4.findmeagift.com/site_media/images/products/286/pal623_suns_out_buns_out_cup_and_straw_lifestyle_1800_1.jpg" />
				</div>
		
				<div class="slider__item">
					<img src="https://resources4.findmeagift.com/site_media/images/products/286/sma038_retro_stirring_popcorn_maker_nut_toaster_1.jpg" />
				</div>
				
				<div class="slider__item">
					<img src="https://resources2.findmeagift.com/site_media/images/products/286/wig017-BB-8-charger-phone-app-lifestyle1800x1800.jpg" />
				</div>
			</div>
			
		</div>
	</div>





<?php
	include_once($include_footer);
?>