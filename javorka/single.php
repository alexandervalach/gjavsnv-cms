<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) : 
  while ( have_posts() ) : the_post();
  ?>

  <article class="container p-5">
    
    <header class="row text-center">
      <div class="col-md-12">
        <?php if ( has_category() ): ?>
          <div class="entry-categories">
            <span class="screen-reader-text"><?php _e( 'Kategórie', 'javorka' ); ?></span>
            <div class="entry-categories-inner">
              <?php the_category( ' ' ); ?>
            </div><!-- .entry-categories-inner -->
          </div><!-- .entry-categories -->
        <?php endif; ?>
        <h1><?php the_title(); ?></h1>
        </div><!-- /col -->
    </header>

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <?php the_content(); ?>

        <footer class="post-meta text-primary" id="single-post-meta">
          <?php edit_post_link( __( 'Upraviť príspevok', 'javorka' ), '<p class="text-start">', '</p>' ); ?>
          
          <p class="post-date text-end">
            <?php _e( 'Aktualizované', 'javorka' ); ?>
            <time><?php the_date(); ?></time>
          </p>

        </footer> 
      </div><!-- /col -->
    </div>
  
  </article>

<?php
    endwhile;
  else:
    _e( 'Sorry, no posts matched your criteria.', 'javorka' );
  endif;
?>

<?php get_footer();
