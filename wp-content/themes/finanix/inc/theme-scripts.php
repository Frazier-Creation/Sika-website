<?php
function finanix_scripts() {
	//register styles
	global $finanix_option;
	wp_enqueue_style( 'boostrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );	
	wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() .'/assets/css/all.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css');	
	wp_enqueue_style( 'flaticon', get_template_directory_uri() .'/assets/css/flaticon.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() .'/assets/css/animate.css');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .'/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() .'/assets/css/slick.css' );	
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.css');
	wp_enqueue_style( 'gt-font', get_template_directory_uri() .'/assets/css/gt-font.css' );
	wp_enqueue_style( 'finanix-style-default', get_template_directory_uri() .'/assets/css/theme.css' );
	wp_enqueue_style( 'finanix-gutenberg-custom', get_template_directory_uri() .'/assets/css/gutenberg-custom.css' );
	wp_enqueue_style( 'finanix-style-responsive', get_template_directory_uri() .'/assets/css/responsive.css' );
	wp_enqueue_style( 'finanix-style', get_stylesheet_uri() );	
	// Mouse Pointer Scripts
	$rs_mouse_pointer="";
	$rs_mouse_pointer  = get_post_meta(get_queried_object_id(), 'mouse-pointer', true);
	
	if($rs_mouse_pointer != 'hide'){
		if(!empty($finanix_option['show_pointer']) || ($rs_mouse_pointer == 'show') ){
			wp_enqueue_script( 'pointer', get_template_directory_uri() . '/assets/js/pointer.js', array('jquery'), '20151215', true );
		} 
	}
	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'waypoints-sticky', get_template_directory_uri() . '/assets/js/waypoints-sticky.min.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'isotope-finanix', get_template_directory_uri() . '/assets/js/isotope-finanix.js', array('jquery', 'imagesloaded'), '20151215', true );	
	wp_enqueue_script('finanix-classie', get_template_directory_uri() . '/assets/js/classie.js', array('jquery'), '201513434', true);	
	
	if ( is_page_template( 'page-single.php' ) ) {
		wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), '20151215', true );
	}
	wp_enqueue_script('finanix-mobilemenu', get_template_directory_uri() . '/assets/js/mobilemenu.js', array('jquery'), '201513434', true);
	wp_enqueue_script('finanix-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '201513434', true);	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'finanix_scripts' );

add_action( 'wp_enqueue_scripts', 'finanix_rtl_scripts', 1500 );
if ( !function_exists( 'finanix_rtl_scripts' ) ) {
	function finanix_rtl_scripts() {	
		// RTL
		if ( is_rtl() ) {
			wp_enqueue_style( 'finanix-rtl', get_template_directory_uri() . '/assets/css/rtl.css', array(), 1.0 );
		}		
		
	}
}


add_action( 'admin_enqueue_scripts', 'finanix_load_admin_styles' );
function finanix_load_admin_styles($screen) {
	wp_enqueue_style( 'finanix-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', true, '1.0.0' );
	wp_enqueue_script( 'finanix-admin-script', get_template_directory_uri() . '/assets/js/admin-script.js', array('jquery'), '20151215', true );
} 