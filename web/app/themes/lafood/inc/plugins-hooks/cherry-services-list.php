<?php
/**
 * Cherry-services-list hooks.
 *
 * @package Lafood
 */

// Customization cherry-services-list plugin.
add_filter( 'cherry_services_list_meta_options_args', 'lafood_change_services_list_icon_pack' );
add_filter( 'cherry_services_default_icon_format', 'lafood_cherry_services_default_icon_format' );
add_filter( 'cherry_services_listing_templates_list', 'lafood_cherry_services_listing_templates_list' );
add_filter( 'cherry_services_features_title_format', 'lafood_cherry_services_features_title_format' );
add_filter( 'cherry_services_cta_format', 'lafood_cherry_services_cta_format' );

/**
 * Change cherry-services-list icon pack.
 */
function lafood_change_services_list_icon_pack( $fields ) {

	$fields['fields']['cherry-services-icon']['icon_data'] = array(
		'icon_set'    => 'lafoodLinearIcons',
		'icon_css'    => LAFOOD_THEME_URI . '/assets/css/linearicons.css',
		'icon_base'   => 'linearicon',
		'icon_prefix' => 'linearicon-',
		'icons'       => lafood_get_linear_icons_set(),
	);

	return $fields;
}

/**
 * Change cherry-services-list icon format
 *
 * @return string
 */
function lafood_cherry_services_default_icon_format( $icon_format ) {
	return '<i class="linearicon %s"></i>';
}

/**
 *  Add template to cherry services-list templates list;
 */
function lafood_cherry_services_listing_templates_list( $tmpl_list ) {

	$tmpl_list['media-icon-float'] = 'media-icon-float.tmpl';

	return $tmpl_list;
}

/**
 * Change cherry-services features title format.
 */
function lafood_cherry_services_features_title_format( $title_format ) {
	return '<h6 class="service-features_title">%s</h6>';
}

// Change cherry-services cta html format.

/**
 * Change cherry-services cta html format.
 *
 * @return string
 */
function lafood_cherry_services_cta_format( $html_format ) {
	return '<h1 class="service-cta_title">%1$s</h1><hr><div class="service-cta_desc">%2$s</div>%3$s';
}
