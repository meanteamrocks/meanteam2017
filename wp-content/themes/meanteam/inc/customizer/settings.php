<?php
/**
 * Customizer settings.
 *
 * @package MEAN Team
 */

/**
 * Register additional scripts.
 */
function meanteam_twentyseventeen_customize_additional_scripts( $wp_customize ) {

	// Register a setting.
	$wp_customize->add_setting(
		'meanteam_twentyseventeen_header_scripts',
		array(
			'default'           => '',
			'sanitize_callback' => 'force_balance_tags',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		'meanteam_twentyseventeen_header_scripts',
		array(
			'label'       => esc_html__( 'Header Scripts', 'meanteam' ),
			'description' => esc_html__( 'Additional scripts to add to the header. Basic HTML tags are allowed.', 'meanteam' ),
			'section'     => 'meanteam_twentyseventeen_additional_scripts_section',
			'type'        => 'textarea',
		)
	);

	// Register a setting.
	$wp_customize->add_setting(
		'meanteam_twentyseventeen_footer_scripts',
		array(
			'default'           => '',
			'sanitize_callback' => 'force_balance_tags',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		'meanteam_twentyseventeen_footer_scripts',
		array(
			'label'       => esc_html__( 'Footer Scripts', 'meanteam' ),
			'description' => esc_html__( 'Additional scripts to add to the footer. Basic HTML tags are allowed.', 'meanteam' ),
			'section'     => 'meanteam_twentyseventeen_additional_scripts_section',
			'type'        => 'textarea',
		)
	);
}
add_action( 'customize_register', 'meanteam_twentyseventeen_customize_additional_scripts' );

/**
 * Register a social icons setting.
 */
function meanteam_twentyseventeen_customize_social_icons( $wp_customize ) {

	// Create an array of our social links for ease of setup.
	$social_networks = array( 'facebook', 'googleplus', 'instagram', 'linkedin', 'twitter' );

	// Loop through our networks to setup our fields.
	foreach ( $social_networks as $network ) {

		// Register a setting.
		$wp_customize->add_setting(
			'meanteam_twentyseventeen_' . $network . '_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url',
			)
		);

		// Create the setting field.
		$wp_customize->add_control(
			'meanteam_twentyseventeen_' . $network . '_link',
			array(
				'label'   => /* translators: the social network name. */ sprintf( esc_html__( '%s Link', 'meanteam' ), ucwords( $network ) ),
				'section' => 'meanteam_twentyseventeen_social_links_section',
				'type'    => 'text',
			)
		);
	}
}
add_action( 'customize_register', 'meanteam_twentyseventeen_customize_social_icons' );

/**
 * Register copyright text setting.
 */
function meanteam_twentyseventeen_customize_copyright_text( $wp_customize ) {

	// Register a setting.
	$wp_customize->add_setting(
		'meanteam_twentyseventeen_copyright_text',
		array(
			'default' => '',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		new Text_Editor_Custom_Control(
			$wp_customize,
			'meanteam_twentyseventeen_copyright_text',
			array(
				'label'       => esc_html__( 'Copyright Text', 'meanteam' ),
				'description' => esc_html__( 'The copyright text will be displayed in the footer. Basic HTML tags allowed.', 'meanteam' ),
				'section'     => 'meanteam_twentyseventeen_footer_section',
				'type'        => 'textarea',
			)
		)
	);
}
add_action( 'customize_register', 'meanteam_twentyseventeen_customize_copyright_text' );
