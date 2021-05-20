<?php
/**
 * Plugins configuration example.
 *
 * @var array
 */
$plugins = array(
		'cherry-testi' => array(
			'name'   => esc_html__( 'Cherry Testimonials', 'lafood' ),
			'access' => 'skins',
		),
		'cherry-projects' => array(
			'name' => esc_html__( 'Cherry Project', 'lafood' ),
			'access' => 'skins',
		),
		'cherry-team-members' => array(
			'name' => esc_html__( 'Cherry Team Members', 'lafood' ),
			'access' => 'skins',
		),
		'cherry-services-list' => array(
			'name' => esc_html__( 'Cherry Services List', 'lafood' ),
			'access' => 'skins',
		),
		'cherry-sidebars' => array(
			'name' => esc_html__( 'Cherry Sidebars', 'lafood' ),
			'access' => 'skins',
		),
		'booked' => array(
			'name'   => esc_html__( 'Booked Appointments', 'lafood' ),
			'source' => 'local',
			'path' => LAFOOD_THEME_DIR . '/assets/includes/plugins/booked.zip',
			'access' => 'base',
		),
		'mp-restaurant-menu' => array(
			'name' => esc_html__( 'Restaurant Menu by MotoPress', 'lafood' ),
			'access' => 'skins',
		),
		'cherry-search' => array(
			'name'      => esc_html__( 'Cherry Search', 'lafood' ),
			'access' => 'skins',
		),
		'power-builder-integrator' => array(
			'name'   => esc_html__( 'Power Builder Integrator', 'lafood' ),
			'source' => 'remote',
			'path'   => 'http://cloud.cherryframework.com/downloads/free-plugins/power-builder-integrator.zip',
			'access' => 'skins',
		),
		'power-builder' => array(
			'name'   => esc_html__( 'Power Builder', 'lafood' ),
			'source' => 'local',
			'path' => LAFOOD_THEME_DIR . '/assets/includes/plugins/power-builder.zip',
			'access' => 'skins',
		),
		'cherry-data-importer' => array(
			'name'   => esc_html__( 'Cherry Data Importer', 'lafood' ),
			'source' => 'remote', // 'local', 'remote', 'wordpress' (default).
			'path'   => 'https://github.com/CherryFramework/cherry-data-importer/archive/master.zip',
			'access' => 'base',
		),
	);

/**
 * Skins configuration example
 *
 * @var array
 */
$skins = array(
	'base' => array(
		'cherry-data-importer',
		'booked',
	),
	'advanced' => array(
		'default' => array(
			'full'  => array(
				'cherry-testi',
				'cherry-projects',
				'cherry-team-members',
				'cherry-services-list',
				'cherry-sidebars',
				'mp-restaurant-menu',
				'cherry-search',
				'power-builder',
				'power-builder-integrator',
			),
			'lite'  => false,
			'demo'  => 'http://ld-wp2.template-help.com/wptheme/lafood/',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
			'name'  => esc_html__( 'Lafood', 'lafood' ),
		),


	),
);

$texts = array(
		'theme-name' => 'Lafood'
);
