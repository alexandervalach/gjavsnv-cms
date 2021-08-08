<?php defined( 'ABSPATH' ) || exit; ?>
<?php get_header(); ?>

<!-- START: Cover Photo -->
<div class="container-fluid">
  <div class="row">
    <div id="cover-photo">

    <div class="container">
      <div class="cover-caption d-none d-md-block home-content">
        <div class="cover-title text-start">
          <h2>Gymnázium Javorová</h2>
        </div>
        <div class="cover-text">
          Gymnázium v Spišskej Novej Vsi so zameraním na päťročné bilingválne a osemročné štúdium
        </div>
      </div>
    </div>

    </div>
  </div>
</div>
<!-- END: Cover Photo -->

<!-- START: News -->
<!-- Title for SEO and Screen Readers -->
<div class="container text-center d-none">
  <h1><?php echo get_bloginfo( 'name' ); ?></h1>
</div>

<div class="container">
  <div class="row">
    <h2 class="text-center"><?php _e( 'Aktuality' , 'javorka' ); ?></h2>
    <?php 
      $args = [
        'posts_per_page' => 3
      ];

      $query = new WP_Query( $args );

      if ( have_posts() ):
          while ( $query->have_posts() ): 
            $query->the_post();
          ?>

          <div class="col d-flex">
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
<!-- END: News -->

<!-- START: Study programmes -->
<?php if ( is_active_sidebar( 'study-programs' ) ): ?>
<div class="container-fluid" id="study-programs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center bg-light-transparent"><?php _e( 'Formy štúdia' , 'javorka' ); ?></h2>
      </div>
      <?php dynamic_sidebar( 'study-programs' ); ?>
    </div>
  </div>
</div>
<?php endif; ?>
<!-- END: Study programmes -->

<!-- START: Special powers -->
<?php if ( is_active_sidebar( 'special-powers' ) ): ?>
<div class="container">
  <div class="row">
    <h2 class="text-center"><?php _e( 'V čom sme iní – prečo študovať u nás?', 'javorka' ); ?></h2>
    <?php dynamic_sidebar( 'special-powers' ); ?>
  </div>
</div>
<?php endif; ?>
<!-- END: Special powers -->

<?php get_footer();
