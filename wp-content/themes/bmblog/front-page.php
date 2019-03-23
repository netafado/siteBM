<?php get_header(); ?>
    <!-- pagina principal-->
    <div="wrraper-total">
      <?php get_template_part( 'parts/index/html', 'banners' ); ?>
      <section class="pd-80-top" id="categorias">
        <div class="container pd-80-bottom">
          <div class="row">
                        
              <?php get_template_part( 'parts/index/html', 'posts' ); ?>

            <!-- sidebar -->
            <?php get_sidebar(); ?>
          </div>
        </div>
      </section>
    </div>
    <?php get_footer(); ?>