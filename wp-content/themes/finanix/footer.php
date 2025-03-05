        </div><!-- .content -->
    </div><!-- .container -->
</div><!-- .main-container -->
<?php
global $finanix_option;
require get_parent_theme_file_path('inc/footer/footer-options.php');
$header_grid2 = "";
$hide_footer  ='';
$hide_footer  =  get_post_meta(get_queried_object_id(), 'hide_footer', true);
if($hide_footer != 'yes'):
$footer_logo_size = !empty($finanix_option['footer-logo-height']) ? 'style="height: '.$finanix_option['footer-logo-height'].'"' : '';
if ( class_exists( 'WooCommerce' ) && is_shop() || class_exists( 'WooCommerce' ) && is_product_tag()  || class_exists( 'WooCommerce' ) && is_product_category()  ) {
    $finanix_shop_id   = get_option( 'woocommerce_shop_page_id' ); 
    $header_width_meta = get_post_meta($finanix_shop_id, 'header_width_custom2', true);
    $footer_logo       = get_post_meta($finanix_shop_id, 'footer_logo_img', true);

} elseif (is_home() && !is_front_page() || is_home() && is_front_page()){

    $header_width_meta = get_post_meta(get_queried_object_id(), 'header_width_custom2', true);
    $footer_logo       =  get_post_meta(get_queried_object_id(), 'footer_logo_img', true);
    
} else {
    $header_width_meta = get_post_meta(get_queried_object_id(), 'header_width_custom2', true);
    $footer_logo       =  get_post_meta(get_queried_object_id(), 'footer_logo_img', true);
}  
    
if ($header_width_meta != ''){
    $header_width = ( $header_width_meta == 'full' ) ? 'container-fluid': 'container';
}else{  
    $header_width = !empty($finanix_option['header-grid2']) ? $finanix_option['header-grid2'] : '';
    $header_width = ( $header_width == 'full' ) ? 'container-fluid': 'container';
}
$footer_gap = '';
if($hide_footer_subscribe != 'yes'  && is_active_sidebar( 'footer_top') ){
    $footer_gap = 'reactheme-footer-top-gap';
}
$footer_style_option = !empty($finanix_option['footer_style']) ? $finanix_option['footer_style'] : '';
$footer_class = '';
if( $footer_style == 'footer2' || $footer_style_option == 'style2'  ){
    $footer_class = 'footer-style-2';
}
if( $footer_style == 'footer3' || $footer_style_option == 'style3'  ){
    $footer_class = 'footer-style-3';
}

$footer_select = !empty($footer_select) ? $footer_select : '';

if(!empty( $footer_bg_img)):?>
    <footer id="reactheme-footer" class="ff <?php echo esc_attr($footer_select);?> reactheme-footer footer-style-1 <?php echo esc_attr($footer_class);?> <?php echo esc_attr($footer_gap); ?>" style="background-image: url('<?php echo esc_url($footer_bg_img); ?>'); <?php if (!empty($footer_bg_pos)): ?> background-position: <?php echo esc_attr($footer_bg_pos); ?> !important; <?php endif; ?> <?php if (!empty($footer_bg_rep)): ?> background-repeat: <?php echo esc_attr($footer_bg_rep); ?> !important; <?php endif; ?> <?php if (!empty($footer_bg_sizes)): ?> background-size: <?php echo esc_attr($footer_bg_sizes); ?> !important; <?php endif; ?> <?php if (!empty($footer_bg)): ?> background-color: <?php echo esc_attr($footer_bg) ?> <?php endif; ?>">

<?php elseif(!empty( $footer_bg)):?>
    <footer id="reactheme-footer" class="<?php echo esc_attr($footer_select);?> reactheme-footer footer-style-1 <?php echo esc_attr($footer_class);?> <?php echo esc_attr($footer_gap); ?>" style="background: <?php echo esc_attr($footer_bg);?> !important; <?php if (!empty($footer_bg_rep)): ?> background-repeat: <?php echo esc_attr($footer_bg_rep); ?> !important; <?php endif; ?> <?php if (!empty($footer_bg_sizes)): ?> background-size: <?php echo esc_attr($footer_bg_sizes); ?> !important; <?php endif; ?> <?php if (!empty($footer_bg_pos)): ?> background-position: <?php echo esc_attr($footer_bg_pos);?> !important; <?php endif; ?>">

