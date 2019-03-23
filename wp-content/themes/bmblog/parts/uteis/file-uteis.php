<?php
/**
*Arquivos uteis para o wordpreess como paginação etc
*/
/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function example_add_dashboard_widgets() {
    wp_add_dashboard_widget(
                 'example_dashboard_widget',         // Widget slug.
                 'Bem vindo :)',         // Title.
                 'example_dashboard_widget_function' // Display function.
        );  
}
add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );
/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function example_dashboard_widget_function() {
    // Display whatever it is you want to show.
    echo '<a href="http://www.happybiz.com.br" target="_blank"><img src="' . get_template_directory_uri() . "/img/zib.png" . '"></a>' ;
} 
// link na página login do logotipo
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class='row text-center'><ul class=\"pagination margin: auto\">";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo; Primero</li></a>";
         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Anterior</a></li>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class=\"active\"><a href='#'>".$i."</li>":"<li><a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a><li>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Próximo &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Último &raquo;</a>";
         echo "<div></ul>\n";
		 
		 
     }
}
// remove todos os weigets do dashborad
function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
function remove_footer_admin () {
echo 'Desenvolvido po  <a href="http://www.wordpress.org" target="_blank">:)BIZ</a> </a></p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
// define a url para onde irá ao clicar sobre na página de login
function my_login_logo_url() {
    return 'www.happybiz.com.br';
}
// define a url para onde irá ao clicar sobre na página de login
function my_login_logo_url_title() {
    return 'HappyBiz';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
add_action( 'admin_init', 'remove_dashboard_meta' );
?>
<?php
    function comentarios($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);
        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
        <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php endif; ?>
        <?php if ($comment->comment_approved == '0') : ?>
        <em class="comment-awaiting-moderation"><?php _e('Seu comentário está aguardando aprovação! ') ?></em>
        <br />
        <?php endif; ?>
        <header>
            <h2><?php comment_author(); ?></h2>
        </header>
        <div class="comment-meta commentmetadata">
            <span>
            <?php
                /* translators: 1: date, 2: time */
                printf( __('%1$s'), get_comment_date()) ?>
            </span><?php edit_comment_link(__('(Edit)'),'  ','' );
            ?>
        </div>
        <article class="ballon-comment">
            <?php comment_text() ?>
        </article>
        <div class="reply">
        <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
        <?php if ( 'div' != $args['style'] ) : ?>
        </div>
    <?php endif;}