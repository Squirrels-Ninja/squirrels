<?php
defined( 'ABSPATH' ) || exit;
/**
 * Squirrels Theme Customizer.
 *
 * This file is loaded inside add_action('customize_register', fn, 0)
 * so WP_Customize_Control is guaranteed to exist.
 *
 * @package Squirrels
 */

/**
 * Registers all customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function squirrels_customizer_register( WP_Customize_Manager $wp_customize ) {

    // --- Colors Panel ---
    $wp_customize->add_panel( 'squirrels_colors', array(
        'title'    => esc_html__( 'Store Colors', 'squirrels' ),
        'priority' => 30,
    ) );

    // Primary color.
    $wp_customize->add_section( 'squirrels_primary_color', array(
        'title' => esc_html__( 'Primary Color', 'squirrels' ),
        'panel' => 'squirrels_colors',
    ) );
    $wp_customize->add_setting( 'squirrels_primary_color', array(
        'default'           => '#C94F10',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'squirrels_primary_color', array(
        'label'   => esc_html__( 'Primary Color', 'squirrels' ),
        'section' => 'squirrels_primary_color',
    ) ) );

    // Accent color.
    $wp_customize->add_setting( 'squirrels_accent_color', array(
        'default'           => '#B91C1C',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'squirrels_accent_color', array(
        'label'   => esc_html__( 'Accent / Sale Color', 'squirrels' ),
        'section' => 'squirrels_primary_color',
    ) ) );

    // --- Typography ---
    $wp_customize->add_section( 'squirrels_typography', array(
        'title'    => esc_html__( 'Typography', 'squirrels' ),
        'priority' => 40,
    ) );
    $wp_customize->add_setting( 'squirrels_body_font_size', array(
        'default'           => '16',
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'squirrels_body_font_size', array(
        'label'       => esc_html__( 'Body Font Size (px)', 'squirrels' ),
        'section'     => 'squirrels_typography',
        'type'        => 'number',
        'input_attrs' => array( 'min' => 12, 'max' => 24, 'step' => 1 ),
    ) );

    // --- Layout ---
    $wp_customize->add_section( 'squirrels_layout', array(
        'title'    => esc_html__( 'Layout', 'squirrels' ),
        'priority' => 50,
    ) );
    $wp_customize->add_setting( 'squirrels_sidebar_position', array(
        'default'           => 'right',
        'sanitize_callback' => 'squirrels_sanitize_sidebar_position',
    ) );
    $wp_customize->add_control( 'squirrels_sidebar_position', array(
        'label'   => esc_html__( 'Sidebar Position', 'squirrels' ),
        'section' => 'squirrels_layout',
        'type'    => 'radio',
        'choices' => array(
            'left'  => esc_html__( 'Left', 'squirrels' ),
            'right' => esc_html__( 'Right', 'squirrels' ),
            'none'  => esc_html__( 'No Sidebar', 'squirrels' ),
        ),
    ) );

    // --- Footer ---
    $wp_customize->add_section( 'squirrels_footer', array(
        'title'    => esc_html__( 'Footer', 'squirrels' ),
        'priority' => 60,
    ) );
    $wp_customize->add_setting( 'squirrels_footer_text', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'squirrels_footer_text', array(
        'label'   => esc_html__( 'Footer Copyright Text', 'squirrels' ),
        'section' => 'squirrels_footer',
        'type'    => 'textarea',
    ) );
}
add_action( 'customize_register', 'squirrels_customizer_register', 10 );

/**
 * Sanitize sidebar position choice.
 */
function squirrels_sanitize_sidebar_position( $value ) {
    $valid = array( 'left', 'right', 'none' );
    return in_array( $value, $valid, true ) ? $value : 'right';
}

/**
 * Output inline CSS for live customizer preview.
 */
function squirrels_customizer_css() {
    $primary = get_theme_mod( 'squirrels_primary_color', '#C94F10' );
    $accent  = get_theme_mod( 'squirrels_accent_color', '#B91C1C' );
    $font_sz = absint( get_theme_mod( 'squirrels_body_font_size', 16 ) );
    ?>
    <style id="squirrels-custom-css">
        :root {
            --squirrels-primary: <?php echo esc_attr( $primary ); ?>;
            --squirrels-accent: <?php echo esc_attr( $accent ); ?>;
            --squirrels-font-size: <?php echo esc_attr( $font_sz ); ?>px;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'squirrels_customizer_css' );
