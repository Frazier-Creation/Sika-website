<?php
/* Top Header part for finanix Theme
*/
global $finanix_option;
$mobile_hide_topbar = (!empty($finanix_option['mobile_top_bar'])) ? 'mobile-hide-topbars' : '';
// Header Options here
require get_parent_theme_file_path('inc/header/header-options.php');

if($rs_top_bar != 'hide'){
  if(!empty($finanix_option['show-top']) || ($rs_top_bar == 'show')){
       if( !empty($finanix_option['top-email']) || !empty($finanix_option['phone']) || !empty($finanix_option['show-social'])){?> 

          <div class="toolbar-area toolbar-area4 <?php echo esc_attr($mobile_hide_topbar);?>">
            <div class="container2 <?php echo esc_attr($header_width);?>">
              <div class="row">
                <div class="col-lg-4">
                    <?php if(!empty($finanix_option['welcome_sms'])) { ?>
                        <span><?php echo esc_html($finanix_option['welcome_sms']); ?></span>
                    <?php } ?> 
                </div>
                <div class="col-lg-8">
                    <div class="toolbar-contact">
                        <ul class="reactheme-contact-info">                            

                            <?php
                                if(!empty($finanix_option['open_hours'])):
                                $open_hours = $finanix_option['open_hours']; ?>
                                <li class="opening"> 
                                    <i class="glyph-icon flaticon-location"></i> <?php echo esc_html($open_hours); ?> 
                                </li>
                            <?php
                                endif;
                            ?> 
                            <?php if(!empty($finanix_option['top-email'])) { ?>
                            <li class="reactheme-contact-email">
                                <i class="glyph-icon flaticon-email"></i>                  
                                      <a href="mailto:<?php echo esc_attr($finanix_option['top-email'])?>"><?php echo esc_html($finanix_option['top-email'])?></a>                   
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
      <?php 
    }
  }
} ?>