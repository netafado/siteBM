<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
          <input type="text"  name="s" id="s" class="form-control input-lg" placeholder="<?php _e('Buscar', 'bmblog'); ?>"; />
          <span class="input-group-btn">
            <button type="submit" class="btn btn-main submit" id="searchsubmit"  style="background-color: transparent;">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </span>
      </div>		
</form> 