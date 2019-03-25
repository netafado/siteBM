<?php
$themaURL = get_template_directory_uri();
$currentLanguage = "pt-BR";
if(function_exists(pll_current_language)){
	$currentLanguage = pll_current_language('locale');
}
?>

<header id="topo">           
      <div class="borda-topo bg-main">
        <div class="container">
          <div class="row">
            <div class="rede-sociais-blog col-xs-12">
              <a href="https://www.instagram.com/bothanicamineral/?hl=pt" target="_blank" rel="noopener">
                <img src="<?php printImg ('/img/blog/icon-insta.png'); ?>" alt="Facebook"></a>
              <a href="https://www.youtube.com/channel/UCXt09yqtrEngqUL8KANHuDA" target="_blank" rel="noopener">
              <img src="<?php printImg ('/img/blog/icon-youtube.png');?>" alt="Facebook"></a>
              <a href="https://www.facebook.com/Bothanicamineral/" target="_blank" rel="noopener">
              <img src="<?php printImg ('/img/blog/icon-face.png'); ?>" alt="Facebook">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container bm-nav">
        <div class="bm-nav-main">
          <div class="logo-leort col-xs-6 col-xs-push-3 col-md-2 col-md-push-0">
            <a href="<?php echo get_home_url(); ?>">
              <img src="<?php printImg('/img/logo-topo.png'); ?>" alt="Logo Bothanica Mineral">
            </a>
          </div>
          <div class="menu-leort col-xs-3 col-xs-pull-6 col-md-10 col-md-pull-0">
            <!-- Navegação para desk-->
            <nav class="visible-md visible-lg">
              <div class="display-menu">

                <!-- menu dinamico wordpress -->
                <?php wp_nav_menu( array( 
                  'theme_location'   => 'main-menu', 
                  'menu_class'       => 'menu-principal',
                  'container'        => 'div',
                  'menu_id'          => 'menu-menu-topo',
                  'container_class'  => 'menu-desktop'
                  ) 
                  ); ?>               
            </nav>
            <!-- Navegação para mob-->
            <nav class="visible-xs visible-sm">
              <div class="menu-mob">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </div>
            </nav>
          </div>
      </div>
    </header>