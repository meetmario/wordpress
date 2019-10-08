<?php
/**
 * JM Restaurant Customizer functionality
 *
 * @package WordPress
 * @subpackage jm_restaurant
 * @since JM Restaurant 1.0
 */

/**
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since JM Restaurant 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function jm_restaurant_register_theme_customizer( $wp_customize ) {
		$wp_customize->add_setting( 'jm_logo' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,'jm_logo',array(
					'label' => 'Frontpage Logo',
					'section' => 'title_tagline',
					'settings' => 'jm_logo',
					'priority' => 1
				)
			)
		);
		/*$wp_customize->add_setting( 'jm_header_bg' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,'jm_header_bg',array(
					'label' => 'Frontpage Header Background Image',
					'section' => 'title_tagline',
					'settings' => 'jm_header_bg',
					'priority' => 2
				)
			)
		);*/
}
add_action( 'customize_register', 'jm_restaurant_register_theme_customizer' );
