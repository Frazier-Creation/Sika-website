 <!DOCTYPE html>
<html lang="en-US">
<?php
    /*Template Name: Coming Soon
    */
    wp_head();  
    global $finanix_option;
    $page_bg    = !empty($finanix_option['coming_bg']) ? 'style="background:url('.$finanix_option['coming_bg']['url'].')"': '';

    $day_text   = !empty($finanix_option['coming_day']) ? $finanix_option['coming_day'] : 'Days';
    $hour_text  = !empty($finanix_option['coming_min']) ? $finanix_option['coming_hour'] : 'Minutes';
    $sec_text   = !empty($finanix_option['coming_sec']) ? $finanix_option['coming_sec'] : 'Seconds';
    $min_text   = !empty($finanix_option['coming_hour']) ? $finanix_option['coming_min'] : 'Hours';

    $text_color  = !empty($finanix_option['text_color']) ? $finanix_option['text_color'] : '#ffffff';
    
    $com_logo_height        = !empty($finanix_option['coming-logo-height']) ? 'style = "max-height: '.$finanix_option['coming-logo-height'].'"' : '';

    $countdown_localize_data = array(
        'day_text'   => $day_text,
        'hour_text'  => $hour_text,
        'sec_text'   => $sec_text,
        'min_text'   => $min_text,
        'text_color'  => $text_color,        
    );
        
    wp_localize_script( 'finanix-main', 'countdown_data', $countdown_localize_data );
?>
<div class="page-error coming-soon" <?php echo wp_kses_post( $page_bg ); ?>>
    <div class="container">
        <div id="content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">    
                    <section class="error-404 not-found">    
                        <div class="page-content">
                            <?php   if (!empty( $finanix_option['coming_logo']['url'] ) ) { ?>
                                <div class="logo">
                                    <a href="<?php echo site_url();?>"><img <?php echo wp_kses($com_logo_height, 'finanix');?> src="<?php echo esc_url( $finanix_option['coming_logo']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
                                </div>
                            <?php } ?>
                            <h3>
                                <span>                                    
                                    <?php
                                        if(!empty($finanix_option['coming_title'])){
                                            echo wp_kses_post($finanix_option['coming_title']);
                                        }
                                        else{
                                            echo esc_html__( 'Coming Soon', 'finanix' ); 
                                        }
                                    ?>
                                </span>                      
                                <?php
                                    if(!empty($finanix_option['coming_text'])){
                                        echo wp_kses_post($finanix_option['coming_text']);
                                    }
                                    else{
                                        echo esc_html__( 'Our Exciting Website Is Coming Soon! Check Back Later', 'finanix' ); }
                                ?>
                            </h3>
                            <?php 
                                if(!empty($finanix_option['opt-date-time'])) : 
                                $timeformat =  $finanix_option['opt-date-time'];
                            ?>
                            <div class="countdown-inner">
                                <div data-animation-in="slideInLeft" data-animation-out="animate-out fadeOut" class="CountDownTimer" data-date="<?php echo wp_kses_post($timeformat);?>"></div>
                            </div>
                            <?php endif; ?>
                            <div class="follow-us-sbuscribe"> 
                                <div class="follow-us-main">
                                    <?php if (!empty($finanix_option['fllow_title'])) : ?>
                                        <p class="follow-us">
                                            <?php echo esc_html($finanix_option['fllow_title']) ?>                                            
                                        </p>        
                                    <?php endif;
                                        if(!empty($finanix_option['show-social'])){ ?>
                                            <ul class="clearfix">
                                                <?php $top_social = $finanix_option['show-social'];                                    
                                                    if($top_social == '1'){              
                                                    if(!empty($finanix_option['facebook'])) { ?>
                                                        <li> <a href="<?php echo esc_url($finanix_option['facebook']);?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                <?php }
                                                    if(!empty($finanix_option['twitter'])) { ?>
                                                     <li> <a href="<?php echo esc_url($finanix_option['twitter']);?> " target="_blank"><i class="fa fa-twitter"></i></a> </li>
                                                <?php } 
                                                     if(!empty($finanix_option['rss'])) { ?>
                                                     <li> <a href="<?php  echo esc_url($finanix_option['rss']);?> " target="_blank"><i class="fa fa-rss"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($finanix_option['pinterest'])) { ?>
                                                    <li> <a href="<?php  echo esc_url($finanix_option['pinterest']);?> " target="_blank"><i class="fa fa-pinterest-p"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($finanix_option['linkedin'])) { ?>
                                                    <li> <a href="<?php  echo esc_url($finanix_option['linkedin']);?> " target="_blank"><i class="fa fa-linkedin"></i></a> </li>
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
                                                <?php } ?>
                                            </ul>
                                        <?php }
                                    ?>
                                </div>                                    
                             
                            </div>
                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->    
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>   
</div> <!-- .page-error -->
<?php
wp_footer(); ?>
</html>
