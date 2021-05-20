<?php
/**
 * Import remap hooks
 */

add_action( 'cherry_data_import_home_regex_replace', 'lafood_remap_shortcodes' );
add_action( 'cherry_data_import_remap_posts',        'lafood_remap_menus' );

/**
 * Remap terms in shortocdes
 *
 * @param  array $regex Shortcode data for regex.
 * @return array
 */
function lafood_remap_shortcodes( $regex ) {

	$regex[] = array(
		'shortcode' => 'tm_pb_posts',
		'attr'      => 'categories',
	);

	$regex[] = array(
		'shortcode' => 'mprm_items',
		'attr'      => 'categ',
	);

	$regex[] = array(
		'shortcode' => 'mprm_categories',
		'attr'      => 'categ',
	);

	$regex[] = array(
		'shortcode' => 'tm_pb_menu_items',
		'attr'      => 'tags_list',
	);

	$regex[] = array(
		'shortcode' => 'tm_pb_cherry_testi',
		'attr'      => 'ids',
		'delimiter' => ' ',
	);

	$regex[] = array(
		'shortcode' => 'tm_pb_cherry_testi',
		'attr'      => 'category',
		'delimiter' => ' ',
	);

	return $regex;
}

/**
 * Remap thumbanil ID's and menu terms
 *
 * @param array $posts post remapping array.
 */
function lafood_remap_menus( $posts ) {

	global $wpdb;

	$query = "
		SELECT *
		FROM $wpdb->termmeta
		WHERE meta_key LIKE 'mprm_taxonomy_%'
	";

	$taxmeta = $wpdb->get_results( $query );

	if ( empty( $taxmeta ) ) {
		return;
	}

	foreach ( $taxmeta as $tax ) {
		$value = unserialize( $tax->meta_value );
		if ( is_string( $value ) ) {
			$value = unserialize( $value );
		}
		if ( isset( $value['thumbnail_id'] ) && isset( $posts[ $value['thumbnail_id'] ] ) ) {
			$value['thumbnail_id'] = $posts[ $value['thumbnail_id'] ];
		}
		$wpdb->update(
			$wpdb->termmeta,
			array(
				'meta_id'    => $tax->meta_id,
				'term_id'    => $tax->term_id,
				'meta_key'   => 'mprm_taxonomy_' . $tax->term_id,
				'meta_value' => serialize( $value ),
			),
			array(
				'term_id' => $tax->term_id,
			),
			$format = array(
				'meta_id'    => '%d',
				'term_id'    => '%d',
				'meta_key'   => '%s',
				'meta_value' => '%s',
			),
			$where_format = array(
				'term_id' => '%d',
			)
		);
	}
}
