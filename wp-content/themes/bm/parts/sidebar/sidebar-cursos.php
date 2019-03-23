<?php 
// id da pagina de cursos
// sera traduzida de acordo com a lingua escolhida
$idCat = 68;
if(function_exists('pll_get_term')){
    $idCat = pll_get_term(68);}
?>

<?php
$categories = get_categories( array(
    'child_of' => $idCat,
    'order'   => 'ASC',
    'hide_empty' => false
) );
 
foreach( $categories as $category ) {
    $category_link = sprintf( 
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'bmblog' ), $category->name ) ),
        esc_html( $category->name )
    );
     
    echo '<li>' . sprintf( esc_html__( '%s', 'bmblog' ), $category_link ) . '</li> ';
} 
?>