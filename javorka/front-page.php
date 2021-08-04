<?php defined( 'ABSPATH' ) || exit; ?>
<?php get_header(); ?>

<!-- START: Title Photo -->
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2"></div>
  </div>
</div>
<!-- END: Title Photo -->

<!-- START: Events -->
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2"></div>
  </div>
</div>
<!-- END: Events -->

<!-- START: News -->
<div class="container text-center">
  <h1 class="display-4"><?php the_title(); ?></h1>
</div>

<div class="container">
  <div class="row">
    <?php 
      if ( have_posts() ) : 
          while ( have_posts() ) : the_post();
          ?>

          <div class="col-sm-6 col-md-4">
            <div class="card">
              <a href="<?php the_permalink() ?>" target="_self" title="<?php _e( 'Čítaj ďalej článok ', 'javorka' ) . the_title(); ?>">
                <?php 
                  if (has_post_thumbnail()): 
                    the_post_thumbnail();
                  else: 
                ?>
                  <img src="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/assets/images/thumbnail-default.jpg' ?>" class="card-img-top" alt="<?php the_title(); ?>">
                <?php endif; ?>   
              </a>
              <div class="card-body">
                <a href="<?php the_permalink() ?>" target="_self" title="<?php _e( 'Čítaj ďalej článok ', 'javorka' ) . the_title(); ?>">
                  <h5 class="card-title"><?php the_title(); ?></h5>
                </a>
                <p class="card-text">
                  <?php the_excerpt(); ?>
                </p>
              </div>
            </div>
          </div>

          <?php
          endwhile;
      else :
          _e( 'Nijaké príspevky nevyhovujú zvoleným kritériám.', 'javorka' );
      endif;
    ?>
  </div>
</div>
<!-- END: News -->

<!-- START: News -->
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2"></div>
  </div>
</div>
<!-- END: News -->

<!-- START: Study programmes -->
<div class="container">
  <div class="row">

    <div class="col-sm-6 col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php _e( 'Bilingválne štúdium', 'javorka' ); ?></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    
    <div class="col-sm-6 col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php _e( '8-ročné štúdium', 'javorka' ); ?></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php _e( 'Prestupy', 'javorka' ); ?></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- END: Study programmes -->

<!-- START: Special powers -->
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2"></div>
  </div>
</div>
<!-- END: Special powers -->

<!-- START: Social networks -->
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2"></div>
  </div>
</div>
<!-- END: Social networks -->

<?php get_footer();
