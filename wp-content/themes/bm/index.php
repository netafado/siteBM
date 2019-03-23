<?php get_header(); ?>

      <article class="container">

      <?php  get_template_part('parts/index/html', 'bussade'); ?>

      <div class="container bg-inverse mg-80-bottom">
        <div class="row">
          <?php get_search_form(); ?>

        </div>
        <div class="row mg-40-top">
          <h3 class="text-uppercase text-main text-center"><?php _e('artigos', 'bussade'); ?></h3>
        </div>
        <div class="row mg-40-top">
          
              <?php get_template_part('parts/index/index', 'artigos'); ?>
          
        </div>
      </article>

    <?php get_footer(); ?>