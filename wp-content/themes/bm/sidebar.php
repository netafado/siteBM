<div class="col-md-3 col-lg-3 col-lg-offset-1 pd-15-top invisible-sm">
        <div class="barra-lateral widget">
            <h3 class="text-main titulo-barra-lateral"><?php _e( 'Categorias', 'bmblog') ?></h3>
            <ul class="link-barra-lateral" style="padding-left:0;">
                <?php
                $categories = get_categories(array(
                    'exclude' => '1'
                ));
                
                if ( ! empty( $categories ) ) {
                    foreach( $categories as $category ) {
                        echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li >';
                    } 
                }
                ?>
            </ul>
        </div>
        <?php get_template_part( 'parts/sidebar/sidebar', 'destaques' ); ?>
        <div class="barra-lateral pd-20-top widget">
            <!-- todos os cursos os posts com relação ao curso  ex: /cursos/striort-->
            <h3 class="titulo-barra-lateral text-uppercase"><?php _e( 'Cursos', 'bmblog'); ?></h3>
            <p><?php _e( 'Matérias sobre os nossos cursos:', 'bmblog' ); ?></p>
            <ul class="link-barra-lateral" style="padding-left:0;">
                <?php get_template_part( 'parts/sidebar/sidebar', 'cursos' ); ?>
            </ul>
        </div>
</div>