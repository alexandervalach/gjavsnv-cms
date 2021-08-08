<?php

// Creating the widget 
class javorka_contact_widget extends WP_Widget {

  function __construct() {
      parent::__construct(
        'javorka_contact_widget', 
        __('Kontakt', 'javorka'),
        [ 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'javorka' ) ] 
      );
  }
  
  // Creating widget front-end
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    echo $args['before_widget'];
    
    if ( !empty( $title ) ) {
      echo $args['before_title'] . $title . $args['after_title'];
    }
      
    // This is where you run the code and display the output
    ?>
    
    <div class="col">
      <address>
        <strong>CSIRT.SK</strong>
        <span>Ministerstvo investícií, regionálneho rozvoja a informatizácie SR</span>
        <span>Štefánikova 882/15</span>
        <span>811 05&nbsp;Bratislava</span>
        <span>IČO: 50349287
      </address>
    </div>

    <?php
    
    echo $args['after_widget'];
  }
          
  // Widget Backend 
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    } else {
      $title = __( 'New title', 'wpb_widget_domain' );
    }
      // Widget admin form
    ?>

    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Názov menu:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>

    <?php 
  }
      
  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = [];
    $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
  }
} 