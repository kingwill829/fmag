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


<script type="application/ld+json"> {
  "@context" : "http://schema.org/",
  "@type" : "JobPosting",
  "title" : "SEO Executive",
  "description" : "Lorem Ipsum",
  "qualifications": "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
  "responsibilities": "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
  "experienceRequirements": "Minumum 3 years experience in an SEO Environment",
  "datePosted" : "2017-01-18",
  "validThrough" : "2017-03-18T00:00",
  "employmentType" : "Full-time",
  "hiringOrganization" : {
    "@type" : "Organization",
    "name" : "Find Me a Gift",
    "sameAs" : "https://www.findmeagift.co.uk",
    "logo" : "https://www.findmeagift.co.uk/site_media/images/general/fmag-logo.svg"
  },
  "jobLocation" : {
    "@type" : "Place",
    "address" : {
      "@type" : "PostalAddress",
      "streetAddress" : "Find Me a Gift, Northfield Road, Kineton Road Industrial Estate",
      "addressLocality" : "Southam",
      "addressRegion" : "Warwickshire",
      "postalCode" : "CV47 0FG",
      "addressCountry": "UK"
    }
  },
  "baseSalary": {
    "@type": "MonetaryAmount",
    "currency": "GBP",
    "value": {
      "@type": "QuantitativeValue",
      "value": 28000,
      "unitText": "YEAR"
    }
  }
}
</script>

<div class="container">
	
	<div class="tac">
		<h1>SEO Executive</h1>
	</div>	
	

	

	
	<div class="col-md-4">
		<div class="job-sidebar">
			<div class="marb_d module-container">
				<h2>Key Details</h2>
				<div class="job-sidebar__key-details">
					<div class="split-component">
						<div class="marr_h">	
							Date Posted: 
						</div>
						<div>
							14-09-2018
						</div>
					</div>
					<div class="split-component">
						<div class="marr_h">	
							Job Type: 
						</div>
						<div>
							Full Time, Permanent
						</div>
					</div>
					<div class="split-component">
						<div class="marr_h">	
							Location: 
						</div>
						<div>
							Southam, Warwickshire
						</div>
					</div>				
				</div>	
				<button class="button__cta">Apply Today</button>
			</div>
			
			<div class="marb_d module-container">
				<h2>Where Are We?</h2>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11618.955413885997!2d-1.3939334502242953!3d52.25093044720494!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd03ad447765e11fe!2sFind+Me+a+Gift!5e0!3m2!1sen!2suk!4v1536935011302" width="600" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>
			</div>
		</div>
	</div>	
	
	<div class="col-md-8">
		<div class="marb_d module-container">
			<h2>Job Description</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>	
			
			<h2>Roles &amp; Responsibilities</h2>
      <ul class="bullets marb_d">
				<li>Dealing with a variety of customer enquiries or orders received over the telephone</li>
				<li>Responding to customer enquiries received via email and Live chat</li>
				<li>Liaising with suppliers and couriers</li>
				<li>Processing claims</li>
				<li>Resolving complaints as smoothly as possible</li>
      </ul>			
		</div>
	</div>	
	
	
	
</div>

<script>
	$( document ).ready(function() {
		$('body').css({"background-color":"#fafafa"})
	
	
	});
</script>

<?php
	include_once($include_footer);
?>