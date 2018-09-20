<?php
	

	function test_function() {
		echo "test";
	}


	function build_product_thumbnails($products) {
        foreach ($products as $product) : ?>
			<div class="col-xs-4 col-md-4 col-lg-4">
				<div class="product-thumbnail">
					<div class="product-thumbnail__sale-flag">
						<span>Sale</span>
					</div>	
					<a href="/gifts/laser-cosmos-star-projector.html">	
						<img src="<?php echo $product["image"]; ?>">	
						<div class="product-thumbnail__save">		
							<span class="fa-stack">			
								<i class="fa fa-circle fa-stack-2x icon-background"></i>			
								<i class="fa fa-heart-o co fa-stack-1x"></i> 		
							</span> 	
						</div> 
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
		<?php endforeach;
	}

?>


