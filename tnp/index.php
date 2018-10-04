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

<div class="col-md-12">
	<div class="breadcrumb dno-m marb_h">
		<div class="breadcrumb">
			<p>
				<a href="/" class="cd">Home</a> &gt; <a href="/christmas-gifts/index.asp" class="cd">Christmas Gifts</a> &gt; 
				<span class="co">Christmas Gifts For Men</span>
			</p>
		</div>
	</div>

	<h1 class="tac">Christmas Gifts For Men</h1>
	<div class="top-copy">
		<p>It's an age old dilemma many of us have faced: Just what do you get for the man who has it all this Christmas? Luckily, this year we're on hand to help with our selection of the best Xmas gift ideas for the man in your life. These unique treats are sure to be popular additions for underneath the tree, whether you're buying for your husband or your uncle!</p>
	</div>

	<div class="tac">
		186 products
	</div>

	<div class="tnp-controls clearfix">
		<div class="tnp-controls__refine fl tac">
			<button>Refine <i class="fas fa-sliders-h"></i></button>
		</div>

		<div class="tnp-controls__sort fr tac">
			<button>Sort <i class="fas fa-sort"></i></button>
		</div>
	</div>

</div>



</div>


<?php
	include_once($include_footer);
?>