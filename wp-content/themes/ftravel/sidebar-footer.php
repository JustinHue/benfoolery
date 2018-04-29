<?php
/**
 * The sidebar containing the main footer columns widget areas
 *
 */
?>

<div id="footer-content-area">

	<?php if ( !dynamic_sidebar( 'footer-widget-area' ) && current_user_can('edit_theme_options') ) : ?>

				<h2 class="footer-title">
					<?php esc_html_e('Footer Widget Area', 'ftravel'); ?>
				</h2><!-- .footer-title -->
				
				<div class="footer-after-title">
				</div><!-- .footer-after-title -->
				
				<div class="textwidget">
					<?php esc_html_e('This is footer content widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Widget Area.', 'ftravel'); ?>
				</div><!-- .textwidget -->
	
	<?php endif; // end of ! dynamic_sidebar( 'footer-widget-area' )
		  ?>

</div><!-- #footer-content-area -->