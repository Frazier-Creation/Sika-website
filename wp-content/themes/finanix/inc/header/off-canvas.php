<?php 
global $finanix_option;
$rs_offcanvas = get_post_meta(get_the_ID(), 'show-off-canvas', true);
$logo_height = !empty($finanix_option['logo-height']) ? 'style = "max-height: '.$finanix_option['logo-height'].'"' : '';
    //off convas here
?>
    
<nav class="menu-wrap-off nav-container nav menu-ofcn">       
<div class="inner-offcan">
    <div class="nav-link-container">  
        <a href='#' class="nav-menu-link close-button" id="close-button2">              
            <i class="fal fa-times"></i>
        </a> 
    </div> 
    <div class="sidenav offcanvas-icon">
       

            <div id="mobile_menu" class="reactheme-offcanvas-inner-left">
                <?php
                    if(is_page_template('page-single.php')){
                        if ( has_nav_menu( 'menu-4' ) ):
                            // User has assigned menu to this location;
                            // output it
                            ?>                                
                                <div class="widget widget_nav_menu mobile-menus">      
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'menu-4',
                                            'menu_id'        => 'single-menu',
                                        ) );
                                    ?>
                                </div>                                
                            <?php
                        endif;
                    } else {

                        if ( has_nav_menu( 'menu-1' ) ):
                            // User has assigned menu to this location;
                            // output it
                            ?>                                
                                <div class="widget widget_nav_menu mobile-menus">      
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'menu-1',
                                            'menu_id'        => 'primary-menu-single1',
                                        ) );
                                    ?>
                                </div>                                
                            <?php
                        endif;
                    }
                ?>
            </div> 
          
        <?php 
        if(!empty( $finanix_option['off_canvas'] ) || ($rs_offcanvas == 'show') ){
            $off = $finanix_option['off_canvas'];
            if( ($off == 1) || ($rs_offcanvas == 'show')){ ?>            
            <div class="reactheme-innner-offcanvas-contents"> 

                <?php $offcanvas_logo_height = !empty($finanix_option['offcanvas_logo_height']) ? 'style="height: '.$finanix_option['offcanvas_logo_height'].'"' : '';

                if (!empty( $finanix_option['offcanvas_logo']['url'] ) ) { ?>
                    <div class="offcanvas_logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img <?php echo wp_kses($offcanvas_logo_height, 'finanix');?> src="<?php echo esc_url( $finanix_option['offcanvas_logo']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
                    </div>
                <?php }
                 dynamic_sidebar('sidebarcanvas-1');?>
            </div>            
            <?php }
        }?>
    </div>
    </div>
</nav>