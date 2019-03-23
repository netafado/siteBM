<?php
$themaURL = get_template_directory_uri();
$currentLanguage = "pt-BR";
if(function_exists(pll_current_language)){
	$currentLanguage = pll_current_language('locale');
}
?>
<div class="menu-mob-flutuante recuar" id="menu-mob-flutuante"> 
    <div class="col-sm-12">
        <div id="closeMob">
            X
        </div>   
    </div>


    <!-- menu dinamico wordpress -->
    <?php wp_nav_menu( array( 
        'theme_location' => 'main-menu', 
        'menu_class' => 'menu-principal-mobile',
        'container' => 'div',
        'menu_id' => 'menu-principal-mobile',
        'container_class' => 'menu-mobile'
    ) 
    ); ?>
    
    <div class="position-redes-sociais-mob">
        <ul class="displey-redes-sociais-mob">
            <li>
                <a href="#">
                    <img src="<?php printImg('/img/blog/icon-face.png'); ?>" alt="Faceboock"> 
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php printImg('/img/blog/icon-youtube.png'); ?>" alt="Faceboock"> 
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php printImg('/img/blog/icon-insta.png'); ?>" alt="Faceboock">
                </a>
            </li>
        </ul>
    </div>

</div>