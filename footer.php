<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jd
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="social-info">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
				
				<?php endif; ?>

				
					
				
					
				
				
			</div>
			<div class="subscribe">
				<form class="subscribe-form">
					<input type="email" class="subscribe" placeholder="Enter email">
					<input type="submit" value="Subscribe">
				</form>
			</div>
			
				
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


