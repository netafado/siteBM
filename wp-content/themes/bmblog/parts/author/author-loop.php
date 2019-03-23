    <?php
    $term = get_queried_object();
    $image = get_field('imagem', $term);
      
    ?><!-- pagina principal-->
    <div="wrraper-total">
      <section class="pd-20-top bg-tec bg-light-gray pd-80-top" id="single-page">
        <section class="container">
        
            <div id="author-info" class="row clearfix pd-20-top  pd-40-bottom">
                <?php 
                        $author_id = get_the_author_meta('ID');
                        $img_author = get_field('img_author',  'user_'. $author_id);
                        if(!$img_author){
                            $img_author = wp_get_attachment_image_url( 337, 'medium', icon, array('alt' => get_the_title(), 'class'=> "img-responsive") ); 
                        }
                    ?>
                    <div class="col-md-3 col-sm-4" >
                        <div class="img-author back-contain square" style="background-image:url(<?php echo $img_author; ?>)">
                        </div>
                    </div>

                    <div class="col-md-8 col-md-offset-1 col-sm-8">
                        <h3 class="text-main text-left"><?php wp_title(''); ?></h3>
                        <p><?php the_author_meta( 'user_description'); ?></p>
                        <p><?php the_author_meta( 'user_email'); ?></p>
                    </div>
                </div> <!-- author-info end -->
        
        </section>
        <div class="container pd-80-bottom ">
          <div class="row">
            <article id="author-info" class="col-sm-12">
                 
                 <h3 class="pd-40-top pd-40-bottom"><?php _e('Matérias do autor(a):'); ?></h3> 
          
                <div class="row eq-height ">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 mg-40-bottom">
                                <div class="post-item">
                                    <a href="<?php the_permalink( ); ?>">                                    
                                        <?php if( has_post_thumbnail( ) ): ?>                                    
                                            <?php the_post_thumbnail( 'large', array('alt' => get_the_title(), 'class'=> "img-responsive")); ?>
                                        <?php else: ?>
                                            <?php $img =  wp_get_attachment_image( 337, 'medium', icon, array('alt' => get_the_title(), 'class'=> "img-responsive") ); ?>
                                            <?php echo ($img ); ?>
                                        <?php endif;?>
                                    </a>
                                    <div class="post-info">
                                        <a href="<?php the_permalink( ); ?>">
                                            <h4 class="util-same-size text-left"><?php the_title(); ?></h4>
                                        </a> 
                                        <a class="link-do-blog" href="<?php the_permalink( ); ?>"><?php _e( 'LEIA MAIS', 'bmblog'); ?></a>
                                    
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