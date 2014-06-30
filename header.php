<!DOCTYPE html>
<html <?php language_attributes('html'); ?>>
  <head>
    <meta charset="utf-8">
    <!--
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php bloginfo('name'); ?> <?php if(!is_home() || !is_front_page()) { wp_title(); } ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php 
      $wpsbreadcrumb = new WPS_Breadcrumb_Framewrok; 
      $wpsbreadcrumb->the_breadcrumb_css();
      wp_head(); 
    ?>
  </head>
  <body <?php body_class(); ?>>
	<header class="container">
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
          </div>
            <?php
      				wp_nav_menu( array(
      					'theme_location'    => 'primary-menu',
      					'depth'             => 0,
      					'container'         => 'div',
      					'container_class'   => 'collapse navbar-collapse',
      					'container_id'      => 'bs-example-navbar-collapse-1',
      					'menu_class'        => 'nav navbar-nav',
      					)
      				);				
            ?>
        </div>
      </div>		
	</header>