<?php
get_header(); 
global $finanix_option; ?>
<div class="page-error">    
    <div id="primary" class="content-area">
        <main id="main" class="site-main">    
            <section class="error-404 not-found">    
                <div class="page-content">
                    <?php if(!empty($finanix_option['404_bg']['url'])){ ?> 
                    <img class="error-image"  src="<?php echo esc_url( $finanix_option['404_bg']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    <?php } ?>
                    <h2>
                        <span>                                    
                            <?php
                                if(!empty($finanix_option['title_404'])){
                                    echo esc_html($finanix_option['title_404']);
                                }
                                else{
                                    echo esc_html__( '404', 'finanix' ); 
                                }
                            ?>
                        </span>                      
                        <?php
                         if(!empty($finanix_option['text_404'])){
                              echo esc_html($finanix_option['text_404']);
                         }
                         else{
                          echo esc_html__( 'oops! page not found', 'finanix' ); }
                         ?>
                    </h2>
                    <a class="reacbutton" href="<?php echo esc_url( home_url('/') ); ?>"><i class="fal fa-long-arrow-left"></i> 
                        <?php
                         if(!empty($finanix_option['back_home'])){
                             echo esc_html($finanix_option['back_home']);
                         }
                         else{
                             esc_html_e('Or back to homepage', 'finanix'); 
                          }
                        ?>
                   </a>
                </div><!-- .page-content -->
            </section><!-- .error-404 -->    
        </main><!-- #main -->
    </div><!-- #primary -->       
</div> <!-- .page-error -->
<?php
get_footer();
