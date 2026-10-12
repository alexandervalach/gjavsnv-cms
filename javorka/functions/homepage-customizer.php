<?php
/** Homepage banner controls in Appearance > Customize. */
defined( 'ABSPATH' ) || exit;

function javorka_customize_homepage( $wp_customize ) {
    $wp_customize->add_section( 'javorka_homepage', array(
        'title'       => __( 'Úvodná stránka – banner', 'javorka' ),
        'priority'    => 35,
        'description' => __( 'Vyberte banner a zapnite alebo vypnite texty a tlačidlo nad ním.', 'javorka' ),
    ) );

    $wp_customize->add_setting( 'javorka_banner_version', array(
        'default'           => 'new',
        'sanitize_callback' => 'javorka_sanitize_banner_version',
    ) );
    $wp_customize->add_control( 'javorka_banner_version', array(
        'label'   => __( 'Ktorý banner zobraziť?', 'javorka' ),
        'section' => 'javorka_homepage',
        'type'    => 'radio',
        'choices' => array(
            'new'      => __( 'Nový banner školy', 'javorka' ),
            'original' => __( 'Pôvodný banner s dievčaťom', 'javorka' ),
        ),
    ) );

    $wp_customize->add_setting( 'javorka_banner_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'javorka_banner_image',
        array(
            'label'       => __( 'Vlastný obrázok banneru', 'javorka' ),
            'description' => __( 'Voliteľné. Ak nahráte obrázok, nahradí zvolený banner. Odstránením sa vrátite k vybranému banneru vyššie. Odporúčaný rozmer: 1920 × 488 px.', 'javorka' ),
            'section'     => 'javorka_homepage',
        )
    ) );

    $wp_customize->add_setting( 'javorka_banner_overlays', array(
        'default'           => false,
        'sanitize_callback' => 'javorka_sanitize_checkbox',
    ) );
    $wp_customize->add_control( 'javorka_banner_overlays', array(
        'label'       => __( 'Zobraziť nad bannerom nadpis, tlačidlo a sivý textový blok', 'javorka' ),
        'section'     => 'javorka_homepage',
        'type'        => 'checkbox',
    ) );
}
add_action( 'customize_register', 'javorka_customize_homepage' );

function javorka_sanitize_banner_version( $value ) {
    return in_array( $value, array( 'new', 'original' ), true ) ? $value : 'new';
}

function javorka_sanitize_checkbox( $value ) {
    return (bool) $value;
}
