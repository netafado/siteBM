<?php 

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php echo bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- incluir as metatags para rede sociais e mobile -->
    <?php get_template_part('parts/index/html', 'metatags'); ?>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>

  </head>
  <body  <?php body_class('bg-second'); ?>>
    <div class="total">
      <!-- menu-mobile-->
      <div class="menu-mob-flutuante" id="menu-mob-flutuante" style="display:none;">
        <?php
          // menu
          $argsMenu = array(
            'menu' => 'main-menu',
            'menu_class' => 'display-menu-mob-ul',
            'menu_id' => 'menu-mob',
            'container_class' => 'display-menu-mob'
          );
          wp_nav_menu( $argsMenu );
        ?>
        
        <ul class="menu-rede-sociais">
          <li class="redes-sociais-mob">
            <a href="https://www.facebook.com/DrJBussade/" rel="noopener" target="_blank">
              <img class="redes-sociais" src="<?php echo get_template_directory_uri() . '/img/facebook-logo.png'; ?>" alt="Facebook do Dr Bussade">
            </a>
            <a href="https://www.youtube.com/channel/UCOX1xjMcnZVmV-yx0VC6Fvg" rel="noopener" target="_blank">
              <img class="redes-sociais" src="<?php echo get_template_directory_uri()  . '/img/youtube-logo.png'; ?>" alt="Facebook do Dr Bussade">
            </a>
            <a href="https://www.instagram.com/drjbussade/" rel="noopener" target="_blank">
              <img class="redes-sociais" src="<?php echo get_template_directory_uri()  . '/img/insta.png'; ?>" alt="Facebook do Dr Bussade">
            </a>
          </li>
        </ul>
        <div class="fechar-menu">
          <img src="<?php echo get_template_directory_uri() . '/img/fechar.png'; ?>" alt="Botão Fechar">
        </div>
      </div>
      <header class="bg-inverse" role="banner">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-lg-3 logo">
              <a href="<?php echo get_home_url(); ?>">
                <img class="img-responsive" src="<?php echo get_template_directory_uri() .  '/img/logo.png'; ?>" alt="Logo Dr Bussade">
              </a>              
            </div>
            <div class="col-sm-7 col-lg-8">
              <nav class="visible-md visible-sm visible-lg" role="navigation" aria-label="<?php _e("Menu principal", 'drbussade' ); ?>">

                  <?php
                    // menu
                    $argsMenuDesk = array(
                      'menu'          => 'main-menu',
                      'menu_class'    => 'menu',
                      'container'     => false,
                      'menu_id'       => 'menu-desk',
                      'walker'        => new Aria_Walker_Nav_Menu(),
                      'items_wrap'    => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>'

                    );
                    wp_nav_menu( $argsMenuDesk );
                  ?>
              </nav>
            </div>
            <div class="col-sm-2 col-lg-1 visible-md visible-sm visible-lg">
              <ul class="rede-sociais">
                <li>
                  <a href="https://www.facebook.com/DrJBussade/" rel="noopener" target="_blank">
                    <img class="redes-sociais" src="<?php echo get_template_directory_uri() . '/img/facebook-logo.png'; ?>" alt="Facebook do Dr Bussade">
                  </a>
                  <a href="https://www.youtube.com/channel/UCOX1xjMcnZVmV-yx0VC6Fvg" rel="noopener" target="_blank">
                    <img class="redes-sociais" src="<?php echo get_template_directory_uri()  . '/img/youtube-logo.png'; ?>" alt="Facebook do Dr Bussade">
                  </a>
                  <a href="https://www.instagram.com/drjbussade/" rel="noopener" target="_blank">
                    <img class="redes-sociais" src="<?php echo get_template_directory_uri()  . '/img/insta.png'; ?>" alt="Facebook do Dr Bussade">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Navegação para mob-->
        <nav class="visible-xs">
          <div class="menu-mob"><span class="icon-bar"></span><span class="icon-bar"> </span><span class="icon-bar"></span></div>
        </nav>
      </header>








