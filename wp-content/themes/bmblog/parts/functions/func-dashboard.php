<?php
function logo_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo-topo.png);
            height:65px;
            width:320px;
            background-size: auto;
            background-repeat: no-repeat;
        }
    </style>
  <?php }
  add_action( 'login_enqueue_scripts', 'logo_login_logo' );
?>