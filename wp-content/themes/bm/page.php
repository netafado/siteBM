<?php get_header(); ?>
    <!-- pagina principal-->
    <div="wrraper-total">
      <section class="pd-80-top" id="single-page">
        <div class="container pd-80-bottom padding-bg">
          <div class="row">
                        
            <article class="col-sm-12">
                <?php if(have_posts()): ?>  
                    <?php while(have_posts()): the_post(); ?>
                        <header class="pd-40-bottom">
                            <?php the_title( '<h1 class="single-title text-main">', '</h1>', true ) ?>
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
                                    <?php the_post_thumbnail('full', array('class' => 'img-responsive img-shadow', 'alt' => get_the_title())); ?>                                    
                                <?php endif; ?>
                        <?php endif; ?>
                        <div class="content-single">
                            <?php the_content(); ?>
                        </div>
          
                    <?php endwhile;?>
                <?php endif;?>        
            </article>

          </div>
        </div>
      </section>
    </div>
    <?php get_footer(); ?>