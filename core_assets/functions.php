<?php
	

	function test_function() {
		echo "test";
	}


	function build_product_thumbnails($products, $count) {
		$counter = 0;
        foreach ($products as $product) : 
	        if ($counter < $count) : ?>
				<div class="col-xs-6 col-md-4 col-lg-4">
					<div class="product-thumbnail">
						<a href="/gifts/laser-cosmos-star-projector.html">	
							<img src="<?php echo $product["image"]; ?>">
						</a>	
						<div class="product-thumbnail__title">
							<a href="/gifts/laser-cosmos-star-projector.html"><?php echo $product["name"]; ?></a>	
						</div>	
						<div class="product-thumbnail__price-wrap">		
							<div class="product-thumbnail__price"><span>&pound;</span><?php echo $product["price"]; ?></div>
							<div class="product-thumbnail__was-price">&pound;<?php echo $product["was_price"]; ?></div>	
						</div>
					</div>
				</div>
			<?php 
				$counter++;
			endif;
		endforeach;
	}

?>


