<?php
/**
 * Cherry-projects hooks.
 *
 * @package Lafood
 */

// Customization cherry-project plugin.
add_filter( 'cherry-projects-title-settings', 'lafood_cherry_projects_title_settings' );
add_filter( 'cherry-projects-author-settings', 'lafood_cherry_projects_author_settings' );
add_filter( 'cherry-projects-button-settings', 'lafood_cherry_projects_button_settings' );
add_filter( 'cherry-projects-content-settings', 'lafood_cherry_projects_content_settings' );
add_filter( 'cherry_projects_show_all_text', 'lafood_projects_show_all_text' );
add_filter( 'cherry-projects-prev-button-text', 'lafood_cherry_projects_prev_button_text' );
add_filter( 'cherry-projects-next-button-text', 'lafood_cherry_projects_next_button_text' );
add_filter( 'cherry_projects_data_callbacks', 'lafood_cherry_projects_data_callbacks', 10, 2 );
add_filter( 'cherry_projects_cascading_list_map', 'lafood_cherry_projects_cascading_list_map' );
add_action( 'cherry_projects_before_main_content', 'lafood_cherry_projects_before_main_content' );

/**
 * Customization title settings to cherry-project.
 *
 * @param array $settings Title settings.
 *
 * @return array
 */
function lafood_cherry_projects_title_settings( $settings ) {

	$title_html = ( is_single() ) ? '<h1 %1$s>%4$s</h1>' : '<h4 %1$s><a href="%2$s" %3$s rel="bookmark">%4$s</a></h4>';

	$settings['html']  = $title_html;
	$settings['class'] = 'project-entry-title';

	return $settings;
}

/**
 * Customization meta author settings to cherry-project.
 *
 * @param array $settings Author settings.
 *
 * @return array
 */
function lafood_cherry_projects_author_settings( $settings ) {

	$settings['html'] = '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>';

	return $settings;
}

/**
 * Customization button settings to cherry-project.
 *
 * @param array $settings Button settings.
 *
 * @return array
 */
function lafood_cherry_projects_button_settings( $settings ) {

	$new_settings = array(
		'text'  => esc_html__( 'View now!', 'lafood' ),
		'class' => 'project-more-button link',
		'icon'  => '<i class="linearicon linearicon-arrow-right"></i>',
		'html'  => '<a href="%1$s" %3$s><span class="link__text">%4$s</span>%5$s</a>',
	);

	$settings = array_merge( $settings, $new_settings );

	return $settings;
}

/**
 * Customization content settings to cherry-project.
 *
 * @param array $settings Content settings.
 *
 * @return array
 */
function lafood_cherry_projects_content_settings( $settings ) {

	$settings['class'] = 'project-entry-content';

	return $settings;
}

/**
 * Customization show all text to cherry-project.
 *
 * @return string
 */
function lafood_projects_show_all_text( $show_all_text ) {
	return esc_html__( 'All', 'lafood' );
}

/**
 * Customization cherry-projects prev button text.
 *
 * @return string
 */
function lafood_cherry_projects_prev_button_text( $prev_text ) {
	return esc_html__( 'Prev', 'lafood' );
}

/**
 * Customization cherry-projects next button text.
 *
 * @return string
 */
function lafood_cherry_projects_next_button_text( $next_text ) {
	return esc_html__( 'Next', 'lafood' );
}

/**
 * Add macros %%SHAREBUTTONS%% and callback to cherry-project.
 *
 * @return array
 */
function lafood_cherry_projects_data_callbacks( $data, $atts ) {

	$data['sharebuttons'] = 'lafood_get_single_share_buttons';

	return $data;
}

/**
 * Customization cherry-projects cascading list map.
 *
 * @return array
 */
function lafood_cherry_projects_cascading_list_map( $cascading_list_map ) {
	return array( 2, 2, 3, 3, 3, 4, 4, 4, 4 );
}

/**
 * Add term image to cherry-project archive pages.
 */
function lafood_cherry_projects_before_main_content() {

	if ( ! is_tax( array( 'projects_category', 'projects_tag' ) ) ) {
		return;
	}

	$term_id = get_queried_object_id();

	$image = lafood_utility()->utility->media->get_image(
		array(
			'html'        => '<img src="%3$s" %2$s alt="%4$s" %5$s >',
			'class'       => 'term-img',
			'size'        => 'lafood-thumb-xl',
			'mobile_size' => 'lafood-thumb-l',
			'placeholder' => false,
			'echo'        => false,
		),
		'term',
		$term_id
	);

	$title = lafood_utility()->utility->attributes->get_title(
		array(
			'html'  => '<h1 %1$s>%4$s</h1>',
			'class' => 'project-terms-header__title',
			'echo'  => false,
		),
		'term',
		$term_id
	);

	$desc = lafood_utility()->utility->attributes->get_content(
		array(
			'class' => 'project-terms-header__desc',
			'echo'  => false,
		),
		'term',
		$term_id
	);

	$html_format = '<div class="project-terms-header"><figure class="project-terms-header__thumbnail">%1$s</figure><div class="project-terms-header__content container invert">%2$s%3$s</div></div>';
	$html_format = apply_filters( 'lafood_skin6_projects_before_main_content_html' ,$html_format );

	printf( $html_format, $image, $title, $desc );
}
