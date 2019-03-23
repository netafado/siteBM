<section class="pd-80-top" id="autor">
    <div class="row">

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
        <div class="col-sm-9">
            <small>Autor:</small>
            <h4 class="text-main"><?php the_author() ?></h4>
            <p><?php the_author_meta( 'user_description'); ?></p>
            <p><?php the_author_meta( 'user_email'); ?></p>
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
                <?php _e('Veja todas as matérias do(a) ', 'bmblog'); ?><?php the_author(); ?>
            </a>
        </div>
    </div>
</section> 

