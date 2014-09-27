<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _egukbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> role="document">
<div id="page" class="hfeed site container theme-showcase">
  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <a class="skip-link sr-only" href="#content"><?php _e( 'Skip to content', '_egukbasetheme' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="site-branding">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="sr-only"><?php bloginfo( 'name' ); ?></span></a></h1>

      <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    </div>
    <div class="site-navigation">
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <?php
              wp_nav_menu( array(
                'menu'            => 'primary',
                'theme_location'  => 'primary',
                'depth'           => 2,
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'nav navbar-nav',
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker())
              );
          ?>
          </div>
      </nav>
    </div>
  </header><!-- #masthead -->

  <div id="content" class="site-content">
