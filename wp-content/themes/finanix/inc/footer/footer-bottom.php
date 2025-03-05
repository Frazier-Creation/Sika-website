<?php
    global $finanix_option;    
    require get_parent_theme_file_path('inc/footer/footer-options.php');

    $footer_style_option = !empty($finanix_option['$footer_style_option']) ? $finanix_option['$footer_style_option'] : '';    
    $footer_logo       =  get_post_meta(get_queried_object_id(), 'footer_logo_img', true);
    $footer_logo_size = !empty($finanix_option['footer-logo-height']) ? 'style="height: '.$finanix_option['footer-logo-height'].'"' : ''; 

    if( $footer_style == 'footer2' || $footer_style_option == 'style2'  ) {
        if ( has_nav_menu( 'menu-2' ) ) { ?>            
            <div class="footer-bottom" <?php if(!empty( $copyright_bg)): ?> style="background: <?php echo esc_attr($copyright_bg); ?> !important;" <?php elseif(!empty( $copy_trans)): ?> style="background: <?php echo esc_attr($copy_trans); ?> !important;" <?php endif; ?>>
                <div class="<?php echo esc_attr($header_width);?>">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright_border">                                
                                <div class="copyright" <?php if(!empty( $copy_space)): ?> style="padding: <?php echo esc_attr($copy_space); ?>" <?php endif; ?> >
                                    <?php if(!empty($finanix_option['copyright'])){?>
                                    <p><?php echo wp_kses($finanix_option['copyright'], 'finanix'); ?></p>
                                    <?php }
                                     else{
                                        ?>
                                    <p><?php echo esc_html('&copy;')?> <?php echo date("Y");?>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 
                                    </p>
                                    <?php
                                     }   
                                    ?>
                                </div>                                  
                            </div>
                        </div>                    
                
                        <div class="col-lg-6 col-md-6">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-2',
                                    'menu_id'        => 'footer-menu',
                                     'walker'        => ''
                                ) );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
       
    <?php } 
    elseif( $footer_style == 'footer3' || $footer_style_option == 'style3'  ) {
        if ( has_nav_menu( 'menu-2' ) ) { ?>            
            <div class="footer-bottom" <?php if(!empty( $copyright_bg)): ?> style="background: <?php echo esc_attr($copyright_bg); ?> !important;" <?php elseif(!empty( $copy_trans)): ?> style="background: <?php echo esc_attr($copy_trans); ?> !important;" <?php endif; ?>>
                <div class="<?php echo esc_attr($header_width);?>">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright_border">                                
                                <div class="copyright" <?php if(!empty( $copy_space)): ?> style="padding: <?php echo esc_attr($copy_space); ?>" <?php endif; ?> 
                                    <?php if(!empty($finanix_option['copyright'])){?>
                                    <p><?php echo wp_kses($finanix_option['copyright'], 'finanix'); ?></p>
                                    <?php }
                                     else{
                                        ?>
                                    <p><?php echo esc_html('&copy;')?> <?php echo date("Y");?>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 
                                    </p>
                                    <?php
                                     }   
                                    ?>
                                </div>                                  
                            </div>
                        </div>                    
                
                        <div class="col-lg-6 col-md-6">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-2',
                                    'menu_id'        => 'footer-menu',
                                     'walker'        => ''
                                ) );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
       
    <?php } 
    else{?>
        <?php if ( has_nav_menu( 'menu-2' ) ) { ?>
            <div class="container pt-35 footer">
                <div class="row white-bg align-items-center">
                    <?php if($footer_logo !='' || !empty($finanix_option['footer_logo']['url'])): ?>
                        <div class="col-lg-6 col-md-4">               
                                <?php if($footer_logo !=''){ ?>
                                <div class="footer-logo-wrap">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-top-logo">
                                        <img <?php echo wp_kses($footer_logo_size, 'finanix');?> src="<?php echo esc_url($footer_logo); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' )); ?>">
                                    </a>
                                </div>                                 
                                <?php } else  {
                                    if(!empty($finanix_option['footer_logo']['url'])) { ?>
                                        <div class="footer-logo-wrap">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-top-logo">
                                                <img <?php echo wp_kses($footer_logo_size, 'finanix');?> src="<?php  echo esc_url($finanix_option['footer_logo']['url'])?>" alt="<?php echo esc_attr( get_bloginfo( 'name' )); ?>">
                                            </a>
                                        </div>
                                    <?php }
                                } ?>              
                        </div>
                    <?php endif ;?>
                    <?php if($footer_logo = '' || empty($finanix_option['footer_logo']['url'])){
                        $col = 12;
                        $media = 'responsive-menu';
                    }else{
                        $col = '6';
                        $media = '';
                    } ?>
                    <div class="col-lg-<?php echo esc_attr($col);?> col-md-8 <?php echo esc_attr( $media );?>">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-2',
                                'menu_id'        => 'footer-menu',
                                'walker'        => ''
                            ) );
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="footer-bottom" <?php if(!empty( $copyright_bg)): ?> style="background: <?php echo esc_attr($copyright_bg); ?> !important;" <?php elseif(!empty( $copy_trans)): ?> style="background: <?php echo esc_attr($copy_trans); ?> !important;" <?php endif; ?>>
            <div class="<?php echo esc_attr($header_width);?>">
                <div class="copyright_border">
                    
                    <div class="copyright text-center" <?php if(!empty( $copy_space)): ?> style="padding: <?php echo esc_attr($copy_space); ?>" <?php endif; ?> >
                        <?php if(!empty($finanix_option['copyright'])){?>
                        <p><?php echo wp_kses($finanix_option['copyright'], 'finanix'); ?></p>
                        <?php }
                         else{
                            ?>
                        <p><?php echo esc_html('&copy;')?> <?php echo date("Y");?>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 
                        </p>
                        <?php
                         }   
                        ?>
                    </div>
                      
                </div>
            </div>
        </div>
<?php } ?>

