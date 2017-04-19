<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo( 'name' ); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <style>
      .jumbotron{background:url(<?php echo get_theme_mod( 'banner_image', get_bloginfo( 'template_url').'images/showcase.jpg'); ?>) 0 -80px;}
    </style>
  </head>

  <body <?php body_class(); ?>>
    <div class="header clearfix">
      <div class="container">
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'false',
                'menu_class'        => 'nav nav-pills pull-right',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker() 
                )
            );
        ?>
        <?php if( has_custom_logo () ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <h1><?php bloginfo( 'name' ); ?></h1>
        <?php endif; ?>
      </div>
    </div>