<?php elseif( !empty( $finanix_option['footer_bg_image']['url'])):?>
    <footer id="reactheme-footer" class="<?php echo esc_attr($footer_select);?> reactheme-footer footer-style-1 <?php echo esc_attr($footer_class);?> <?php echo esc_attr($footer_gap); ?>" style="background-image: url('<?php echo esc_url($finanix_option['footer_bg_image']['url']);?>'); <?php if (!empty($footer_bg_rep)): ?> background-repeat: <?php echo esc_attr($footer_bg_rep); ?> !important; <?php endif; ?> <?php if (!empty($footer_bg_sizes)): ?> background-size: <?php echo esc_attr($footer_bg_sizes); ?> !important; <?php endif; ?> <?php if (!empty($footer_bg_pos)): ?> background-position: <?php echo esc_attr($footer_bg_pos); ?> !important; <?php endif; ?>">
    <?php else:?>
        <footer id="reactheme-footer" class="<?php echo esc_attr($footer_select);?> reactheme-footer footer-style-1 <?php echo esc_attr($footer_class);?> <?php echo esc_attr($footer_gap); ?>" >
<?php
endif; ?>
<?php 

if( $footer_style == 'footer2' || $footer_style_option == 'style2'  ) : ?>
    <div class="container">
        <div class="row section-footer-2">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php if($footer_logo !=''){ ?>
                    <div class="footer-logo-wrap">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-top-logo">
                            <img <?php echo wp_kses($footer_logo_size, 'finanix');?> src="<?php echo esc_url($footer_logo); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' )); ?>">
                        </a>
                    </div>  
                     
                    <?php } else { 
                        if(!empty($finanix_option['footer_logo']['url'])) { ?>
                            <div class="footer-logo-wrap">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-top-logo">
                                    <img <?php echo wp_kses($footer_logo_size, 'finanix');?> src="<?php  echo esc_url($finanix_option['footer_logo']['url'])?>" alt="<?php echo esc_attr( get_bloginfo( 'name' )); ?>">
                                </a>
                            </div>
                        <?php }
                    } ?>       
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php  get_template_part( 'inc/footer/footer','social' ); ?>
            </div>
        </div>
    </div>
<?php endif;
if( $footer_style == 'footer3' || $footer_style_option == 'style3'  ) : ?>
    <div class="container">
        <div class="row section-footer-2">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php if($footer_logo !=''){ ?>
                    <div class="footer-logo-wrap">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-top-logo">
                            <img <?php echo wp_kses($footer_logo_size, 'finanix');?> src="<?php echo esc_url($footer_logo); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' )); ?>">
                        </a>
                    </div>  
                     
                    <?php } else { 
                        if(!empty($finanix_option['footer_logo']['url'])) { ?>
                            <div class="footer-logo-wrap">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-top-logo">
                                    <img <?php echo wp_kses($footer_logo_size, 'finanix');?> src="<?php  echo esc_url($finanix_option['footer_logo']['url'])?>" alt="<?php echo esc_attr( get_bloginfo( 'name' )); ?>">
                                </a>
                            </div>
                        <?php }
                    } ?>       
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php  get_template_part( 'inc/footer/footer','social' ); ?>
            </div>
        </div>
    </div>
<?php endif;
 get_template_part( 'inc/footer/footer','top' ); 
 get_template_part( 'inc/footer/footer','bottom' ); 
?>


</footer>
<?php endif; ?>
</div><!-- #page -->
<?php 
if(!empty($finanix_option['show_top_bottom'])){
?>
 <!-- start top-to-bottom  -->
<div id="top-to-bottom">
    <i class="fa fa-angle-double-up"></i>
</div>   
<?php } 
 wp_footer(); ?>
  </body>
</html>
