<?php
/**
 * Template for displaying 404 pages (not found)
 *
 * @package Ruffie
 * @since Ruffie 1.0
 */
get_header(); ?>

<?php get_sidebar('above-content'); ?>

<div class="site-content">
	<main>
		<?php get_template_part('template-parts/content_header'); ?>
		
		<p><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'ruffie' ); ?></p>
		<p><?php _e( 'It looks like nothing was found at this location.', 'ruffie' ); ?></p>
	</main>

	<?php get_sidebar('left'); ?>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>