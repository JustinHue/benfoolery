<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Ruffie
 * @since Ruffie 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="site-wrapper">
		<div class="site-header-wrapper">
			<header class="site-header">
				<?php if( function_exists( 'the_custom_logo' ) ) the_custom_logo(); ?>

				<?php if( get_theme_mod('display_site_title', true) ): ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					</h1>
				<?php endif; ?>

				<?php ruffie_social_media(); ?>
			</header>

			<?php if ( has_nav_menu( 'header' )): ?>
				<h5 class="menu-toggle"><?php _e('Menu', 'ruffie'); ?></h5>

				<div class="header-menu-container">
					<h5 class="menu-toggle"><?php _e('Close', 'ruffie'); ?></h5>

					<?php wp_nav_menu( array(
						'theme_location' => 'header',
						'menu_class'     => 'header-menu'
					) ); ?>
				</div>
			<?php endif; ?>	
		</div>

		<?php if( is_home() && get_theme_mod('display_tagline', true) ):?>
			<p class="site-tagline"><?php bloginfo( 'description' ) ?></p>	
		<?php endif; ?>