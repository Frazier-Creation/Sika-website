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

          <div class="toolbar-area <?php echo esc_attr($mobile_hide_topbar);?>">
            <div class="container2 <?php echo esc_attr($header_width);?>">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-head contact">
                  <div class="toolbar-contact">
                    <ul class="reactheme-contact-info">  
                      <?php if(!empty($finanix_option['top-email'])) { ?>
                        <li class="reactheme-contact-email">
                            <i class="fal fa-envelope"></i>                  
                            <a href="mailto:<?php echo esc_attr($finanix_option['top-email'])?>"><?php echo esc_html($finanix_option['top-email'])?></a>                   
                        </li>
                        <?php } ?>                      
                        <?php if(!empty($finanix_option['phone'])) { ?>
                        <li class="reactheme-contact-phone">
                          <i class="fal fa-phone"></i>                                      
                            <a href="tel:<?php echo esc_attr(str_replace(" ","",($finanix_option['phone'])))?>"> <?php echo esc_html($finanix_option['phone']); ?>                                
                            </a>                   
                        </li>
                        <?php } ?> 
                        
                        
                  </ul>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-head lang">
                  
                  <?php
                      if ( has_nav_menu( 'menu-3' ) ) {
                          
                          wp_nav_menu( array(
                              'theme_location' => 'menu-3',
                              'menu_id'        => 'language-menu',
                               'walker'        => ''
                          ) );
                             
                      }
                      ?>
                </div>
              </div>
            </div>
          </div>
      <?php 
    }
  }
} ?>