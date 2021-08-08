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
    extract( $instance );
    $title = apply_filters( 'widget_title', $instance['title'] );
    ?>
    
    <div class="col">
      <h3 class="text-center"><?php _e( 'Kontakt', 'javorka' ); ?></h3>
      <address>
        <strong><?php echo $title; ?></strong>
        <span><?php echo $street; ?></span>
        <span><?php echo $zipcode; ?>&nbsp;<?php echo $town; ?></span>
      </address>
      <div class="contact-info">
        <span><?php _e( 'Riaditeľ: ', 'javorka' ); echo $boss_mobile; ?></span>
        <span><?php _e( 'Sekretariát: ', 'javorka' ); echo $office_mobile; ?></span>
        <span><?php _e( 'Jedáleň: ', 'javorka' ); echo $chef_mobile; ?></span>
        <span><?php _e( 'E-mail: ', 'javorka' ); echo $email; ?></span>
      </div>
      <div class="additional-contact-info">
        <span>
          <?php _e( 'IČO_', 'javorka' ); echo $vat_number; ?>
        </span>
        <span>
          <a href="<?php echo $map_link ?>" target="_blank" title="<?php _e( 'Poloha školy' , 'javorka' ); ?>">
            <?php _e( 'Poloha na mape', 'javorka' ); ?>
          </a>
        </span>
      </div>
    </div>

    <?php
  }
          
  // Widget Backend 
  public function form( $instance ) {
    extract( $instance );

    ?>

    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Názov:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'street' ); ?>"><?php _e( 'Ulica a číslo:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'street' ); ?>" name="<?php echo $this->get_field_name( 'street' ); ?>" type="text" value="<?php echo esc_attr( $street ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'town' ); ?>"><?php _e( 'Mesto:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'town' ); ?>" name="<?php echo $this->get_field_name( 'town' ); ?>" type="text" value="<?php echo esc_attr( $town ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'zipcode' ); ?>"><?php _e( 'PSČ:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'zipcode' ); ?>" name="<?php echo $this->get_field_name( 'zipcode' ); ?>" type="text" value="<?php echo esc_attr( $zipcode ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'boss_mobile' ); ?>"><?php _e( 'Riaditeľ mobil:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'boss_mobile' ); ?>" name="<?php echo $this->get_field_name( 'boss_mobile' ); ?>" type="text" value="<?php echo esc_attr( $boss_mobile ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'office_mobile' ); ?>"><?php _e( 'Sekretariát telefón:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'office_mobile' ); ?>" name="<?php echo $this->get_field_name( 'office_mobile' ); ?>" type="text" value="<?php echo esc_attr( $office_mobile ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'chef_mobile' ); ?>"><?php _e( 'Jedáleň telefón:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'chef_mobile' ); ?>" name="<?php echo $this->get_field_name( 'chef_mobile' ); ?>" type="text" value="<?php echo esc_attr( $chef_mobile ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'E-mail:' ); ?></label> 
      <input type="email" class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'vat_number' ); ?>"><?php _e( 'IČO:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'vat_number' ); ?>" name="<?php echo $this->get_field_name( 'vat_number' ); ?>" type="text" value="<?php echo esc_attr( $vat_number ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'map_link' ); ?>"><?php _e( 'Odkaz na mapy s polohou školy:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'map_link' ); ?>" name="<?php echo $this->get_field_name( 'map_link' ); ?>" type="text" value="<?php echo esc_attr( $map_link ); ?>" />
    </p>

    <?php 
  }
      
  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = [];
    $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['street'] = ( !empty( $new_instance['street'] ) ) ? strip_tags( $new_instance['street'] ) : '';
    $instance['town'] = ( !empty( $new_instance['town'] ) ) ? strip_tags( $new_instance['town'] ) : '';
    $instance['zipcode'] = ( !empty( $new_instance['zipcode'] ) ) ? strip_tags( $new_instance['zipcode'] ) : '';
    $instance['boss_mobile'] = ( !empty( $new_instance['boss_mobile'] ) ) ? strip_tags( $new_instance['boss_mobile'] ) : '';
    $instance['office_mobile'] = ( !empty( $new_instance['office_mobile'] ) ) ? strip_tags( $new_instance['office_mobile'] ) : '';
    $instance['chef_mobile'] = ( !empty( $new_instance['chef_mobile'] ) ) ? strip_tags( $new_instance['chef_mobile'] ) : '';
    $instance['email'] = ( !empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
    $instance['vat_number'] = ( !empty( $new_instance['vat_number'] ) ) ? strip_tags( $new_instance['vat_number'] ) : '';
    $instance['map_link'] = ( !empty( $new_instance['map_link'] ) ) ? strip_tags( $new_instance['map_link'] ) : '';

    return $instance;
  }
} 