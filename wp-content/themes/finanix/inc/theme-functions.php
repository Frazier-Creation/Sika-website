<?php
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function finanix_body_classes( $classes ) {
  // Adds a class of hfeed to non-singular pages.
  if ( ! is_singular() ) {
    $classes[] = 'hfeed';
  }

  return $classes;
}
add_filter( 'body_class', 'finanix_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function finanix_pingback_header() {
  if ( is_singular() && pings_open() ) {
    echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
  }
}

add_action( 'wp_head', 'finanix_pingback_header' );

/**  kses_allowed_html */

function finanix_prefix_kses_allowed_html($tags, $context) {
  switch($context) {
    case 'finanix': 
      $tags = array( 
        'a' => array('href' => array()),
        'b' => array()
      );
      return $tags;
    default: 
      return $tags;
  }
}

add_filter( 'wp_kses_allowed_html', 'finanix_prefix_kses_allowed_html', 10, 2);

//Favicon Icon
function finanix_site_icon() {
 if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) {     
    global $finanix_option;
     
    if(!empty($finanix_option['rs_favicon']['url']))
    {?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url(($finanix_option['rs_favicon']['url'])); ?>"> 
  <?php 
    }
  }
}
add_filter('wp_head', 'finanix_site_icon');


//excerpt for specific section
function finanix_wpex_get_excerpt( $args = array() ) {
  // Defaults
  $defaults = array(
    'post'            => '',
    'length'          => 48,
    'readmore'        => false,
    'readmore_text'   => esc_html__( 'read more', 'finanix' ),
    'readmore_after'  => '',
    'custom_excerpts' => true,
    'disable_more'    => false,
  );
  // Apply filters
  $defaults = apply_filters( 'finanix_wpex_get_excerpt_defaults', $defaults );
  // Parse args
  $args = wp_parse_args( $args, $defaults );
  // Apply filters to args
  $args = apply_filters( 'finanix_wpex_get_excerpt_args', $defaults );
  // Extract
  extract( $args );
  // Get global post data
  if ( ! $post ) {
    global $post;
  }

  $post_id = $post->ID;
  if ( $custom_excerpts && has_excerpt( $post_id ) ) {
    $output = $post->post_excerpt;
  } 
  else { 
    $readmore_link = '<a href="' . get_permalink( $post_id ) . '" class="readmore">' . $readmore_text . $readmore_after . '</a>';    
    if ( ! $disable_more && strpos( $post->post_content, '<!--more-->' ) ) {
      $output = apply_filters( 'the_content', get_the_content( $readmore_text . $readmore_after ) );
    }    
    else {     
      $output = wp_trim_words( strip_shortcodes( $post->post_content ), $length );      
      if ( $readmore ) {
        $output .= apply_filters( 'finanix_wpex_readmore_link', $readmore_link );
      }
    }
  }
  // Apply filters and echo
  return apply_filters( 'finanix_wpex_get_excerpt', $output );
}


//Demo content file include here

function finanix_import_files() {
  return array(
    array(
        'import_file_name'           => 'Finanix Demo Import',
        'categories'                 => array( 'Business' ),
        'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'inc/demo-data/finanix-content.xml',
        'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'inc/demo-data/finanix-widget.wie',      
        'import_redux'               => array(
        array(
          'file_url'    => trailingslashit( get_template_directory_uri() ) . 'inc/demo-data/finanix-options.json',
          'option_name' => 'finanix_option',
        ),
      ),      
     
      'import_notice'              => esc_html__( 'Note: For making demo site just click "Import Demo Data" button. During demo data installation please do not refresh the page.', 'finanix' ),      
    ),
    
  );
}

add_filter( 'pt-ocdi/import_files', 'finanix_import_files' );
function finanix_after_import_setup() {
  // Assign menus to their locations.
	$main_menu     = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$category_menu = get_term_by( 'name', 'Category Menu', 'nav_menu' ); 

  set_theme_mod( 'nav_menu_locations', array(
      'menu-1' => $main_menu->term_id,       
      'menu-4' => $category_menu->term_id,    
    )
  );

  // Assign front page and posts page (blog page).
  $front_page_id = get_page_by_title( 'Home' );
  $blog_page_id  = get_page_by_title( 'Blog' );

  update_option( 'show_on_front', 'page' );
  update_option( 'page_on_front', $front_page_id->ID );
  update_option( 'page_for_posts', $blog_page_id->ID ); 

  //Import Revolution Slider
  if ( class_exists( 'RevSlider' ) ) {
    $slider_array = array(
      get_template_directory()."/inc/demo-data/sliders/main-home-1.zip",  
      get_template_directory()."/inc/demo-data/sliders/main-home-2.zip",                       
      get_template_directory()."/inc/demo-data/sliders/statup-home.zip",                       
      get_template_directory()."/inc/demo-data/sliders/statup-seven.zip"                       
    );

    $slider = new RevSlider();
    foreach($slider_array as $filepath){
      $slider->importSliderFromPost(true,true,$filepath);  
    }
  } 
}
add_action( 'pt-ocdi/after_import', 'finanix_after_import_setup' );

add_filter( 'use_widgets_block_editor', '__return_false' );

/**
 * Disable WooCommerce block styles (front-end).
 */
function finanix_disable_woocommerce_block_styles() {
  wp_dequeue_style( 'wc-blocks-style' );
  wp_dequeue_style( 'extendify-gutenberg-patterns-and-templates-utilities' );
}
add_action( 'wp_enqueue_scripts', 'finanix_disable_woocommerce_block_styles' );
?>
<?php function reactheme_plugin_update_check($transient) {
    // Check if the transient already contains update data for our plugin
    if (empty($transient->checked)) {
        return $transient;
    }

    // Your plugin slug and URL to check for the latest version info
    $plugin_slug = 'rt-elements';
    $update_url = 'https://themewant.com/products/plugins/finanix/version-check.json';

    // Get current plugin version
    $plugin_data = get_plugin_data(WP_PLUGIN_DIR . '/' . $plugin_slug . '/' . $plugin_slug . '.php');
    $current_version = $plugin_data['Version'];

    // Request the latest version info from your server
    $response = wp_remote_get($update_url);
    if (is_wp_error($response) || wp_remote_retrieve_response_code($response) != 200) {
        return $transient; // Exit if the request fails
    }

    $remote_data = json_decode(wp_remote_retrieve_body($response));

    if (version_compare($current_version, $remote_data->new_version, '<')) {
        $transient->response[$plugin_slug . '/' . $plugin_slug . '.php'] = (object) [
            'slug' => $plugin_slug,
            'new_version' => $remote_data->new_version,
            'url' => $remote_data->changelog,
            'package' => $remote_data->download_url
        ];
    }

    return $transient;
}
add_filter('pre_set_site_transient_update_plugins', 'reactheme_plugin_update_check');