<?php
// registrar menus
function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Header Menu' , 'blogbm'),
            'menu-foter' => __( 'Menu Footer', 'blogbm' )
      )
    );
  }  
?>