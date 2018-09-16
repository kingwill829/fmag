<div class="module-container">
	<h1><?php the_title(); ?></h1>

	<div class="post-meta">
		<div class="social-share">
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"  class="social-share__facebook" target="_blank">
				<i class="fab fa-facebook-f"></i>
			</a>
			<a href="https://twitter.com/home?status=<?php the_permalink(); ?>" class="social-share__twitter" target="_blank">
				<i class="fab fa-twitter"></i>
			</a>
			<a href="fb-messenger://share/?link=<?php the_permalink(); ?>" class="social-share__messenger" target="_blank">
				<i class="fab fa-facebook-messenger"></i>
			</a>
			<a href="https://web.whatsapp.com/send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share" class="social-share__whatsapp" target="_blank">
				<i class="fab fa-whatsapp"></i>
			</a>
		</div>

		<div>
			<?php the_author(); ?>
		</div>

		<div>
			<?php the_date(); ?>
		</div>
	</div>

	<?php the_content(); ?>	
</div>	