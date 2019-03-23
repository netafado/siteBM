    <?php
    $term = get_queried_object();
    $image = get_field('imagem', $term);
      
    ?><!-- pagina principal-->
    <div="wrraper-total">
      <section class="pd-20-top bg-tec bg-light-gray" id="single-page">
        <div class="container pd-80-bottom ">
          <div class="row">
                        
            <article class="col-sm-12">
                <?php if($image): ?>
                    <img class="img-responsive center-block pd-40-bottom pd-40-top" src="<?php echo $image; ?>" alt="categoria">
                <?php else: ?>
                    <h1 class="text-center pd-40-bottom text-main"><?php wp_title(''); ?></h1>      
                <?php endif; ?>
          
                <div class="row eq-height">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 mg-40-bottom">
                                <div class="post-item">
                                    <a href="<?php the_permalink( ); ?>">                                    
                                        <?php if( has_post_thumbnail( ) ): ?>                                    
                                            <?php the_post_thumbnail( 'medium', array('alt' => get_the_title(), 'class'=> "img-responsive")); ?>
                                        <?php else: ?>
                                            <?php $img =  wp_get_attachment_image( 433, 'medium', icon, array('alt' => get_the_title(), 'class'=> "img-responsive") ); ?>
                                            <?php echo ($img ); ?>
                                        <?php endif;?>
                                    </a>
                                    <div class="post-info">
                                        <a href="<?php the_permalink( ); ?>">
                                            <h4 class="util-same-size"><?php the_title(); ?></h4>
                                        </a> 
                                        <a class="link-do-blog" href="<?php the_permalink( ); ?>"><?php _e( 'ASSISTA', 'bmblog'); ?></a>                                    
                                    </div>
                                    
                                </div>
                            </div>                            
                        <?php endwhile; ?>
                </div>
                <div id="pagination " class="clearfix row pagBM">			
                        <?php 
                            if (function_exists("pagination")) {
                                pagination(null, 3);
                            }; 
                        ?>
                </div>
                    <?php else: ?>
                            <?php get_template_part( 'parts/none', 'post' ); ?>
                    <?php endif; ?>
                
            </article>

          </div>
        </div>
      </section>
    </div>