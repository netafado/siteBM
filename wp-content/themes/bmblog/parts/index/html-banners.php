<?php 
/**
 * Parte referentes aos banners da index
 * Página que direciona para a página do drBussade
 * E a Bothanica Mineral na midia.
 */
$args = array(
  'post_type' => 'sliders',
);
$loop = new WP_Query( $args );
$banners_home = get_field( 'imagem');
?>
<section class="relative" id="banners">
    <img class="bandeira" src="<?php printImg('/img/tag-bm.png');?>" alt="Bothanica Mineral">
      <div class="container-fluid" id="banner-container">
        <div class="row">
          <div id="banner"> 
            <?php if($loop->have_posts()){
                    while($loop->have_posts()){
                      $loop->the_post();?>
            <div class="c-banner bg-lipo" style="backgorund-image:url(<?php echo $bg; ?>));">
              <div class="centralizar">
                <div class="col-xs-12 col-sm-5 col-md-7">
                  <div class="texto-banner">
                    <h2 class="text-second text-center banner-title-lipo"><span class="text-main bold text-uppercase" style="color:#009c7f;"><?php the_title(); ?><br> </span></h2>
                    <h4 class="text-cinza"><?php the_content(); ?></h4>
                    <p><a href="https://lipoesculturagessada.com.br/" target="_blank"><?php get_field('link');?></a></p>
                  </div>
                </div>
              </div>
            </div>
            <?php  }
                  }?>
          </div>
        </div>
      </div>
    </section>