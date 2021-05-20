<?php
/**
 * The template for displaying the style-2 footer layout.
 *
 * @package Lafood
 */

?>
<div class="footer-container <?php echo lafood_get_invert_class_customize_option( 'footer_bg' ); ?>">
	<div class="site-info container">
		<?php
			lafood_footer_logo();
			lafood_footer_menu();
			lafood_contact_block( 'footer' );
			lafood_social_list( 'footer' );
			lafood_footer_copyright();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->
