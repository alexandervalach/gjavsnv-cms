</main>
		
  <div class="wrapper" id="wrapper-footer-colophon">
    <div class="container-fluid">
      <div class="row">
        <footer class="site-footer bg-primary text-center" id="colophon">
          
          <div class="row align-items-center">
            <?php if ( is_active_sidebar( 'page-footer' ) ): ?>
              <?php dynamic_sidebar( 'page-footer' ); ?>
            <?php endif; ?>
          </div>

          <div class="site-info">
            Copyright &copy; Gymnázium Javorová, 2020 - <?php echo date('Y'); ?>
          </div><!-- .site-info -->
        </footer><!-- #colophon -->
      </div><!-- row end -->
    </div><!-- container end -->
  </div><!-- wrapper end -->

	<?php wp_footer(); ?>

	</body>
</html>

