<?php
/**
 * Power-builder hooks.
 *
 * @package Lafood
 */

// Add custom icons font to builder.
add_filter( 'tm_builder_custom_font_icons', 'lafood_builder_custom_font_icons' );

// Remove include builder grid css file.
add_filter( 'tm_builder_front_styles', 'lafood_builder_remove_include_grid_css' );

// Customization power-builder taxonomy module.
add_filter( 'tm_pb_module_taxonomy_title_settings', 'lafood_taxonomy_module_title_settings' );
add_filter( 'tm_pb_module_taxonomy_button_settings', 'lafood_taxonomy_module_button_settings' );
add_filter( 'tm_pb_module_taxonomy_template_count_max', 'lafood_taxonomy_module_template_count_max' );

// Customization power-builder carousel module.
add_filter( 'tm_pb_module_carousel_img_settings', 'lafood_module_carousel_img_settings' );
add_filter( 'tm_pb_module_carousel_title_settings', 'lafood_module_carousel_title_settings' );
add_filter( 'tm_pb_module_carousel_author_settings', 'lafood_module_carousel_author_settings' );
add_filter( 'tm_pb_module_carousel_more_button_settings', 'lafood_module_carousel_more_button_settings' );
add_filter( 'tm_pb_module_carousel_space', 'lafood_module_carousel_space' );

// Add custom modules to power builder.
add_action( 'tm_builder_load_user_modules', 'lafood_add_custom_modules_to_builder' );

/**
 * Add custom icon fonts to builder.
 */
function lafood_builder_custom_font_icons( $icons ) {
	$icons['linearicons'] = array(
		'src'  => LAFOOD_THEME_CSS . '/linearicons.css',
		'base' => 'linearicon',
	);

	return $icons;
}

/**
 * Remove include builder grid css file
 */
function lafood_builder_remove_include_grid_css( $styles ) {
	unset( $styles['tm-builder-modules-grid'] );

	return $styles;
}

/**
 * Customization title settings to taxonomy module.
 *
 * @param array $title Title settings.
 *
 * @return array
 */
function lafood_taxonomy_module_title_settings( $title ) {
	$title['class'] = 'tm_pb_taxonomy__title';
	$title['html']  = '<h5 %1$s><a href="%2$s" %3$s>%4$s</a></h5>';

	return $title;
}

/**
 * Customization button settings to taxonomy module.
 *
 * @param array $button Button settings.
 *
 * @return array
 */
function lafood_taxonomy_module_button_settings( $button ) {
	$button['class'] = 'link';
	$button['icon']  = '<i class="linearicon linearicon-arrow-right"></i>';
	$button['html']  = '<span class="button--holder"><a href="%1$s" %3$s><span class="link__text">%4$s</span>%5$s</a></span>';

	return $button;
}

/**
 * Customization template count max to taxonomy module.
 *
 * @return int
 */
function lafood_taxonomy_module_template_count_max( $template_count_max ) {
	return 5;
}

/**
 * Customization image settings to carousel module.
 *
 * @param array $image Image settings.
 *
 * @return array
 */
function lafood_module_carousel_img_settings( $image ) {
	$image['mobile_size'] = 'lafood-thumb-m';

	return $image;
}

/**
 * Customization title settings to carousel module.
 *
 * @param array $post_title Title settings.
 *
 * @return array
 */
function lafood_module_carousel_title_settings( $post_title ) {

	$post_title['class'] = 'entry-title';
	$post_title['html']  = '<h5 %1$s><a href="%2$s" %3$s>%4$s</a></h5>';

	return $post_title;
}

/**
 * Customization author meta settings to carousel module.
 *
 * @param array $author Author meta settings.
 *
 * @return array
 */
function lafood_module_carousel_author_settings( $author ) {

	$author['prefix'] = esc_html__( 'by ', 'lafood' );

	return $author;
}

/**
 * Customization more button settings to carousel module.
 *
 * @param array $more_button More button settings.
 *
 * @return array
 */
function lafood_module_carousel_more_button_settings( $more_button ) {

	$more_button_settings = array(
		'class' => 'carousel__more-btn link',
		'icon'  => '<i class="linearicon linearicon-arrow-right"></i>',
		'html'  => '<a href="%1$s" %3$s><span class="link__text">%4$s</span>%5$s</a>',
	);

	$more_button = array_merge( $more_button, $more_button_settings );

	return $more_button;
}

/**
 * Customization space between slides to carousel module.
 *
 * @return int
 */
function lafood_module_carousel_space( $space_between_slides ) {
	return 50;
}

/**
 * Add custom modules to power builder.
 */
function lafood_add_custom_modules_to_builder( $modules_loader ) {

	$custom_modules = apply_filters( 'lafood_power_builder_theme_modules', array(
		'Lafood_Builder_Module_Icon' => trailingslashit( LAFOOD_THEME_DIR ) . 'builder/modules/class-builder-module-icon.php',
	) );

	foreach ( $custom_modules as $module_class => $module_path ) {

		include_once $module_path;
		$modules_loader->add_module( $module_class, $module_path );

	}
}
