</main>
		
  <!-- START: Social networks -->
  <div class="container-fluid" id="social-networks">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center" style="padding: 20px">
          <h2><?php _e( 'Nájdete nás aj na sociálnych sieťach', 'javorka' ); ?></h2>
        
          <a href="https://www.instagram.com/javorka.official/" target="_blank" title="<?php _e( 'Prejsť na Instagram stránku Javorky', 'javorka' ) ?>">
            <img width="50px" src="<?php echo get_template_directory_uri() . '/assets/images/ig-logo-white.svg' ?>" class="d-inline-block" alt="<?php _e( 'Instagram logo', 'javorka' ) ?>">
          </a>
        
          <a href="https://www.facebook.com/javorka16" target="_blank" title="<?php _e( 'Prejsť na Facebook stránku Javorky', 'javorka' ) ?>">
            <img width="50px" src="<?php echo get_template_directory_uri() . '/assets/images/fb-logo-white.png' ?>" class="d-inline-block" alt="<?php _e( 'Facebook logo', 'javorka' ) ?>">
          </a>

          <a href="https://www.youtube.com/channel/UC0s0Orj5UeBRjSndoagCcMQ" target="_blank" title="<?php _e( 'Prejsť na Youtube kanál Javorky', 'javorka' ) ?>">
            <img width="60px" src="<?php echo get_template_directory_uri() . '/assets/images/yt-logo-white.svg' ?>" class="d-inline-block" alt="<?php _e( 'Instagram logo', 'javorka' ) ?>">
          </a>

        </div>
      </div>
    </div>
  </div>
  <!-- END: Social networks -->

  <div class="wrapper" id="wrapper-site-footer">
    <div class="container">
      <div class="row">
        <footer class="site-footer" id="site-footer">
          
          <div class="row">

            <?php
              $locations = get_nav_menu_locations();
              
              if ( array_key_exists( 'footer-1', $locations ) ):
                $menu_name = wp_get_nav_menu_name( 'footer-1' );
            ?>

            <div class="col">
              <h3><?php echo $menu_name; ?></h3>
              <?php wp_nav_menu([
                  'theme_location'    => 'footer-1',
                  'depth'             => 1,
                  'container'         => '',
                  'container_class'   => '',
                  'container_id'      => '',
                  'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
                  'menu_id'           => 'footer-1',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker()
                ]);
              ?>
            </div>
            <?php endif; ?>

            <?php 
            if ( array_key_exists( 'footer-2', $locations ) ):
              $menu_name = wp_get_nav_menu_name( 'footer-2' );
            ?>

            <div class="col">
              <h3><?php echo $menu_name; ?></h3>
              <?php wp_nav_menu([
                  'theme_location'    => 'footer-2',
                  'depth'             => 1,
                  'container'         => '',
                  'container_class'   => '',
                  'container_id'      => '',
                  'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
                  'menu_id'           => 'footer-2',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker()
                ]);
              ?>
            </div>
            <?php endif; ?>

            <?php 
            if ( array_key_exists( 'footer-3', $locations ) ):
              $menu_name = wp_get_nav_menu_name( 'footer-3' );
            ?>

            <div class="col">
              <h3><?php echo $menu_name; ?></h3>
              <?php wp_nav_menu([
                  'theme_location'    => 'footer-3',
                  'depth'             => 1,
                  'container'         => '',
                  'container_class'   => '',
                  'container_id'      => '',
                  'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
                  'menu_id'           => 'footer-3',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker()
                ]);
              ?>
            </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'page-footer' ) ): ?>
              <?php dynamic_sidebar( 'page-footer' ); ?>
            <?php endif; ?>
          </div>

          <div class="site-info text-center">
            Copyright &copy; Gymnázium Javorová, 2020 - <?php echo date('Y'); ?>
          </div><!-- .site-info -->
        </footer><!-- #colophon -->
      </div><!-- row end -->
    </div><!-- container end -->
  </div><!-- wrapper end -->

	<?php wp_footer(); ?>

	</body>
</html>

