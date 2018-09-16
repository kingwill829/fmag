				<?php 
					$content_image = get_sub_field('image'); 
					if ( !empty($content_image)) {
						// vars
						$url = $content_image['url'];
						$title = $content_image['title'];
						$alt = $content_image['alt'];
						$caption = $content_image['caption'];
						$width = $content_image['width'];
						$height = $content_image['height'];						
					}
				?>
			<section class="content-image content-body__section marb_d">
				<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
				<?php if (get_sub_field('credit')): ?>
					<div class="content-image__caption">
						Image Source: <?php the_sub_field('credit'); ?> 
					</div>
				<?php endif; ?>
			</section>