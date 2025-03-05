<?php

/*
Header Style 1
*/
global $finanix_option;
$sticky             = !empty($finanix_option['off_sticky']) ? $finanix_option['off_sticky'] : ''; 
$sticky_menu        = ($sticky == 1) ? ' menu-sticky' : '';
$drob_aligns        = (!empty($finanix_option['drob_align_s'])) ? 'menu-drob-align' : '';
$mobile_hide_search = (!empty($finanix_option['mobile_off_search'])) ? 'mobile-hide-search' : '';
$mobile_hide_cart   = (!empty($finanix_option['mobile_off_cart'])) ? 'mobile-hide-cart-no' : 'mobile-hide-cart';
$mobile_hide_button = (!empty($finanix_option['mobile_off_button'])) ? 'mobile-hide-button' : '';
$mobile_logo_height =!empty($finanix_option['mobile_logo_height']) ? 'style = "max-height: '.$finanix_option['mobile_logo_height'].'"' : '';

// Header Options here
require get_parent_theme_file_path('inc/header/header-options.php');
//off convas here
get_template_part('inc/header/off-canvas');
?> 

<!-- Mobile Menu Start -->
<div class="responsive-menus"><?php require get_parent_theme_file_path('inc/header/menu-single.php');?></div>
<!-- Mobile Menu End -->
<?php if ( has_nav_menu( 'menu-1' ) ) {
    $menugap_minus = 'menugap-minus';
}else{
    $menugap_minus = '';
}
?>

<header id="reactheme-header" class="header-style-1 mainsmenu<?php echo esc_attr($main_menu_hides);?> <?php echo esc_attr($main_menu_center);?> <?php echo esc_attr($main_menu_icon);?> <?php echo esc_attr($skew_style);?> <?php echo esc_attr($skew_styles);?> <?php echo esc_attr($mobile_hide_search);?> <?php echo esc_attr($mobile_hide_cart);?> <?php echo esc_attr($mobile_hide_button);?> <?php echo esc_attr($drob_aligns);?> <?php echo esc_attr($menugap_minus);?>">
    <?php 
      //include sticky search here
      get_template_part('inc/header/search');
    ?>
    <div class="header-inner<?php echo esc_attr($sticky_menu);?>">
        <!-- Header Menu Start -->  
        <?php
        $menu_bg_color = !empty($menu_bg) ? 'style=background:'.$menu_bg.'' : '';
        ?>

        <!-- Topbar Start -->
        <?php
            get_template_part('inc/header/topbar');
        ?>
        <!-- Topbar End -->        
        <div class="menu-area menu_type_<?php echo esc_attr($main_menu_type);?>" <?php echo wp_kses($menu_bg_color, 'finanix');?>>
            <div class="container">
                <div class="row pt-25">
                    <div class="col-xl-4 col-lg-3 d-none d-lg-inline-block">                        
                        <?php  get_template_part('inc/header/logo'); ?>                       
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <ul class="right-query mb-0">
                            <?php if(!empty($finanix_option['address_top'])) :?>
                            <li>
                                <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                                <div class="query-list">
                                    <span><?php echo wp_kses_post(nl2br($finanix_option['address_top']));?></span>
                                </div>
                            </li>
                            <?php endif; ?>
                            <?php if(!empty($finanix_option['opening_hour'])) :?>
                            <li>
                                <div class="icon"><i class="fal fa-clock"></i></div>
                                <div class="query-list">
                                   <span><?php echo wp_kses_post(nl2br($finanix_option['opening_hour']));?></span>
                                </div>
                            </li>
                            <?php endif; ?>
                            <li>
                                <?php 
                                    if(!empty($finanix_option['quote_btns'])){ ?>
                                    <a class="theme_btn quote-btn" href="<?php echo esc_url($finanix_option['quote_link']); ?>" ><?php  echo esc_html($finanix_option['quote']); ?></a>
                                <?php } ?>
                             
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu_one">
                        <div class="row-table"> 
                        <div class="col-cell header-logo">
                            <?php 
                             if (!empty( $finanix_option['wplogo_mobile_rt']['url'] ) ) { ?>
                              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img <?php echo wp_kses($mobile_logo_height, 'finanix');?> src="<?php echo esc_url( $finanix_option['wplogo_mobile_rt']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
                            <?php }else{
                             get_template_part('inc/header/logo'); 
                            } ?>
                        </div>  
                                
                        <div class="col-cell menu-responsive">  
                            <?php                  
                                if(is_page_template('page-single.php')){
                                    require get_parent_theme_file_path('inc/header/menu-single.php'); 
                                }else{
                                    require get_parent_theme_file_path('inc/header/menu.php'); 
                                }               
                            ?>
                        </div>            

                        <div class="col-cell header-quote">                         
                           <?php
                            //include Cart here 
                            if($rs_show_cart != 'hide'){
                              if(!empty($finanix_option['wc_cart_icon']) || ($rs_show_cart == 'show') ) {
                                get_template_part('inc/header/cart');
                              }
                            } 
                            ?> 
                            
                            <?php 
                            if($rs_top_search != 'hide'){
                              if(!empty($finanix_option['off_search']) || ($rs_top_search == 'show') ): ?>
                                <div class="sidebarmenu-search text-right">
                                    <div class="sidebarmenu-search">
                                        <div class="sticky_search"> 
                                          <i class="fal fa-search"></i> 
                                        </div>
                                    </div>
                                </div> 
                              <?php endif; 
                            }                                                  

                           if($rs_offcanvas != 'hide'):
                              if(!empty($finanix_option['off_canvas']) || ($rs_offcanvas == 'show') ): ?>
                              <div class="sidebarmenu-area text-right desktop">
                                <?php if(!empty($finanix_option['off_canvas']) || ($rs_offcanvas == 'show') ){
                                        $off = $finanix_option['off_canvas'];
                                        if( ($off == 1) || ($rs_offcanvas == 'show') ){
                                   ?>
                                    <ul class="offcanvas-icon">
                                        <li class="nav-link-container"> 
                                            <a href='#' class="nav-menu-link menu-button">
                                                <span class="dot1"></span>
                                                <span class="dot2"></span>
                                                <span class="dot3"></span>
                                                <span class="dot4"></span>                                          
                                            </a> 
                                        </li>
                                    </ul>
                                    <?php } 
                                }?> 
                              </div>
                            <?php endif; endif; ?>

                            
                            <div class="sidebarmenu-area text-right mobilehum">                                    
                                <ul class="offcanvas-icon">
                                    <li class="nav-link-container"> 
                                        <a href='#' class="nav-menu-link menu-button">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>                                          
                                        </a> 
                                    </li>
                                </ul>                                       
                            </div> 
                            

                        </div> 
                    </div>
                </div>
            </div>    
        </div>
    </div>
  <?php get_template_part( 'inc/breadcrumbs' );  ?>
  
</header>
