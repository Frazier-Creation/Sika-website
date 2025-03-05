<?php
    global $finanix_option;    
    $header_width_meta = get_post_meta(get_the_ID(), 'header_width_custom', true);
    if ($header_width_meta != ''){
        $header_width = ( $header_width_meta == 'full' ) ? 'container-fluid': 'container';
    }else{
        $header_width = $finanix_option['header-grid'];
        $header_width = ( $header_width == 'full' ) ? 'container-fluid': 'container';
    }
?>
<?php 
    $post_meta_data = get_post_meta(get_the_ID(), 'banner_image', true);
    $post_menu_type = get_post_meta(get_the_ID(), 'menu-type', true); 
    $content_banner = get_post_meta(get_the_ID(), 'content_banner', true); 
?>


<div class="reactheme-breadcrumbs  porfolio-details">
<?php if($post_meta_data !='') { ?>
    <div class="breadcrumbs-single" style="background-image: url('<?php echo esc_url( $post_meta_data );?>')">
        <div class="<?php echo esc_attr($header_width);?>">
          <div class="row">
            <div class="col-md-12">
              <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>"> 
                <?php 
                    $term_list = get_the_terms(get_the_ID(), 'rt-event-category');           
                    $types ='';
                    foreach($term_list as $term_single) {
                        $types .= ucfirst($term_single->slug).', ';
                        $types_link = ($term_single->term_link);
                        echo esc_url($types_link);
                    }
                    $typesz = rtrim($types, ', ');
                    echo '<span>'. esc_html($typesz).'</span>';
                   
                    $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                    <?php if( $post_meta_title != 'hide' ){             
                    ?>
                    <h1 class="page-title">
                        <?php if($content_banner !=''){
                            echo esc_html($content_banner);
                            }else{
                               the_title();
                            }
                        ?>
                    </h1>
                    <?php } ?>
                    <ul class="user-section">     
                        <?php $ev_start_date = get_post_meta(  get_the_ID(), 'ev_start_date', true ); 
                        $new_sDate = date("F j, Y", strtotime($ev_start_date));  
                        $ev_start_time = get_post_meta(  get_the_ID(), 'ev_start_time', true );
                        $ev_end_time   = get_post_meta(  get_the_ID(), 'ev_end_time', true );
                        $ev_location   = get_post_meta ( get_the_ID(), 'ev_location', true);  ?>                                 
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <?php echo esc_html($new_sDate);?></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <?php echo esc_attr($ev_start_time);?> - <?php echo esc_attr($ev_end_time);?> </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <?php echo esc_html($ev_location);?></li>
                    </ul>       
                  
              </div>
            </div>
          </div>
        </div>
    </div>
<?php }

elseif (!empty($finanix_option['event_single_image']['url'])) {?>
<div class="breadcrumbs-single" style="background-image: url('<?php echo esc_url( $finanix_option['event_single_image']['url'] );?>')">
    <div class="<?php echo esc_attr($header_width);?>">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>"> 
            <?php 
                
                $term_list = get_the_terms(get_the_ID(), 'rt-event-category');           
                $types ='';
                if(!empty( $term_list )) :
                    foreach($term_list as $term_single) {
                        $types .= ucfirst($term_single->slug).', ';
                        $types_link = ($term_single->term_link);
                        echo esc_url($types_link);
                    }
                    $typesz = rtrim($types, ', ');
                    echo '<span>'. esc_html($typesz).'</span>';
                endif;
        
                $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                <?php if( $post_meta_title != 'hide' ){             
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
            <ul class="user-section">     
                <?php $ev_start_date = get_post_meta(  get_the_ID(), 'ev_start_date', true ); 
                $new_sDate = date("F j, Y", strtotime($ev_start_date));  
                $ev_start_time = get_post_meta(  get_the_ID(), 'ev_start_time', true );
                $ev_end_time   = get_post_meta(  get_the_ID(), 'ev_end_time', true );
                $ev_location   = get_post_meta ( get_the_ID(), 'ev_location', true);  ?>                                 
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <?php echo esc_html($new_sDate);?></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <?php echo esc_attr($ev_start_time);?> - <?php echo esc_attr($ev_end_time);?> </li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <?php echo esc_html($ev_location);?></li>
            </ul>   
          </div>
        </div>
      </div>
    </div>
</div>
    
<?php }else{?>
    <div class="reactheme-breadcrumbs-inner">
          <div class="<?php echo esc_attr($header_width);?>">
            <div class="row">
              <div class="col-md-12">
                <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>">

                <?php 
                    $term_list = get_the_terms(get_the_ID(), 'rt-event-category');           
                    $types ='';
                    foreach($term_list as $term_single) {
                        $types .= ucfirst($term_single->slug).', ';
                        $types_link = ($term_single->term_link);
                        echo esc_url($types_link);
                    }
                    $typesz = rtrim($types, ', ');
                    echo '<span>'. esc_html($typesz).'</span>';
                    $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                    <?php if( $post_meta_title != 'hide' ){             
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
                <ul class="user-section">     
                    <?php $ev_start_date = get_post_meta(  get_the_ID(), 'ev_start_date', true ); 
                    $new_sDate = date("F j, Y", strtotime($ev_start_date));  
                    $ev_start_time = get_post_meta(  get_the_ID(), 'ev_start_time', true );
                    $ev_end_time   = get_post_meta(  get_the_ID(), 'ev_end_time', true );
                    $ev_location   = get_post_meta ( get_the_ID(), 'ev_location', true);  ?>                                 
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <?php echo esc_html($new_sDate);?></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <?php echo esc_attr($ev_start_time);?> - <?php echo esc_attr($ev_end_time);?> </li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> <?php echo esc_html($ev_location);?></li>
                </ul>         
                </div>
              </div>
            </div>
          </div>
    </div>
<?php } ?>
</div>