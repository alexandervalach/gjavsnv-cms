<?php
/**
 * Template Name: Zoznam aktualít
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
  
<section class="text-center">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <?php
        $query = new WP_Query(
          [ 'posts_per_page' => 10 ]
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

    <div class="row">
      <div class="col lead text-center w-100">
        <div class="d-inline-block"><?php javorka_pagination() ?></div>
      </div><!-- /col -->
    </div> <!-- /row -->
  </div>
</section>
 
<?php get_footer();
