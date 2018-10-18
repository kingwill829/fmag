<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_head = $site_root . "/fmag/includes/head.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_masthead = $site_root . "/fmag/includes/masthead.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";
	$include_custom_css = "/fmag/core_assets/css/new-homepage.css";

	include_once($include_head);
	include_once($include_masthead);
	include_once($include_nav); 
?>




<div class="landing-page-band marb_d">
	<div class="landing-panel">		
		<div class="landing-panel__button">
			Visit Our Christmas Shop
		</div>	
	<picture>
		<source media="(max-width:480px)" srcset="images/home-banner-480.jpg">
		<source media="(max-width:767px)" srcset="images/home-banner-767.jpg">
		<source media="(max-width:991px)" srcset="images/home-banner-991.jpg">
		<img src="images/home-banner.jpg" width="2700" height="852" />
	</picture>
	</div>



</div>

<div class="container">

	<div class="col-md-6">
		<div class="marb_d2 ">
			<div class="landing-panel">
				<div class="landing-panel__button">
					Christmas Gifts for Men
				</div>	
				<picture>
					<img src="images/xmas-for-him.jpg" alt="Christmas Gifts for Men" />
				</picture>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="marb_d2 ">
			<div class="landing-panel">
				<div class="landing-panel__button">
					Christmas Gifts for Her
				</div>	
				<picture>
					<img src="images/xmas-for-her.jpg" alt="Christmas Gifts for Her" />
				</picture>
			</div>
		</div>
	</div>

	<div class="mart_d marb_d2  landing-page__links tac">

		<div class="landing-page__link">
			<a class="circle" href="#">
				Secret Santa
			</a>
		</div>
		
		<div class="landing-page__link">	
			<a class="circle" href="#">
				Stocking Fillers
			</a>
		</div>

		<div class="landing-page__link">
			<a class="circle" href="#">
				Amazing Offers
			</a>
		</div>
		
		<div class="landing-page__link">	
			<a class="circle" href="#">
				Personalised Gifts
			</a>
		</div>
	</div>	

	<div class="col-md-6">
		<div class="marb_d ">
			<div class="landing-panel">
				<div class="landing-panel__button">
					Personalised Gifts
				</div>	
				<picture>
					<img src="images/personalised-gifts.png" alt="Personalised Gifts" />
				</picture>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="marb_d2 ">
			<div class="landing-panel">
				<div class="landing-panel__button">
					Created by Find Me a Gift
				</div>	
				<picture>
					<img src="images/designed-by-fmag.png" alt="Created by Find Me a Gift" />
				</picture>
			</div>
		</div>
	</div>

	<div class="col-md-12">
		<div class="chosen-by-us marb_d2 ">
			<h2 class="tac">Gifts Chosen by Us</h2>
			<div class="slider swipe-elements">
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

		<h2 class="tac">A Message From Our Founder Adam</h2>
		<div class="home-adam marb_d2">
			<div class="home-adam__image">
				<img src="images/adam-gore.png" />
			</div>

			<div class="home-adam__quote">
				<blockquote>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione. <a href="#">Learn More About Find Me a Gift</a></blockquote>
			</div>
		</div>	

		<div class="home-content">
			<div class="row">
				<div class="col-md-4">
					<h3 class="tac marb_h">Customer Service</h3>
					<p class="tac marb_h">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
					<a class="dbl tac" href="#">Learn More</a>
				</div>

				<div class="col-md-4">
					<h3 class="tac marb_h">Thousands of Gift Ideas</h3>
					<p class="tac marb_h">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat</p>
					<a class="dbl tac" href="#">Learn More</a>
				</div>

				<div class="col-md-4">
					<h3 class="tac marb_h">Millions of Happy Customers</h3>
					<p class="tac marb_h">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
					<a class="dbl tac" href="#">Learn More</a>
				</div>
			</div>
		</div>
	</div>


</div>	



<?php
	include_once($include_footer);
?>