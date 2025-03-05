<?php
  global $finanix_option;
  $header_trans = '';
    if(!empty($finanix_option['header_layout'])){               
        $header_style = $finanix_option['header_layout'];               
        if($header_style == 'style2'){       
            $header_trans = 'heads_trans';    
        }
    }
?>

<div class="reactheme-breadcrumbs porfolio-details <?php echo esc_attr($header_trans);?>">
    <?php  if(is_post_type_archive('events')){
        $archive_banner = !empty($finanix_option['event_banner_main']['url']) ? $finanix_option['event_banner_main']['url'] : '';
    }
    elseif(is_post_type_archive('notices')){
        $archive_banner = !empty($finanix_option['notice_banner_main']['url']) ? $finanix_option['notice_banner_main']['url'] : '';
    }
    elseif(is_post_type_archive('lp_course')){
        $archive_banner = !empty($finanix_option['course_banner']['url']) ? $finanix_option['course_banner']['url'] : '';
    }
    else{
        $archive_banner = !empty($finanix_option['blog_banner_main']['url']) ? $finanix_option['blog_banner_main']['url'] : '';
    }

    if(!empty($finanix_option['show_banner__course'])):
      $archive_banner = $finanix_option['show_banner__course'];
    endif;

   if(!empty($archive_banner)) { ?>
    <div class="breadcrumbs-single" style="background-image: url('<?php echo esc_url($archive_banner);?>')">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumbs-inner">

            <?php if (empty($finanix_option['show_banner__course'])) {
                if(!empty($finanix_option['event_info']) && is_post_type_archive('events')){
                   
                        if( !empty($finanix_option['off_breadcrumb_event'])){
                            if(function_exists('bcn_display')){?>
                                <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                            <?php } 
                        }   
                         echo '<h1 class="page-title a">'.esc_html($finanix_option['event_info']).'</h1>';              
                    }
                    elseif(!empty($finanix_option['notice_info']) && is_post_type_archive('notices')){
                   
                    if(!empty($finanix_option['off_breadcrumb_notice'])){
                        if(function_exists('bcn_display')){?>
                            <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                        <?php } 
                    }    
                     echo '<h1 class="page-title b">'.esc_html($finanix_option['notice_info']).'</h1>';               
                    } else {
                   
                    if(!empty($finanix_option['off_breadcrumb'])){
                        if(function_exists('bcn_display')){?>
                            <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                        <?php } 
                    }  
                     the_archive_title( '<h1 class="page-title c">', '</h1>' );
                } 
            }          
            ?>   
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php }
  else{   
  ?>
  <div class="reactheme-breadcrumbs-inner">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumbs-inner">
           <?php if(!empty($finanix_option['event_info']) && is_post_type_archive('events')){
                echo '<h1 class="page-title">'.esc_html($finanix_option['event_info']).'</h1>';
                    if(!empty($finanix_option['off_breadcrumb_event'])){
                        if(function_exists('bcn_display')){?>
                            <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                        <?php } 
                    }                 
               }
                elseif(!empty($finanix_option['notice_info']) && is_post_type_archive('notices')){
                echo '<h1 class="page-title">'.esc_html($finanix_option['notice_info']).'</h1>';  
                if(!empty($finanix_option['off_breadcrumb_notice'])){
                    if(function_exists('bcn_display')){?>
                        <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                    <?php } 
                }                 
               }else{
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                if(!empty($finanix_option['off_breadcrumb'])){
                    if(function_exists('bcn_display')){?>
                        <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                    <?php } 
                }  
               }
              ?>              
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  }
?>  
</div>