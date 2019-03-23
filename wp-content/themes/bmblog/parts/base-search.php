<div class="campo-busca-inativo" id="busca">           
      <?php get_search_form(); ?>
      <p class="fechar-busca" for="buscar">X </p>
    </div>
    <div class="menu-mob-flutuante" id="menu-mob-flutuante" style="display:none;">
      <ul class="display-menu-mob">
        <li>
          <div class="relative" id="custom-search-input" style="max-width:220px;">
            <div class="input-group col-md-12"><input type="text" class="form-control input-lg" placeholder="Buscar" /><span class="input-group-btn">
                <button class="btn btn-main" type="button" style="background-color: transparent;"><i class="glyphicon glyphicon-search"></i></button></span></div>
          </div>
        </li>
      </ul>
      <div class="fechar-menu"><img src="<?php printImg('img/fechar.png'); ?>" alt="Botão Fechar"></div>
    </div>