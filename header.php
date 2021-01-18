<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jd
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,300;1,400&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jd' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
		<section id="search-2" class="widget widget_search">
			<form role="search" method="get" class="search-form" action="http://new-project/">
				<label>
					<span class="screen-reader-text">Найти:</span>
					<input type="search" class="search-field" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Поиск" />
			</form>
		</section>
	</header>

	<div class="nav-icon-wrapper">
		<div class="nav-icon" onclick="document.querySelector('body').classList.toggle('menu-opened');">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
