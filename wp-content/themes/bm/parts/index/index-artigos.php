<?php 
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>

<?php            
  $args = array(
    'posts_per_page' => 6,
    'paged' => $paged
  );
  $posts = new WP_Query($args);
  
  ?>
  
  <?php if( $posts->have_posts()) : ?>
    <div class="artigos text-center flex-artigo clearfix" id="artigos">
      <?php while( $posts->have_posts()):  $posts->the_post(); ?>
        <div class="col-sm-6 text-justify">        
          <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('medium', array('class' => 'img-responsive center-block img-responsive', 'alt' => get_the_title())); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri() . '/img/default-img.jpg' ?>" alt="<?php the_title(); ?>" class="img-responsive"/> 
          <?php endif; ?>

          <h5 class="text-uppercase text-third"><?php  the_title(); ?></h5>

          <p class="text-main data-artigo"><?php the_time( get_option( 'date_format' ) ); ?></p>

          <p class="text-left texto-artigo">
          <?php the_excerpt() ?>
          </p>
          <a href="<?php the_permalink() ?>"class="text-uppercase text-main leia-mais">leia mais</a>
        </div>
      <?php endwhile; ?>
      </div>
          <div id="pagination" class="clearfix">
              <?php 				
          // Páginação 
          if (function_exists("pagination")) {
            pagination($homePost->max_num_pages, 6);
          }; 
        ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?> 