</main>
	<?php if (function_exists("lc_custom_footer")) lc_custom_footer(); else { ?>
		<?php if (is_active_sidebar( 'footerfull' )): ?>
		<div class="wrapper bg-light mt-5 py-5" id="wrapper-footer-widgets">
			
			<div class="container mb-5">
				
				<div class="row">
					<?php dynamic_sidebar( 'footerfull' ); ?>
				</div>

			</div>
		</div>
  <?php endif ?>
		
  <div class="wrapper" id="wrapper-footer-colophon">
    <div class="container-fluid">
      <div class="row">
        <footer class="site-footer bg-primary text-center" id="colophon">
          <div class="row align-items-center">
            <div class="col">
              One of three columns
            </div>
            <div class="col">
              One of three columns
            </div>
            <div class="col">
              One of three columns
            </div>
          </div>
          <div class="site-info">
            Copyright &copy; 2020 - <?php echo date('Y'); ?>
          </div><!-- .site-info -->
        </footer><!-- #colophon -->
      </div><!-- row end -->
    </div><!-- container end -->
  </div><!-- wrapper end -->
		
	<?php 
	} //END ELSE CASE ?>


	<?php wp_footer(); ?>

	</body>
</html>

