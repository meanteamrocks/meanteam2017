<?php
/**
 * Customizer panels.
 *
 * @package MEAN Team
 */

/**
 * Add a custom panels to attach sections too.
 */
function meanteam_twentyseventeen_customize_panels( $wp_customize ) {

	// Register a new panel.
	$wp_customize->add_panel( 'site-options', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Site Options', 'meanteam' ),
		'description'    => esc_html__( 'Other theme options.', 'meanteam' ),
	) );
}
add_action( 'customize_register', 'meanteam_twentyseventeen_customize_panels' );
