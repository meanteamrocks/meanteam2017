<?php
/**
 * Customizer sections.
 *
 * @package MEAN Team
 */

/**
 * Register the section sections.
 */
function meanteam_twentyseventeen_customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'meanteam_twentyseventeen_additional_scripts_section',
		array(
			'title'    => esc_html__( 'Additional Scripts', 'meanteam' ),
			'priority' => 10,
			'panel'    => 'site-options',
		)
	);

	// Register a footer section.
	$wp_customize->add_section(
		'meanteam_twentyseventeen_footer_section',
		array(
			'title'    => esc_html__( 'Footer Customizations', 'meanteam' ),
			'priority' => 90,
			'panel'    => 'site-options',
		)
	);
}
add_action( 'customize_register', 'meanteam_twentyseventeen_customize_sections' );
