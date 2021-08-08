<?php

// Creating the widget 
class javorka_contact_widget extends WP_Widget {

  function __construct() {
      parent::__construct(
        'javorka_footer_menu_widget', 
        __('Navigácia v pätičke', 'javorka'),
        [ 'description' => __( 'Stĺpec pre navigáciu v pätičke', 'javorka' ) ] 
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

    <div class="widget widget_nav_menu">
      <h3 class="widgettitle"><?php echo $title ?></h3>
      <div class="menu-paticka-stlpec-1-container">
        <ul id="menu-paticka-stlpec-1" class="menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-212">
            <a href="http://localhost:8080/pre-uchadzacov/8-rocne/">8-ročné štúdium</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213">
            <a href="http://localhost:8080/pre-uchadzacov/bilingvalne-studium/">Bilingválne štúdium</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-214">
            <a href="http://localhost:8080/pre-uchadzacov/preco-studovat-u-nas/">Prečo študovať u&nbsp;nás?</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215">
            <a href="http://localhost:8080/pre-uchadzacov/studentska-rada/">Študentská rada</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216">
            <a href="http://localhost:8080/pre-uchadzacov/studijne-odbory/">Študijné odbory</a>
          </li>
        </ul>
      </div>
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