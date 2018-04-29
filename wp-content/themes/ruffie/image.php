<?php
/**
 * Template for displaying images
 *
 * @package Ruffie
 * @since Ruffie 1.3.0
 */
get_header(); ?>

<?php get_sidebar('above-content'); ?>

<div class="site-content">
	<main>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('template-parts/content_header'); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-attachment">
            <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>
            <?php the_excerpt(); ?>
        </div>
      </article>

      <nav id="image-navigation" class="navigation image-navigation">
        <div class="nav-links">
          <div class="nav-previous"><?php previous_image_link( false, __( 'Previous Image', 'ruffie' ) ); ?></div>
          <div class="nav-next"><?php next_image_link( false, __( 'Next Image', 'ruffie' ) ); ?></div>
        </div><!-- .nav-links -->
      </nav><!-- .image-navigation -->
			
			<?php if ( comments_open() || get_comments_number() ) comments_template(); ?>
		
		<?php endwhile; ?>
	</main>

	<?php get_sidebar('left'); ?>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>