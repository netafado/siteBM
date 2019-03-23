<?php 

$themaURL = get_template_directory_uri();
$lang = 'pt_BR';

if(function_exists('pll_current_language')){
  $lang = pll_current_language('locale');
}

// converte a url do facebook para a linguagem correta
$urlLocal = '"https://connect.facebook.net/'.  $lang .'/sdk.js#xfbml=1&version=v3.0&appId=238247620066072&autoLogAppEvents=1"';

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php echo bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- incluir as metatags para rede sociais e mobile -->
    <?php get_template_part('parts/index/html', 'metatags'); ?>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = <?php echo $urlLocal; ?>;
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <body <?php body_class() ?>>
    <div id="loader"><img class="loader-img img-responsive" src="https://s3-sa-east-1.amazonaws.com/happybiz-web/BOTHANICA+MINERAL/Icon/Icon+72.png" alt="Lodder"></div>
    <div class="ir-topo" id="ir-topo" style="display:none;"><a class="goesTo" id="ir-topos" href="#c-banner"><img class="seta" src="https://s3-sa-east-1.amazonaws.com/happybiz-web/BOTHANICA+MINERAL/site/seta.png" alt="Voltar para o topo"></a></div>
    
    <!-- menu mobile -->
    <?php get_template_part( 'parts/base', 'navmob' ); ?>    
    <!-- search file  include-->
    <?php get_template_part( 'parts/base', 'search' ); ?>
    <!-- Header navegação-->
    <?php get_template_part( 'parts/base', 'nav' ); ?>

    <div class="line-verde"></div>
