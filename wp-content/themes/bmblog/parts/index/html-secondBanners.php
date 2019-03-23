<?php
/**
 * Pega o post referente ao  post na linguagem correnta
 *
 */
$IDpage_bussade  = 57;
$IDpage_materias = 120;

$page_bussade = null;
$page_materias = null;

// pega o id correto de acordo com o idioma
if(function_exists('pll_get_post')){
    $IDpage_bussade       =  pll_get_post($IDpage_bussade);
    $IDpage_materias      =  pll_get_post($IDpage_materias);
}
$page_bussade  = get_post($IDpage_bussade);
$page_materias = get_post($IDpage_materias);
?>
<div class="col-sm-12 banner-small margin-banner2">
        <a class="linkTotal" href="<?php echo get_permalink($IDpage_bussade) ?>">
            <div class="banner-blog2" style="background-image:url(<?php  echo get_the_post_thumbnail_url($IDpage_bussade, 'full');  ?>)">
                <div class="gradiente-texto-banner" >
                </div>
            </div>
        </div>
        </a>
        <div class="col-sm-12 margin-banner3">
        <a class="linkTotal" href="<?php echo  get_permalink($IDpage_materias); ?>">
            <div class="banner-blog3"  style="background-image:url(<?php  echo get_the_post_thumbnail_url($IDpage_materias, 'full');  ?>)">
                <div class="gradiente-texto-banner">                    
                </div>
            </div>
        </a>
</div>