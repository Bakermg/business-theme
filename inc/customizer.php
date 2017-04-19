<?php

function business_customize_register( $wp_customize ) {

	//Banner Section
	$wp_customize->add_section( 'banner', array(
		'title' => __( 'Banner', 'business' ),
		'descripton' => sprintf(__( 'Options for homepage banner', 'business' )),
		'priority' => 130
	));

	//Heading Setting
	$wp_customize->add_setting( 'banner_heading', array(
		'default' => _x( 'Banner Heading', 'business' ),
		'type' => 'theme_mod'
	));

	//Heading Control
	$wp_customize->add_control( 'banner_heading', array(
		'label' => __( 'Heading', 'business' ),
		'section' => 'banner',
		'priority' => 20
	));

	//Text Setting
	$wp_customize->add_setting( 'banner_text', array(
		'default' => _x( 'Welcome to the WordPress Business Theme. This theme uses the Twitter Bootstrap 3 framework and can be cusomized to you style', 'business' ),
		'type' => 'theme_mod'
	));

	//Text Control
	$wp_customize->add_control( 'banner_text', array(
		'label' => __( 'Text', 'business' ),
		'section' => 'banner',
		'priority' => 20
	));

	//Button Setting
	$wp_customize->add_setting( 'banner_btn-text', array(
		'default' => _x( 'Sign Up', 'business' ),
		'type' => 'theme_mod'
	));

	//Button Control
	$wp_customize->add_control( 'banner_btn-text', array(
		'label' => __( 'Button Text', 'business' ),
		'section' => 'banner',
		'priority' => 20
	));

	//Button URL Setting
	$wp_customize->add_setting( 'banner_btn_url', array(
		'default' => _x( 'https://google.com', 'business' ),
		'type' => 'theme_mod'
	));

	//Button URL Control
	$wp_customize->add_control( 'banner_btn_url', array(
		'label' => __( 'Button URL', 'business' ),
		'section' => 'banner',
		'priority' => 20
	));

	//Background image setting
	$wp_customize->add_setting( 'banner_image', array(
		'default' => get_bloginfo( 'template_directory' ).'/images/showcase.jpg',
		'type' => 'theme_mod'
	));

	//Background image Control
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner_image', array(
		'label' => __( 'Background Image', 'business'),
		'section' => 'banner',
		'settings' => 'banner_image'
	)));

	//Boxes Section
	$wp_customize->add_section( 'boxes', array(
		'title' => __( 'Boxes', 'business'),
		'descripton' => sprintf( __( 'Options for homepage boxes', 'business')),
		'priority' => 130
	));

	//Box 1 heading setting
	$wp_customize->add_setting( 'box1_heading', array(
		'default' => _x( 'Box 1 Heading', 'business' ),
		'type' => 'theme_mod'
	));

	//Box 1 heading contol
	$wp_customize->add_control( 'box1_heading', array(
		'label' => __( 'Box 1 Heading', 'business'),
		'section' => 'boxes',
		'priority' => 20
	));

	//Box 1 text setting
	$wp_customize->add_setting( 'box1_text', array(
		'default' => _x( 'Maecenas sed diam eget risus varius blancidi dit amet non mangen', 'business' ),
		'type' => 'theme_mod'
	));

	//Box 1 text contol
	$wp_customize->add_control( 'box1_text', array(
		'label' => __( 'Box 1 Text', 'business'),
		'section' => 'boxes',
		'priority' => 20
	));

	//Box 1 Icon setting
	$wp_customize->add_setting( 'box1_icon', array(
		'default' => _x( 'bar-chart', 'business' ),
		'type' => 'theme_mod'
	));

	//Box 1 Icon control
	$wp_customize->add_control( 'box1_icon', array(
		'label' => __( 'Box 1 icon', 'business'),
		'section' => 'boxes',
		'priority' => 20
	));


	//Box 2 heading setting
	$wp_customize->add_setting( 'box2_heading', array(
		'default' => _x( 'Box 2 Heading', 'business' ),
		'type' => 'theme_mod'
	));

	//Box 2 heading contol
	$wp_customize->add_control( 'box2_heading', array(
		'label' => __( 'Box 2 Heading', 'business'),
		'section' => 'boxes',
		'priority' => 20
	));

	//Box 2 text setting
	$wp_customize->add_setting( 'box2_text', array(
		'default' => _x( 'Maecenas sed diam eget risus varius blancidi dit amet non mangen', 'business' ),
		'type' => 'theme_mod'
	));

	//Box 2 text contol
	$wp_customize->add_control( 'box2_text', array(
		'label' => __( 'Box 2 Text', 'business'),
		'section' => 'boxes',
		'priority' => 20
	));

	//Box 2 Icon setting
	$wp_customize->add_setting( 'box2_icon', array(
		'default' => _x( 'bar-chart', 'business' ),
		'type' => 'theme_mod'
	));

	//Box 2 Icon control
	$wp_customize->add_control( 'box2_icon', array(
		'label' => __( 'Box 2 icon', 'business'),
		'section' => 'boxes',
		'priority' => 20
	));

	//Box 3 heading setting
	$wp_customize->add_setting( 'box3_heading', array(
		'default' => _x( 'Box 3 Heading', 'business' ),
		'type' => 'theme_mod'
	));

	//Box 3 heading contol
	$wp_customize->add_control( 'box3_heading', array(
		'label' => __( 'Box 3 Heading', 'business'),
		'section' => 'boxes',
		'priority' => 20
	));

	//Box 3 text setting
	$wp_customize->add_setting( 'box3_text', array(
		'default' => _x( 'Maecenas sed diam eget risus varius blancidi dit amet non mangen', 'business' ),
		'type' => 'theme_mod'
	));

	//Box 3 text contol
	$wp_customize->add_control( 'box3_text', array(
		'label' => __( 'Box 3 Text', 'business'),
		'section' => 'boxes',
		'priority' => 20
	));

	//Box 3 Icon setting
	$wp_customize->add_setting( 'box3_icon', array(
		'default' => _x( 'bar-chart', 'business' ),
		'type' => 'theme_mod'
	));

	//Box 3 Icon control
	$wp_customize->add_control( 'box3_icon', array(
		'label' => __( 'Box 3 icon', 'business'),
		'section' => 'boxes',
		'priority' => 20
	));

}

add_action( 'customize_register', 'business_customize_register');