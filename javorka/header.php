<?php defined( 'ABSPATH' ) || exit; ?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- wp_head begin -->
    <?php wp_head(); ?>
    <!-- wp_head end -->
  </head>
  <body <?php body_class(); ?> >
    <?php wp_body_open(); ?>  
    
    <?php if(function_exists('lc_custom_header')) lc_custom_header(); else {
      
      //STANDARD NAV
      
      if (get_theme_mod("enable_topbar") ) : ?>
        <!-- ******************* The Topbar Area ******************* -->
        <div id="wrapper-topbar">
          <div class="container">
            <div class="row">
              <div id="topbar-content" class="col-md-12 text-left text-center text-md-left small"> 
                <?php echo do_shortcode(get_theme_mod('topbar_content')) ?>	
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        

        <!-- ******************* The Navbar Area ******************* -->
        <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

          <a class="skip-link visually-hidden-focusable" href="#theme-main"><?php esc_html_e( 'Skip to content', 'javorka' ); ?></a>

          <nav class="navbar fixed-top navbar-expand-lg" aria-label="Main Navigation" >
            <div class="container">
              <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
                <img width="150px" src="<?php echo get_template_directory_uri() . '/assets/images/javorka.svg' ?>" alt="<?php _e( 'Javorka logo', 'javorka' ) ?>" />
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php wp_nav_menu([
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => '',
                  'container_class'   => '',
                  'container_id'      => '',
                  'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
                  'menu_id'           => 'main-menu',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker()
                ]);
                
                ?>
              </div>
            </div>
          </nav> <!-- .site-navigation -->

        </div><!-- #wrapper-navbar end -->

    <?php 
    } // END ELSE CASE 
    ?>

<main id='theme-main'>