<?php

$args = array(
    'post_type' => 'post',
    'category_name' => 'destaque'
);


$posts = new WP_Query( $args );

?>

<div class="barra-lateral pd-20-top widget">
    <h3 class="text-main titulo-barra-lateral"><?php _e( 'Destaques', 'bmblog') ?></h3>
    <ul class="link-barra-lateral" style="padding-left:0;">
        <?php  if($posts->have_posts()): ?>
            <?php while($posts->have_posts()): $posts->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
</div>
