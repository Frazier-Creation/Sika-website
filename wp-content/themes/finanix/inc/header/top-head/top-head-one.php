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

            <div class="toolbar-area toolbar-one <?php echo esc_attr($mobile_hide_topbar);?>">
                <div class="<?php echo esc_attr($header_width);?>">
                    <div class="row alignitems position-relative">
                        <div class="col-xl-6 col-md-6 col-sm-3 d-none d-sm-block">

                            <div class="toolbar-sl-share">
                                <ul class="clearfix text-leftX">
                                  <?php
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
                                        <?php }
                                        }
                                     ?>
                                </ul>                               
                            </div>
                        </div>
                        <?php if( empty($finanix_option['quote_btns']) || $rs_show_quote == 'hide' ){
                            $col = '6';
                        }else{
                            $col = '4';
                        }?>
                        <?php if (!empty($finanix_option['feed_title'])) {  ?>
                            <div class="col-xl-<?php echo esc_attr($col);?> col-md-6 col-sm-9 col-12">
                            
                               <?php  if(!empty($finanix_option['feed_name'])){
                                    $feed_name = $finanix_option['feed_name'];
                                } else{
                                    $feed_name = esc_html__('Feed:','finanix');
                                }
                                if(!empty($finanix_option['feed_link'])){
                                    $feed_link = $finanix_option['feed_link'];
                                } else{
                                    $feed_link = '#';
                                }

                                ?>
                                <div class="feed-container d-flex justify-content-sm-end justify-content-center">
                                  <div class="feed-name mr-1"><?php  echo esc_html($feed_name);?></div>
                                  <div class=""><a href="<?php  echo esc_url($feed_link);?>" class="feed-posts"><?php  echo esc_html($finanix_option['feed_title']);?></a></div>                              
                                </div>
                          
                            </div>
                        <?php } ?>

                        <?php if($rs_show_quote != 'hide'){ ?>
                        <div class="col-xl-2 position-static d-none d-xl-block">
                            <?php if( !empty($finanix_option['quote'])){?>
                                <div class="tops-btn">
                                <?php 

                                if($rs_show_quote != 'hide'){
                                    if(!empty($finanix_option['quote_btns'])){ 
                                    
                                    $quote_bg = $finanix_option['quote_bg']['url'];
                                    ?>
                                        <div class="btn_quotesX toolbar-one-quote" style="background-image: url('<?php echo esc_url($quote_bg); ?>')">
                                            
                                                <?php 
                                                if($finanix_option['quote_title']){
                                                    ?>
                                                        <div class="quote-title">
                                                            <h4><?php  echo esc_html($finanix_option['quote_title']); ?></h4>
                                                        </div>                                                        
                                                    <?php
                                                }
                                                 ?>
                                            <div class="quote-link">
                                                <a href="<?php echo esc_url($finanix_option['quote_link']); ?>" class="quote-buttonsX"><?php  echo esc_html($finanix_option['quote']); ?><i class="fal fa-long-arrow-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                    <?php } } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
      <?php 
    }}
  }
?>