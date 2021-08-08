</main>
		
  <div class="wrapper bg-primary" id="wrapper-site-footer">
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

