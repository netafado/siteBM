<?php get_header(); ?>
    <!-- pagina principal-->
    <div="wrraper-total">
      <section class="pd-20-top" id="single-page">
        <div class="container pd-80-bottom">
          <div class="row">
                        
            <article class="col-sm-12">
                <?php if(have_posts()): ?>  
                    <?php while(have_posts()): the_post(); ?>
                        <header class="pd-40-bottom">
                            <?php the_title( '<h1 class="single-title">', '</h1>', true ) ?>
                        </header>
                        <?php if(get_field('video')): ?>
                                    <div class="embed-container">
                                        <?php the_field('video') ?>
                                        <style>
                                            .embed-container { 
                                                position: relative; 
                                                padding-bottom: 56.25%;
                                                overflow: hidden;
                                                max-width: 100%;
                                                height: auto;
                                            } 

                                            .embed-container iframe,
                                            .embed-container object,
                                            .embed-container embed { 
                                                position: absolute;
                                                top: 0;
                                                left: 0;
                                                width: 100%;
                                                height: 100%;
                                            }
                                        </style>  
                                    </div>
                                  
                         <?php else: ?>                    
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('bm-large', array('class' => 'img-responsive img-shadow mg-40-bottom', 'alt' => get_the_title())); ?>                                  
                                <?php endif; ?>
                        <?php endif; ?>
                        <div class="content-single">
                            <?php the_content(); ?>
                        </div>
                        <!--   proximo e anterior -->        
                        <div class="pd-bottom-40">	
                            <div class="row">
                                <div class="col-xs-6 text-left ">
                                    <?php previous_post_link( '<button class="btn btn-main">%link</button>', __('<< Artigo Anterior', "bmblog")); ?>
                                </div>
                                <div class="col-xs-6  text-right">
                                    <?php next_post_link( '<button class="btn btn-main">%link</button>',  __('Próximo Artigo >>', "bmblog") ); ?>
                                </div>
                            </div>
                        
                        </div>
                        <?php get_template_part( 'parts/author/au', 'author' ); ?>
                        <footer class="pd-80-top">
                            <div class="comments-face">
                                <h4 class="text-main"><?php _e('Coméntarios', 'bmblog'); ?></h4>
                                <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="10" data-width="100%" ></div>                
                            </div>
                        </footer>            
                    <?php endwhile;?>
                <?php endif;?>        
            </article>

          </div>
        </div>
      </section>
    </div>
    <?php get_footer(); ?>