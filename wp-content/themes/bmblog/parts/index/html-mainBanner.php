<div id="banners">
    <?php
        $args = array(
            'post_type' => 'slider',
            'posts_per_page' => 6,
        );
        $postQuery = new WP_Query( $args );
    ?>
    <?php if($postQuery->have_posts()): ?>
        <?php while($postQuery->have_posts()): $postQuery->the_post(); ?>

            <?php 
                $img =  get_field('imagem')['url'];
            ?>
            <div class="banner-blog1" style="background-image: url(<?php echo $img; ?>)">       
                <div class="gradiente-texto-banner-main" >
                    <a href="<?php  the_field('post'); ?>">
                        <img class="img-responsive possition-flor-banner" src="<?php printImg('/img/blog/flor-bm.png'); ?>" alt="Logo Bothanica Minneral">
                        <p class="possition-texto-banner"><?php the_title(); ?></p>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>