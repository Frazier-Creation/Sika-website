<?php
/*
dynamic css file. please don't edit it. it's update automatically when settins changed
*/
add_action('wp_head', 'finanix_custom_colors', 160);
function finanix_custom_colors() { 
global $finanix_option;	
/***styling options
------------------*/
	if(!empty($finanix_option['body_bg_color']))
	{
	 $body_bg          = $finanix_option['body_bg_color'];
	}	
	
	$site_color       = !empty($finanix_option['primary_color']) ? $finanix_option['primary_color'] : '';
	$secondary_color  = !empty($finanix_option['secondary_color']) ? $finanix_option['secondary_color'] : '';	
	$link_color       = !empty($finanix_option['link_text_color']) ? $finanix_option['link_text_color'] : '';
	$link_hover_color = !empty($finanix_option['link_hover_text_color']) ? $finanix_option['link_hover_text_color'] : '';
	$footer_bgcolor   = !empty($finanix_option['footer_bg_color']) ? $finanix_option['footer_bg_color'] : '';


	if(!empty($finanix_option['menu_text_color'])){		
		$menu_text_color         = $finanix_option['menu_text_color'];
	}
	if(!empty($finanix_option['menu_text_hover_color'])){		
		$menu_text_hover_color   = $finanix_option['menu_text_hover_color'];
	}
	if(!empty($finanix_option['menu_text_active_color'])){		
		$menu_active_color       = $finanix_option['menu_text_active_color'];
	}	
	if(!empty($finanix_option['menu_text_hover_bg'])){		
		$menu_text_hover_bg      = $finanix_option['menu_text_hover_bg'];
	}
	if(!empty($finanix_option['menu_text_active_bg'])){		
		$menu_text_active_bg     = $finanix_option['menu_text_active_bg'];
	}
	
	if(!empty($finanix_option['drop_text_color'])){		
		$dropdown_text_color     = $finanix_option['drop_text_color'];
	}
	
	if(!empty($finanix_option['drop_text_hover_color'])){		
		$drop_text_hover_color   = $finanix_option['drop_text_hover_color'];
	}			
	
	if(!empty($finanix_option['drop_text_hoverbg_color'])){		
		$drop_text_hoverbg_color = $finanix_option['drop_text_hoverbg_color'];
	}
	
	if(!empty($finanix_option['drop_down_bg_color'])){		
		$drop_down_bg_color = $finanix_option['drop_down_bg_color'];
	}	
	
	$rt_top_style = get_post_meta(get_the_ID(), 'topbar-color', true);
    if($rt_top_style =='toplight' || $rt_top_style==''){
		$toolbar_bg    = !empty($finanix_option['toolbar_bg_color']) ? $finanix_option['toolbar_bg_color'] : '';
		$toolbar_text  = !empty($finanix_option['toolbar_text_color']) ? $finanix_option['toolbar_text_color'] : '';
		$toolbar_link  = !empty($finanix_option['toolbar_link_color']) ? $finanix_option['toolbar_link_color'] : '';
		$toolbar_hover = !empty($finanix_option['toolbar_link_hover_color']) ? $finanix_option['toolbar_link_hover_color'] : '';

	}else{
		$toolbar_bg    = !empty($finanix_option['toolbar_bg_color2']) ? $finanix_option['toolbar_bg_color2'] : '';
		$toolbar_text  = !empty($finanix_option['toolbar_text_color2']) ? $finanix_option['toolbar_text_color2'] : '';
		$toolbar_link  = !empty($finanix_option['toolbar_link_color2']) ? $finanix_option['toolbar_link_color2'] : '';
		$toolbar_hover = !empty($finanix_option['toolbar_link_hover_color2']) ? $finanix_option['toolbar_link_hover_color2'] : '';		
    }


	//typography extract for body
	
	if(!empty($finanix_option['opt-typography-body']['color']))
	{
		$body_typography_color=$finanix_option['opt-typography-body']['color'];
	}
	if(!empty($finanix_option['opt-typography-body']['line-height']))
	{
		$body_typography_lineheight=$finanix_option['opt-typography-body']['line-height'];
	}
		
	$body_typography_font      = !empty($finanix_option['opt-typography-body']['font-family']) ? $finanix_option['opt-typography-body']['font-family'] : '';
	$body_typography_font_size = !empty($finanix_option['opt-typography-body']['font-size']) ? $finanix_option['opt-typography-body']['font-size'] : '' ;

	//typography extract for menu
	$menu_typography_color       = !empty($finanix_option['opt-typography-menu']['color']) ? $finanix_option['opt-typography-menu']['color'] : '' ;	
	$menu_typography_weight      = !empty($finanix_option['opt-typography-menu']['font-weight']) ? $finanix_option['opt-typography-menu']['font-weight']: '';	
	$menu_typography_font_family = !empty($finanix_option['opt-typography-menu']['font-family']) ? $finanix_option['opt-typography-menu']['font-family'] : '';

	$menu_typography_font_fsize  = !empty($finanix_option['opt-typography-menu']['font-size']) ? $finanix_option['opt-typography-menu']['font-size'] : '';
		
	if(!empty($finanix_option['opt-typography-menu']['line-height']))
	{
		$menu_typography_line_height=$finanix_option['opt-typography-menu']['line-height'];
	}
	
	//typography extract for heading
	
	$h1_typography_color= !empty($finanix_option['opt-typography-h1']['color'])? $finanix_option['opt-typography-h1']['color']: '';	

	if(!empty($finanix_option['opt-typography-h1']['font-weight']))
	{
		$h1_typography_weight=$finanix_option['opt-typography-h1']['font-weight'];
	}
		
	$h1_typography_font_family = !empty($finanix_option['opt-typography-h1']['font-family']) ? $finanix_option['opt-typography-h1']['font-family'] : '' ;

	$h1_typography_font_fsize = !empty($finanix_option['opt-typography-h1']['font-size']) ? $finanix_option['opt-typography-h1']['font-size'] : '';	

	if(!empty($finanix_option['opt-typography-h1']['line-height']))
	{
		$h1_typography_line_height=$finanix_option['opt-typography-h1']['line-height'];
	}
	
	$h2_typography_color = !empty($finanix_option['opt-typography-h2']['color']) ? $finanix_option['opt-typography-h2']['color'] : '';	

	$h2_typography_font_fsize = !empty($finanix_option['opt-typography-h2']['font-size']) ? $finanix_option['opt-typography-h2']['font-size'] : '';	
	if(!empty($finanix_option['opt-typography-h2']['font-weight']))
	{
		$h2_typography_font_weight=$finanix_option['opt-typography-h2']['font-weight'];
	}	
	$h2_typography_font_family = !empty($finanix_option['opt-typography-h2']['font-family']) ? $finanix_option['opt-typography-h2']['font-family'] : '' ;
	$h2_typography_font_fsize = !empty($finanix_option['opt-typography-h2']['font-size']) ? $finanix_option['opt-typography-h2']['font-size'] : '';	
	if(!empty($finanix_option['opt-typography-h2']['line-height']))
	{
		$h2_typography_line_height=$finanix_option['opt-typography-h2']['line-height'];
	}
	
	$h3_typography_color = !empty($finanix_option['opt-typography-h3']['color']) ? $finanix_option['opt-typography-h3']['color'] : '';	

	if(!empty($finanix_option['opt-typography-h3']['font-weight']))
	{
		$h3_typography_font_weightt=$finanix_option['opt-typography-h3']['font-weight'];
	}	
	$h3_typography_font_family = !empty($finanix_option['opt-typography-h3']['font-family']) ? $finanix_option['opt-typography-h3']['font-family']: '';
	$h3_typography_font_fsize  = !empty($finanix_option['opt-typography-h3']['font-size']) ? $finanix_option['opt-typography-h3']['font-size'] : '';	
	if(!empty($finanix_option['opt-typography-h3']['line-height']))
	{
		$h3_typography_line_height = $finanix_option['opt-typography-h3']['line-height'];
	}

	$h4_typography_color = !empty($finanix_option['opt-typography-h4']['color']) ? $finanix_option['opt-typography-h4']['color'] : '';	
	if(!empty($finanix_option['opt-typography-h4']['font-weight']))
	{
		$h4_typography_font_weight = $finanix_option['opt-typography-h4']['font-weight'];
	}	
	$h4_typography_font_family = !empty($finanix_option['opt-typography-h4']['font-family']) ? $finanix_option['opt-typography-h4']['font-family'] : '';
	$h4_typography_font_fsize  = !empty($finanix_option['opt-typography-h4']['font-size']) ? $finanix_option['opt-typography-h4']['font-size'] : '';	
	if(!empty($finanix_option['opt-typography-h4']['line-height']))
	{
		$h4_typography_line_height = $finanix_option['opt-typography-h4']['line-height'];
	}
	
	$h5_typography_color = !empty($finanix_option['opt-typography-h5']['color']) ? $finanix_option['opt-typography-h5']['color'] : '';	
	if(!empty($finanix_option['opt-typography-h5']['font-weight']))
	{
		$h5_typography_font_weight = $finanix_option['opt-typography-h5']['font-weight'];
	}	
	$h5_typography_font_family = !empty($finanix_option['opt-typography-h5']['font-family']) ? $finanix_option['opt-typography-h5']['font-family'] : '';
	$h5_typography_font_fsize  = !empty($finanix_option['opt-typography-h5']['font-size']) ? $finanix_option['opt-typography-h5']['font-size'] : '';	
	if(!empty($finanix_option['opt-typography-h5']['line-height']))
	{
		$h5_typography_line_height = $finanix_option['opt-typography-h5']['line-height'];
	}
	
	$h6_typography_color = !empty($finanix_option['opt-typography-6']['color']) ? $finanix_option['opt-typography-6']['color'] : '';	
	if(!empty($finanix_option['opt-typography-6']['font-weight']))
	{
		$h6_typography_font_weight = $finanix_option['opt-typography-6']['font-weight'];
	}
	$h6_typography_font_family = !empty($finanix_option['opt-typography-6']['font-family']) ? $finanix_option['opt-typography-6']['font-family'] : '';
	$h6_typography_font_fsize  = !empty($finanix_option['opt-typography-6']['font-size']) ? $finanix_option['opt-typography-6']['font-size'] : '';	
	if(!empty($finanix_option['opt-typography-6']['line-height']))
	{
		$h6_typography_line_height = $finanix_option['opt-typography-6']['line-height'];
	}
	

$body_color  = !empty($finanix_option['body_text_color']) ? $finanix_option['body_text_color'] : '' ;	?>
<!-- Typography -->
<?php if(!empty($body_color)){
	global $finanix_option;
?>

<style>
	<?php if(!empty($finanix_option['copyright_bg']))
		{
			$copyright_bg = $finanix_option['copyright_bg'];
		?>
		.footer-bottom{
			background:<?php echo esc_attr($copyright_bg); ?> !important;
		}
	<?php } ?>
	
	body{
		background:<?php echo sanitize_hex_color($body_bg); ?>;
		color:<?php echo sanitize_hex_color($body_color); ?> !important;
		<?php if(!empty($body_typography_font)){ ?>
			font-family: <?php echo esc_attr($body_typography_font);?> !important;   
		<?php } ?> 
	    font-size: <?php echo esc_attr($body_typography_font_size);?> !important;
	}

	<?php if(!empty($finanix_option['team_single_bg_color']))
		{
			$team_single_bg_color = $finanix_option['team_single_bg_color'];
		?>
		body.single-teams{
			background:<?php echo sanitize_hex_color($team_single_bg_color); ?>;
		}
	<?php } ?>


	h1{
		<?php if(!empty($h1_typography_color)) { ?> color:<?php echo sanitize_hex_color($h1_typography_color);?>;<?php }?>
		<?php if(!empty($h1_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h1_typography_font_family);?>;   
		<?php } ?>
		font-size:<?php echo esc_attr($h1_typography_font_fsize);?>;
		<?php if(!empty($h1_typography_weight)){
		?>
		font-weight:<?php echo esc_attr($h1_typography_weight);?>;
		<?php }?>
		
		<?php if(!empty($h1_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h1_typography_line_height);?>;
		<?php }?>		
	}

	h2{
		color:<?php echo sanitize_hex_color($h2_typography_color);?>;
		<?php if(!empty($h2_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h2_typography_font_family);?>;   
		<?php } ?> 
		font-size:<?php echo esc_attr($h2_typography_font_fsize);?>;
		<?php if(!empty($h2_typography_font_weight)){
		?>
		font-weight:<?php echo esc_attr($h2_typography_font_weight);?>;
		<?php }?>
		
		<?php if(!empty($h2_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h2_typography_line_height);?>
		<?php }?>
	}

	h3{
		color:<?php echo sanitize_hex_color($h3_typography_color);?> ;
		<?php if(!empty($h3_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h3_typography_font_family);?>;   
		<?php } ?> 
		font-size:<?php echo esc_attr($h3_typography_font_fsize);?>;
		<?php if(!empty($h3_typography_font_weight)){
		?>
		font-weight:<?php echo esc_attr($h3_typography_font_weight);?>;
		<?php }?>
		
		<?php if(!empty($h3_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h3_typography_line_height);?>;
		<?php }?>
	}

	h4{
		color:<?php echo sanitize_hex_color($h4_typography_color);?>;
		<?php if(!empty($h4_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h4_typography_font_family);?>;   
		<?php } ?>
		font-size:<?php echo esc_attr($h4_typography_font_fsize);?>;
		<?php if(!empty($h4_typography_font_weight)){
		?>
		font-weight:<?php echo esc_attr($h4_typography_font_weight);?>;
		<?php }?>
		
		<?php if(!empty($h4_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h4_typography_line_height);?>;
		<?php }?>
		
	}

	h5{
		color:<?php echo sanitize_hex_color($h5_typography_color);?>;
		<?php if(!empty($h5_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h5_typography_font_family);?>;   
		<?php } ?>
		font-size:<?php echo esc_attr($h5_typography_font_fsize);?>;
		<?php if(!empty($h5_typography_font_weight)){
		?>
		font-weight:<?php echo esc_attr($h5_typography_font_weight);?>;
		<?php }?>
		
		<?php if(!empty($h5_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h5_typography_line_height);?>;
		<?php }?>
	}

	h6{
		color:<?php echo sanitize_hex_color($h6_typography_color);?> ;
		<?php if(!empty($h6_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h6_typography_font_family);?>;   
		<?php } ?>
		font-size:<?php echo esc_attr($h6_typography_font_fsize);?>;
		<?php if(!empty($h6_typography_font_weight)){
		?>
		font-weight:<?php echo esc_attr($h6_typography_font_weight);?>;
		<?php }?>
		
		<?php if(!empty($h6_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h6_typography_line_height);?>;
		<?php }?>
	}

	.menu-area .navbar ul li > a,
	.sidenav .widget_nav_menu ul li a{
		<?php if(!empty($menu_typography_weight)){ ?>
			font-weight: <?php echo esc_attr($menu_typography_weight);?>;   
		<?php } ?>
		<?php if(!empty($menu_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($menu_typography_font_family);?>;   
		<?php } ?>
		font-size:<?php echo esc_attr($menu_typography_font_fsize); ?>;
	}

	#reactheme-header .toolbar-area .toolbar-contact ul.reactheme-contact-info li,
	#reactheme-header .toolbar-area .toolbar-contact ul.reactheme-contact-info li a, 
	#reactheme-header .toolbar-area .toolbar-contact ul li a,
	#reactheme-header .toolbar-area .toolbar-contact ul li, #reactheme-header .toolbar-area{
		color:<?php echo sanitize_hex_color($toolbar_text); ?>;
	}

	<?php
		if(!empty($finanix_option['transparent_toolbar_text_color'])){?>
			#reactheme-header.header-transparent .toolbar-area .toolbar-contact ul.reactheme-contact-info li,
			#reactheme-header.header-transparent .toolbar-area .toolbar-contact ul.reactheme-contact-info li i,
			#reactheme-header.header-transparent .toolbar-area .toolbar-contact ul.reactheme-contact-info li a,
			#reactheme-header.header-style-4 .btn_quote .toolbar-sl-share ul li a
			{
				color: <?php echo sanitize_hex_color($finanix_option['transparent_toolbar_text_color']);?>
			}
		<?php } 
	?>

	<?php
		if(!empty($finanix_option['transparent_toolbar_link_hover_color'])){?>
			#reactheme-header.header-transparent .toolbar-area .toolbar-contact ul.reactheme-contact-info li:hover a,
			#reactheme-header.header-style-4 .btn_quote .toolbar-sl-share ul li a:hover{
			color: <?php echo sanitize_hex_color($finanix_option['transparent_toolbar_link_hover_color']);?>
		}
		<?php } 
	?>	

	<?php	
		if(!empty($finanix_option['background_position'])):	  	  			
			$footer_position = $finanix_option['background_position']; ?>
			#reactheme-footer{
			background-position:<?php echo esc_html($footer_position);?> !important;
		}
    <?php endif; ?>

	<?php	
		if(!empty($finanix_option['background_repeat'])):	  	  			
			$background_repeat = $finanix_option['background_repeat']; ?>
			#reactheme-footer{
			background-repeat:<?php echo esc_html($background_repeat);?> !important;
		}
    <?php endif; ?>  

	<?php	
		if(!empty($finanix_option['background_size'])):	  	  			
			$background_size = $finanix_option['background_size']; ?>
			#reactheme-footer{
			background-size:<?php echo esc_html($background_size);?> !important;
		}
    <?php endif; ?>

	<?php	
		if(!empty($finanix_option['news_bg_color'])):	  	  			
			$news_bg_color = $finanix_option['news_bg_color']; ?>
			.reactheme-newsletter .newsletter-wrap{
			background:<?php echo sanitize_hex_color($news_bg_color);?>;
		}
    <?php endif; ?>

	<?php	
		if(!empty($finanix_option['menu_area_bg_color'])):	  	  			
			$menu_bg_color = $finanix_option['menu_area_bg_color']; ?>
			#reactheme-header .menu-sticky .menu-area, #reactheme-header.header-style3 .menu-sticky .menu-area{
			background:<?php echo sanitize_hex_color($menu_bg_color);?>;
		}
    <?php endif; ?>

	<?php	
		if(!empty($finanix_option['toolbar_btn_color'])):	  	  			
			$top_btn_color = $finanix_option['toolbar_btn_color']; ?>
			.tops-btn .quote-buttons{
			color:<?php echo sanitize_hex_color($top_btn_color);?>;
		}
    <?php endif; ?>

	<?php	
		if(!empty($finanix_option['toolbar_icons_color'])):	  	  			
			$top_icon_color = $finanix_option['toolbar_icons_color']; ?>
			.toolbar-area .toolbar-contact i, 
			.toolbar-area .opening i, 
			.toolbar-area .opening i:before, 
			.toolbar-area .toolbar-contact i:before{
			color:<?php echo sanitize_hex_color($top_icon_color);?>;
		}
    <?php endif; ?>
	<?php	
		if(!empty($finanix_option['social_icons_colors'])):	  	  			
			$top_icon_social_color = $finanix_option['social_icons_colors']; ?>
			.toolbar-area .toolbar-sl-share i, 
			.toolbar-area .toolbar-sl-share i:before{
			color:<?php echo sanitize_hex_color($top_icon_social_color);?>;
		}
    <?php endif; ?>	

    <?php	
		if(!empty($finanix_option['social_icons_hover_colors'])):	  	  			
			$top_icon_social_hover_color = $finanix_option['social_icons_hover_colors']; ?>
			.toolbar-area .toolbar-sl-share i:hover, .toolbar-area .toolbar-sl-share a:hover i:before{
			color:<?php echo sanitize_hex_color($top_icon_social_hover_color);?>;
		}
    <?php endif; ?>

    <?php 
    if(!empty($finanix_option['logo_bg_color'])):
    	$logo_bg_color = $finanix_option['logo_bg_color']; ?>	
    	header#reactheme-header.header-style-4.header-style6 .logo-area, 
    	header#reactheme-header.header-style-4.header-style6 .logo-areas{
    		background:<?php echo sanitize_hex_color($logo_bg_color);?>;
    	}
    <?php endif; ?>

    <?php 
    if(!empty($finanix_option['drop_down_bdr_color'])):
    	$drop_down_bdr_color = $finanix_option['drop_down_bdr_color']; ?>	
    	.menu-area .navbar ul li ul.sub-menu{
    		border-color:<?php echo esc_attr($drop_down_bdr_color);?>;
    	}
    <?php endif; ?>

    <?php 
    if(!empty($finanix_option['offcanvas_icon_bgs_color'])):
    	$offcanvas_icon_bgs_color = $finanix_option['offcanvas_icon_bgs_color']; ?>	
    	.sidebarmenu-area{
    		background:<?php echo sanitize_hex_color($offcanvas_icon_bgs_color);?>;
    	}
    <?php endif; ?>
    <?php 
    if(!empty($finanix_option['offcanvas_close_bg_color'])):
    	$offcanvas_close_bg_color = $finanix_option['offcanvas_close_bg_color']; ?>	
    	.menu-wrap-off .inner-offcan .nav-link-container .close-button{
    		background:<?php echo sanitize_hex_color($offcanvas_close_bg_color);?>;
    	}
    <?php endif; ?>

	#reactheme-header .toolbar-area .toolbar-contact ul.reactheme-contact-info li a,
	#reactheme-header .toolbar-area .toolbar-contact ul li a,
	#reactheme-header .toolbar-area .tops-btn .btn_login a,
	#reactheme-header .toolbar-area .toolbar-contact ul li i,
	#reactheme-header .toolbar-area .toolbar-sl-share ul li a i{
		color:<?php echo sanitize_hex_color($toolbar_link); ?>;
	}

	#reactheme-header .toolbar-area .toolbar-contact ul.reactheme-contact-info li a:hover,
	#reactheme-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons:hover,
	#reactheme-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons:before,
	#reactheme-header .toolbar-area .toolbar-contact ul li a:hover,
	#reactheme-header .toolbar-area .tops-btn .btn_login a:hover, 
	#reactheme-header .toolbar-area .toolbar-sl-share ul li a i:hover{
		color:<?php echo sanitize_hex_color($toolbar_hover); ?>;
	}
	#reactheme-header .toolbar-area{
		background:<?php echo sanitize_hex_color($toolbar_bg); ?>;
	}

	
	.mobile-menu-container div ul > li.current_page_parent > a,
	#reactheme-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor a, 
	#reactheme-header.header-transparent .menu-area .navbar ul li.current_page_item a,
	.menu-area .navbar ul.menu > li.current_page_item > a,
	.menu-area .navbar ul li.current-menu-ancestor a, .menu-area .navbar ul li.current_page_item a,
	.menu-area .navbar ul li ul.sub-menu > li.menu-item-has-children > a:before
	{
		color: <?php echo sanitize_hex_color( $menu_active_color ); ?>;
	}	
	
	.menu-area .navbar ul > li.menu-item-has-children.hover-minimize > a:after{
		background: <?php echo sanitize_hex_color( $menu_active_color ); ?> !important;
	}	

	.menu-area .navbar ul > li.menu-item-has-children.hover-minimize:hover > a:after{
		background: <?php echo sanitize_hex_color( $menu_text_hover_color ); ?> !important;
	}

	.menu-area .navbar ul li:hover a:before{
		color: <?php echo sanitize_hex_color( $menu_active_color ); ?>;
	}

	.menu-area .navbar ul li:hover > a,	
	.mobile-menu-container div ul li a:hover,	
	#reactheme-header.header-style5 .header-inner.menu-sticky.sticky .menu-area .navbar ul li:hover > a,
	#reactheme-header.header-style-4 .menu-area .menu li:hover > a,
	#reactheme-header .sticky_search:hover i::before,	
	#reactheme-header.header-style-4 .header-inner .menu-area .navbar ul li:hover a,
	#reactheme-header.header-style-4 .menu-area .navbar ul li:hover a:before,
	.menu-cart-area i:hover,
	#reactheme-header.header-style1 .category-menu .menu li:hover:after,
	#reactheme-header.header1.header-style1 .menu-area .navbar ul li:hover a,
	#reactheme-header.header-style-3.header-style-2 .sticky-wrapper .menu-area .navbar ul li:hover > a,
	#reactheme-header.header-style-4 .header-quote .phone-part a svg,
	#reactheme-header.header-style-4 .header-quote .phone-part a:hover
	{
		color: <?php echo sanitize_hex_color( $menu_text_hover_color ); ?>;
	}

	.nav-link-container .nav-menu-link:hover span,
	.single-header.header1.header-style1 .menu-area .navbar ul > li.menu-item-has-children.hover-minimize:hover > a::after{
		background: <?php echo sanitize_hex_color( $menu_text_hover_color ); ?>;
	}

	.menu-area .navbar ul li a,	
	#reactheme-header .sticky_search i::before,
	.menu-cart-area i,
	#reactheme-header.header1.header-style1 .sticky_search i::before,
	#reactheme-header.header1.header-style1 .menu-area .navbar ul li a,
	body #reactheme-header.header-style-4.header-style7 .category-menu .menu li::after,
	body #reactheme-header.header-style-4.header-style6 .category-menu .menu li::after,
	#reactheme-header.header-style1.header1 .btn_apply a,	
	#reactheme-header.header-style1 .category-menu .menu li::after, 
	#reactheme-header.header-style-4 .category-menu .menu li::after,
	.menu-cart-area i, #reactheme-header.header-transparent .menu-area.dark .menu-cart-area i,
	#reactheme-header.header-style-4 .header-quote .phone-part a,
	#reactheme-header.header-style5 .header-inner .menu-area .navbar ul > li > a
	{
		color: <?php echo sanitize_hex_color( $menu_text_color ); ?>; 
	}

	.nav-link-container .nav-menu-link span,
	#reactheme-header.header1.header-style1 .nav-link-container .nav-menu-link span, 
	#reactheme-header.header1.header-style1 .nav-link-container .nav-menu-link span{
		background: <?php echo sanitize_hex_color( $menu_text_color ); ?>; 
	}

	#reactheme-header.header-transparent .menu-area.dark .navbar ul.menu > li.current_page_item > a::before, 
	#reactheme-header.header-transparent .menu-area.dark .navbar ul.menu > li.current_page_item > a::after, 
	#reactheme-header.header-transparent .menu-area.dark .navbar ul.menu > li > a::before,
	#reactheme-header.header-transparent .menu-area.dark .navbar ul.menu > li > a::after,
	#reactheme-header.header-transparent .menu-area.dark .navbar ul.menu > li > a,	
	#reactheme-header.header-transparent .menu-area.dark .menu-responsive .sidebarmenu-search .sticky_search .fa
	{
		color: <?php echo sanitize_hex_color( $menu_text_color ); ?> !important;
	}

	<?php if(!empty($finanix_option['transparent_menu_text_color'])) : ?>
		#reactheme-header.header-transparent .menu-area .navbar ul li a, 
		#reactheme-header.header-transparent .menu-cart-area i,		
		#reactheme-header.header-style5 .sticky_search i::before,
		#reactheme-header.header-style1.header-style3 .sticky_search i:before,		
		#reactheme-header.header-transparent .menu-responsive .sidebarmenu-search .sticky_search,
		#reactheme-header.header-transparent .menu-responsive .sidebarmenu-search .sticky_search .fa,
		#reactheme-header.header-transparent .menu-area.dark .navbar ul > li > a,
		#reactheme-header.header-transparent .menu-area .navbar ul li:hover > a{
			color:<?php echo sanitize_hex_color($finanix_option['transparent_menu_text_color']); ?> 
	}
	<?php endif; ?>

	<?php if(!empty($finanix_option['transparent_menu_text_color'])) : ?>
		.header-style5 .nav-link-container .nav-menu-link span{
			background:<?php echo sanitize_hex_color($finanix_option['transparent_menu_text_color']); ?> 
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['transparent_menu_text_color'])) : ?>		
		#reactheme-header.header-style-4 .category-menu .menu li::after,
		.header-style1.header-style3 .menu-area .navbar ul li a,
		#reactheme-header.header-style5 .menu-cart-area > a,
		.user-icons a,
		.header-style1.header-style3 .menu-cart-area i,
		#reactheme-header.header-style5 .menu-responsive .sidebarmenu-search .sticky_search,
		#reactheme-header.header-style5 .menu-cart-area i{
			color:<?php echo sanitize_hex_color($finanix_option['transparent_menu_text_color']); ?> 
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['transparent_menu_text_color'])) : ?>
		#reactheme-header.header-style3 .menu-cart-area > a,
		.user-icons a,
		#reactheme-header.header-style5 .menu-cart-area > a{
			border-color:<?php echo sanitize_hex_color($finanix_option['transparent_menu_text_color']); ?> 
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['transparent_menu_hover_color'])) : ?>
		#reactheme-header.header-style5 .menu-cart-area > a:hover,
		.user-icons a:hover{
			border-color:<?php echo sanitize_hex_color($finanix_option['transparent_menu_hover_color']); ?> 
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['transparent_menu_hover_color'])) : ?>
		#reactheme-header.header-style5 .header-inner .menu-area .navbar ul li:hover > a,	
		#reactheme-header.header-style1.header-style3 .sticky_search:hover i:before,
		.header-style1.header-style3 .menu-cart-area i:hover,
		.user-icons a:hover,
		#reactheme-header.header-style5 .sticky_search:hover i:before,
		#reactheme-header.header-style5 .menu-cart-area > a:hover,
		#reactheme-header.header-style5 .menu-cart-area > a:hover i:before,
		#reactheme-header.header-style5 .menu-cart-area i:hover,		
		.header-style1.header-style3 .menu-area .navbar ul li:hover a,
		#reactheme-header.header-transparent .menu-area .navbar ul li.current_page_parent a:before{
			color:<?php echo sanitize_hex_color($finanix_option['transparent_menu_hover_color']); ?> 
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['transparent_menu_hover_color'])) : ?>
		.header-style1.header-style3 .nav-link-container .nav-menu-link:hover span, 
		.header-style5 .nav-link-container .nav-menu-link:hover span,
		.single-header.header-style1.header-style3 .menu-area .navbar ul > li.menu-item-has-children.hover-minimize:hover > a::after,
		#reactheme-header.header-style5 .header-inner .menu-area .navbar ul > li.menu-item-has-children.hover-minimize:hover > a:after{
			background:<?php echo sanitize_hex_color($finanix_option['transparent_menu_hover_color']); ?> !important;  
		}
	<?php endif; ?>



	<?php if(!empty($finanix_option['transparent_menu_active_color'])) : ?>
		#reactheme-header.header-style5 .header-inner .menu-area .navbar ul > li.menu-item-has-children.hover-minimize > a:after{
			background:<?php echo sanitize_hex_color($finanix_option['transparent_menu_active_color']); ?> !important; 
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['footer_aicons_color'])) : ?>
		.reactheme-footer .widget.widget_nav_menu ul li a::before, 
		.reactheme-footer .widget.widget_pages ul li a::before,
		.reactheme-footer .widget.widget_nav_menu ul li a::before, 
		.reactheme-footer .widget.widget_recent_comments ul li::before, 
		.reactheme-footer .widget.widget_pages ul li a::before,
		.reactheme-footer .widget.widget_archive ul li a::before, 
		.reactheme-footer .widget.widget_categories ul li a::before,
		.reactheme-footer .widget.widget_archive ul li a::before, 
		.reactheme-footer .widget.widget_categories ul li a::before{
			background:<?php echo sanitize_hex_color($finanix_option['footer_aicons_color']); ?>; 
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['foot_social_bg_color'])) : ?>
		ul.footer_social li a{
			background:<?php echo sanitize_hex_color($finanix_option['foot_social_bg_color']); ?>; 
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['foot_social_bg_hover'])) : ?>
		ul.footer_social li a:hover{
			background:<?php echo sanitize_hex_color($finanix_option['foot_social_bg_hover']); ?>; 
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['footer_aicons_color'])) : ?>
		.reactheme-footer .footer-contact-ul li i::before{
			color:<?php echo sanitize_hex_color($finanix_option['footer_aicons_color']); ?>; 
		}
	<?php endif; ?>

	

	<?php if(!empty($finanix_option['transparent_menu_active_color'])) : ?>
	#reactheme-header.header-style5 .menu-area .navbar ul > li.current-menu-ancestor > a, 
	#reactheme-header.header-style5 .header-inner .menu-area .navbar ul > li.current-menu-ancestor > a,
	#reactheme-header.header-style5 .header-inner.menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a{
			color:<?php echo sanitize_hex_color($finanix_option['transparent_menu_active_color']); ?> !important; 
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['transparent_menu_text_color'])) : ?> 
		.header-style-4 .menu-cart-area span.icon-num,
		.header-style1.header-style3 .nav-link-container .nav-menu-link span, 
		.header-style5 .menu-cart-area span.icon-num
		{
			background: <?php echo sanitize_hex_color($finanix_option['transparent_menu_text_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['menu_area_bg_color'])) : ?>
		#reactheme-header.header-style5 .header-inner .menu-area, 
		#reactheme-header.header-style-3.header-style-2 .sticky-wrapper .header-inner .box-layout{
		background:<?php echo sanitize_hex_color($finanix_option['menu_area_bg_color']); ?> 
	}
	<?php endif; ?>	

	<?php if(!empty($finanix_option['transparent_menu_text_color'])) : ?>
		#reactheme-header.header-transparent .menu-area.dark ul.offcanvas-icon .nav-link-container .nav-menu-link span{
			background:<?php echo sanitize_hex_color($finanix_option['transparent_menu_text_color']); ?> 
		}
	<?php endif; ?>

	

	<?php if(!empty($finanix_option['offcanvas_icon_color'])) : ?>
		.nav-link-container .nav-menu-link span,
		#reactheme-header.header-style-4 .nav-link-container .nav-menu-link span{
			background:<?php echo sanitize_hex_color($finanix_option['offcanvas_icon_color']); ?> 
		}
	<?php endif; ?>	

	<?php if(!empty($finanix_option['offcan_bgs_color'])) : ?>
		.menu-ofcn.off-open,
		.menu-wrap-off{
			background:<?php echo sanitize_hex_color($finanix_option['offcan_bgs_color']); ?> 
		}
	<?php endif; ?>	

	<?php if(!empty($finanix_option['offcan_text_color'])) : ?>
		.menu-ofcn.off-open,
		.sidenav .footer-contact-ul li a{
			color:<?php echo sanitize_hex_color($finanix_option['offcan_text_color']); ?> 
		}
	<?php endif; ?>		

	<?php if(!empty($finanix_option['offcan_title_color'])) : ?>
		.menu-ofcn.off-open,
		.sidenav .widget .widget-title{
			color:<?php echo sanitize_hex_color($finanix_option['offcan_title_color']); ?> 
		}
	<?php endif; ?>	

	<?php if(!empty($finanix_option['offcan_title_color'])) : ?>
		.sidenav .widget-title:before{
			background:<?php echo sanitize_hex_color($finanix_option['offcan_title_color']); ?> 
		}
	<?php endif; ?>	

	<?php if(!empty($finanix_option['offcan_link_color'])) : ?>		
		.sidenav .footer-contact-ul li a, .sidenav ul.footer_social li a i{
			color:<?php echo sanitize_hex_color($finanix_option['offcan_link_color']); ?> 
		}
	<?php endif; ?>	

	<?php if(!empty($finanix_option['offcan_link_hover_color'])) : ?>		
		.sidenav .footer-contact-ul li a:hover, .sidenav ul.footer_social li a:hover i{
			color:<?php echo sanitize_hex_color($finanix_option['offcan_link_hover_color']); ?> 
		}
	<?php endif; ?>	

	

	<?php if(!empty($finanix_option['transparent_menu_hover_color'])) : ?>
		#reactheme-header.header-transparent .menu-area .navbar ul > li > a:hover,
		#reactheme-header.header-transparent .menu-area .navbar ul > li > a:hover:before,
		#reactheme-header.header-transparent .menu-area .navbar ul li:hover > a,
		#reactheme-header.header-transparent .menu-area.dark .navbar ul > li:hover > a{
			color:<?php echo sanitize_hex_color($finanix_option['transparent_menu_hover_color']); ?> 
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['drop_text_color'])) : ?>
		.menu-area .navbar ul li .sub-menu li a,
		#reactheme-header .menu-area .navbar ul li.mega ul li a,
		#reactheme-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor > a,
		#reactheme-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor li a{
			color:<?php echo sanitize_hex_color($finanix_option['drop_text_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['drop_text_hover_color'])) : ?>
		.menu-area .navbar ul li ul.sub-menu li.current_page_item > a,
		.menu-area .navbar ul li .sub-menu li a:hover,
		#reactheme-header .menu-area .navbar ul li.mega ul > li > a:hover,
		.menu-area .navbar ul li ul.sub-menu li:hover > a,
		#reactheme-header.header-style5 .header-inner .menu-area .navbar ul li .sub-menu > li:hover > a,
		#reactheme-header.header-transparent .menu-area .navbar ul li .sub-menu li:hover > a,
		#reactheme-header .menu-area .navbar ul li.mega ul li a:hover,
		#reactheme-header .menu-area .navbar ul li.mega ul > li.current-menu-item > a,
		.menu-sticky.sticky .menu-area .navbar ul li ul li a:hover,
		#reactheme-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor > a, #reactheme-header.header-transparent .menu-area .navbar ul li .sub-menu li.current_page_item > a,
		#reactheme-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor li a:hover{
			color:<?php echo sanitize_hex_color($finanix_option['drop_text_hover_color']); ?> ;
		}
	<?php endif; ?>



	<?php if(!empty($finanix_option['drop_down_bg_color'])) : ?>
		.menu-area .navbar ul li .sub-menu{
			background:<?php echo sanitize_hex_color($finanix_option['drop_down_bg_color']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['toolbar_text_size'])) : ?>
		#reactheme-header .toolbar-area .toolbar-contact ul li,
		#reactheme-header .toolbar-area a,
		#reactheme-header .toolbar-area .toolbar-contact ul li i:before{
			font-size:<?php echo esc_attr($finanix_option['toolbar_text_size']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['menu_text_trasform'])) : ?>
		.menu-area .navbar ul > li > a,
		#reactheme-header .menu-area .navbar ul > li.mega > ul > li > a{
			text-transform:uppercase;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['menu_text_trasform2'])) : ?>
		.menu-area .navbar ul.sub-menu  li  a{
			text-transform:uppercase !important;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['copyright_bg_border'])) : ?>
		.footer-bottom .container{
			border-color:<?php echo sanitize_hex_color($finanix_option['copyright_bg_border']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['copyright_text_color'])) : ?>
		.footer-bottom .copyright p{
			color:<?php echo sanitize_hex_color($finanix_option['copyright_text_color']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['footer_text_size'])) : ?>
		.reactheme-footer, .reactheme-footer h3, .reactheme-footer a, 
		.reactheme-footer .footer-contact-ul li a, 
		.reactheme-footer .widget.widget_nav_menu ul li a{
			font-size:<?php echo esc_attr($finanix_option['footer_text_size']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['footer_h3_size'])) : ?>
		.reactheme-footer h3, .reactheme-footer .footer-top h3.footer-title{
			font-size:<?php echo esc_attr($finanix_option['footer_h3_size']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['footer_link_size'])) : ?>
		.reactheme-footer a{
			font-size:<?php echo esc_attr($finanix_option['footer_link_size']); ?>;
		}
	<?php endif; ?>	

	<?php if(!empty($finanix_option['event_title_font_size'])) : ?>
		body .reactheme-breadcrumbs .page-title{
			font-size:<?php echo esc_attr($finanix_option['event_title_font_size']); ?>;
		}
	<?php endif; ?>	

	<?php if(!empty($finanix_option['stikcy_menu_font_size'])) : ?>
		.menu-sticky.sticky .navbar ul li > a{
			font-size:<?php echo esc_attr($finanix_option['stikcy_menu_font_size']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['stikcy_dropdown_menu_font_size'])) : ?>
		.sticky .navbar ul li ul.sub-menu li a{
			font-size:<?php echo esc_attr($finanix_option['stikcy_dropdown_menu_font_size']); ?>;
		}
	<?php endif; ?>	



	<?php if(!empty($finanix_option['footer_text_color'])) : ?>
		.reactheme-footer, .reactheme-footer .footer-top h3.footer-title, 
		.reactheme-footer a, .reactheme-footer .footer-contact-ul li a,
		.reactheme-footer .widget.widget_nav_menu ul li a, 
		.reactheme-footer .widget.widget_recent_comments ul li, 
		.reactheme-footer .widget.widget_pages ul li a, 
		.reactheme-footer .widget.widget_recent_comments ul li a,
		.reactheme-footer .widget.widget_archive ul li a, 
		.reactheme-footer .widget.widget_categories ul li a,
		.reactheme-footer .widget.widget_nav_menu ul li a,
		.reactheme-footer .footer-top input[type="email"]::placeholder
		{
			color:<?php echo sanitize_hex_color($finanix_option['footer_text_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['footer_title_color'])) : ?>
		.reactheme-footer .footer-top h3.footer-title
		{
			color:<?php echo sanitize_hex_color($finanix_option['footer_title_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['footer_link_color'])) : ?>
		.reactheme-footer a:hover, 
		.reactheme-footer .widget.widget_nav_menu ul li a:hover,
		.reactheme-footer .footer-contact-ul li a:hover,
		.reactheme-footer .widget.widget_recent_comments ul li a:hover,
		.reactheme-footer .widget.widget_pages ul li a:hover, 
		.reactheme-footer .widget.widget_recent_comments ul li:hover, 
		.reactheme-footer .widget.widget_archive ul li a:hover, 
		.reactheme-footer .widget.widget_categories ul li a:hover,
		.reactheme-footer .widget a:hover{
			color:<?php echo sanitize_hex_color($finanix_option['footer_link_color']); ?>;
		}
	<?php endif; ?>

	

	<?php if(!empty($finanix_option['foot_social_color'])) : ?>	
		ul.footer_social > li > a{
			color:<?php echo sanitize_hex_color($finanix_option['foot_social_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['foot_social_hover'])) : ?>	
		ul.footer_social > li > a:hover{
			color:<?php echo sanitize_hex_color($finanix_option['foot_social_hover']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['subscribe_input_button_bg_color'])) : ?>
		.mc4wp-form-fields .newsletter-form button
		{
			background:<?php echo sanitize_hex_color($finanix_option['subscribe_input_button_bg_color']); ?>
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['subscribe_input_hover_color'])) : ?>
		.mc4wp-form-fields .newsletter-form button:hover{
			background:<?php echo sanitize_hex_color($finanix_option['subscribe_input_hover_color']); ?>!important;
		}
	<?php endif; ?>
	
	<?php if(!empty($finanix_option['subscribe_input_button_bg_color'])) : ?>
		.mc4wp-form-fields .newsletter-form button{
			background:<?php echo sanitize_hex_color($finanix_option['subscribe_input_button_bg_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['subscribe_btn_text_color'])) : ?>
		.mc4wp-form-fields .newsletter-form button
		{
			color:<?php echo sanitize_hex_color($finanix_option['subscribe_btn_text_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['subscribe_input_bg_color'])) : ?>
		.mc4wp-form-fields .newsletter-form input
		{
			background:<?php echo sanitize_hex_color($finanix_option['subscribe_input_bg_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['subscribe_input_text_color'])) : ?>
		.mc4wp-form-fields .newsletter-form input
		{
			color:<?php echo sanitize_hex_color($finanix_option['subscribe_input_text_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['copyright_borders'])) : ?>
		.footer-bottom .copyright_border{
			border-color:<?php echo sanitize_hex_color($finanix_option['copyright_borders']); ?> 
		}
	<?php endif; ?>

	.reactheme-footer .recent-post-widget .show-featured .post-desc i,	
	.reactheme-heading .title-inner .sub-text,
	.reactheme-services-default .services-wrap .services-item .services-icon i,	
	.reactheme-blog .blog-item .blog-slidermeta span.category a:hover,
	.btm-cate li a:hover,	
	.ps-navigation ul a:hover span,	
	.reactheme-portfolio-style5 .portfolio-item .portfolio-content a,
	.reactheme-services1.services-left.border_style .services-wrap .services-item .services-icon i:hover,
	.reactheme-services1.services-right .services-wrap .services-item .services-icon i:hover,
	.reactheme-galleys .galley-img .zoom-icon:hover,
	#about-history-tabs ul.tabs-list_content li:before,
	#reactheme-header.header-style-3 .header-inner .logo-section .toolbar-contact-style4 ul li i,
	#sidebar-services .widget.widget_nav_menu ul li.current-menu-item a,
	#sidebar-services .widget.widget_nav_menu ul li a:hover,
	.single-teams .team-inner ul li i,
	#reactheme-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor > a, 
	#reactheme-header.header-transparent .menu-area .navbar ul li .sub-menu li.current_page_item > a,
	reactheme-heading .title-inner .title,
	.team-grid-style1 .team-item .team-content1 h3.team-name a, 
	.reactheme-team-grid.team-style5 .team-item .normal-text .person-name a,
	.reactheme-team-grid.team-style4 .team-wrapper .team_desc .name a,
	.reactheme-team-grid.team-style4 .team-wrapper .team_desc .name .designation,	
	.contact-page1 .form-button .submit-btn i:before,	
	.woocommerce nav.woocommerce-pagination ul li span.current, 
	.woocommerce nav.woocommerce-pagination ul li a:hover,
	.single-teams .ps-informations h2.single-title,
	.single-teams .ps-informations ul li.phone a:hover, .single-teams .ps-informations ul li.email a:hover,
	.single-teams .siderbar-title,
	.single-teams .team-detail-wrap-btm.team-inner .appointment-btn a,
	ul.check-icon li:before,
	.reactheme-project-section .project-item .project-content .title a:hover,
	.subscribe-text i, .subscribe-text .title, .subscribe-text span a:hover,
	.timeline-icon,	
	.reactheme-edash-details .learndash-wrapper .ld-status-icon .ld-icon:before,
	.service-carousels .services-sliders3 span.num,
	.service-reacbuttons:before,	
	
	.reactheme-blog-details .bs-meta li i,
	.services-sliders4:hover .services-desc h4.services-title a,	
	.reactheme-footer.footerlight .footer_social li a .fa,
	.single-teams .ps-informations h4.single-title,
	.react-sideabr .recent-post-widget .post-desc a:hover{
		color:<?php echo sanitize_hex_color($secondary_color); ?>;
	}

	.contact-form .input-box:before{
		color:<?php echo sanitize_hex_color($site_color); ?>;
	}

	

	.portfolio-slider-data .slick-next, 
	.portfolio-slider-data .slick-prev,
	.ps-navigation ul a:hover span,
	ul.chevron-right-icon li:before,
	.sidenav .footer-contact-ul li i,
	.woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce ul.products li.product .price,		
	.reactheme-portfolio.style2 .portfolio-slider .portfolio-item .portfolio-content h3.p-title a:hover,
	#reactheme-header.header-style5 .stuck.sticky .menu-area .navbar ul > li.active a,
	#reactheme-header .menu-area .navbar ul > li.active a,
	.woocommerce-message::before, .woocommerce-info::before,	
	.reactheme-sl-social-icons a:hover,
	.reactheme-portfolio.vertical-slider.style4 .portfolio-slider .portfolio-item:hover .p-title a{
		color:<?php echo sanitize_hex_color($secondary_color); ?>;
	}

	
	.transparent-btn:hover,
	.testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial:after,
	.reactheme-portfolio-style2 .portfolio-item .portfolio-img .read_more:hover,
	.service-carousel .owl-dots .owl-dot.active,
	.service-carousel .owl-dots .owl-dot,
	.react-sideabr.dynamic-sidebar .service-singles .menu li a:hover,
	.react-sideabr.dynamic-sidebar .service-singles .menu li.current-menu-item a,
	.reactheme-footer.footerlight .footer-top .mc4wp-form-fields input[type="email"],
	.react-sideabr .tagcloud a:hover,	
	.reactheme-blog-details .bs-info.tags a:hover,
	.single-teams .team-skill .reactheme-progress{
		border-color:<?php echo sanitize_hex_color($secondary_color); ?> !important;
	}
		
	.owl-carousel .owl-nav [class*="owl-"],
	html input[type="button"]:hover, input[type="reset"]:hover,
	.reactheme-video-2 .popup-videos:before,
	.sidenav .widget-title:before,
	.reactheme-team-grid.team-style5 .team-item .team-content,
	.reactheme-team-grid.team-style4 .team-wrapper .team_desc::before,
	.reactheme-services-style4:hover .services-icon i,
	.team-grid-style1 .team-item .social-icons1 a:hover i,
	.loader__bar,
	.reactheme-blog-grid .blog-img a.float-cat,
	#sidebar-services .download-btn ul li,
	.transparent-btn:hover,
	.reactheme-portfolio-style2 .portfolio-item .portfolio-img .read_more:hover,
	.reactheme-video-2 .popup-videos,
	.reactheme-blog-details .blog-item.style2 .category a, .reactheme-blog .blog-item.style2 .category a, .blog .blog-item.style2 .category a,
	.reactheme-blog-details .blog-item.style1 .category a, .reactheme-blog .blog-item.style1 .category a, .blog .blog-item.style1 .category a,
	#mobile_menu .submenu-button,	
	.icon-button a,
	.team-grid-style1 .team-item .image-wrap .social-icons1, .team-slider-style1 .team-item .image-wrap .social-icons1,
	.reactheme-heading.style8 .title-inner:after,
	.reactheme-heading.style8 .description:after,
	#slider-form-area .form-area input[type="submit"],
	.services-style-5 .services-item:hover .services-title,
	#sidebar-services .reactheme-heading .title-inner h3:before,	
	#reactheme-contact .contact-address .address-item .address-icon::before,
	.team-slider-style4 .team-carousel .team-item:hover,
	#reactheme-header.header-transparent .btn_quote a:hover,
	.react-sideabr .tagcloud a:hover,
	.reactheme-heading.style2:after,
	.reactheme-blog-details .bs-info.tags a:hover,
	.mfp-close-btn-in .mfp-close,
	.top-services-dark .reactheme-services .services-style-7.services-left .services-wrap .services-item,
	.single-teams .team-inner h3:before,
	.single-teams .team-detail-wrap-btm.team-inner,
	::selection,
	.reactheme-heading.style2 .title:after,
	.reacbutton:hover,
	.reactheme-blog-details #reply-title:before,
	.reactheme-cta .style2 .title-wrap .exp-title:after,
	.reactheme-project-section .project-item .project-content .p-icon,
	.proces-item.active:after, .proces-item:hover:after,
	.subscribe-text .mc4wp-form input[type="submit"],
	.reactheme-footer #wp-calendar th,
	.service-carousel.services-dark .services-sliders2 .services-desc:before, 
	.service-carousels.services-dark .services-sliders2 .services-desc:before,
	.reactheme-services .services-style-9 .services-wrap:after,
	.close-search,
	blockquote cite::before,	
	blockquote::after,	
	.react-sideabr .widget-title::after,
	.portfolio-slider-data .slick-dots li.slick-active, 
	.portfolio-slider-data .slick-dots li:hover,
	.reactheme-portfolio.vertical-slider.style4 .portfolio-slider .portfolio-item .p-title a:before,
	.reactheme-team-grid.team-style4 .team-wrapper:hover .team_desc,
	.single-portfolios .ps-informations h3,
	.woocommerce a.remove:hover,
	.submit-btn .wpcf7-submit,	
	.reactheme-heading.style6 .title-inner .sub-text:after,
	.react-sideabr.dynamic-sidebar .service-singles .menu li.current-menu-item a,
	.react-sideabr.dynamic-sidebar .service-singles .menu li a:hover,
	.single-teams .team-skill .reactheme-progress .progress-bar,
	.woocommerce div.product .woocommerce-tabs ul.tabs li:hover,	
	.woocommerce span.onsale,
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
	.reactheme-unique-slider .reactheme-addon-slider button:hover,
	.reactheme-blog-grid1.blog-item .image-part span.date-full,
	blockquote::before,
	.reactheme-footer.footer-style-2 .section-footer-2 .footer_social li a:hover,
	.reactheme-footer .footer-top h3.footer-title:before,
	.reactheme-blog-grid1.blog-item .blog-content:after
	{
		background:<?php echo sanitize_hex_color($secondary_color); ?>;
	}
	.woocommerce span.onsale,
	.team-grid-style1 .team-item:after, 
	.team-slider-style1 .team-item:after{
		background:<?php echo sanitize_hex_color($secondary_color); ?> !important;
	}
	
	.portfolio-slider-data .slick-dots li,
	.lp-list-table thead tr th{
		background:<?php echo sanitize_hex_color($site_color); ?>;
	}	

	.review-stareactheme-rated .review-stars.empty, 
	.review-stareactheme-rated .review-stars.filled{
		color:<?php echo sanitize_hex_color($secondary_color); ?>;
	}
	.sidenav .widget_nav_menu ul > li.current-menu-item > a,
	.sidenav .widget_nav_menu ul > li > a:hover{
		color:<?php echo sanitize_hex_color($secondary_color); ?> !important;
	}
	
	.team-slider-style1 .team-item .team-content1 h3.team-name a:hover,
	.reactheme-service-grid .service-item .service-content .service-button .reacbutton.rs_button:hover:before,
	.reactheme-heading.style6 .title-inner .sub-text,	
	.reactheme-heading.style7 .title-inner .sub-text,
	.reactheme-portfolio-style1 .portfolio-item .portfolio-content .pt-icon-plus:before,
	.team-grid-style1 .team-item .team-content1 h3.team-name a, 
	.service-reacbuttons:hover,
	.service-reacbuttons:before:hover{
		color:<?php echo sanitize_hex_color($secondary_color); ?> !important;
	}	

	.reactheme-services-style3 .bg-img a,
	.reactheme-services-style3 .bg-img a:hover{
		background:<?php echo sanitize_hex_color($secondary_color); ?>;
		border-color: <?php echo sanitize_hex_color($secondary_color); ?>;
	}
	.reactheme-service-grid .service-item .service-content .service-button .reacbutton.rs_button:hover{
		border-color: <?php echo sanitize_hex_color($secondary_color); ?>;;
		color: <?php echo sanitize_hex_color($secondary_color); ?>;
	}

	.woocommerce div.product p.price ins, .woocommerce div.product span.price ins,
	.woocommerce div.product p.price, .woocommerce div.product span.price, 
	.cd-timeline__content .short-info h2, .cd-timeline__content .short-info h3{
		color: <?php echo sanitize_hex_color($secondary_color); ?>!important;
	}

	.team-grid-style3 .team-img .team-img-sec:before,
	#loading,	
	#sidebar-services .bs-search button:hover, 
	.team-slider-style3 .team-img .team-img-sec:before,
	.reactheme-blog-details .blog-item.style2 .category a:hover, 
	.reactheme-blog .blog-item.style2 .category a:hover, 
	.blog .blog-item.style2 .category a:hover,
	.icon-button a:hover,
	.reactheme-blog-details .blog-item.style1 .category a:hover, 
	.reactheme-blog .blog-item.style1 .category a:hover, 
	.blog .blog-item.style1 .category a:hover,
	.skew-style-slider .revslider-initialised::before,
	.top-services-dark .reactheme-services .services-style-7.services-left .services-wrap .services-item:hover,
	.icon-button a:hover,
	.fullwidth-services-box .services-style-2:hover,
	#reactheme-header.header-style-4 .logo-section:before,
	.post-meta-dates,
	.woocommerce ul.products li.product .price ins,
	#top-to-bottom i,
	.cd-timeline__img.cd-timeline__img--picture,
	.reactheme-portfolio-style4 .portfolio-item .portfolio-img:before,
	.reactheme-portfolio-style3 .portfolio-item .portfolio-img:before
	{
		background: <?php echo sanitize_hex_color($secondary_color); ?>;
	}

	html input[type="button"], input[type="reset"], input[type="submit"]{
		background: <?php echo sanitize_hex_color($secondary_color); ?>;
	}


	.round-shape:before{
		border-top-color: <?php echo sanitize_hex_color($site_color); ?>;
		border-left-color: <?php echo sanitize_hex_color($site_color); ?>;
	}
	.round-shape:after{
		border-bottom-color: <?php echo sanitize_hex_color($site_color); ?>;
		border-right-color: <?php echo sanitize_hex_color($site_color); ?>;
	}
	

	#sidebar-services .download-btn,
	.reactheme-video-2 .overly-border,
	.single-teams .ps-informations ul li.social-icon i,
	.woocommerce-error, .woocommerce-info, .woocommerce-message{
		border-color:<?php echo sanitize_hex_color($secondary_color); ?> !important;
	}

	.testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial:before,	
	.testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial:after{
		border-right-color: <?php echo sanitize_hex_color($site_color); ?> !important;
		border-top-color: transparent !important;
	}

	.testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial{
		border-left-color:<?php echo sanitize_hex_color($site_color); ?> !important;
	}
	.portfolio-filter button:hover, 
	.portfolio-filter button.active,
	.team-grid-style1 .team-item .team-content1 h3.team-name a:hover,
	#cl-testimonial .testimonial-slide7 .right-content i,
	.testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial .cl-author-info li:first-child,
	.reactheme-blog-details .bs-img .blog-date span.date, 
	.reactheme-blog .bs-img .blog-date span.date, 
	.blog .bs-img .blog-date span.date, 
	.reactheme-blog-details .blog-img .blog-date span.date, 
	.reactheme-blog .blog-img .blog-date span.date, 
	.blog .blog-img .blog-date span.date,	
	.reactheme-portfolio-style5 .portfolio-item .portfolio-content a:hover,
	#cl-testimonial.cl-testimonial9 .single-testimonial .cl-author-info li,
	#cl-testimonial.cl-testimonial9 .single-testimonial .image-testimonial p i,
	.reactheme-services1.services-left.border_style .services-wrap .services-item .services-icon i,
	.reactheme-services1.services-right .services-wrap .services-item .services-icon i,	
	.reactheme-portfolio.style2 .portfolio-slider .portfolio-item .portfolio-img .portfolio-content .categories a:hover,
	.woocommerce ul.products li.product .price,	
	.full-blog-content .btm-cate .tag-line i,
	.reactheme-team-grid.team-style5 .team-item .normal-text .person-name a:hover,
	.service-reacbuttons:hover, .service-reacbuttons:hover:before{
		color: <?php echo sanitize_hex_color($secondary_color); ?>;
	}

	.reactheme-team-grid.team-style4 .team-wrapper .team_desc:before,
	.reactheme-team-grid.team-style5 .team-item .normal-text .team-text:before,
	.reactheme-services3 .slick-arrow,
	.single-teams .ps-image .ps-informations,
	.slidervideo .slider-videos,
	.slidervideo .slider-videos:before,
	body.profile .lp-label.label-completed, body.profile .lp-label.label-finished,
	.service-reacbutton,
	.service-carousel .owl-dots .owl-dot.active,	
	.reactheme-blog-details .bs-img .categories .category-name a, 
	.reactheme-blog .bs-img .categories .category-name a, 
	.blog .bs-img .categories .category-name a, 
	.reactheme-blog-details .blog-img .categories .category-name a, 
	.reactheme-blog .blog-img .categories .category-name a, 
	.blog .blog-img .categories .category-name a{
		background: <?php echo sanitize_hex_color($secondary_color); ?>;
	}

	.reactheme-blog-details .bs-img .blog-date:before, 
	.reactheme-blog .bs-img .blog-date:before, 
	.blog .bs-img .blog-date:before, 
	.reactheme-blog-details .blog-img .blog-date:before, 
	.reactheme-blog .blog-img .blog-date:before, 
	.blog .blog-img .blog-date:before{		
		border-bottom: 0 solid;
    	border-bottom-color: <?php echo sanitize_hex_color($secondary_color); ?>;
    	border-top: 80px solid transparent;
    	border-right-color: <?php echo sanitize_hex_color($secondary_color); ?>;
    }
	.team-grid-style3 .team-img:before, .team-slider-style3 .team-img:before{
		border-bottom-color: <?php echo sanitize_hex_color($secondary_color); ?>;   			
	}
	.team-grid-style3 .team-img:after, .team-slider-style3 .team-img:after{
		border-top-color: <?php echo sanitize_hex_color($secondary_color); ?>;   	
	}
	.woocommerce-info,
	.timeline-alter .divider:after,
	body.single-services blockquote,	
	.reactheme-porfolio-details.project-gallery .file-list-image .p-zoom:hover
	{
		border-color: <?php echo sanitize_hex_color($secondary_color); ?>;  
	}	
	.slidervideo .slider-videos i,
	.list-style li::before,
	.slidervideo .slider-videos i:before,
	#team-list-style .team-name a,
	a{
		color: <?php echo sanitize_hex_color($link_color); ?>;
	}
	.reactheme-blog .blog-meta .blog-title a:hover,	
	#team-list-style .team-name a:hover,
	#team-list-style .team-social i:hover,
	#team-list-style .social-info .phone a:hover,
	.woocommerce ul.products li .woocommerce-loop-product__title a:hover,
	.react-sideabr .widget_categories ul li a:hover,
	a:hover, a:focus, a:active,
	.reactheme-blog .blog-meta .blog-title a:hover,
	.reactheme-blog .blog-item .blog-meta .categories a:hover,
	.react-sideabr ul a:hover{
		color: <?php echo sanitize_hex_color($link_hover_color); ?>;
	}
	.reactheme-blog-details .bs-img .categories .category-name a:hover, 
	.reactheme-blog .bs-img .categories .category-name a:hover, 
	.blog .bs-img .categories .category-name a:hover, 
	.reactheme-blog-details .blog-img .categories .category-name a:hover, 
	.reactheme-blog .blog-img .categories .category-name a:hover, 
	.blog .blog-img .categories .category-name a:hover,
	#reactheme-header.header-style-4 .logo-section .times-sec{
		background: <?php echo sanitize_hex_color($secondary_color); ?>;
	}
	.reacbutton,
	.reactheme-heading.style3 .description:after,
	.team-grid-style1 .team-item .social-icons1 a i, .team-slider-style1 .team-item .social-icons1 a i,
	.owl-carousel .owl-nav [class*="owl-"]:hover,
	button, html input[type="button"], input[type="reset"],
	.reactheme-service-grid .service-item .service-img:before,
	.reactheme-service-grid .service-item .service-img:after,
	#reactheme-contact .contact-address .address-item .address-icon::after,
	.reactheme-services1.services-left.border_style .services-wrap .services-item .services-icon i:hover,
	.reactheme-services1.services-right .services-wrap .services-item .services-icon i:hover,
	.reactheme-service-grid .service-item .service-content::before,
	.reactheme-services-style4 .services-item .services-icon i,
	#reactheme-services-slider .img_wrap:before,
	#reactheme-services-slider .img_wrap:after,
	.reactheme-galleys .galley-img:before,
	.woocommerce-MyAccount-navigation ul li:hover,
	.woocommerce-MyAccount-navigation ul li.is-active,
	.reactheme-galleys .galley-img .zoom-icon,
	.team-grid-style2 .team-item-wrap .team-img .team-img-sec::before,
	.services-style-5 .services-item .icon_bg,
	#cl-testimonial.cl-testimonial10 .slick-arrow,
	.contact-sec .contact:before, .contact-sec .contact:after,
	.contact-sec .contact2:before,
	.team-grid-style2 .team-item-wrap .team-img .team-img-sec:before,
	.reactheme-porfolio-details.project-gallery .file-list-image:hover .p-zoom:hover,	
	.team-slider-style2 .team-item-wrap .team-img .team-img-sec:before,
	.reactheme-team-grid.team-style5 .team-item .normal-text .social-icons a i:hover
	{
		background: <?php echo sanitize_hex_color($secondary_color); ?>;
	}
	#reactheme-header.header-style-4 .logo-section .times-sec:after{
		border-bottom-color: <?php echo sanitize_hex_color($secondary_color); ?>;
	}
	.reactheme-services1.services-left.border_style .services-wrap .services-item .services-icon i,
	.reactheme-services1.services-right .services-wrap .services-item .services-icon i,
	#cl-testimonial.cl-testimonial10 .slick-arrow,	
	.team-grid-style2 .team-item-wrap .team-img img, .team-slider-style2 .team-item-wrap .team-img img,
	.contact-sec .wpcf7-form .wpcf7-text, .contact-sec .wpcf7-form .wpcf7-textarea{
		border-color: <?php echo sanitize_hex_color($secondary_color); ?> !important;
	}

	<?php 
		if(!empty($finanix_option['link_hover_text_color'])){
			?>
			#reactheme-services-slider .item-thumb .owl-dot.service_icon_style.active .tile-content a, 
			#reactheme-services-slider .item-thumb .owl-dot.service_icon_style:hover .tile-content a,
			.team-grid-style2 .appointment-bottom-area .app_details:hover a, 
			.team-slider-style2 .appointment-bottom-area .app_details:hover a{
				color: <?php echo sanitize_hex_color($finanix_option['link_hover_text_color']); ?> !important;	
			}
		<?php
		}
	?>

	<?php 
		if(!empty($finanix_option['stiky_menu_area_bg_color'])){
			?>
			#reactheme-header .menu-sticky.sticky .menu-area,
			#reactheme-header.header-style-3.header-style-2 .sticky-wrapper .header-inner.sticky .box-layout{
				background: <?php echo sanitize_hex_color($finanix_option['stiky_menu_area_bg_color']); ?> !important;	
			}
		<?php
		}
	?>

	<?php 
		if(!empty($finanix_option['stikcy_menu_text_color'])){
			?>
			#reactheme-header .menu-sticky.sticky .menu-area .navbar ul li a,
			#reactheme-header.header-style1 .header-inner.sticky .category-menu .menu li:after,
			#reactheme-header.header-style-4 .header-inner.sticky .menu-cart-area i,
			#reactheme-header.header-style-4 .header-inner.sticky .sidebarmenu-search i,
			#reactheme-header.header-style-4 .header-inner.sticky .btn_quote .toolbar-sl-share ul li a,
			#reactheme-header.header-transparent .header-inner.sticky .menu-area .navbar ul li a:before{
				color: <?php echo sanitize_hex_color($finanix_option['stikcy_menu_text_color']); ?>;
			}
		<?php
		}
	?>	

	<?php 
		if(!empty($finanix_option['stikcy_menu_text_color'])){
			?>			
			#reactheme-header .menu-sticky.sticky .nav-link-container .nav-menu-link span{
				background: <?php echo sanitize_hex_color($finanix_option['stikcy_menu_text_color']); ?>;
			}
		<?php
		}
	?>	

	<?php 
		if(!empty($finanix_option['sticky_menu_text_hover_color'])){
			?>			
			#reactheme-header .menu-sticky.sticky .nav-link-container .nav-menu-link:hover span

			{
				background: <?php echo sanitize_hex_color($finanix_option['sticky_menu_text_hover_color']); ?>;
			}
		<?php
		}
	?>	

	<?php 
		if(!empty($finanix_option['stikcy_menu_text_active_color'])){
			?>
			#reactheme-header.header-transparent .menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a,
			#reactheme-header .menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a,
			#reactheme-header .menu-sticky.sticky .menu-area .navbar ul > li.current_page_item > a,
			#reactheme-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current-menu-item page_item a,
			#reactheme-header.header-style-4 .menu-sticky.sticky .menu-area .navbar ul > li.current_page_item > a,
			#reactheme-header.header-style-4 .menu-sticky.sticky .menu-area .menu > li.current-menu-ancestor > a,
			#reactheme-header.header-transparent .header-inner.sticky .menu-area .navbar ul li.current-menu-parent  a:before,
			#reactheme-header.header-transparent .header-inner.sticky .menu-area .navbar ul li:hover  a:before{
				color: <?php echo sanitize_hex_color($finanix_option['stikcy_menu_text_active_color']); ?> !important;	
			}
		<?php
		}
	?>

	<?php if(!empty($finanix_option['sticky_drop_down_bg_color'])) : ?>
		.menu-sticky.sticky .menu-area .navbar ul li .sub-menu{
			background:<?php echo sanitize_hex_color($finanix_option['sticky_drop_down_bg_color']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['sticky_menu_text_hover_color'])) : ?>
		#reactheme-header.header-style-4 .header-inner.sticky .nav-link-container .nav-menu-link:hover span,
		#reactheme-header.header-style1.header1 .header-inner.sticky .menu-area .navbar ul > li.menu-item-has-children.hover-minimize:hover > a:after{
			background:<?php echo sanitize_hex_color($finanix_option['sticky_menu_text_hover_color']); ?> !important;
		}
	<?php endif; ?>

	<?php 
		if(!empty($finanix_option['sticky_menu_text_hover_color'])){
			?>
			#reactheme-header .menu-sticky.sticky .menu-area .navbar ul > li:hover > a,
			#reactheme-header.header-style-4 .header-inner.sticky .btn_quote .toolbar-sl-share ul > li a:hover,
			#reactheme-header.header-style-4 .header-inner.sticky .menu-cart-area i:hover,
			#reactheme-header.header-style1 .header-inner.sticky .category-menu .menu li:hover:after,
			#reactheme-header.header-style1 .header-inner.sticky .category-menu .menu li:hover:after,
			#reactheme-header.header-style-4 .header-inner.sticky .sidebarmenu-search i:hover,			
			#reactheme-header .menu-sticky.sticky .menu-area .navbar ul li ul.submenu > li.current-menu-ancestor > a{
				color: <?php echo sanitize_hex_color($finanix_option['sticky_menu_text_hover_color']); ?> !important;	
			}
		<?php
		}
	?>

	<?php
		if(!empty($finanix_option['toolbar_link_color'])){?>
			#reactheme-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons{
			color: <?php echo sanitize_hex_color($finanix_option['toolbar_link_color']);?>
		}
		<?php } 
	?>	

	<?php 
		if(!empty($finanix_option['stikcy_drop_text_color'])){
			?>
			#reactheme-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li a{
				color: <?php echo sanitize_hex_color($finanix_option['stikcy_drop_text_color']); ?> !important;	
			}
		<?php
		}
	?>

	<?php 
		if(!empty($finanix_option['sticky_drop_text_hover_color'])){
			?>
			#reactheme-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li a:hover,
			#reactheme-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current-menu-item page_item a,
			#reactheme-header .menu-sticky.sticky .menu-area .navbar ul  li .sub-menu li.current_page_item > a
			{
				color: <?php echo sanitize_hex_color($finanix_option['sticky_drop_text_hover_color']); ?> !important;	
			}
		<?php
		}
	?>	

	<?php 
		if(!empty($finanix_option['footer_bg_color'])){?>
		.reactheme-footer{
			background: <?php echo sanitize_hex_color($finanix_option['footer_bg_color']); ?>;
		}
		<?php
	}
?>
	

	<?php if(!empty($finanix_option['btn_bg_color'])) : ?>
		#reactheme-header .btn_quote a,
		.comment-respond .form-submit #submit,
		.woocommerce #respond input#submit, 
		.woocommerce a.button, 
		.woocommerce .wc-forward, 
		.woocommerce button.button, 
		.woocommerce input.button, 
		.woocommerce #respond input#submit.alt, 
		.woocommerce a.button.alt, 
		.woocommerce button.button.alt, 
		.woocommerce input.button.alt, 
		.woocommerce button.button.alt.disabled,
		.woocommerce ul.products li.product .images-product .overley .winnereactheme-details .product-info ul li a,
		.wp-block-file .wp-block-file__button{
			border:1px solid;
			border-color:<?php echo sanitize_hex_color($finanix_option['btn_bg_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['btn_bg_hover_border'])) : ?>
		#reactheme-header .btn_quote a:hover,
		.woocommerce #respond input#submit.alt:hover, 
		.woocommerce #respond input#submit:hover, 
		.woocommerce .wc-forward:hover, 
		.woocommerce a.button.alt:hover, 
		.woocommerce a.button:hover, 
		.woocommerce button.button.alt:hover, 
		.woocommerce button.button:hover, 
		.woocommerce input.button.alt:hover, 
		.woocommerce input.button:hover,
		.comment-respond .form-submit #submit:hover{
			border-color:<?php echo sanitize_hex_color($finanix_option['btn_bg_hover_border']); ?>;			
		}
	<?php endif; ?>
	<?php if(!empty($finanix_option['btn_bg_hover'])) : ?>
		#reactheme-header .btn_quote a:hover,
		.woocommerce #respond input#submit.alt:hover, 
		.woocommerce #respond input#submit:hover, 
		.woocommerce .wc-forward:hover, 
		.woocommerce a.button.alt:hover, 
		.woocommerce a.button:hover, 
		.woocommerce button.button.alt:hover, 
		.woocommerce button.button:hover, 
		.woocommerce input.button.alt:hover, 
		.woocommerce input.button:hover,
		.comment-respond .form-submit #submit:hover{
			background:<?php echo sanitize_hex_color($finanix_option['btn_bg_hover']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['btn_text_color'])) : ?>
		#reactheme-header .btn_quote a,
		.submit-btn .wpcf7-submit,	
		.comment-respond .form-submit #submit{
			color:<?php echo sanitize_hex_color($finanix_option['btn_text_color']); ?>;			
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['btn_bg_color'])) : ?>
		.woocommerce button.button,
		.woocommerce button.button.alt,  
		.woocommerce ul.products li a.button,
		.woocommerce .wc-forward,
		.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce .wc-forward, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
		.woocommerce a.button, 
		.comments-area .comment-list li.comment .reply a,	
		.comment-respond .form-submit #submit,
		.menu-sticky.sticky .quote-button,
		#reactheme-header.header-style-3 .btn_quote .quote-button,
		.wp-block-file .wp-block-file__button,	
		.wp-block-button__link,
		#reactheme-header .btn_quote a{
			background:<?php echo sanitize_hex_color($finanix_option['btn_bg_color']); ?>;
		}
	<?php endif; ?>	

	<?php if(!empty($finanix_option['btn_text_color'])) : ?>
		.reacbutton,
		.woocommerce button.button,
		.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce .wc-forward, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
		.woocommerce a.button,
		.woocommerce .wc-forward,
		.comment-respond .form-submit #submit,
		.comments-area .comment-list li.comment .reply a,
		.woocommerce button.button.alt,   
		.woocommerce ul.products li a.button,
		.menu-sticky.sticky .quote-button:hover,		
		#reactheme-header.header-style-3 .btn_quote .quote-button{
			color:<?php echo sanitize_hex_color($finanix_option['btn_text_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['btn_txt_hover_color'])) : ?>
		#reactheme-header .btn_quote a:hover,
		.comment-respond .form-submit #submit:hover,
		.submit-btn .wpcf7-submit:hover, 	
		#reactheme-header.header-style-3 .btn_quote .quote-button:hover{
			color:<?php echo sanitize_hex_color($finanix_option['btn_txt_hover_color']); ?> !important;
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['btn_bg_hover'])) : ?>
		.comments-area .comment-list li.comment .reply a:hover,
		.woocommerce a.button:hover,
		.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, 
		.woocommerce .wc-forward:hover, .woocommerce button.button:hover, 
		.woocommerce input.button, .woocommerce #respond input#submit.alt:hover, 
		.woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, 
		.woocommerce button.button.alt:hover, 		
		.woocommerce button.button:hover,	
		.woocommerce ul.products li:hover a.button,
		 .menu-sticky.sticky .quote-button:hover,
		 #reactheme-header.header-transparent .btn_quote a:hover,
		 #reactheme-header.header-style-3 .btn_quote .quote-button:hover,
		 .reacbutton:before,
		 .submit-btn:before,
		 .comment-respond .form-submit #submit:hover,
		 .woocommerce #respond input#submit:before, .woocommerce a.button:before, 
		 .woocommerce .wc-forward:before, .woocommerce button.button:before, 
		 .woocommerce input.button:before, .woocommerce #respond input#submit.alt:before, 
		 .woocommerce a.button.alt:before, .woocommerce button.button.alt:before, 
		 .woocommerce input.button.alt:before{
			background:<?php echo sanitize_hex_color($finanix_option['btn_bg_hover']); ?>;
			
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['container_size'])) : ?>
		@media only screen and (min-width: 1300px) {
			.container{
				max-width:<?php echo esc_attr($finanix_option['container_size']); ?>;
			}
		}
	<?php endif; ?>


	<?php if(is_rtl()){

		 if(!empty($finanix_option['menu_item_gap'])) : ?>
		.menu-area .navbar ul li, .menu-area .navbar ul > li a{
			padding-right:<?php echo esc_attr($finanix_option['menu_item_gap']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['menu_item_gapd2'])) : ?>
		.menu-area .navbar ul li, .menu-area .navbar ul > li a{
			padding-left:<?php echo esc_attr($finanix_option['menu_item_gapd2']); ?>;
		}
	<?php endif; 

	}else{
		 if(!empty($finanix_option['menu_item_gap'])) : ?>
		.menu-area .navbar ul li, .menu-area .navbar ul > li a{
			padding-left:<?php echo esc_attr($finanix_option['menu_item_gap']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['menu_item_gapd2'])) : ?>
		.menu-area .navbar ul li, .menu-area .navbar ul > li a{
			padding-right:<?php echo esc_attr($finanix_option['menu_item_gapd2']); ?>;
		}
	<?php endif; 

	}?>

	
	<?php if(!empty($finanix_option['menu_item_gap2'])) : ?>
		.menu-area .navbar ul > li,
		.menu-cart-area,
		#reactheme-header .btn_quote,
		#reactheme-header .menu-responsive .sidebarmenu-search .sticky_search{
			padding-top:<?php echo esc_attr($finanix_option['menu_item_gap2']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['menu_item_gap3'])) : ?>
		.menu-area .navbar ul > li,
		.menu-cart-area,
		#reactheme-header .btn_quote,
		#reactheme-header .menu-responsive .sidebarmenu-search .sticky_search{
			padding-bottom:<?php echo esc_attr($finanix_option['menu_item_gap3']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['dropdown_menu_item_gap'])) : ?>
		.menu-area .navbar ul li ul.sub-menu li a{
			padding-left:<?php echo esc_attr($finanix_option['dropdown_menu_item_gap']); ?>;
			padding-right:<?php echo esc_attr($finanix_option['dropdown_menu_item_gap']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['dropdown_menu_item_gap2'])) : ?>
		.menu-area .navbar ul li ul.sub-menu{
			padding-top:<?php echo esc_attr($finanix_option['dropdown_menu_item_gap2']); ?>;
			padding-bottom:<?php echo esc_attr($finanix_option['dropdown_menu_item_gap2']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['dropdown_menu_item_separate'])) : ?>
		.menu-area .navbar ul li ul.sub-menu li a{
			padding-top:<?php echo esc_attr($finanix_option['dropdown_menu_item_separate']); ?>;
			padding-bottom:<?php echo esc_attr($finanix_option['dropdown_menu_item_separate']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['meaga_menu_item_gap'])) : ?>
		#reactheme-header .menu-area .navbar ul > li.mega > ul{
			padding-left:<?php echo esc_attr($finanix_option['meaga_menu_item_gap']); ?>;
			padding-right:<?php echo esc_attr($finanix_option['meaga_menu_item_gap']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['mega_menu_item_gap2'])) : ?>
		#reactheme-header .menu-area .navbar ul > li.mega > ul{
			padding-top:<?php echo esc_attr($finanix_option['mega_menu_item_gap2']); ?>;
			padding-bottom:<?php echo esc_attr($finanix_option['mega_menu_item_gap2']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['mega_menu_item_separate'])) : ?>
		#reactheme-header .menu-area .navbar ul li.mega ul.sub-menu li a{
			padding-top:<?php echo esc_attr($finanix_option['mega_menu_item_separate']); ?>;
			padding-bottom:<?php echo esc_attr($finanix_option['mega_menu_item_separate']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['breadcrumb_bg_color'])) : ?>
		.reactheme-breadcrumbs{
			background:<?php echo sanitize_hex_color($finanix_option['breadcrumb_bg_color']); ?>;			
		}
	<?php endif; ?>



	<?php if(!empty($finanix_option['offcanvas_close_color'])) : ?>
		.menu-wrap-off .inner-offcan .nav-link-container .close-button span
		{
			background:<?php echo sanitize_hex_color($finanix_option['offcanvas_close_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['offcanvas_close_hover_color'])) : ?>
		.sidenav li.nav-link-container:hover a.close-button span,
		.menu-wrap-off .inner-offcan .nav-link-container .close-button:hover span{
			background:<?php echo sanitize_hex_color($finanix_option['offcanvas_close_hover_color']); ?> !important;			
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['offcan_bgs_color'])) : ?>
		.menu-wrap-off .off-nav-layer{
			background:<?php echo sanitize_hex_color($finanix_option['offcan_bgs_color']); ?>;			
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['offcan_txt_color'])) : ?>
		.sidenav p, .sidenav{
			color:<?php echo sanitize_hex_color($finanix_option['offcan_txt_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['offcan_txt_color'])) : ?>
		body .sidenav .widget .widget-title{
			color:<?php echo sanitize_hex_color($finanix_option['offcan_txt_color']); ?> !important;			
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['offcan_link_color'])) : ?>
		.sidenav .widget_nav_menu ul li a,
		.sidenav.offcanvas-icon .reactheme-offcanvas-right a,
		.sidenav .menu > li.menu-item-has-children:before,
		.sidenav a{
			color:<?php echo sanitize_hex_color($finanix_option['offcan_link_color']); ?>;			
		}
	<?php endif; ?>
	

	<?php if(!empty($finanix_option['offcan_link_social_color'])) : ?>
		ul.sidenav .menu > li.menu-item-has-children:before, 
		.sidenav .offcanvas_social li a i{
			color:<?php echo sanitize_hex_color($finanix_option['offcan_link_social_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['offcan_link_hovers_color'])) : ?>
		.sidenav .widget_nav_menu ul > li.current-menu-item > a, 
		.sidenav .widget_nav_menu ul > li > a:hover, 
		.sidenav a:hover{
			color:<?php echo sanitize_hex_color($finanix_option['offcan_link_hovers_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['offcan_link_bg_color'])) : ?>
		.sidenav .offcanvas_social li a i,
		ul.sidenav .menu > li.menu-item-has-children::before{
			background:<?php echo sanitize_hex_color($finanix_option['offcan_link_bg_color']); ?>;			
		}
	<?php endif; ?>

	

	<?php if(!empty($finanix_option['breadcrumb_title_color'])) : ?>
		.reactheme-breadcrumbs .page-title{
			color:<?php echo sanitize_hex_color($finanix_option['breadcrumb_title_color']); ?> !important;	
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['breadcrumb_text_color'])) : ?>
		.reactheme-breadcrumbs ul li *,
		.reactheme-breadcrumbs ul li.trail-begin a:before,
		.reactheme-breadcrumbs ul li,		
		.reactheme-breadcrumbs .breadcrumbs-title span a span{
			color:<?php echo sanitize_hex_color($finanix_option['breadcrumb_text_color']); ?> !important;	
		}
		.reactheme-breadcrumbs .breadcrumbs-title span a:after, 
		.reactheme-breadcrumbs .breadcrumbs-title span a:before{
			background-color:<?php echo sanitize_hex_color($finanix_option['breadcrumb_text_color']); ?> !important;	
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['breadcrumb_top_gap']) && !empty($finanix_option['breadcrumb_bottom_gap'])) : ?>
		.reactheme-breadcrumbs .breadcrumbs-inner,
		#reactheme-header.header-style-3 .reactheme-breadcrumbs .breadcrumbs-inner{
			padding-top:<?php echo esc_attr($finanix_option['breadcrumb_top_gap']); ?>;			
			padding-bottom:<?php echo esc_attr($finanix_option['breadcrumb_bottom_gap']); ?>;			
	}
	<?php endif; ?>

	<?php if(!empty($finanix_option['mobile_breadcrumb_top_gap']) && !empty($finanix_option['mobile_breadcrumb_bottom_gap'])) : ?>
		@media only screen and (max-width: 991px) {
		.reactheme-breadcrumbs .breadcrumbs-inner,
		#reactheme-header.header-style-3 .reactheme-breadcrumbs .breadcrumbs-inner{
					padding-top:<?php echo esc_attr($finanix_option['mobile_breadcrumb_top_gap']); ?>;			
					padding-bottom:<?php echo esc_attr($finanix_option['mobile_breadcrumb_bottom_gap']); ?>;			
			}
		}
	<?php endif; ?>


	<?php if(!empty($finanix_option['preloader_bg_color'])) : ?>
		#finanix-load{
			background: <?php echo sanitize_hex_color($finanix_option['preloader_bg_color']); ?>;  
		}
	<?php endif; ?>


	<?php if ( $finanix_option ['mobile_off_button'] == '0' ){ ?>
		@media only screen and (max-width: 767px) {
			.btn_quote{
				display: none !important;
			}
		}
	<?php }?>
	<?php if ( $finanix_option ['mobile_off_search'] == '0' ){ ?>
		@media only screen and (max-width: 767px) {
			.sidebarmenu-search{
				display: none !important;
			}
		}
	<?php }?>
	<?php if ( $finanix_option ['mobile_off_cart'] == '0' ){ ?>
		@media only screen and (max-width: 767px) {
			.menu-cart-area{
				display: none !important;
			}
		}
	<?php }?>	

	<?php if(!empty($finanix_option['body_bg_color'])) : ?>
		body.archive.tax-product_cat{
			background: <?php echo sanitize_hex_color($finanix_option['body_bg_color']); ?> !important;  
		}
	<?php endif; ?>

	<?php if(!empty($finanix_option['text_color'])) : ?>
		.page-error.coming-soon .countdown-inner .time_circles div,
		.page-error.coming-soon .content-area h3,
		.page-error.coming-soon .content-area h3 span,
		.page-error.coming-soon .follow-us-sbuscribe p,
		.page-error.coming-soon .countdown-inner .time_circles div h4,
		.page-error.coming-soon .countdown-inner .time_circles div span{
			color: <?php echo esc_attr($finanix_option['text_color']); ?>
		}	

	<?php endif; ?>
</style>

<?php
	}
	 if ( class_exists( 'WooCommerce' ) && is_shop() || class_exists( 'WooCommerce' ) && is_product_tag()  || class_exists( 'WooCommerce' ) && is_product_category()  ) {
			
			$finanix_shop_id    = get_option( 'woocommerce_shop_page_id' ); 
			
			$padding_top        = get_post_meta($finanix_shop_id, 'content_top', true);
			$padding_bottom     = get_post_meta($finanix_shop_id, 'content_bottom', true);
			
			$footer_padd_top    = get_post_meta($finanix_shop_id, 'footer_padd_top', true);
			$footer_padd_bottom = get_post_meta($finanix_shop_id, 'footer_padd_bottom', true);

  		if($padding_top != '' || $padding_bottom != ''){
	  	?>
	  	  <style>
	  	  	.main-contain #content,
	  	  	body.reactheme-pages-btm-gap .main-contain #content{
	  	  		<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?>;
	  	  		<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?>;
	  	  	}
	  	  </style>	
	  	  <?php
	 	}

  		if($footer_padd_top != '' || $footer_padd_bottom != ''){
	  	?>
	  	  <style>
	  	  	.reactheme-footer .footer-top{
	  	  		<?php if(!empty($footer_padd_top)): ?>padding-top:<?php echo esc_attr($footer_padd_top); endif;?>;
	  	  		<?php if(!empty($footer_padd_bottom)): ?>padding-bottom:<?php echo esc_attr($footer_padd_bottom); endif;?>;
	  	  	}
	  	  </style>	
	  	  <?php
	 	}
	}
	elseif(is_home() && !is_front_page() || is_home() && is_front_page()){

		$padding_top        = get_post_meta(get_queried_object_id(), 'content_top', true);
		$padding_bottom     = get_post_meta(get_queried_object_id(), 'content_bottom', true);
		
		$footer_padd_top    = get_post_meta(get_queried_object_id(), 'footer_padd_top', true);
		$footer_padd_bottom = get_post_meta(get_queried_object_id(), 'footer_padd_bottom', true);

  		if($padding_top != '' || $padding_bottom != ''){
	  	?>
	  	  <style>
	  	  	.main-contain #content,
	  	  	body.reactheme-pages-btm-gap .main-contain #content{
	  	  		<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?>;
	  	  		<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?>;
	  	  	}
	  	  </style>	
	  	<?php
	  	}

   		if($footer_padd_top != '' || $footer_padd_bottom != ''){
 	  	?>
 	  	  <style>
 	  	  	.reactheme-footer .footer-top{
 	  	  		<?php if(!empty($footer_padd_top)): ?>padding-top:<?php echo esc_attr($footer_padd_top); endif;?>;
 	  	  		<?php if(!empty($footer_padd_bottom)): ?>padding-bottom:<?php echo esc_attr($footer_padd_bottom); endif;?>;
 	  	  	}
 	  	  </style>	
 	  	  <?php
 	 	} 		
  }
  	else{ 
		$padding_top        = get_post_meta(get_the_ID(), 'content_top', true);
		$padding_bottom     = get_post_meta(get_the_ID(), 'content_bottom', true);
		
		$footer_padd_top    = get_post_meta(get_the_ID(), 'footer_padd_top', true);
		$footer_padd_bottom = get_post_meta(get_the_ID(), 'footer_padd_bottom', true);

  		if($padding_top != '' || $padding_bottom != ''){
	  	?>
	  	  <style>
	  	  	.main-contain #content,
	  	  	body.reactheme-pages-btm-gap .main-contain #content{
	  	  		<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?>;
	  	  		<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?>;
	  	  	}
	  	  </style>	
	  	<?php
	  }

		if($footer_padd_top != '' || $footer_padd_bottom != ''){
	  	?>
	  	  <style>
	  	  	.reactheme-footer .footer-top{
	  	  		<?php if(!empty($footer_padd_top)): ?>padding-top:<?php echo esc_attr($footer_padd_top); endif;?> !important;
	  	  		<?php if(!empty($footer_padd_bottom)): ?>padding-bottom:<?php echo esc_attr($footer_padd_bottom); endif;?> !important;
	  	  	}
	  	  </style>	
	  	  <?php
	 	} 
  }


		$logo_bg_colors                 = get_post_meta(get_the_ID(), 'logo_bg_color', true);
		$logo_height                    = get_post_meta(get_the_ID(), 'logo_height_page', true);
		$sticky_logo_height             = get_post_meta(get_the_ID(), 'sticky_logo_height_page', true);		
		$topbar_area_bg                 = get_post_meta(get_the_ID(), 'topbar-area-bg', true);
		$topbar_text_color              = get_post_meta(get_the_ID(), 'topbar-text-color', true);
		$topbar_link_hovercolors        = get_post_meta(get_the_ID(), 'topbar_link_hovercolor', true);
		$topbar_border_color            = get_post_meta(get_the_ID(), 'topbar-border-color', true);
		$topbar_button_bgs              = get_post_meta(get_the_ID(), 'topbar-button-bg', true);
		$topbar_button_texts            = get_post_meta(get_the_ID(), 'topbar-button-text', true);
		$topbar_button_bg_hovers        = get_post_meta(get_the_ID(), 'topbar-button-bg-hover', true);
		$topbar_button_text_hover       = get_post_meta(get_the_ID(), 'topbar-button-text-hover', true);		
		$topbar_icons_color             = get_post_meta(get_the_ID(), 'topbar-icon-color', true);
		$topbar_social_color            = get_post_meta(get_the_ID(), 'social-icon-color', true);
		$topbar_social_hover_color      = get_post_meta(get_the_ID(), 'topbar-social-hovereactheme-color', true);		
		$menu_bg_sbg                    = get_post_meta(get_the_ID(), 'menu-type-bg', true);
		
		$menu_texts_hover_colors        = get_post_meta(get_the_ID(), 'menu-text-hover-color', true);
		$menu_border_colors             = get_post_meta(get_the_ID(), 'menu_border_color', true);
		$menu_bg_dropdowncolors         = get_post_meta(get_the_ID(), 'menu_bg_dropdowncolor', true);
		$menu_text_dropdowncolors       = get_post_meta(get_the_ID(), 'menu_text_dropdowncolor', true);
		
		
		$menu_sticky_bgcolors           = get_post_meta(get_the_ID(), 'menu_sticky_bgcolor', true);
		$menu_sticky_txtcolors          = get_post_meta(get_the_ID(), 'menu_sticky_txtcolor', true);
		$menu_sticky_txt_hovercolors    = get_post_meta(get_the_ID(), 'menu_sticky_txt_hovercolor', true);
		
		
		$search_icon_colors             = get_post_meta(get_the_ID(), 'search-icon-color', true);
		$search_icon_color_hovers       = get_post_meta(get_the_ID(), 'search-icon-color-hover', true);

		$cart_icon_colors               = get_post_meta(get_the_ID(), 'cart-icon-color', true);
		$cart_icon_color_hovers         = get_post_meta(get_the_ID(), 'cart-icon-color-hover', true);


		$register_icon_colors           = get_post_meta(get_the_ID(), 'register-icon-color', true);
		$register_icon_color_hovers     = get_post_meta(get_the_ID(), 'register-icon-color-hover', true);
		
		
		
		$newsletter_bgs                 = get_post_meta(get_the_ID(), 'newsletter_bg', true);
		$newsletter_sub_colors          = get_post_meta(get_the_ID(), 'newsletter_sub_color', true);
		$newsletter_title_colors        = get_post_meta(get_the_ID(), 'newsletter_title_color', true);
		$input_bg_colors                = get_post_meta(get_the_ID(), 'input_bg_color', true);
		$input_placeholder_color        = get_post_meta(get_the_ID(), 'input_placeholder_color', true);
		$inputs_colors                  = get_post_meta(get_the_ID(), 'inputs_color', true);
		$button_n_bg_colors             = get_post_meta(get_the_ID(), 'button_n_bg_colors', true);
		$button_n_txt_colors            = get_post_meta(get_the_ID(), 'button_n_txt_colors', true);
		$button_n_bg_colors_hovers      = get_post_meta(get_the_ID(), 'button_n_bg_colors_hover', true);
		$button_n_txt_colors_hovers     = get_post_meta(get_the_ID(), 'button_n_txt_colors_hover', true);
		
		
		$header_hamburger_colors = get_post_meta(get_the_ID(), 'head_hamburger_color', true);
		$head_hamburger_hover_color = get_post_meta(get_the_ID(), 'head_hamburger_hover_color', true);
		$offcanvs_icon_bg        = get_post_meta(get_the_ID(), 'offcanvs_icon_bg', true);
		
		$head_hamburger_bg_coloras      = get_post_meta(get_the_ID(), 'head_hamburger_bg_color', true);
		$footer_title_color             = get_post_meta(get_the_ID(), 'footer_title_color', true);
		$footer_btn_bg_colors           = get_post_meta(get_the_ID(), 'footer_btn_bg_color', true);
		$footer_btn_text_colors         = get_post_meta(get_the_ID(), 'footer_btn_text_color', true);
		$footer_links_colors            = get_post_meta(get_the_ID(), 'footer_link_colorss', true);
		$footer_arrows_color            = get_post_meta(get_the_ID(), 'footer_in_bg_color', true);
		$footer_top_border_color        = get_post_meta(get_the_ID(), 'footer_top_border_color', true);
		$sticky_hamburger_color         = get_post_meta(get_the_ID(), 'sticky_hamburgers_color', true);
		$copyright_border_color         = get_post_meta(get_the_ID(), 'copyright_border', true);
		$footer_primary_hover           = get_post_meta(get_the_ID(), 'footer_primary_hover_color', true);
		$footer_border_color            = get_post_meta(get_the_ID(), 'footer_border_color', true);
		$footer_all_is_colors           = get_post_meta(get_the_ID(), 'footer_all_icon_colors', true);
		$footer_socials_bg_colorss      = get_post_meta(get_the_ID(), 'footer_socials_bg_colors', true);
		$footer_socials_ic_colors       = get_post_meta(get_the_ID(), 'footer_socials_icon_colors', true);

		$footer_socials_bg_hover_colors     = get_post_meta(get_the_ID(), 'footer_socials_hover_bg_colors', true);
		$footer_socials_icon_hover_colors       = get_post_meta(get_the_ID(), 'footer_socials_icon_hover_colors', true);

		
		
		$footer_txt_colors              = get_post_meta(get_the_ID(), 'footer_texts_color', true);
		$footer_in_icon_colors          = get_post_meta(get_the_ID(), 'footer_in_icon_color', true);
		$primary_colors                 = get_post_meta(get_the_ID(), 'primary-colors', true);
		
		$quote_button_bg_colors         = get_post_meta(get_the_ID(), 'quote_button_bg_color', true);
		$quote_button_colors            = get_post_meta(get_the_ID(), 'quote_button_color', true);
		$quote_button_bg_hover_colors   = get_post_meta(get_the_ID(), 'quote_button_bg_hover_color', true);
		$quote_button_hover_colors      = get_post_meta(get_the_ID(), 'quote_button_hover_color', true);
		$quote_button_border_radius     = get_post_meta(get_the_ID(), 'quote_button_border_radius', true);
		$menu_text_hover_dropdowncolors = get_post_meta(get_the_ID(), 'menu_text_hover_dropdowncolor', true);
		$banner_title_color             = get_post_meta(get_the_ID(), 'banner_title_color', true);
		$banner_menu_color              = get_post_meta(get_the_ID(), 'banner_menu_color', true);
		$feed_color                     = get_post_meta(get_the_ID(), 'feed_color', true);
		$feed_link_color                = get_post_meta(get_the_ID(), 'feed_link_color', true);
		$menu_texts_colors   			= get_post_meta(get_the_ID(), 'menu-text-color', true);
		$preloader_bg                	= get_post_meta(get_the_ID(), 'preloader_bg', true);
		$preloader_icon_bg              = get_post_meta(get_the_ID(), 'preloader_icon_bg', true);
		
		if( empty($finanix_option['enable_global'])) :

		?>

		<style>	 
	  	  	<?php 
  	  		if(!empty($logo_height)): ?>
				.header-logo .custom-logo-area img {					
		  	  		max-height:<?php echo esc_attr($logo_height);?> !important;
				}
			<?php endif; ?>

			<?php 
  	  			if(!empty($feed_link_color)): ?>
					#reactheme-header .toolbar-area.toolbar-one .feed-container .feed-posts {					
		  	  			color:<?php echo esc_attr($feed_link_color);?> !important;
					}
			<?php endif; ?>
			
			<?php 
  	  			if(!empty($feed_color)): ?>
					#reactheme-header .toolbar-area.toolbar-one .feed-container .feed-name {					
		  	  			color:<?php echo esc_attr($feed_color);?> !important;
					}
			<?php endif; ?>

			<?php 
  	  			if(!empty($preloader_bg)): ?>
					#finanix-load {					
		  	  			background:<?php echo esc_attr($preloader_bg);?> !important;
					}
			<?php endif; ?>
			<?php 
  	  			if(!empty($preloader_icon_bg)): ?>
					#finanix-load .preloader span{					
		  	  			background:<?php echo esc_attr($preloader_icon_bg);?> !important;
					}
			<?php endif; ?>

			<?php 
  	  			if(!empty($offcanvs_icon_bg)): ?>
					.sidebarmenu-area {					
		  	  			background:<?php echo esc_attr($offcanvs_icon_bg);?> !important;
					}
			<?php endif; ?>
				
	  	  	<?php 
  	  		if(!empty($sticky_logo_height)): ?>
				.header-logo .custom-sticky-logo img {					
		  	  		max-height:<?php echo esc_attr($sticky_logo_height);?> !important;
				}
			<?php endif; ?>	

			<?php 
  	  		if(!empty($banner_title_color)): ?>
				body .reactheme-breadcrumbs .page-title {					
		  	  		color:<?php echo sanitize_hex_color($banner_title_color);?> !important;
				}
			<?php endif; ?>	

	  	  	<?php 
  	  		if(!empty($banner_menu_color)): ?>
  	  			body .reactheme-breadcrumbs .breadcrumbs-title .current-item,
				body .reactheme-breadcrumbs .breadcrumbs-title span a span {					
		  	  		color:<?php echo sanitize_hex_color($banner_menu_color);?> !important;
				}
				body .reactheme-breadcrumbs .breadcrumbs-title span a:after, 
  	  			body .reactheme-breadcrumbs .breadcrumbs-title span a:before {					
		  	  		background-color:<?php echo sanitize_hex_color($banner_menu_color);?> !important;
				}
			<?php endif; ?>	

	  	  	
	  		<?php 
	  	  		if(!empty($newsletter_bgs)): ?>
		  	  	body .reactheme-newsletter .newsletter-wrap{			  	  		
	  	  			background:<?php echo sanitize_hex_color($newsletter_bgs);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($newsletter_sub_colors)): ?>
		  	  	body .reactheme-newsletter .newsletter-wrap .sub-title{			  	  		
	  	  			color:<?php echo sanitize_hex_color($newsletter_sub_colors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($newsletter_title_colors)): ?>
		  	  	body .reactheme-newsletter .newsletter-wrap .title{			  	  		
	  	  			color:<?php echo sanitize_hex_color($newsletter_title_colors);?> !important;
		  	  	}
			<?php endif;?>	


			

	  		<?php 
	  	  		if(!empty($input_bg_colors)): ?>
		  	  	body .reactheme-newsletter .mc4wp-form-fields .newsletter-form input{			  	  		
	  	  			background:<?php echo sanitize_hex_color($input_bg_colors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($inputs_colors)): ?>
		  	  	body .mc4wp-form-fields .newsletter-form input{			  	  		
	  	  			color:<?php echo sanitize_hex_color($inputs_colors);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($input_placeholder_color)): ?>
		  	  	::-webkit-input-placeholder {
		  	  	  	color:<?php echo esc_attr($input_placeholder_color);?> !important;
		  	  	}
		  	  	:-ms-input-placeholder {
		  	  	  	color:<?php echo esc_attr($input_placeholder_color);?> !important;
		  	  	}
		  	  	::placeholder {
		  	  	  	color:<?php echo esc_attr($input_placeholder_color);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($button_n_bg_colors)): ?>
		  	  	body .mc4wp-form-fields .newsletter-form button{			  	  		
	  	  			background:<?php echo sanitize_hex_color($button_n_bg_colors);?> !important;
		  	  	}
			<?php endif;?>
	  		

	  		<?php 
	  	  		if(!empty($button_n_txt_colors)): ?>
		  	  	body .mc4wp-form-fields .newsletter-form button{			  	  		
	  	  			color:<?php echo sanitize_hex_color($button_n_txt_colors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($button_n_bg_colors_hovers)): ?>
		  	  	body .mc4wp-form-fields .newsletter-form button:hover{			  	  		
	  	  			background:<?php echo sanitize_hex_color($button_n_bg_colors_hovers);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($button_n_txt_colors_hovers)): ?>
		  	  	body .reactheme-newsletter .mc4wp-form-fields .newsletter-form button:hover{			  	  		
	  	  			color:<?php echo sanitize_hex_color($button_n_txt_colors_hovers);?> !important;
		  	  	}
			<?php endif;?>


	  		<?php 
	  		if(!empty($footer_links_colors)): ?>
	  			body .reactheme-footer a, 
	  			body .reactheme-footer .footer-contact-ul li a, 
	  			body .reactheme-footer .widget.widget_nav_menu ul li a,
	  			body .reactheme-footer .menu-footer-menu-container #footer-menu li a{
	  				color:<?php echo sanitize_hex_color($footer_links_colors);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  	  		if(!empty($logo_bg_colors)): ?>
		  	  	body header#reactheme-header.header-style-4.header-style7 .logo-areas,
		  	  	body header#reactheme-header.header-style-4.header-style7 .logo-area, 
		  	  	body header#reactheme-header.header-style-4.header-style6 .logo-area, 
		  	  	body header#reactheme-header.header-style-4.header-style6 .logo-areas{			  	  		
	  	  			background:<?php echo esc_attr($logo_bg_colors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($footer_arrows_color)): ?>
		  	  	.reactheme-footer .footer-top .mc4wp-form-fields input[type="email"], .reactheme-footer .footer-top .mc4wp-form-fields input[type="text"]
		  	  	{			  	  		
	  	  			background:<?php echo sanitize_hex_color($footer_arrows_color);?>;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($search_icon_colors)): ?>
		  	  	body #reactheme-header .sticky_search i:before{			  	  		
	  	  			color:<?php echo sanitize_hex_color($search_icon_colors);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($cart_icon_colors)): ?>
		  	  	body .menu-cart-area i{			  	  		
	  	  			color:<?php echo sanitize_hex_color($cart_icon_colors);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($register_icon_colors)): ?>
		  	  	body .user-icons a{			  	  		
	  	  			color:<?php echo sanitize_hex_color($register_icon_colors);?> !important;
		  	  	}
			<?php endif;?>	

			<?php 
	  	  		if(!empty($register_icon_colors)): ?>
		  	  	body .user-icons a{			  	  		
	  	  			border-color:<?php echo sanitize_hex_color($register_icon_colors);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($register_icon_color_hovers)): ?>
		  	  	body .user-icons a:hover{			  	  		
	  	  			color:<?php echo sanitize_hex_color($register_icon_color_hovers);?> !important;
		  	  	}
			<?php endif;?>	

			<?php 
	  	  		if(!empty($register_icon_color_hovers)): ?>
		  	  	body .user-icons a:hover{			  	  		
	  	  			border-color:<?php echo sanitize_hex_color($register_icon_color_hovers);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($cart_icon_colors)): ?>
		  	  	body #reactheme-header.header-style5 .menu-cart-area > a{			  	  		
	  	  			border-color:<?php echo sanitize_hex_color($cart_icon_colors);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($cart_icon_colors)): ?>
		  	  	body #reactheme-header.header-style3 .menu-cart-area > a{			  	  		
	  	  			border-color:<?php echo sanitize_hex_color($cart_icon_colors);?> !important;
		  	  	}
			<?php endif;?>
			
			<?php 
	  	  		if(!empty($search_icon_color_hovers)): ?>
		  	  	body #reactheme-header .sticky_search:hover i:before{			  	  		
	  	  			color:<?php echo sanitize_hex_color($search_icon_color_hovers);?> !important;
		  	  	}
			<?php endif;?>	

			<?php 
	  	  		if(!empty($cart_icon_color_hovers)): ?>
		  	  	body .menu-cart-area i:hover,
		  	  	#reactheme-header.header-style5 .menu-cart-area > a:hover i:before,
		  	  	body #reactheme-header.header-style5 .menu-cart-area > a:hover,
		  	  	body .header-style1.header-style3 .menu-cart-area i:hover{			  	  		
	  	  			color:<?php echo sanitize_hex_color($cart_icon_color_hovers);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($cart_icon_color_hovers)): ?>
		  	  	body #reactheme-header.header-style5 .menu-cart-area > a:hover{			  	  		
	  	  			border-color:<?php echo sanitize_hex_color($cart_icon_color_hovers);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($menu_border_colors)): ?>
		  	  	body #reactheme-header.header-style-3 .header-inner .box-layout{			  	  		
	  	  			border-color:<?php echo esc_attr($menu_border_colors);?>;
		  	  	}
			<?php endif;?>


	  		<?php 
	  	  		if(!empty($footer_in_icon_colors)): ?>
		  	  	body .footer-subscribe .paper-plane:before{			  	  		
	  	  			color:<?php echo sanitize_hex_color($footer_in_icon_colors);?>;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($footer_btn_bg_colors)): ?>
		  	  	body .footer-btn-wrap .footer-btn,
		  	  	body ul.footer_social li{			  	  		
	  	  			background:<?php echo sanitize_hex_color($footer_btn_bg_colors);?>;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($footer_btn_text_color)): ?>
		  	  	body .footer-btn-wrap .footer-btn,
		  	  	body .reactheme-footer .widget ul li .fa{			  	  		
	  	  			color:<?php echo sanitize_hex_color($footer_btn_text_color);?>;
		  	  	}
			<?php endif;?>			

	  		<?php 
	  	  		if(!empty($menu_bg_dropdowncolors)): ?>
		  	  	body .menu-area .navbar ul li ul.sub-menu{			  	  		
	  	  			background:<?php echo sanitize_hex_color($menu_bg_dropdowncolors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($primary_colors)): ?>
	  	  		.reactheme-rev-btn2:after, 
	  	  		.reactheme-rev-btn2:before,
	  	  		.cate-slider-style3 .contents .vies-more a,
	  	  		.rev-btn:hover .reactheme-rev-btn1:after, 
	  	  		.rev-btn:hover .reactheme-rev-btn1:before,	  	  		
		  	  	body #top-to-bottom i, body .spinner,		  	  	
		  	  	.mfp-close-btn-in .mfp-close,
		  	  	#mobile_menu .submenu-button,
		  	  	body .reactheme-addon-slider .slick-dots li button,
		  	  	body .menu-wrap-off .inner-offcan .nav-link-container .close-button,
		  	  	.reactheme-footer .footer-top .mc4wp-form-fields input[type="submit"],
		  	  	ul.footer_social li a:hover,
		  	  	.reactheme-blog-grid1.blog-item .image-part span.date-full,
		  	  	.rsaddon-unique-slider.slider-style-1.rs-addon-slider .slick-next:hover, .rsaddon-unique-slider.slider-style-1.rs-addon-slider .slick-prev:hover,
		  	  	.reactheme-footer .footer-top h3.footer-title:before,
		  	  	.header-style5 .nav-link-container .nav-menu-link span,
				body	.slick-slider .slick-dots li button,
				.reactheme-blog-grid1.blog-item .blog-content:after,
				.nav-link-container .nav-menu-link span, #reactheme-header.header-style-4 .nav-link-container .nav-menu-link span,
				.reactheme-footer.footer-style-1 .footer-1::before{			  	  		
	  	  			background:<?php echo sanitize_hex_color($primary_colors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($primary_colors)): ?>
	  	  		body .faq-simple .elementor-accordion-item .elementor-tab-title.elementor-active{			  	  		
	  	  			background:<?php echo sanitize_hex_color($primary_colors);?> !important;
		  	  	}
			<?php endif;?>



	  		<?php 
	  	  		if(!empty($primary_colors)): ?>
		  	  	body .rsaddon-unique-slider .blog-content .blog-footer .blog-meta i,
		  	  	.reactheme-footer .footer-contact-ul li i,
		  	  	.rev-btn:hover .reactheme-rev-btn1,
				.blog-item.reactheme-blog-grid1	.blog-slider4-date,		  	  
		  	  	.reactheme-portfolio-style3 .portfolio-item .portfolio-content h4 a:hover,
		  	  	body #reactheme-header.header-style4 .consultancy-mail-cell .consultancy-mail:hover,
		  	  	#reactheme-header .toolbar-area.toolbar-one ul li:hover a i:before,
		  	  	#reactheme-header .toolbar-area.toolbar-three ul li:hover a i:before,
		  	  	.reactheme-footer .recent-post-widget .show-featured .post-desc i,		  	  	
		  	  	body .sidenav .widget_nav_menu ul > li.current-menu-item > a, .sidenav .widget_nav_menu ul > li > a:hover,
		  	  	body .about__paragraph2 a,
		  	  	.reactheme-footer .copyright a,
		  	  	.reactheme-footer a:hover, .reactheme-footer .widget.widget_nav_menu ul li a:hover,
		  	  	.menu-area .navbar ul li:hover a:before,
		  	  	.reactheme-blog-grid1.blog-item .blog-content .blog-meta span.author,
		  	  	.rsaddon-unique-slider .reactheme-blog-grid1.blog-item .cat_list ul li a,
		  	  	.reactheme-footer .footer-contact-ul li span.time,
		  	  	.contact-form .input-box:before,
		  	  	#reactheme-header.header-transparent .menu-area .navbar ul li.current_page_ancestor a:before,
		  	  	sidenav .footer-contact-ul li i,
		  	  	.reactheme-footer .footer-top .mc4wp-form-fields .input-box-text:before,
		  	  	.reactheme-footer .footer-top .mc4wp-form-fields .input-box-email:before{			  	  		
	  	  			color:<?php echo sanitize_hex_color($primary_colors);?> !important;
		  	  	}
		  	  	.reactheme-footer .footer-contact-ul li span.time{
		  	  		border-color:<?php echo sanitize_hex_color($primary_colors);?> !important;
		  	  	}

			<?php endif;?>


	  		

	  		<?php 
	  	  		if(!empty($menu_sticky_bgcolors)): ?>
		  	  	body #reactheme-header .menu-sticky.sticky .menu-area, 
		  	  	body #reactheme-header.header-style-3 .header-inner.sticky .box-layout,
		  	  	body #reactheme-header.header-style-3 .header-inner.sticky,
		  	  	body #reactheme-header.header-style-3.header-style-2 .sticky-wrapper .header-inner.sticky .box-layout{  		
	  	  			background:<?php echo sanitize_hex_color($menu_sticky_bgcolors);?> !important;
		  	  	}
			<?php endif;?>

	  		
			<?php 
	  	  		if(!empty($footer_all_is_colors)): ?>
		  	  	body .reactheme-footer .footer-contact-ul li i:before,
		  	  	body .reactheme-footer .recent-post-widget .show-featured .post-desc i{			  	  		
	  	  			color:<?php echo sanitize_hex_color($footer_all_is_colors);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_all_is_colors)): ?>
		  	  	body .reactheme-footer .widget.widget_nav_menu ul li a::before, 
		  	  	body .reactheme-footer .widget.widget_pages ul li a::before, 
		  	  	body .reactheme-footer .widget.widget_archive ul li a::before, 
		  	  	body .reactheme-footer .widget.widget_categories ul li a::before{			  	  		
	  	  			background:<?php echo sanitize_hex_color($footer_all_is_colors);?> !important;
		  	  	}
			<?php endif;?>


	  		<?php 
	  	  		if(!empty($menu_sticky_txt_hovercolors)): ?>
	  	  		body #reactheme-header.header-transparent .menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a, 
	  	  		body #reactheme-header .menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a, 
	  	  		body #reactheme-header .menu-sticky.sticky .menu-area .navbar ul > li.current_page_item > a, 
	  	  		body #reactheme-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current_page_item > a,
	  	  		body #reactheme-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current-menu-item page_item a, 
	  	  		body #reactheme-header.header-style-4 .menu-sticky.sticky .menu-area .navbar ul > li.current_page_item > a, 
	  	  		body #reactheme-header.header-style-4 .menu-sticky.sticky .menu-area .menu > li.current-menu-ancestor > a,
	  	  		body #reactheme-header.header-style5 .menu-area .navbar ul > li.current-menu-ancestor > a, 
	  	  		body #reactheme-header .header-inner.menu-sticky.sticky .menu-area .navbar ul li:hover::after,
	  	  		body #reactheme-header.header-style5 .header-inner .menu-area .navbar ul > li.current-menu-ancestor > a, 
	  	  		body #reactheme-header.header-style5 .header-inner.menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a,
	  	  		body #reactheme-header .menu-sticky.sticky .menu-area .navbar ul > li.current_page_item > a,
		  	  	body #reactheme-header .menu-sticky.sticky .menu-area .navbar ul > li:hover > a, 
		  	  	body #reactheme-header.header-style-4 .header-inner.sticky .btn_quote .toolbar-sl-share ul > li a:hover, 
		  	  	body #reactheme-header.header-style-4 .header-inner.sticky .menu-cart-area i:hover, 
		  	  	body #reactheme-header.header-style-4 .header-inner.sticky .sidebarmenu-search i:hover, 
		  	  	body #reactheme-header .menu-sticky.sticky .menu-area .navbar ul li ul.submenu > li.current-menu-ancestor > a{
	  	  			color:<?php echo sanitize_hex_color($menu_sticky_txt_hovercolors);?> !important;
		  	  	}
			<?php endif;?>

			
			<?php 
	  	  		if(!empty($menu_sticky_txt_hovercolors)): ?>
		  	  	body #reactheme-header.header-style5 .header-inner.menu-sticky.stuck.sticky .navbar ul > li.menu-item-has-children.hover-minimize:hover > a:after,
		  	  	body #reactheme-header .header-inner.menu-sticky.stuck.sticky .navbar ul > li.menu-item-has-children.hover-minimize > a:after
		  	  	{			  	  		
	  	  			background:<?php echo sanitize_hex_color($menu_sticky_txt_hovercolors);?> !important;
		  	  	}
			<?php endif;?>
			
			


	  		<?php 
	  	  		if(!empty($menu_text_dropdowncolors)): ?>
		  	  	body .menu-area .navbar ul > li ul.sub-menu li > a,
		  	  	body #reactheme-header .menu-area .navbar ul li.mega ul li a, 
		  	  	body #reactheme-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor > a, 
		  	  	body #reactheme-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor li a,

		  	  	body #reactheme-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li a{
	  	  			color:<?php echo sanitize_hex_color($menu_text_dropdowncolors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($menu_text_hover_dropdowncolors)): ?>
	  	  		body #reactheme-header.header-style-4 .menu-area .navbar ul > li ul.sub-menu li.current_page_item a,
	  	  		body #reactheme-header .menu-area .navbar ul > li ul.sub-menu li.current_page_item a,
	  	  		body #reactheme-header .menu-area .navbar ul > li ul.sub-menu li.current_page_item a,
	  	  		body #reactheme-header .menu-area .navbar ul li ul.sub-menu li:hover > a,
		  	  	body #reactheme-header.single-header.header-style5 .menu-area .navbar ul li ul.sub-menu li:hover > a,
		  	  	body #reactheme-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current_page_item a,
		  	  	body #reactheme-header .menu-sticky.sticky .menu-area .navbar ul > li .sub-menu > li a:hover
		  	  	{
	  	  			color:<?php echo sanitize_hex_color($menu_text_hover_dropdowncolors);?> !important;
		  	  	}
			<?php endif;?>



	  		<?php 
	  	  		if(!empty($topbar_area_bg)): ?>
		  	  	body #reactheme-header .toolbar-area{			  	  		
	  	  			background:<?php echo esc_attr($topbar_area_bg);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($topbar_text_color)): ?>
		  	  	body #reactheme-header .toolbar-area .toolbar-contact ul.reactheme-contact-info li a, 
		  	  	body #reactheme-header .toolbar-area .toolbar-contact ul li a, 
		  	  	body .tops-btn .btn_login a,
		  	  	body #reactheme-header .toolbar-area .toolbar-contact ul.reactheme-contact-info li,
		  	  	body #reactheme-header .toolbar-area,
		  	  	body #reactheme-header .toolbar-area .toolbar-sl-share ul li,
		  	  	body #reactheme-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons,
		  	  	body #reactheme-header.header-style5 .toolbar-area .opening,
		  	  	body #reactheme-header .toolbar-area .toolbar-contact ul li i, 
		  	  	body #reactheme-header .toolbar-area .toolbar-contact ul li i:before, 
		  	  	body #reactheme-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons::before,
		  	  	body #reactheme-header .toolbar-area .toolbar-sl-share ul li a i{			  	  		
	  	  			color:<?php echo sanitize_hex_color($topbar_text_color);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($topbar_link_hovercolors)): ?>
		  	  	body #reactheme-header .toolbar-area .toolbar-contact ul.reactheme-contact-info li a:hover, 
		  	  	body #reactheme-header .toolbar-area .toolbar-contact ul li a:hover, 
		  	  	body #reactheme-header .toolbar-area .toolbar-contact ul li:hover i:before,
		  	  	body #reactheme-header .toolbar-area .toolbar-contact ul li i:hover, 
		  	  	body .tops-btn .btn_login a:hover,
		  	  	body #reactheme-header .toolbar-area .toolbar-sl-share ul li a i:hover{			  	  		
	  	  			color:<?php echo sanitize_hex_color($topbar_link_hovercolors);?> !important;
		  	  	}
			<?php endif;?>


	  		<?php 
	  	  		if(!empty($topbar_border_color)): ?>
		  	  	body #reactheme-header .toolbar-area .toolbar-contact ul li,
		  	  	body #reactheme-header .toolbar-area .opening,
		  	  	body #reactheme-header.header-style5 .toolbar-area,
		  	  	body #reactheme-header.header-style5 .toolbar-area .opening{			  	  		
	  	  			border-color:<?php echo esc_attr($topbar_border_color);?> !important;
		  	  	}
			<?php endif;?>

	  		

	  		<?php 
	  	  		if(!empty($topbar_social_color)): ?>
		  	  	body .toolbar-area .toolbar-sl-share i, 
		  	  	body .toolbar-area .toolbar-sl-share i::before{			  	  		
	  	  			color:<?php echo sanitize_hex_color($topbar_social_color);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($topbar_social_hover_color)): ?>
		  	  	body .toolbar-area .toolbar-sl-share i:hover, 
		  	  	body .toolbar-area .toolbar-sl-share a:hover i:before{			  	  		
	  	  			color:<?php echo sanitize_hex_color($topbar_social_hover_color);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($topbar_icons_color)): ?>
		  	  	body .toolbar-area .toolbar-contact i, 
		  	  	body .toolbar-area .opening i, 
		  	  	body .toolbar-area .opening i:before, 
		  	  	body .toolbar-area .toolbar-contact i::before{			  	  		
	  	  			color:<?php echo sanitize_hex_color($topbar_icons_color);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($topbar_button_bgs)): ?>
		  	  	body .tops-btn .quote-buttons{			  	  		
	  	  			background:<?php echo sanitize_hex_color($topbar_button_bgs);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($topbar_button_texts)): ?>
		  	  	body .tops-btn .quote-buttons{			  	  		
	  	  			color:<?php echo sanitize_hex_color($topbar_button_texts);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($topbar_button_bg_hovers)): ?>
		  	  	body .tops-btn .quote-buttons:hover{			  	  		
	  	  			background:<?php echo esc_attr($topbar_button_bg_hovers);?> !important;
		  	  	}
			<?php endif;?>	

			<?php 
	  	  		if(!empty($topbar_button_text_hover)): ?>
		  	  	body .tops-btn .quote-buttons:hover{			  	  		
	  	  			color:<?php echo esc_attr($topbar_button_text_hover);?> !important;
		  	  	}
			<?php endif;?>


	  		<?php 
	  	  		if(!empty($menu_texts_colors)): ?>
		  	  	body .menu-area .navbar ul > li > a,
		  	  	body #reactheme-header.header-style-3 .reactheme-contact-location i.phone-icon::before,
		  	  	body #reactheme-header.header-style-3 .reactheme-contact-location .contact-inf a,
		  	  	body #reactheme-header.header-style1 .category-menu .menu li::after, 
		  	  	body #reactheme-header.header-style-4 .category-menu .menu li::after,
		  	  	body #reactheme-header.header-style5 .sticky_search i::before,
		  	  	#reactheme-header .sticky_search i::before{			  	  		
	  	  			color:<?php echo sanitize_hex_color($menu_texts_colors);?> !important;
		  	  	}
			<?php endif;?>


	  		<?php 
	  	  		if(!empty($menu_texts_hover_colors)): ?>
		  	  	body .menu-area .navbar ul > li:hover > a,
		  	  	#reactheme-header.header-style5 .menu-area .navbar ul > li.current_page_item ul > a, 
		  	  	#reactheme-header .menu-area .navbar ul li.mega ul > li > a:hover, 
		  	  	.menu-area .navbar ul li ul.sub-menu li:hover > a, 
		  	  	#reactheme-header.header-style5 .stuck.sticky .menu-area .navbar ul > li.active a, 
		  	  	#reactheme-header .menu-area .navbar ul > li.active a,
		  	  	body #reactheme-header.header-style1 .category-menu .menu li:hover:after, 
		  	  	body #reactheme-header.header-style-4 .category-menu .menu li:hover:after,
		  	  	#reactheme-header .menu-area .navbar ul li.mega ul li a:hover, 
		  	  	body .menu-area .navbar ul > li.current-menu-ancestor > a,
		  	  	#reactheme-header.header-style5 .menu-area .navbar ul > li.current-menu-ancestor > a, 
		  	  	#reactheme-header.header-style5 .header-inner .menu-area .navbar ul > li.current-menu-ancestor > a, 
		  	  	#reactheme-header .menu-area .navbar ul li.mega ul > li.current-menu-item > a,  
		  	  	#reactheme-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor li a:hover,
		  	  	body #reactheme-header.header-style-4 .menu-area .menu > li.current_page_item > a,
		  	  	body #reactheme-header.header-style-3 .reactheme-contact-location .contact-inf a:hover,
		  	  	body #reactheme-header .menu-area .menu > li.current_page_item > a
		  	  	{			  	  		
	  	  			color:<?php echo sanitize_hex_color($menu_texts_hover_colors);?> !important;
		  	  	}
			<?php endif;?>		

	  		<?php 
	  	  		if(!empty($menu_sticky_txtcolors)): ?>
		  	  	body #reactheme-header .header-inner.sticky .menu-area .navbar ul li a,
		  	  	body #reactheme-header.header-style1 .header-inner.sticky .category-menu .menu li:after,
		  	  	body #reactheme-header.header-style-4 .header-inner.sticky .category-menu .menu li:after{
	  	  			color:<?php echo sanitize_hex_color($menu_sticky_txtcolors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($menu_sticky_txtcolors)): ?>
		  	  	body .header-inner.sticky .offcanvas-icon span.dot1, 
		  	  	body .header-inner.sticky .offcanvas-icon span.dot2, 
		  	  	body .header-inner.sticky .offcanvas-icon span.dot3,
		  	  	body .header-inner.sticky .offcanvas-icon span.dot4{
	  	  			background:<?php echo sanitize_hex_color($menu_sticky_txtcolors);?> !important;
		  	  	}
			<?php endif;?>		

	  		<?php 
	  	  		if(!empty($menu_texts_hover_colors)): ?>
		  	  	body #reactheme-header.header-style5 .header-inner .menu-area .navbar ul > li.menu-item-has-children.hover-minimize:hover > a:after,
		  	  	body #reactheme-header .menu-area .navbar ul > li.menu-item-has-children.hover-minimize > a:after
		  	  	{			  	  		
	  	  			background:<?php echo sanitize_hex_color($menu_texts_hover_colors);?> !important;
		  	  	}
			<?php endif;?>			

	  		<?php 
	  	  		if(!empty($footer_socials_bg_colorss)): ?>
		  	  	body #reactheme-footer ul.footer_social li a
		  	  	{			  	  		
	  	  			background:<?php echo sanitize_hex_color($footer_socials_bg_colorss);?> !important;
		  	  	}
			<?php endif;?>	

			<?php if(!empty( $footer_socials_bg_hover_colors )):  ?>
				body #reactheme-footer ul.footer_social li a:hover{
					background: <?php echo sanitize_hex_color( $footer_socials_bg_hover_colors ); ?> !important;
				}
			<?php endif;?>	

			<?php if(!empty( $footer_socials_icon_hover_colors )): ?>
				body #reactheme-footer ul.footer_social li a{
					color: <?php echo sanitize_hex_color( $footer_socials_icon_hover_colors ); ?> !important;
				}
			<?php endif;?>	

	  		<?php 
	  	  		if(!empty($footer_socials_ic_colors)): ?>
		  	  	body #reactheme-footer ul.footer_social li a
		  	  	{			  	  		
	  	  			color:<?php echo sanitize_hex_color($footer_socials_ic_colors);?> !important;
		  	  	}
			<?php endif;?>			


	  		<?php 
	  	  		if(!empty($quote_button_bg_colors)): ?>
		  	  	body #reactheme-header .btn_quote a,
		  	  	body #reactheme-header.header-style1.header1 .btn_apply a{			  	  		
	  	  			background:<?php echo sanitize_hex_color($quote_button_bg_colors);?> !important;
		  	  	}
		  	  	#reactheme-header .btn_quote a{
		  	  		border-color:<?php echo sanitize_hex_color($quote_button_bg_colors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($quote_button_colors)): ?>
		  	  	body #reactheme-header .btn_quote a,
		  	  	body #reactheme-header.header-style1.header1 .btn_apply a{			  	  		
	  	  			color:<?php echo sanitize_hex_color($quote_button_colors);?> !important;
		  	  	}

			<?php endif;?>

	  		<?php 
	  	  		if(!empty($quote_button_bg_hover_colors)): ?>
		  	  	body #reactheme-header .btn_quote a:hover,
		  	  	body #reactheme-header.header-style1.header1 .btn_apply a:hover{			  	  		
	  	  			background:<?php echo sanitize_hex_color($quote_button_bg_hover_colors);?> !important;
		  	  	}
		  	  	#reactheme-header .btn_quote a:hover{
		  	  		border-color:<?php echo sanitize_hex_color($quote_button_bg_hover_colors);?> !important;
		  	  	}
			<?php endif;?>
	  		<?php 
	  	  		if(!empty($quote_button_hover_colors)): ?>
		  	  	body #reactheme-header .btn_quote a:hover,
		  	  	#reactheme-header.header-style1.header1 .btn_apply a:hover{			  	  		
	  	  			color:<?php echo sanitize_hex_color($quote_button_hover_colors);?> !important;
		  	  	}
			<?php endif;?>



			<?php 
	  	  		if(!empty($header_hamburger_colors)): ?>
		  	  	body .offcanvas-icon .nav-link-container a span
		  	  	{
	  	  			background:<?php echo sanitize_hex_color($header_hamburger_colors);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($head_hamburger_hover_color)): ?>
		  	  	body .offcanvas-icon .nav-link-container a:hover span
		  	  	{
	  	  			background:<?php echo sanitize_hex_color($head_hamburger_hover_color);?> !important;
		  	  	}
			<?php endif;?>

		
			

			<?php 
	  	  		if(!empty($sticky_hamburger_color)): ?>
  	  			body #reactheme-header .header-inner.sticky .offcanvas-icon span.dot1, 
  	  			body #reactheme-header .header-inner.sticky .offcanvas-icon span.dot2,
  	  			#reactheme-header.header-style-4.header-style6 .header-inner.sticky .nav-link-container .nav-menu-link span, 
  	  			body #reactheme-header .header-inner.sticky .offcanvas-icon span.dot3{			  	  		
	  	  			background:<?php echo sanitize_hex_color($sticky_hamburger_color);?> !important;
		  	  	}
			<?php endif;?>	

			<?php 
	  	  		if(!empty($head_hamburger_bg_coloras)): ?>
  	  			body header#reactheme-header.header-style-4 .sidebarmenu-area,
  	  			.sidebarmenu-area{			  	  		
	  	  			background:<?php echo sanitize_hex_color($head_hamburger_bg_coloras);?> !important;
		  	  	}
			<?php endif;?>


			<?php 
	  	  		if(!empty($footer_title_color)): ?>
		  	  	body .reactheme-footer .footer-top h3.footer-title,
		  	  	body .footer-subscribe .newsletter-title
		  	  	{			  	  		
	  	  			color:<?php echo sanitize_hex_color($footer_title_color);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_border_color)): ?>
		  	  	body .reactheme-footer .footer-top .mc4wp-form-fields input[type="email"]{			  	  		
	  	  			border-color:<?php echo esc_attr($footer_border_color);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_top_border_color)): ?>
		  	  	body .footer-subscribe .subscribe-bg,
		  	  	body .footer-bottom .copyright_border,
		  	  	body .footer-bottom .container
		  	  	{			  	  		
	  	  			border-color:<?php echo esc_attr($footer_top_border_color);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_border_color)): ?>
		  	  	body .footer-subscribe input[type="email"]{			  	  		
	  	  			border-color:<?php echo esc_attr($footer_border_color);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_txt_colors)): ?>
		  	  	body .reactheme-footer .footer-top, 
		  	  	body .footer-bottom .copyright p,
		  	  	body .reactheme-footer .footer-top .mc4wp-form-fields i,
		  	  	body .reactheme-footer .footer-top .mc4wp-form-fields input[type=email]::placeholder,
		  	  	body .reactheme-footer .footer-top .mc4wp-form-fields input[type=email],
		  	  	body .reactheme-footer .footer-top .mc4wp-form-fields input[type=text]::placeholder,
		  	  	body .reactheme-footer .footer-top .mc4wp-form-fields input[type=text],
		  	  	.footer-top ul.footer_social > li > a,
		  	  	.reactheme-footer .recent-post-widget .show-featured .post-desc a,
		  	  	.reactheme-footer .recent-post-widget .show-featured .post-desc span,
		  	  	body .reactheme-footer{			  	  		
	  	  			color:<?php echo sanitize_hex_color($footer_txt_colors);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_btn_text_colors)): ?>
		  	  	body #reactheme-footer .footer-btn-wrap a.footer-btn{			  	  		
	  	  			color:<?php echo sanitize_hex_color($footer_btn_text_colors);?> !important;
		  	  	}
			<?php endif;?>

			

			<?php 
	  	  		if(!empty($footer_txt_colors)): ?>
		  	  	body .footer-subscribe input[type="email"]::-webkit-input-placeholder { /* Chrome/Opera/Safari */
		  	  		color:<?php echo sanitize_hex_color($footer_txt_colors);?> !important;
		  	  	}
		  	  	body .footer-subscribe input[type="email"]::-moz-placeholder { /* Firefox 19+ */
		  	  		color:<?php echo sanitize_hex_color($footer_txt_colors);?> !important;
		  	  	}
		  	  	body .footer-subscribe input[type="email"]:-ms-input-placeholder { /* IE 10+ */
		  	  		color:<?php echo sanitize_hex_color($footer_txt_colors);?> !important;
		  	  	}
		  	  	body .footer-subscribe input[type="email"]:-moz-placeholder { /* Firefox 18- */
		  	  	  	color:<?php echo sanitize_hex_color($footer_txt_colors);?> !important;
		  	  	}
			<?php endif;?>


			<?php 
	  	  		if(!empty($copyright_border_color)): ?>
		  	  	body .footer-bottom{			  	  		
	  	  			border-color:<?php echo esc_attr($copyright_border_color);?> !important;
		  	  	}
			<?php endif;?>

			
			<?php 
	  	  		if(!empty($menu_sticky_txt_hovercolors)): ?>
		  	  	body #reactheme-header .header-inner.sticky .category-menu .menu li:hover:after, 
		  	  	body #reactheme-header.header-style1 .header-inner.sticky .category-menu .menu li:hover::after, 
		  	  	body #reactheme-header.header-style-4 .header-inner.sticky .category-menu .menu li:hover::after
		  	  	{			  	  		
	  	  			color:<?php echo sanitize_hex_color($menu_sticky_txt_hovercolors);?> !important;
		  	  	}
			<?php endif;?>	

			<?php 
	  	  		if(!empty($menu_sticky_txt_hovercolors)): ?>
		  	  	body #reactheme-header .header-inner.sticky ul.offcanvas-icon a:hover span.dot1, 
		  	  	body #reactheme-header .header-inner.sticky ul.offcanvas-icon a:hover span.dot2, 
		  	  	body #reactheme-header .header-inner.sticky ul.offcanvas-icon a:hover span.dot3
		  	  	{			  	  		
	  	  			background:<?php echo sanitize_hex_color($menu_sticky_txt_hovercolors);?> !important;
		  	  	}
			<?php endif;?>

			<?php if(!empty($quote_button_border_radius)): ?>
				#reactheme-header .btn_quote a{
					border-radius: <?php echo esc_html($quote_button_border_radius);?>
				}
			<?php endif; ?>

			

	  	  	<?php 
  	  		if(!empty($footer_primary_hover)): ?>
				.footer-top ul.footer_social > li > a:hover,
				.reactheme-blog .blog-meta .blog-title a:hover,
				.reactheme-footer.footerdark .footer-top .widget.widget_nav_menu ul li a:hover,
				.reactheme-footer a:hover,
				.reactheme-footer .widget a:hover,
				body .reactheme-footer .recent-post-widget .show-featured .post-desc a:hover,
				.reactheme-footer .footer-contact-ul li a:hover,
				.reactheme-footer.footerdark .footer-bottom .copyright p a:hover,
				.reactheme-footer.footerdark .footer-top .footer-contact-ul li a:hover,
				.reactheme-footer.footerdark .footer_social li a:hover .fa,
				ul.unorder-list li:before {					
		  	  		color:<?php echo sanitize_hex_color($footer_primary_hover);?> !important;
				}
			<?php endif; ?>
		  	</style>
	<?php endif;
}
?>