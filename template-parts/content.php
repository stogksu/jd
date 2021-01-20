<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jd
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-header">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decor_post.png" alt="decor">
	</div><!-- .entry-header -->	
		
	<?php
		if ( is_singular() ){
			the_title( '<h1 class="entry-title">', '</h1>' );
		}
	?>

	<?php jd_post_thumbnail(); ?>
	<div class="post-info">
		<?php 
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				jd_posted_on();
				jd_posted_by();
				?>
			</div>
		<?php endif; ?>

		<?php
		if (!is_singular() ) {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
			
		<div class="entry-content">
			<?php
			$content = get_the_content();
			echo is_singular() ? $content : mb_strimwidth($content, 0, 500, '...');	
			
			/* the_content(
				sprintf(
					wp_kses(
						// translators: %s: Name of current post. Only visible to screen readers 
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jd' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			*/

			?>	
		
		</div><!-- .entry-content -->
		<?php if (!is_singular()) { ?>
			<a href="<?php echo esc_url(get_permalink()); ?>" alt="" class="read-post">Read post</a>
			<span class="comment-counter">
				<a href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_comments_number() ?></a>
			</span>
		<?php } ?>
		
	</div>
	
	
	<hr>
</article><!-- #post-
<?php the_ID(); ?> -->
