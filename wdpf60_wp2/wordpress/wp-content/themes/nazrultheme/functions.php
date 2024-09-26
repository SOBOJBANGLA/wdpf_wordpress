<?php
function register_nazrul_menu() {
  register_nav_menu( 'primary', __( 'Main Location', 'nazrultheme' ) );
  //register_nav_menu( 'primary', __( 'Main Location', 'nazrultheme' ) );
}


add_action( 'after_setup_theme', 'register_nazrul_menu' );
?>
