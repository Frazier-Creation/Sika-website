<?php

/*
Header Style 4
*/

global $finanix_option;
$sticky               = $finanix_option['off_sticky']; 
$sticky_menu          = ($sticky == 1) ? ' menu-sticky stuck' : '';
$drob_aligns          = (!empty($finanix_option['drob_align_s'])) ? 'menu-drob-align' : '';
$mobile_hide_search   = (!empty($finanix_option['mobile_off_search'])) ? 'mobile-hide-search' : '';
$mobile_hide_cart     = (!empty($finanix_option['mobile_off_cart'])) ? 'mobile-hide-cart-no' : 'mobile-hide-cart';
$mobile_hide_button   = (!empty($finanix_option['mobile_off_button'])) ? 'mobile-hide-button' : '';

// Header Options here
require get_parent_theme_file_path('inc/header/header-options.php');

 ?>
    <?php 
        //off convas here
        get_template_part('inc/header/off-canvas');
    ?> 


<!-- Mobile Menu Start -->
    <div class="responsive-menus"><?php require get_parent_theme_file_path('inc/header/responsive-menu.php');?></div>
<!-- Mobile Menu End -->

<header id="reactheme-header" class="single-header  header-style4 mainsmenu<?php echo esc_attr($main_menu_hides);?> <?php echo esc_attr($main_menu_center);?> <?php echo esc_attr($main_menu_icon);?> <?php echo esc_attr($skew_style);?> <?php echo esc_attr($skew_styles);?> <?php echo esc_attr($mobile_hide_search);?> <?php echo esc_attr($mobile_hide_cart);?> <?php echo esc_attr($mobile_hide_button);?> <?php echo esc_attr($drob_aligns);?>">
    <?php 
      //include sticky search here
      get_template_part('inc/header/search'); 
    ?>
    <div class="header-inner <?php echo esc_attr($sticky_menu);?>">        
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
            <div class="<?php echo esc_attr($header_width);?>">
                <div class="row-table">
                    <div class="col-cell header-logo">
                    <?php get_template_part('inc/header/logo');  ?>
                    </div>
                    <div class="col-cell consultancy-mail-cell mx-5">
                        <div class="consultancy-text">
                             <?php if(!empty($finanix_option['free_consultancy'])) { ?>
                                <?php echo esc_html($finanix_option['free_consultancy'])?>
                            <?php } ?>
                        </div>
                        <div>
                            <?php if(!empty($finanix_option['top-email'])) { ?>
                                <a class="consultancy-mail" href="mailto:<?php echo esc_attr($finanix_option['top-email'])?>"><?php echo esc_html($finanix_option['top-email'])?></a>
                            <?php } ?>
                        </div>
                    </div>
                    
                    <div class="col-cell menu-responsive mr-5">  
                        <?php              
                        if(is_page_template('page-single.php')){
                            require get_parent_theme_file_path('inc/header/menu-single.php'); 
                        }else{
                            require get_parent_theme_file_path('inc/header/menu.php'); 
                        }?>
                    </div>
                    <!-- <div class="col-cell"></div> -->
                    <!-- <div class="col-cell"></div> -->
<?php 

                        if($rs_offcanvas != 'hide'):
                        if(!empty($finanix_option['off_canvas']) || ($rs_offcanvas == 'show') ): ?>
                            <div class="sidebarmenu-area text-right">
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
                                } ?> 
                            </div>
                        <?php endif; endif; ?>


                     <div class="col-cell header-quote">     
                        <?php if ( has_nav_menu( 'menu-1' ) ) {?>
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
                        <?php } ?> 
                    </div> 

                </div>
            </div> 
        </div>
        <!-- Header Menu End -->
    </div>
     <!-- End Slider area  -->
   <?php 
    get_template_part( 'inc/breadcrumbs' );
  ?>
</header>

<?php  
    get_template_part('inc/header/slider/slider');
?>
