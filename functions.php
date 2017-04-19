<?php

// Register Nav Walker class
  require_once('wp_bootstrap_navwalker.php');

  

	//Theme Support
function business_theme_setup() {

	//Logo support
	add_theme_support( 'custom-logo' );

	//Register Menu
	register_nav_menus( array(
		'primary' => __( 'Primary Menu' )
		) );

}

add_action( 'after_setup_theme', 'business_theme_setup' );

//Widgets locations
function init_widgets( $id ) {
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		register_sidebar(array(
			'name'          => 'Content Region 1',
			'id'            => 'content-region-1',
			'before_widget' => '<section class="row content-region-1 pt50 pb40">
      <div class="container">
        <div class="col-md-12">',
			'after_widget'  => '</div></div></section>',
			'before_title'  => '<h1>',
			'after_title'   => '</h1>'
		));

		register_sidebar(array(
			'name'          => 'Content Region 2',
			'id'            => 'content-region-2',
			'before_widget' => '<section class="row content-region-2 pt40 pb40">
      <div class="container">',
			'after_widget'  => '</div></section>',
			'before_title'  => '<h1>',
			'after_title'   => '</h1>'
		));

		register_sidebar(array(
			'name'          => 'Footer 1',
			'id'            => 'footer-1',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));

		register_sidebar(array(
			'name'          => 'Footer 2',
			'id'            => 'footer-2',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));

		register_sidebar(array(
			'name'          => 'Footer 3',
			'id'            => 'footer-3',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));
	
}

add_action( 'widgets_init', 'init_widgets' );

require get_template_directory() . '/inc/customizer.php';