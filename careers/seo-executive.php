<?php
	$site_root = $_SERVER['DOCUMENT_ROOT'];
	$include_header = $site_root . "/fmag/includes/header.php";
	$include_nav = $site_root . "/fmag/includes/nav.php";
	$include_footer = $site_root . "/fmag/includes/footer.php";

	include_once($include_header); 
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
		<h2>Southam, Warwickshire</h2>
	</div>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	
	
	
	
	<button>Apply Today</button>
	
	
	
</div>

<?php
	include_once($include_footer);
?>