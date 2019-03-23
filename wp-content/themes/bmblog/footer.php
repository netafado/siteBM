<footer class="bg-main">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class=" form-group">
              <h3 class="titulo-barra-lateral"><?php _e('NEWSLETTER', 'bmblog'); ?></h3>
              <div>
                <!--mailchimp -->
                <!-- Begin MailChimp Signup Form -->
                <style type="text/css">
                  #mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
                  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    #mc_embed_signup_scroll .row div{
                      padding-right: 0 !important;
                      padding-left: 0 !important
                    } 
                    #mc_embed_signup_scroll input{
                      width: 80%
                    }
                </style>
                <div id="mc_embed_signup clearfix">
                <form action="https://bothanicamineral.us6.list-manage.com/subscribe/post?u=cb955850df&amp;id=c5a90393f5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll col-sm-12">

                    <div class="col-xs-10 col-sm-10" style="padding: 0 0">
                      <input type="email" value="" name="EMAIL" class="email input-email input-lg form-control color-branco" id="mce-EMAIL" placeholder="Seu e-mail" required style="width: 100%;">
                    </div>
                    <div class="col-xs-2 col-sm-2" style="padding: 0 0">
                      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cb955850df_c5a90393f5" tabindex="-1" value=""></div>
                      <input type="submit" value="ok" name="subscribe" id="mc-embedded-subscribe" style="height:46px; width:100%; margin-bottom: 30px" class="btn btn-default btn-block button input-group-addon">
                      </div>
                    </div>

                </form>
                </div>

                <!--End mc_embed_signup-->
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <h5 class="bold">#BOTHANICA MINERAL</h5>
              <div data-is
                data-is-api="<?php echo get_template_directory_uri() . '/dist/instashow/api/index.php'; ?>"
                data-is-source="@bothanicamineral"
                data-is-width="auto"
                data-is-layout="grid"
                data-is-columns="3"
                data-is-rows="3"
                data-is-limit="9" 
                data-is-lang="en">
            </div>                
          </div>
          <div class="col-sm-4">
            <div class="footer-texto logo-footer"><a href="https://www.bothanicamineral.com.br/" target="_blank"><img src="https://s3-sa-east-1.amazonaws.com/happybiz-web/BOTHANICA+MINERAL/site/logo.png" alt="Logo Bothanica Mineral" srcset=""></a></div>
          </div>
        </div>

      </div>
      <div class="container-fluid logo-biz"><a href="http://www.happybiz.com.br/" target="_blank">
        <img class="logo-biz-img" src="https://s3-sa-east-1.amazonaws.com/happybiz-web/BOTHANICA+MINERAL/site/logo-biz.png" alt="HappyBiz"></a>
      </div>
    </footer>
    <?php wp_footer(); ?> 
  </body>
</html>