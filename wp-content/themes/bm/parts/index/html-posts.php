
<?php 
// controle da paginação
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
    'posts_per_page' => 4,
	'paged' => $paged
);
// pegar os ultimos posts
$homePost = new WP_Query( $args ); ?>

<div class="col-md-9 col-lg-8" id="home">
    <h2 class="text-main titulo-categoria-post">
        <?php _e('Últimos artigos', 'bmblog'); ?>
    </h2>

<?php if( $homePost->have_posts() ): ?>
    <?php while( $homePost->have_posts() ): $homePost->the_post(); ?>
        <div class="post">
            <a href="<?php the_permalink() ?>">
                <?php if(has_post_thumbnail( )): ?>
                    <?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive', 'alt' => get_the_title() )); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() . '/img/default-img.jpg' ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
                <?php endif; ?>
            </a>

            <div class="content-post">

                <h3 class="text-main titulo-post"><?php the_title();?></h3>
                <p class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></p>
                <p><?php the_excerpt() ?></p>
                <p>
                    <a class="link-do-blog" href="<?php the_permalink( ); ?>"><?php _e( 'LEIA MAIS', 'bmblog'); ?></a>
                </p>
                <p> 
            </div>
           
        </div>
    <?php endwhile; ?>
        <div id="pagination" class="clearfix">
            <?php 				
				// Páginação 
				if (function_exists("pagination")) {
					pagination($homePost->max_num_pages, 4);
				}; 
			?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?> 
</div> 