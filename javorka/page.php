<?php

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="container">
  <div class="row">
    <div class="py-6 bg-light">
      <div class="container text-center">
        <h1 class="display-4"><?php the_title(); ?></h1>
      </div>
    </div>

    <div class="col-md-10 offset-md-1 py-5">
      <?php 
        if ( have_posts() ): 
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        else:
          _e( 'Hľadaným kritériám nezodpovedajú nijaké príspevky.', 'javorka' );
        endif;
      ?>
    </div>
  </div>
</div>

<?php get_footer();
