		</div>
	</div>
	<footer id="footer">
		<div class="footer__nav tac marb_d">
			<h3 class="tac">About</h3>
			<?php wp_nav_menu( array(
		        'theme_location' => 'footer-menu'
		         ) 
	        ); ?>
		</div>

		<div class="footer__brand tac">
			<img src="http://smile.findmeagift.co.uk/wp-content/themes/fmaglife/site_media/images/fmag-life-logo.png?x30638" alt="Techlucidity Logo" />
			<div>&copy; Find Me a Gift <span id="footerDate"></span></div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>