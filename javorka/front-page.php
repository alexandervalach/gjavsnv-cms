<?php defined( 'ABSPATH' ) || exit; ?>
<?php get_header(); ?>

<!-- START: Cover Photo -->
<div class="container-fluid d-none d-md-block d-lg-block d-xl-block">
  <div class="row">

    <!-- Visible on medium screen and larger -->
    <div id="cover-photo">
      <div class="container">

        <div class="cover-title p-absolute bg-primary d-none d-md-block">
          <h1><?php _e( 'Gymnázium Javorová', 'javorka' ); ?></h1>
        </div>

        <?php if ( is_active_sidebar( 'study-programs' ) ): ?>
          <a href="#study-programs" class="cover-btn p-absolute d-none d-md-block">
            <?php _e( 'Vyber si budúcnosť', 'javorka' ); ?>
          </a>
        <?php endif ?>

        <div class="cover-description p-absolute bg-darker d-none d-md-block">
          <div class="cover-text">
            <span><?php _e( 'Gymnázium v Spišskej Novej Vsi', 'javorka' ); ?></span>
            <span><?php _e( 'so zameraním na päťročné bilingválne a osemročné štúdium', 'javorka' ); ?></span>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
<!-- END: Cover Photo -->

<!-- Visible only on small screens -->
<div class="container-fluid d-block d-sm-none bg-primary">
  <div class="container">
    <div class="row">
      <div class="cover-title col-sm-12 text-center">
        <h1 style="margin-bottom: 0"><?php _e( 'Vitajte na webe Gymnázia Javorová', 'javorka' ); ?></h1>
      </div>
    </div>
  </div>
</div>

<!-- START: News -->
<div class="container-fluid" id="javorka-news">
  <div class="container">
    <div class="row">
      <a href="<?php echo '/aktuality'; ?>" title="<?php _e( 'Prejsť na aktuality' , 'javorka' ); ?>">
        <h2 class="text-center"><?php _e( 'Aktuality' , 'javorka' ); ?></h2>
      </a>
      <?php
        $query = new WP_Query(
          [ 'posts_per_page' => 4 ]
        );

        if ( $query->have_posts() ):
            while ( $query->have_posts() ): 
              $query->the_post();
            ?>

            <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
              <div class="card javorka-card">
                <a href="<?php the_permalink() ?>" target="_self" title="<?php _e( 'Čítaj ďalej článok ', 'javorka' ) . the_title(); ?>">
                  <?php 
                    if (has_post_thumbnail()): 
                      $image_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                      ?>
                        <img src="<?php echo $image_arr[0] ?>" class="card-img-top" alt="<?php the_title(); ?>">
                      <?php
                    else:
                  ?>
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/thumbnail-default.jpg' ?>" class="card-img-top" alt="<?php the_title(); ?>">
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
        else:
          _e( 'Žiadne príspevky nevyhovujú zvoleným kritériám.', 'javorka' );
        endif;
      ?>
    </div>

  </div>
</div>
<!-- END: News -->

<!-- START: Study programmes -->
<?php if ( is_active_sidebar( 'study-programs' ) ): ?>
<div class="container-fluid" id="study-programs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a href="<?php echo '/pre-uchadzacov/studijne-odbory'; ?>" title="<?php _e( 'Prejsť na študijné odbory' , 'javorka' ); ?>">
          <h2 class="text-center">
            <span class="bg-light-transparent py-2 px-4">
              <?php _e( 'Študijné odbory' , 'javorka' ); ?>
            </span>
          </h2>
        </a>
      </div>
      <?php dynamic_sidebar( 'study-programs' ); ?>
    </div>
  </div>
</div>
<?php endif; ?>
<!-- END: Study programmes -->

<!-- START: Special powers -->
<?php if ( is_active_sidebar( 'special-powers' ) ): ?>
<div class="container-fluid" id="special-powers">
  <div class="container">
    <div class="row">
      <a href="<?php echo '/pre-uchadzacov/preco-studovat-u-nas'; ?>" title="<?php _e( 'Prejsť na stránku Prečo študovať u nás?' , 'javorka' ); ?>">
        <h2 class="text-center"><?php _e( 'V čom sme iní – prečo študovať u nás?', 'javorka' ); ?></h2>
      </a>
      <?php dynamic_sidebar( 'special-powers' ); ?>
    </div>
  </div>
</div>
<?php endif; ?>
<!-- END: Special powers -->

<?php get_footer();
