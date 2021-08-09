<?php

// Creating the widget 
class javorka_card_widget extends WP_Widget {

  function __construct() {
      parent::__construct(
        'javorka_card_widget', 
        __('Karta', 'javorka'),
        [ 'description' => __( 'Karta s nadpisom, odkazom a stručným popisom', 'javorka' ) ] 
      );
  }
  
  // Creating widget front-end
  public function widget( $args, $instance ) {
    extract( $instance );
    $title = apply_filters( 'widget_title', $title );
    // This is where you run the code and display the output
    ?>

    <div class="col-sm-12 col-md-6 col-lg-4 d-flex">
      <div class="card javorka-card text-center">
        <div class="card-body">

          <?php if ( !empty($link) && $link != "#" ): ?>
            <a href="<?php echo $link ?>" target="_blank" class="card-link">
              <h3 class="card-title"><?php echo $title ?></h3>
            </a>
          <?php else: ?>
            <h3 class="card-title"><?php echo $title ?></h3>
          <?php endif; ?>
           
          <?php if ( !empty($description) ): ?>
            <p class="card-text"><?php echo $description ?></p>
          <?php endif; ?>

        </div>
      </div>
    </div>

    <?php
  }
          
  // Widget Backend 
  public function form( $instance ) {
    $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
    $link = isset( $instance[ 'link' ] ) ? $instance[ 'link' ] : '';
    $description = isset( $instance[ 'description' ] ) ? $instance[ 'description' ] : '';

    // Widget admin form
    ?>

    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Názov programu:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Odkaz na stránku programu:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Stručný opis:', 'javorka' ); ?></label>
      <textarea class="widefat" rows="16" cols="16" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>"><?php echo $description; ?></textarea>
    </p>

    <?php 
  }
      
  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = [];
    $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['link'] = ( !empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
    $instance['description'] = ( !empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
    return $instance;
  }
} 