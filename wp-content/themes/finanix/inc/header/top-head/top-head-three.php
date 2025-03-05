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
            <div class="toolbar-area toolbar-three <?php echo esc_attr($mobile_hide_topbar);?>">
                <div class="<?php echo esc_attr($header_width);?>">
                    <div class="row">

                        <div class="col-7">
                            <div class="toolbar-sl-share">
                                <ul class="clearfix text-left">
                                    <?php
                                        if(!empty($finanix_option['open_hours'])):
                                        $open_hours = $finanix_option['open_hours']; ?>
                                         <li class="opening"> <i class="glyph-icon flaticon-location"></i> <?php echo esc_html($open_hours); ?> </li>

                                        <?php
                                        endif;

                                        if(!empty($finanix_option['show-social'])){
                                            $top_social = $finanix_option['show-social'];
                                
                                            if($top_social == '1'){ 
                                                      
                                                if(!empty($finanix_option['facebook'])) { ?>
                                                <li> <a href="<?php echo esc_url($finanix_option['facebook']);?>" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                                                <?php } ?>
                                                <?php if(!empty($finanix_option['twitter'])) { ?>
                                                <li> <a href="<?php echo esc_url($finanix_option['twitter']);?> " target="_blank"><i class="fa fa-twitter"></i></a> </li>
                                                <?php } ?>
                                                <?php if(!empty($finanix_option['rss'])) { ?>
                                                <li> <a href="<?php  echo esc_url($finanix_option['rss']);?> " target="_blank"><i class="fa fa-rss"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($finanix_option['pinterest'])) { ?>
                                                <li> <a href="<?php  echo esc_url($finanix_option['pinterest']);?> " target="_blank"><i class="fa fa-pinterest-p"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($finanix_option['linkedin'])) { ?>
                                                <li> <a href="<?php  echo esc_url($finanix_option['linkedin']);?> " target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($finanix_option['google'])) { ?>
                                                <li> <a href="<?php  echo esc_url($finanix_option['google']);?> " target="_blank"><i class="fa fa-google-plus-square"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($finanix_option['instagram'])) { ?>
                                                <li> <a href="<?php  echo esc_url($finanix_option['instagram']);?> " target="_blank"><i class="fa fa-instagram"></i></a> </li>
                                                <?php } ?>
                                                <?php if(!empty($finanix_option['vimeo'])) { ?>
                                                <li> <a href="<?php  echo esc_url($finanix_option['vimeo']);?> " target="_blank"><i class="fa fa-vimeo"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($finanix_option['tumblr'])) { ?>
                                                <li> <a href="<?php  echo esc_url($finanix_option['tumblr']);?> " target="_blank"><i class="fa fa-tumblr"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($finanix_option['youtube'])) { ?>
                                                <li> <a href="<?php  echo esc_url($finanix_option['youtube']);?> " target="_blank"><i class="fa fa-youtube"></i></a> </li>
                                                <?php } ?>
                                                        <?php if(is_active_sidebar('language-widget')){?>                                 
                                                            <?php dynamic_sidebar('language-widget');?>                             
                                                        <?php }?>
                                            <?php }
                                        }
                                     ?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="toolbar-contact">

                             <?php 
                             
                             wp_nav_menu( array(
                              'menu'           => 'Top Nav', // Do not fall back to first non-empty menu.
                              'theme_location' => 'menu-5',
                              'fallback_cb'    => false, // Do not fall back to wp_page_menu()
                              'depth'             => 1,
                              'menu_class'        => 'menu d-flex justify-content-end top-head--menu',
                          ) );
                                                          
                             ?>             

                            </div>
                        </div>

                    </div>
                </div>
            </div>
      <?php 
    }
  }
} ?>