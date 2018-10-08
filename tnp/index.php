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
	<div class="breadcrumb dno-m">
		<div class="breadcrumb">			
			<a href="/" class="cd">Home</a> &gt; <a href="/christmas-gifts/index.asp" class="cd">Christmas Gifts</a> &gt; 
			<span class="co">Christmas Gifts For Men</span>
		</div>
	</div>

	<h1 class="tac">Christmas Gifts For Men</h1>
	<div class="top-copy marb_h">
		<p>It's an age old dilemma many of us have faced: Just what do you get for the man who has it all this Christmas? Luckily, this year we're on hand to help with our selection of the best Xmas gift ideas for the man in your life. These unique treats are sure to be popular additions for underneath the tree, whether you're buying for your husband or your uncle!</p>
	</div>

	<div class="top-related-cats">
		<div>
			<h3>More Christmas Gift Ideas for Men
				<div class="dilb co icon" id="showRelatedCategories">
					<i class="fas fa-plus"></i>
				</div>
			</h3>
		</div>	
		<ul>
			<li><a href="#">Golf Gifts</a></li>
			<li><a href="#">Beer Gifts</a></li>
			<li><a href="#">Gifts for Men Who Have Everything</a></li>
			<li><a href="#">Beer Gifts</a></li>
			<li><a href="#">Golf Gifts</a></li>
			<li><a href="#">Beer Gifts</a></li>
		</ul>
	</div>



	<div class="tnp-controls marb_d clearfix">
		<div class="tnp-controls__count">
			186 products
		</div>
		<div class="tnp-controls__refine fl tac">
			<button onclick="openNav()">Refine <i class="fas fa-sliders-h"></i></button>
		</div>

		<div class="tnp-controls__sort fr tac">
			<button>Sort <i class="fas fa-sort"></i></button>
		</div>
	</div>

</div>

<div class="col-md-3">
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="marb_d">
			<h2>Related Categories</h2>

			<ul>
				<li><a href="#">Personalised Gifts</a></li>
				<li><a href="#">Secret Santa Gifts</a></li>
				<li><a href="#">Stocking Fillers</a></li>
				<li><a href="#">Wallets</a></li>
			</ul>
		</div>

		<div class="marb_d">
			<h2>Price</h2>

			<ul>
				<li><i class="far fa-square"></i> &pound;0 - &pound;10</li>
				<li><i class="far fa-square"></i> &pound;10 - &pound;20</li>
				<li><i class="far fa-square"></i> &pound;20 - &pound;30</li>
				<li><i class="far fa-square"></i> &pound;30 - &pound;40</li>
			</ul>
		</div>

		<div class="marb_d">
			<h2>Personalised</h2>

			<ul>
				<li><i class="far fa-square"></i> All</li>
				<li><i class="far fa-square"></i> Personalised</li>
				<li><i class="far fa-square"></i> Non-Personalised</li>
			</ul>
		</div>

	</div>
</div>
<div class="col-md-9">
	<?php 
		build_product_thumbnails($products, 30);
	?>
</div>




</div>


<?php
	include_once($include_footer);
?>


<script>

$('#showRelatedCategories').click(function() {
	$('.top-related-cats ul').slideToggle();
	$(this).toggleClass('top-related-cats__icon--active');
});

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>