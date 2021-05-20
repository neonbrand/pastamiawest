<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Lafood
 */

$footer_contact_block_visibility = get_theme_mod( 'footer_contact_block_visibility', lafood_theme()->customizer->get_default( 'footer_contact_block_visibility' ) );
?>

<div class="footer-container <?php echo lafood_get_invert_class_customize_option( 'footer_bg' ); ?>">
	<div class="site-info container">
		<div class="site-info-wrap">
			<?php lafood_footer_logo(); ?>
			<?php lafood_footer_menu(); ?>

			<?php if ( $footer_contact_block_visibility ) : ?>
			<div class="site-info__bottom">
			<?php endif; ?>
				<?php lafood_footer_copyright(); ?>
				<?php lafood_contact_block( 'footer' ); ?>
			<?php if ( $footer_contact_block_visibility ) : ?>
			</div>
			<?php endif; ?>

			<?php lafood_social_list( 'footer' ); ?>
		</div>

	</div><!-- .site-info -->
</div><!-- .container -->
