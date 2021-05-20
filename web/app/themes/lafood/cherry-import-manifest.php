<?php
/**
 * Default manifest file
 *
 * @var array
 */
$settings = array(
	'xml' => false,
	'advanced_import' => array(
		'default' => array(
			'label'    => esc_html__( 'Lafood', 'lafood' ),
			'full'     => get_template_directory() . '/assets/demo-content/default/default-full.xml',
			'lite'     => get_template_directory() . '/assets/demo-content/default/default-min.xml',
			'thumb'    => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
			'demo_url' => 'http://ld-wp2.template-help.com/wptheme/lafood/',
		),

	),
	'import' => array(
		'chunk_size' => 3,
	),
	'export' => array(
		'options' => array(

		),

	),
	'slider'   => array(
				'path' => 'https://raw.githubusercontent.com/templatemonster/tm-wizard-slider/default/slides.json',
		),
);
