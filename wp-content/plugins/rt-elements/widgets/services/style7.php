<div class="react-addon-services services-<?php echo esc_attr( $settings['services_style'] ); ?>">
    <div class="single-work d-flex align-items-center">
		<span>
			<?php if( !empty($settings['selected_icon']) || !empty($settings['selected_image']['url'])){?>	    		
		    		<?php if(!empty($settings['selected_icon'])) : ?>
		    			<i class="fa <?php echo esc_html( $settings['selected_icon'] );?>"></i>
		    		<?php endif; ?>
		    		<?php if(!empty($settings['selected_image'])) :?>
		    			<img src="<?php echo esc_url( $settings['selected_image']['url'] );?>" alt="image"/>
		    		<?php endif;?>	    		
	    	<?php }?>
		</span>
		<h5><?php echo wp_kses_post($settings['title']);?></h5>
		<?php if( !empty($settings['title_prefix_number'])){?>
	    	<div class="number"><?php echo esc_html($settings['title_prefix_number']);?></div>
	    <?php } ?>
	</div>
</div>