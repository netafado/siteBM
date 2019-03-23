<?php get_header(); ?>
    <!-- pagina principal-->
    <div="wrraper-total">
      <section id="single-page bg-light-gray">

            <article class="bg-tec bg-light-gray" >
                <?php if(have_posts()): ?>  
                    <?php while(have_posts()): the_post(); ?>                
                        <div class="container">
                            <header class="pd-80-bottom col-sm-12 pd-80-top">
                                <img class="img-responsive center-block img-resultados" src="<?php echo get_template_directory_uri() . '/img/resultados.png' ?>" />
                            </header>  
                        </div>                      
                        <div class="container-fluid">
   
                            <div id="instag" data-is
                                data-is-api="<?php echo get_template_directory_uri() . '/dist/instashow/api/index.php'; ?>"
                                data-is-source="<?php the_field('#tags'); ?>"
                                data-is-width="auto"
                                data-is-layout="grid"
                                data-is-columns="4"
                                data-is-rows="4"
                                data-is-gutter="15"
                                data-is-color-grid-load-more-button="rgb(0, 86, 32)"
                                data-is-limit="200"
                                data-is-responsive='{ "600": { "columns": 2, "rows": 62, "gutter": 10 }}'
                                data-is-lang="pt-BR">
                            </div>                 
                        </div>
                    </div>
                    <?php endwhile;?>

                <?php endif;?>         
            </article>
      </section>
      <section class="sectionLight">
        <div class="container">
            <div class="row">
                <footer class="pd-80-bottom">
                    <div class="comments-face">
                        <h4 class="text-main mg-80-top"><?php _e('Coméntarios', 'bmblog'); ?></h4>
                        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="10" data-width="100%" ></div>                
                    </div>
                </footer> 
            </div>
        </div>
      </section>
    </div>
    <?php get_footer(); ?>