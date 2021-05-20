<?php
/**
 * Template part for top panel in header (style-3 layout).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lafood
 */

// Don't show top panel if all elements are disabled.
if ( ! lafood_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel <?php echo lafood_get_invert_class_customize_option( 'top_panel_bg' ); ?>">
	<div class="top-panel__container container">
		<div class="top-panel__top">
			<div class="top-panel__left">
				<?php lafood_top_message( '<div class="top-panel__message">%s</div>' ); ?>
				<?php lafood_contact_block( 'header' ); ?>
			</div>

			<div class="top-panel__right">
				<?php lafood_top_menu(); ?>
				<?php lafood_social_list( 'header' ); ?>
			</div>
		</div>
	</div>
</div><!-- .top-panel -->
