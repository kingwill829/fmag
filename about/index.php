<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_head = $site_root . "/fmag/includes/head.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_masthead = $site_root . "/fmag/includes/masthead.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";
	$include_custom_css = "/fmag/core_assets/css/new-about.css";

	include_once($include_head);
	include_once($include_masthead);
	include_once($include_nav); 
?>

	<div class="container">
		
			<div class="about__intro">
				<h1 class="tac">About Find Me a Gift</h1>
				<h2 class="tac">Delivering Happiness Each &amp; Every Day</h2>
				<p class=" marb_d2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas cursus venenatis magna, vel vulputate purus vulputate ut. Donec commodo consectetur pretium. Curabitur sit amet facilisis dolor, sit amet maximus justo.</p>
			</div>
	</div>

			<div class="about__team-photo tac  marb_d2">
				<img src="images/team-photo.jpg" alt="Find Me a Gift Team" />
			</div>

	<div class="container">
			<div class="about__vitals  marb_d2">
				<h2 class="tac">Our Vitals</h2>
				<ul class="tac">
					<li>Employes: Over 50</li>
					<li>Countries: Worldwide</li>
					<li>Parcels Shipped in 2017: Over 1,000,000</li>
					<li>Gifts: Over 4,500</li>
				</ul>
			</div>

			<div class="about__founder  marb_d2">
				<h2 class="tac">Our Founder</h2>
				<div class="about__founder-adam tac marb_d">
					<img src="images/adam-gore.png" alt="Adam Gore" width="300" height="300" />
				</div>
				<h3 class="tac">Adam Gore, Find Me a Gift Founder</h3>
				<blockquote>I wanted somewhere people can come to and find perfect gift ideas for all occasions</blockquote>
			</div>

			<div class="about__history marb_d2">
				<h2 class="tac">Our History</h2>	
				<div class="timeline">

				  <div class="time-line-container left">
				    <div class="content">
				      <h2>2001 - The Birth of Find Me a Gift</h2>
				      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
				    </div>
				  </div>
				  <div class="time-line-container right">
				    <div class="content">
				      <h2>2016</h2>
				      Lorem ipsum
				    </div>
				  </div>
				  <div class="time-line-container left">
				    <div class="content">
				      <h2>2017</h2>
				      Lorem ipsum
				    </div>
				  </div>
				</div>
			</div>

			<div class="about__history marb_d2">
				<h2 class="tac">Contacting Find Me a Gift</h2>
				<div class="col-md-4">
					<div class="tac marb_d">	
						<h3 class="marb_0">By Email</h3>
						<a href="mailto:customerservice@findmeagift.com">customerservice@findmeagift.com</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="tac marb_d">	
						<h3 class="marb_0">By Phone</h3>
						<a href="tel:01926 818 888">01926 818 800</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="tac">	
						<button class="button__sub">Visit Our Help Section</button>
					</div>
				</div>
			</div>
	
	</div>


<?php
	include_once($include_footer);
?>