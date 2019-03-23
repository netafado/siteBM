
    </div>
    <footer class="bg-main mg-80-top">
      <div class="container pd-20-top">
        <div class="row text-inverse">
          <div class="col-sm-4 col-sm-offset-4 pd-20-top pd-20-bottom">
            <div class="form-group">
              <!-- Begin Mailchimp Signup Form -->
              <style type="text/css">
                #mc_embed_signup{ clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                  We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
              </style>
                <div id="input-group">
                <form action="https://bothanicamineral.us6.list-manage.com/subscribe/post?u=cb955850df&amp;id=90050fa5c1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                  <h6 for="mce-EMAIL" style="text-align: center">Assine nossa newsletter</h6>
                  <div class="newsletterflex" style="display: flex">
                    <input type="email" value="" name="EMAIL" class="campo-email form-control" id="mce-EMAIL" placeholder="Digite seu email" style="border: 0;border-top-right-radius: 0;border-bottom-right-radius: 0;width:90%" required>
                    <input type="submit" value="OK" name="OK" id="mc-embedded-subscribe" class="btn" style="width: 50px;background-color: white;color: #82bcb6;text-align: center;padding: 0;border-radius:0;border-bottom-right-radius: 4px;border-top-right-radius: 4px;">
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cb955850df_90050fa5c1" tabindex="-1" value=""></div>
                  </div>
              </form>
              </div>

              <!--End mc_embed_signup-->
            </div>
          </div>
          <div class="col-sm-12  pd-20-top pd-20-bottom">
            <?php
          // menu
          $argsMenu = array(
            'menu' => 'menu-foter',
            'menu_class' => 'menu-footer',
            'menu_id' => 'menu-footer',
            'container_class' => 'display-menu-footer'
          );
          wp_nav_menu( $argsMenu );
        ?>
          </div>
        </div>
      </div>
      <div class="logo-biz-footer">
        <div class="container">
            <div class="col-sm-12 text-center"><img src="<?php echo get_template_directory_uri() . '/img/biz.png'; ?>" alt="Logo Happybiz"></div>
        </div>
      </div>

    </footer>
    <?php wp_footer(); ?> 
  </body>
</html>