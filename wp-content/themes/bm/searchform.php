<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="row pd-40-top">
      <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">
        <div class="input-group">
            <input type="text"  name="s" id="s" class="form-control input-lg" placeholder="<?php _e('Buscar', 'bussade'); ?>"; />
            <span class="input-group-btn">
              <button type="submit" class="btn btn-main submit" id="searchsubmit"  >
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </span>
        </div>	
      </div>
    </div>
</form> 