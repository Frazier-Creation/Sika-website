<?php 
	$cat   = $settings['portfolio_category'];

	if(empty($cat)){
    	$best_wp = new wp_Query(array(
				'post_type'      => 'rt-portfolios',
				'posts_per_page' => $settings['per_page'],								
		));	  
    }   
    else{
    	$best_wp = new wp_Query(array(
			'post_type'      => 'rt-portfolios',
			'posts_per_page' => $settings['per_page'],				
			'tax_query'      => array(
		        array(
					'taxonomy' => 'rt-portfolio-category',
					'field'    => 'slug', //can be set to ID
					'terms'    => $cat //if field is ID you can reference by cat/term number
		        ),
		    )
		));	  
    }
	while($best_wp->have_posts()): $best_wp->the_post();			
	$cats_show = get_the_term_list( $best_wp->ID, 'rt-portfolio-category', ' ', '<span class="separator">,</span> ');							
	?>
	<div class="grid-item">
		<div class="portfolio-item content-overlay">
			<div class="portfolio-content">
			    <div class="vertical-middle">
			        <div class="vertical-middle-cell">
			        	<p class="p-category"><?php echo $cats_show; ?></p>
			        	<?php if(get_the_title()):?>
			        		<h4 class="p-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
			        	<?php endif;?>			        	
			        </div>
			    </div>
			</div>
			<?php if(has_post_thumbnail()): ?>
                <div class="portfolio-img">
                	<a href="<?php the_permalink();?>"><?php  the_post_thumbnail($settings['thumbnail_size']);?></a>
                </div>
            <?php endif;?>
            
        </div>
		<?php if( $settings['button_text']) : ?>
        	<a class="read-btn" href="<?php the_permalink();?>"> <?php echo  $settings['button_text']; ?> <i class="fal fa-long-arrow-right"></i></a>
		<?php endif; ?>
	</div>
	<?php	
	endwhile;
	wp_reset_query();  
 ?>  
