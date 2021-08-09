</main>
	
  <!-- START: Partners -->
  <div id="partners" class="container-fluid pb-5">
    <div class="container">
      <div class="row">

        <div class="col-12 section-header">
          <h2>
            <span class="bg-light-transparent py-2 px-4">
              <?php _e( 'Partneri', 'javorka' ); ?>
            </span>
          </h2>
        </div>

        <div class="col-sm-10 col-md-5 mx-auto mb-2 pt-2 pb-4 text-center bg-light-transparent">
          <h3><?php _e( 'Zriadovateľ školy', 'javorka' ); ?></h3>
          <a href="https://web.vucke.sk/sk/" target="_blank" title="<?php _e( 'Prejsť na stránku Košického samosprávneho kraja', 'javorka' ) ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/ksk-logo.png' ?>" class="img-fluid" alt="<?php _e( 'Instagram logo', 'javorka' ) ?>">
          </a>
        </div>

        <div class="col-sm-10 col-md-5 mx-auto mb-2 pt-2 pb-4 text-center bg-light-transparent">
          <h3><?php _e( 'Cisco Networking Academy', 'javorka' ); ?></h3>
          <a href="https://www.netacad.com/" target="_blank" title="<?php _e( 'Prejsť na stránku Košického samosprávneho kraja', 'javorka' ) ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/cna-logo.svg' ?>" class="img-fluid" alt="<?php _e( 'Instagram logo', 'javorka' ) ?>">
          </a>
        </div>

      </div>
    </div>
  </div>
  <!-- END: Partners -->

  <!-- START: Social networks -->
  <div id="social-networks" class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-12 section-header">
          <h2><?php _e( 'Nájdete nás aj na sociálnych sieťach', 'javorka' ); ?></h2>
        </div>

        <div class="col-12 text-center pb-3">
          <a href="https://www.instagram.com/javorka.official/" target="_blank" title="<?php _e( 'Prejsť na Instagram stránku Javorky', 'javorka' ) ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/ig-logo-white.svg' ?>" class="d-inline-block" alt="<?php _e( 'Instagram logo', 'javorka' ) ?>">
          </a>
          <a href="https://www.facebook.com/javorka16" target="_blank" title="<?php _e( 'Prejsť na Facebook stránku Javorky', 'javorka' ) ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/fb-logo-white.png' ?>" class="d-inline-block" alt="<?php _e( 'Facebook logo', 'javorka' ) ?>">
          </a>
          <a href="https://www.youtube.com/channel/UC0s0Orj5UeBRjSndoagCcMQ" target="_blank" title="<?php _e( 'Prejsť na Youtube kanál Javorky', 'javorka' ) ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/yt-logo-white.svg' ?>" class="d-inline-block" alt="<?php _e( 'Instagram logo', 'javorka' ) ?>">
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
          
          <div class="row d-none d-md-flex">
            <?php
              $locations = get_nav_menu_locations();

              for ($i = 1; $i <= 3; $i++):
                $theme_location = 'footer-' . $i;

                if ( array_key_exists( $theme_location, $locations ) ):
                  $menu_name = wp_get_nav_menu_name( $theme_location );
            ?>
              <div class="col-sm-12 col-md-6 col-lg-3">
                <h3><?php echo $menu_name; ?></h3>
                <?php wp_nav_menu([
                    'theme_location'    => $theme_location,
                    'depth'             => 1,
                    'container'         => '',
                    'container_class'   => '',
                    'container_id'      => '',
                    'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
                    'menu_id'           => $theme_location,
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                  ]);
                ?>
              </div>
              <?php endif; ?>
            <?php endfor; ?>

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

