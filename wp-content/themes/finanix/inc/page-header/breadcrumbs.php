<?php
    global $finanix_option;    
    $header_width_meta = get_post_meta(get_the_ID(), 'header_width_custom', true);
    if ($header_width_meta != ''){
        $header_width = ( $header_width_meta == 'full' ) ? 'container-fluid': 'container';
    }else{
        $header_width = !empty($finanix_option['header-grid']) ? $finanix_option['header-grid'] : '';
        $header_width = ( $header_width == 'full' ) ? 'container-fluid': 'container';
    }
?>

<?php 
  $post_meta_data = get_post_meta(get_the_ID(), 'banner_image', true);
    //theme option chekcing
  if($post_meta_data == ''){
    if(!empty($finanix_option['page_banner_main']['url'])):
      $post_meta_data = $finanix_option['page_banner_main']['url'];
    endif;
  }  

  $banner_hide = get_post_meta(get_the_ID(), 'banner_hide', true);
  if( 'show' == $banner_hide ||  $banner_hide == '' ){  
    $post_meta_data = $post_meta_data;
  }else{
    $post_meta_data = '';
  }
  $post_menu_type = get_post_meta(get_the_ID(), 'menu-type', true);
  $content_banner = get_post_meta(get_the_ID(), 'content_banner', true); 
?>

<?php if($post_meta_data !=''){   
?>

<div class="reactheme-breadcrumbs porfolio-details">
    <div class="breadcrumbs-single" style="background-image: url('<?php echo esc_url($post_meta_data); ?>')">
      <div class="<?php echo esc_attr($header_width);?>">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>">
              <?php 
             
                if(!empty($finanix_option['off_breadcrumb'])){
                    $rs_breadcrumbs = get_post_meta(get_the_ID(), 'select-bread', true);
                    if($rs_breadcrumbs != 'hide'):        
                        if(function_exists('bcn_display')){?>
                            <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                        <?php } 
                    endif;
                }

                  $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                  <?php if($post_meta_title != 'hide'){             
                ?>
                <h1 class="page-title">
                  <?php if($content_banner !=''){
                      echo esc_html($content_banner);
                  } else {
                      the_title();
                  }
                  ?>
                </h1>             
                <?php } 
              ?>        
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php }
else{   
$post_meta_bread = get_post_meta(get_the_ID(), 'select-bread', true);?>
<?php if($post_meta_bread =='show' || $post_meta_bread ==''){?>
<div class="reactheme-breadcrumbs  porfolio-details">
  <div class="reactheme-breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>">
    <div class="<?php echo esc_attr($header_width);?>">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumbs-inner">
            
            <?php 
            if(!empty($finanix_option['off_breadcrumb'])){             
                if(function_exists('bcn_display')){?>
                    <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                <?php } 
            }
            ?>
            <?php 
                $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                <?php if($post_meta_title != 'hide'){             
            ?>
            <h1 class="page-title">
                <?php if($content_banner !=''){
                    echo esc_html($content_banner);
                } else {
                    the_title();
                }
                ?>
            </h1>
            <?php } ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  }
  else{
    $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
    <?php if($post_meta_title == 'hide'){
    }
    else{
      ?>
    <div class="<?php echo esc_attr($header_width);?> inner-page-title">
        <h1>
          <?php the_title();?>
        </h1>
    </div>
    <?php } 
        }
    }
?>