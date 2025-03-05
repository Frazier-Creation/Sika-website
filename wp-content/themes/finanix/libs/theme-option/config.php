<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "finanix_option";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'finanix/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        'page_priority'        => 8,
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Finanix Options', 'finanix' ),
        'page_title'           => esc_html__( 'Finanix Options', 'finanix' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 20,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        'forced_dev_mode_off' => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        'compiler' => true,

        // OPTIONAL -> Give you extra features
        'page_priority'        => 20,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        'force_output' => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( esc_html__( 'Finanix Theme', 'finanix' ), $v );
    } else {
        $args['intro_text'] = esc_html__( 'Finanix Theme', 'finanix' );
    }

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTSfinanix
      
     */     
   // -> START General Settings
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'General Settings', 'finanix' ),
        'id'               => 'basic-checkbox',
        'customizer_width' => '450px',
        'fields'           => array(

        	array(
        	    'id'       => 'enable_global',
        	    'type'     => 'switch', 
        	    'title'    => esc_html__('Enable Global Settings', 'finanix'),
        	    'subtitle' => esc_html__('If you enable global settings all option will be work only theme option', 'finanix'),
        	    'default'  => false,
        	),         
        	
            array(
                'id'       => 'container_size',
                'title'    => esc_html__( 'Container Size', 'finanix' ),
                'subtitle' => esc_html__( 'Container Size example(1200px)', 'finanix' ),
                'type'     => 'text',
                'default'  => '1320px'        
            ),

           
     
            array(
                'id'       => 'show_top_bottom',
                'type'     => 'switch', 
                'title'    => esc_html__('Scroll to Top', 'finanix'),
                'subtitle' => esc_html__('You can show or hide here', 'finanix'),
                'default'  => false,
            ),
        )
    ) 
);
    
Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Logo Section', 'finanix' ),
        'id'               => 'logo-settings',
        'customizer_width' => '450px',
        'icon'             => 'el el-upload',
        'fields'           => array(
     array(
                'id'       => 'logo',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Default Logo', 'finanix' ),
                'subtitle' => esc_html__( 'Upload your logo', 'finanix' ),
                'url'=> true                
            ),

            array(
                'id'       => 'logo_light',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Your Light', 'finanix' ),
                'subtitle' => esc_html__( 'Upload your light logo', 'finanix' ),
                'url'=> true                
            ),

            array(
                'id'       => 'logo-height',                               
                'title'    => esc_html__( 'Logo Height', 'finanix' ),
                'subtitle' => esc_html__( 'Logo max height example(50px)', 'finanix' ),
                'type'     => 'text',
                'default'  => '40px'                    
            ),

            array(
                'id'       => 'rswplogo_sticky',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Your Sticky Logo', 'finanix' ),
                'subtitle' => esc_html__( 'Upload your sticky logo', 'finanix' ),
                'url'=> true                
            ),

            array(
                'id'       => 'sticky_logo_height',                               
                'title'    => esc_html__( 'Sticky Logo Height', 'finanix' ),
                'subtitle' => esc_html__( 'Sticky Logo max height example(20px)', 'finanix' ),
                'type'     => 'text',
                'default'  => '40px'                    
            ),

             array(
                'id'       => 'wplogo_mobile_rt',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Your Mobile Logo', 'finanix' ),
                'subtitle' => esc_html__( 'Upload your mobile logo', 'finanix' ),
                'url'=> true                
            ),

            array(
                'id'       => 'mobile_logo_height',                               
                'title'    => esc_html__( 'Mobile Logo Height', 'finanix' ),
                'subtitle' => esc_html__( 'Mobile Logo max height example(20px)', 'finanix' ),
                'type'     => 'text',
                'default'  => ''                    
            ),    

            array(
            'id'       => 'rs_favicon',
            'type'     => 'media',
            'title'    => esc_html__( 'Upload Favicon', 'finanix' ),
            'subtitle' => esc_html__( 'Upload your faviocn here', 'finanix' ),
            'url'=> true            
            ),         
            
            array(
                'id'        => 'logo_bg_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Logo Area Background Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),    
                'default'   => '',                        
                'validate'  => 'color',                        
            ), 
        )
    )
    );
                                       
    //Topbar settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Topbar area', 'finanix' ),
        'desc'   => esc_html__( 'Topbar area Style Here', 'finanix' ),        
        'subsection' => false, 
        'icon' => 'el el-move',  
        'fields' => array(     
                           
                array(
                    'id'       => 'topbar_layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__('Topbar Layout', 'finanix'), 
                    'subtitle' => esc_html__('Select topbar layout. Choose between 1, 2, 3 or 4 layout.', 'finanix'),
                    'options'  => array(
                        'style1'   => array(
                            'alt'      =>  esc_html__('Topbar Style 1','finanix'),  
                            'img'      => get_template_directory_uri().'/libs/img/top_1.png'                    
                        ),                        
                        
                        'style2' => array(
                            'alt'    =>  esc_html__('Topbar Style 2','finanix'),  
                            'img'    => get_template_directory_uri().'/libs/img/top_2.png'                  
                        ),
                        'style3' => array(
                            'alt'    =>  esc_html__('Topbar Style 3','finanix'),  
                            'img'    => get_template_directory_uri().'/libs/img/top_3.png'                  
                        ),
                        
                        
                    ),
                    'default' => 'style1'
                ), 

                array(
                    'id'       => 'show-top',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Show Top Bar', 'finanix'),
                    'subtitle' => esc_html__('You can select top bar show or hide', 'finanix'),
                    'default'  => false,
                ),         
                
                array(
                    'id'       => 'show-social',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Show Social Icons', 'finanix'),
                    'subtitle' => esc_html__('You can select Social Icons show or hide', 'finanix'),
                    'default'  => true,
                ),

                array(
                    'id'       => 'welcome_sms',                               
                    'title'    => esc_html__( ' Welcome Message', 'finanix' ),
                    'subtitle' => esc_html__( 'Enter Welcome Message', 'finanix' ),
                    'type'     => 'text',     
                ),
                
                array(
                    'id'       => 'phone',                               
                    'title'    => esc_html__( ' Phone Number', 'finanix' ),
                    'subtitle' => esc_html__( 'Enter Phone Number', 'finanix' ),
                    'type'     => 'text',     
                ),

                array(
                    'id'       => 'free_consultancy',                               
                    'title'    => esc_html__( 'Free Consultancy Text', 'finanix' ),
                    'subtitle' => esc_html__( 'Enter Free Consultancy Text', 'finanix' ),
                    'type'     => 'text',     
                ),
                       
                array(
                    'id'       => 'top-email',                               
                    'title'    => esc_html__( 'Email Address', 'finanix' ),
                    'subtitle' => esc_html__( 'Enter Email Address', 'finanix' ),
                    'type'     => 'text',
                    'validate' => 'email',
                    'msg'      => esc_html__('Email Address Not Valid', 'finanix')  
                ),                

                array(
                    'id'        => 'toolbar_bg_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Topbar background Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#083D59',                        
                    'validate'  => 'color',                        
                ),    

                array(
                    'id'        => 'toolbar_text_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Topbar Text Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ), 

                 array(
                    'id'        => 'transparent_toolbar_text_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Transparent Topbar Text Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ),  

                array(
                    'id'        => 'toolbar_link_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Topbar Link Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ),                

                array(
                    'id'        => 'toolbar_link_hover_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Topbar Link Hover Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#FFA84B',                        
                    'validate'  => 'color',                        
                ),  

                 array(
                    'id'        => 'transparent_toolbar_link_hover_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Transparent Topbar Link Hover Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#cccccc',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'toolbar_borer_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Topbar Border Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#1A5676',                        
                    'validate'  => 'color', 
                    'output' => array(                 
                        'border-color' => '#reactheme-header .toolbar-area'
                    )                        
                ),

                array(
                    'id'        => 'toolbar_text_size',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Topbar Font Size','finanix'),
                    'subtitle'  => esc_html__('Font Size', 'finanix'),    
                    'default'   => '14px',                                            
                ),

                array(
                    'id'        => 'toolbar_btn_bg_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Topbar Button Bg Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ff5421',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'toolbar_btn_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Topbar Button Text Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'toolbar_icons_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Topbar Icon Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ),

                array(
                    'id'        => 'social_icons_colors',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Topbar Social Icon Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ),

                array(
                    'id'        => 'social_icons_hover_colors',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Topbar Social Icon Hover Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#FFA84B',                        
                    'validate'  => 'color',                        
                ),
                array(
                    'id'     => 'feed_area',
                    'type'   => 'info',
                    'notice' => true,
                    'style'  => 'success',
                    'title'  => esc_html__('Feed Area', 'finanix')            
                ), 
                
                array(
                    'id'        => 'feed_name',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Feed Name','finanix'),
                    'subtitle'  => esc_html__('Give Name For Your Feed Section', 'finanix'),    
                ),
                array(
                    'id'        => 'feed_name_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Feed Name Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '',                        
                    'validate'  => 'color',  
                    'output' => array(                 
                        'color' => '#reactheme-header .toolbar-area.toolbar-one .feed-container .feed-name'
                    )                       
                ),
                array(
                    'id'        => 'feed_title',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Feed Title','finanix'),
                    'subtitle'  => esc_html__('Give Title For Your Feed Section', 'finanix'),    
                ),
                 array(
                    'id'        => 'feed_title_name_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Feed title Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '',                        
                    'validate'  => 'color', 
                    'output' => array(                 
                        'color' => '#reactheme-header .toolbar-area.toolbar-one .feed-container .feed-posts'
                    )                        
                ),
                array(
                    'id'        => 'feed_link',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Feed Link','finanix'),
                    'subtitle'  => esc_html__('Give Link For Your Feed Section', 'finanix'),    
                ),
                
            )
        )
    );

    // -> START Header Section
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Header', 'finanix' ),
        'id'               => 'header',
        'customizer_width' => '450px',
        'icon' => 'el el-indent-left',      
        'fields'           => array(          
        array(
            'id'     => 'notice_critical',
            'type'   => 'info',
            'notice' => true,
            'style'  => 'success',
            'title'  => esc_html__('Header Area', 'finanix')            
        ),

        array(
            'id'               => 'header-grid',
            'type'             => 'select',
            'title'            => esc_html__('Header Area Width', 'finanix'),                  
           
            //Must provide key => value pairs for select options
            'options'          => array(
                'container' => esc_html__('Container', 'finanix'),
                'full'      => esc_html__('Container Fluid', 'finanix'),
            ),
            'default'          => 'container',           
        ),   

        array(
            'id'        => 'header_area_bg_color',
            'type'      => 'color',                       
            'title'     => esc_html__('Header Area Background Color','finanix'),
            'subtitle'  => esc_html__('Pick color', 'finanix'),    
            'default'   => '#083D59',                        
            'validate'  => 'color',                        
            'output' => array(                 
                'background' => '.menu-area'
            ) 
        ), 

        array(
            'id'       => 'address_top',                               
            'title'    => esc_html__( 'Address', 'finanix' ),
            'subtitle' => esc_html__( 'Enter Address', 'finanix' ),
            'type'     => 'textarea',
            
        ), 

        array(
            'id'       => 'opening_hour',                               
            'title'    => esc_html__( 'Opening Hour', 'finanix' ),
            'subtitle' => esc_html__( 'Enter opening and closing time', 'finanix' ),
            'type'     => 'textarea',            
        ), 

        array(
            'id'       => 'quote_btns',
            'type'     => 'switch', 
            'title'    => esc_html__('Show Quote Button', 'finanix'),
            'subtitle' => esc_html__('You can show or hide apply button', 'finanix'),
            'default'  => false,
        ),   

        array(
            'id'       => 'quote_bg',
            'type'     => 'media',
            'title'    => esc_html__( 'Quote Section BG', 'finanix' ),
            'subtitle' => esc_html__( 'Upload Quote Section BG', 'finanix' ),   
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),                
        ), 

        array(
            'id'       => 'quote_title',                               
            'title'    => esc_html__( 'Quote Title', 'finanix' ),                  
            'type'     => 'text',
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ), 
        ),

        array(
            'id'       => 'quote',                               
            'title'    => esc_html__( 'Button Text', 'finanix' ),                  
            'type'     => 'text',
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ), 
        ),  
        
        array(
            'id'       => 'quote_link',                               
            'title'    => esc_html__( 'Button Link', 'finanix' ),
            'subtitle' => esc_html__( 'Enter Button Link Here', 'finanix' ),
            'type'     => 'text',
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),
            
        ),       

        array(
            'id'       => 'off_search',
            'type'     => 'switch', 
            'title'    => esc_html__('Show Search', 'finanix'),
            'subtitle' => esc_html__('You can show or hide search icon at menu area', 'finanix'),
            'default'  => false,
        ),

        )
    ) 
);  
   

Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Header Layout', 'finanix' ),
'id'               => 'header-style',
'customizer_width' => '450px',
'subsection' => true,      
'fields'    => array( 
                    
                array(
                    'id'       => 'header_layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__('Header Layout', 'finanix'), 
                    'subtitle' => esc_html__('Select header layout. Choose between 1, 2 or 3 layout.', 'finanix'),
                    'options'  => array(
                    'style1'   => array(
                    'alt'      => esc_html__('Header Style 1','finanix'),  
                    'img'      => get_template_directory_uri().'/libs/img/style-2.jpg'                    
                    ),                        
                    'style2' => array(
                    'alt'    => esc_html__('Header Style 2','finanix'), 
                    'img'    => get_template_directory_uri().'/libs/img/style-1.jpg'
                    ),
                    'style3' => array(
                    'alt'    => esc_html__('Header Style 3','finanix'), 
                    'img'    => get_template_directory_uri().'/libs/img/style-3.jpg'
                    ),  
                    'style4' => array(
                    'alt'    => esc_html__('Header Style 4','finanix'), 
                    'img'    => get_template_directory_uri().'/libs/img/style-4.jpg'
                    ), 
                    'style5' => array(
                    'alt'    => esc_html__('Header Style 5','finanix'), 
                    'img'    => get_template_directory_uri().'/libs/img/style-5.jpg'
                    ), 
                    'style6' => array(
                    'alt'    => esc_html__('Header Style 6','finanix'), 
                    'img'    => get_template_directory_uri().'/libs/img/style-6.jpg'
                    ),                   
                   
                    ),
                    'default' => 'style1'
            ),                           
                
        )
    ) 
);

    //Menu settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Main Menu', 'finanix' ),
        'desc'   => esc_html__( 'Main Menu Style Here', 'finanix' ), 
        'icon' => 'el el-brush',       
        'subsection' => false,  
        'fields' => array( 

            array(
                'id'     => 'notice_critical_menu',
                'type'   => 'info',
                'notice' => true,
                'style'  => 'success',
                'title'  => esc_html__('Main Menu Settings', 'finanix'),                                           
            ),

            array(
                'id'       => 'main_menu_icon',
                'type'     => 'switch',
                'title'    => esc_html__( 'Main Menu Icon Hide', 'finanix' ),
                'on'       => esc_html__( 'Enabled', 'finanix' ),
                'off'      => esc_html__( 'Disabled', 'finanix' ),
                'default'  => false,
            ),

            array(
                'id'        => 'menu_area_bg_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Main Menu Background Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),    
                'default'   => '',                        
                'validate'  => 'color',                        
            ), 
            
            array(
                'id'        => 'menu_text_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Main Menu Text Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),    
                'default'   => '#083D59',                        
                'validate'  => 'color',                        
            ), 
            
            array(
                'id'        => 'transparent_menu_text_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Tranparent Menu Text Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),    
                'default'   => '#ffffff',                        
                'validate'  => 'color',                        
            ), 

            array(
                'id'        => 'transparent_menu_hover_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Tranparent Menu Hover Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),    
                'default'   => '#FFA84B',                        
                'validate'  => 'color',                        
            ),  

            array(
                'id'        => 'transparent_menu_active_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Tranparent Menu Active Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),    
                'default'   => '#FFA84B',                        
                'validate'  => 'color',                        
            ), 

            array(
                'id'        => 'menu_text_hover_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Main Menu Text Hover Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),           
                'default'   => '#FFA84B',                 
                'validate'  => 'color',                        
            ), 

            array(
                'id'        => 'menu_text_active_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Main Menu Text Active Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),
                'default'   => '#FFA84B',
                'validate'  => 'color',                        
            ),

         array(
                'id'        => 'menu_des_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Main Item Description Text Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),
                'default'   => '',
                'validate'  => 'color', 
                'output' => array(                 
                    'color'            => 'span.description'
                )                          
            ),

            array(
                'id'        => 'menu_item_gap',
                'type'      => 'text',                       
                'title'     => esc_html__('Menu Item Left Gap','finanix'),   
                'default'   => '0px',                             
            ), 

            array(
                'id'        => 'menu_item_gapd2',
                'type'      => 'text',                       
                'title'     => esc_html__('Menu Item Right Gap','finanix'),   
                'default'   => '12px',                             
            ), 
            
            array(
                'id'        => 'menu_item_gap2',
                'type'      => 'text',                       
                'title'     => esc_html__('Menu Item Top Gap','finanix'),   
                'default'   => '21px',                             
            ),                        

            array(
                'id'        => 'menu_item_gap3',
                'type'      => 'text',                       
                'title'     => esc_html__('Menu Item Bottom Gap','finanix'),   
                'default'   => '21px',                             
            ),

            array(
                'id'       => 'menu_text_trasform',
                'type'     => 'switch',
                'title'    => esc_html__( 'Menu Text Uppercase', 'finanix' ),
                'on'       => esc_html__( 'Enabled', 'finanix' ),
                'off'      => esc_html__( 'Disabled', 'finanix' ),
                'default'  => false,
            ),

            array(
                'id'     => 'notice_critical_dropmenu',
                'type'   => 'info',
                'notice' => true,
                'style'  => 'success',
                'title'  => esc_html__('Dropdown Menu Settings', 'finanix'),                                           
            ),
                                   
            array(
                'id'        => 'drop_down_bg_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Dropdown Menu Background Color','finanix'),
                'subtitle'  => esc_html__('Pick bg color', 'finanix'),
                'default'   => '#ffffff',
                'validate'  => 'color',                        
            ), 
            
            array(
                'id'        => 'drop_down_bdr_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Dropdown Menu Border Color','finanix'),
                'subtitle'  => esc_html__('Pick Border color', 'finanix'),
                'default'   => '#ffffff',
                'validate'  => 'color',                        
            ), 
            
            array(
                'id'        => 'drop_text_color',
                'type'      => 'color',                     
                'title'     => esc_html__('Dropdown Menu Text Color','finanix'),
                'subtitle'  => esc_html__('Pick text color', 'finanix'),
                'default'   => '#505050',
                'validate'  => 'color',                        
            ), 
            
            array(
                'id'        => 'drop_text_hover_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Dropdown Menu Hover Text Color','finanix'),
                'subtitle'  => esc_html__('Pick text color', 'finanix'),
                'default'   => '#FFA84B',
                'validate'  => 'color',                        
            ),                              
         

            array(
                'id'       => 'menu_text_trasform2',
                'type'     => 'switch',
                'title'    => esc_html__( 'Dropdown Menu Text Uppercase', 'finanix' ),
                'on'       => esc_html__( 'Enabled', 'finanix' ),
                'off'      => esc_html__( 'Disabled', 'finanix' ),
                'default'  => false,
            ),

            array(
                'id'       => 'drob_align_s',
                'type'     => 'switch',
                'title'    => esc_html__( 'Dropdown Menu 3rd Level Left Align', 'finanix' ),
                'on'       => esc_html__( 'Enabled', 'finanix' ),
                'off'      => esc_html__( 'Disabled', 'finanix' ),
                'default'  => false,
            ),

            array(
                 'id'        => 'dropdown_menu_item_gap',
                 'type'      => 'text',                       
                 'title'     => esc_html__('Dropdown Menu Item Left Right Gap','finanix'),   
                 'default'   => '40px',                             
             ), 

            array(
                 'id'        => 'dropdown_menu_item_separate',
                 'type'      => 'text',                       
                 'title'     => esc_html__('Dropdown Menu Item Middle Gap','finanix'),   
                 'default'   => '10px',                             
             ), 
             array(
                 'id'        => 'dropdown_menu_item_gap2',
                 'type'      => 'text',                       
                 'title'     => esc_html__('Dropdown Menu Boxes Top Bottom Gap','finanix'),   
                 'default'   => '21px',                             
             ),
             array(
                 'id'     => 'notice_critical3',
                 'type'   => 'info',
                 'notice' => true,
                 'style'  => 'success',
                 'title'  => esc_html__('Mega Menu Settings', 'finanix'),                                           
             ),

              array(
                'id'        => 'meaga_menu_item_gap',
                'type'      => 'text',                       
                'title'     => esc_html__('Mega Menu Item Left Right Gap','finanix'),   
                'default'   => '40px',                             
            ), 

             array(
                'id'        => 'mega_menu_item_separate',
                'type'      => 'text',                       
                'title'     => esc_html__('Mega Menu Item Middle Gap','finanix'),   
                'default'   => '10px',                             
            ),  
            array(
                'id'        => 'mega_menu_item_gap2',
                'type'      => 'text',                       
                'title'     => esc_html__('Mega Menu Boxes Top Bottom Gap','finanix'),   
                'default'   => '21px',                             
            ),                                 
        )
    )
); 

    //Sticky Menu settings
    Redux::setSection( $opt_name, array(
    'title'      => esc_html__( 'Sticky Menu', 'finanix' ),
    'desc'       => esc_html__( 'Sticky Menu Style Here', 'finanix' ),  
    'icon' => 'el el-brush',      
    'subsection' => false,  
    'fields' => array(                       

            array(
                'id'       => 'off_sticky',
                'type'     => 'switch', 
                'title'    => esc_html__('Sticky Menu', 'finanix'),
                'subtitle' => esc_html__('You can show or hide sticky menu here', 'finanix'),
                'default'  => false,
            ),

            array(
                'id'        => 'stiky_menu_area_bg_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Sticky Menu Area Background Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),    
                'default'   => '#ffffff',                        
                'validate'  => 'color',                        
            ), 
            
            array(
                'id'        => 'stikcy_menu_text_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Menu Text Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),    
                'default'   => '#083D59',                        
                'validate'  => 'color',                        
            ), 
           

            array(
                'id'        => 'sticky_menu_text_hover_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Menu Text Hover Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),           
                'default'   => '#FFA84B',                 
                'validate'  => 'color',                        
            ), 

            array(
                'id'        => 'stikcy_menu_text_active_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Main Menu Text Active Color','finanix'),
                'subtitle'  => esc_html__('Pick color', 'finanix'),
                'default'   => '#FFA84B',
                'validate'  => 'color',                        
            ),

            array(
                'id'        => 'stikcy_menu_font_size',
                'type'      => 'text',                       
                'title'    => __( 'Stikcy Menu Font Size', 'finanix' ),
                'subtitle' => __( 'Stikcy menu font size here ( 15px )', 'finanix' ),  
                'default'   => '',                                            
            ), 
                                   
            array(
                'id'        => 'sticky_drop_down_bg_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Dropdown Menu Background Color','finanix'),
                'subtitle'  => esc_html__('Pick bg color', 'finanix'),
                'default'   => '#fff',
                'validate'  => 'color',                        
            ), 
                
            
            array(
                'id'        => 'stikcy_drop_text_color',
                'type'      => 'color',                     
                'title'     => esc_html__('Dropdown Menu Text Color','finanix'),
                'subtitle'  => esc_html__('Pick text color', 'finanix'),
                'default'   => '#505050',
                'validate'  => 'color',                        
            ), 
            
            array(
                'id'        => 'sticky_drop_text_hover_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Dropdown Menu Hover Text Color','finanix'),
                'subtitle'  => esc_html__('Pick text color', 'finanix'),
                'default'   => '#FFA84B',
                'validate'  => 'color',                        
            ),  
            array(
                'id'        => 'stikcy_dropdown_menu_font_size',
                'type'      => 'text',                       
                'title'    => __( 'Stikcy Dropdown Menu Font Size', 'finanix' ),
                'subtitle' => __( 'Stikcy dropdown menu font size here ( 15px )', 'finanix' ),  
                'default'   => '',                                            
            ),                      
        )
    )
); 


  //Preloader settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Preloader Style', 'finanix' ),
        'desc'   => esc_html__( 'Preloader Style Here', 'finanix' ),               
        'fields' => array( 
                        array(
                            'id'       => 'show_preloader',
                            'type'     => 'switch', 
                            'title'    => esc_html__('Show Preloader', 'finanix'),
                            'subtitle' => esc_html__('You can show or hide preloader', 'finanix'),
                            'default'  => false,
                        ), 

                        array(
                            'id'        => 'preloader_bg_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Preloader Background Color','finanix'),
                            'subtitle'  => esc_html__('Pick color', 'finanix'),    
                            'default'   => '#083D59',                        
                            'validate'  => 'color',                        
                        ), 
                        
                     
                        array(
                            'id'        => 'preloader_animate_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Preloader Animate Circle Color','finanix'),
                            'subtitle'  => esc_html__('Pick color', 'finanix'),    
                            'default'   => '#FFA84B',                        
                            'validate'  => 'color',  
                            'output'    => array('background' => '#finanix-load .preloader span')                
                        ), 

                        array(
                            'id'    => 'preloader_img', 
                            'url'   => true,     
                            'title' => esc_html__( 'Preloader Image', 'finanix' ),                 
                            'type'  => 'media',                                  
                        ),       
                    )
                )
            ); 


               
//End Preloader settings  
    // -> START Style Section
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Style', 'finanix' ),
        'id'               => 'stle',
        'customizer_width' => '450px',
        'icon' => 'el el-brush',
        ));
    
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Global Style', 'finanix' ),
        'desc'   => esc_html__( 'Style your theme', 'finanix' ),        
        'subsection' => true,  
        'fields' => array( 
                        
                        array(
                            'id'        => 'body_bg_color',
                            'type'      => 'color',                           
                            'title'     => esc_html__('Body Backgroud Color','finanix'),
                            'subtitle'  => esc_html__('Pick body background color', 'finanix'),
                            'default'   => '#ffffff',
                            'validate'  => 'color',                        
                        ), 
                        
                        array(
                            'id'        => 'body_text_color',
                            'type'      => 'color',            
                            'title'     => esc_html__('Text Color','finanix'),
                            'subtitle'  => esc_html__('Pick text color', 'finanix'),
                            'default'   => '#777777',
                            'validate'  => 'color',                        
                        ),     
        
                        array(
                            'id'        => 'primary_color',
                            'type'      => 'color', 
                            'title'     => esc_html__('Primary Color','finanix'),
                            'subtitle'  => esc_html__('Select Primary Color.', 'finanix'),
                            'default'   => '#083D59',
                            'validate'  => 'color',                        
                        ), 

                        array(
                            'id'        => 'secondary_color',
                            'type'      => 'color', 
                            'title'     => esc_html__('Secondary Color','finanix'),
                            'subtitle'  => esc_html__('Select Secondary Color.', 'finanix'),
                            'default'   => '#FFA84B',
                            'validate'  => 'color',                        
                        ),

                        array(
                            'id'        => 'link_text_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Link Color','finanix'),
                            'subtitle'  => esc_html__('Pick Link color', 'finanix'),
                            'default'   => '#FFA84B',
                            'validate'  => 'color',                        
                        ),
                        
                        array(
                            'id'        => 'link_hover_text_color',
                            'type'      => 'color',                 
                            'title'     => esc_html__('Link Hover Color','finanix'),
                            'subtitle'  => esc_html__('Pick link hover color', 'finanix'),
                            'default'   => '#083D59',
                            'validate'  => 'color',                        
                        ),    
                       
                 ) 
            ) 
    ); 

    //Breadcrumb settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Breadcrumb Style', 'finanix' ),      
        'subsection' => true,  
        'fields' => array( 

                    array(
                        'id'       => 'off_breadcrumb',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Show off Breadcrumb', 'finanix'),
                        'subtitle' => esc_html__('You can show or hide off breadcrumb here', 'finanix'),
                        'default'  => true,
                    ),

                    array(
                        'id'       => 'align_breadcrumb',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Breadcrumb Align Left', 'finanix'),
                        'subtitle' => esc_html__('You can breadcrumb align left', 'finanix'),
                        'default'  => false,
                    ), 

                    array(
                        'id'        => 'breadcrumb_bg_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Background Color','finanix'),
                        'subtitle'  => esc_html__('Pick color', 'finanix'),    
                        'default'   => '#053148',                        
                        'validate'  => 'color',                        
                    ),                     

                     array(
                        'id'       => 'page_banner_main',
                        'type'     => 'media',
                        'title'    => esc_html__( 'Background Banner', 'finanix' ),
                        'subtitle' => esc_html__( 'Upload your banner', 'finanix' ),                  
                    ), 
                    
                    array(
                        'id'        => 'breadcrumb_title_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Title Color','finanix'),
                        'subtitle'  => esc_html__('Pick color', 'finanix'),    
                        'default'   => '#ffffff',                        
                        'validate'  => 'color',                        
                    ), 
                    
                    array(
                        'id'        => 'breadcrumb_text_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Text Color','finanix'),
                        'subtitle'  => esc_html__('Pick color', 'finanix'),    
                        'default'   => '#ffffff',                        
                        'validate'  => 'color', 
                          

                    ), 

                    array(
                        'id'        => 'breadcrumb_text_active_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Active Text Color','finanix'),
                        'subtitle'  => esc_html__('Pick color', 'finanix'),    
                        'default'   => '#ffa84b',                        
                        'validate'  => 'color', 
                        'output'    => array('color' => '.reactheme-breadcrumbs .breadcrumbs-title span.current-item'),                        
                    ), 
                    
                  
                    array(
                        'id'        => 'breadcrumb_top_gap',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Top Gap','finanix'),                          
                        'default'   => '170px',                        
                                            
                    ), 
                     array(
                        'id'        => 'breadcrumb_bottom_gap',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Bottom Gap','finanix'),                          
                        'default'   => '170px',                   
                    ), 
                    
                    array(
                        'id'        => 'mobile_breadcrumb_top_gap',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Mobile Top Gap','finanix'),                          
                        'default'   => '150px',                        
                                            
                    ), 
                     array(
                        'id'        => 'mobile_breadcrumb_bottom_gap',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Mobile Bottom Gap','finanix'),                          
                        'default'   => '100px',                   
                    ),     
                        
                )
            )
        );

    //Button settings
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Button Style', 'finanix' ),
        'desc'       => esc_html__( 'Button Style Here', 'finanix' ),        
        'subsection' => true,  
        'fields' => array( 

                    array(
                        'id'        => 'btn_bg_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Background Color','finanix'),
                        'subtitle'  => esc_html__('Pick color', 'finanix'),    
                        'default'   => '#FFA84B',                        
                        'validate'  => 'color',                        
                    ), 

                    array(
                        'id'        => 'btn_bg_hover',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Hover Background','finanix'),
                        'subtitle'  => esc_html__('Pick color', 'finanix'),    
                        'default'   => '#083D59',                        
                        'validate'  => 'color',                        
                    ), 

                    array(
                        'id'        => 'btn_bg_hover_border',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Hover Border Color','finanix'),
                        'subtitle'  => esc_html__('Pick color', 'finanix'),    
                        'default'   => '#083D59',                        
                        'validate'  => 'color',                        
                    ), 
                    
                    array(
                        'id'        => 'btn_text_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Text Color','finanix'),
                        'subtitle'  => esc_html__('Pick color', 'finanix'),    
                        'default'   => '#ffffff',                        
                        'validate'  => 'color',                        
                    ), 
                    
                    array(
                        'id'        => 'btn_txt_hover_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Hover Text Color','finanix'),
                        'subtitle'  => esc_html__('Pick color', 'finanix'),    
                        'default'   => '#ffffff',                        
                        'validate'  => 'color',                        
                    ),  
                )
            )
        );
    
    //offcanvas  settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Offcanvas Style', 'finanix' ),
        'desc'   => esc_html__( 'Offcanvas Style Here', 'finanix' ),        
        'icon'   => 'el el-align-justify',
        'fields' => array( 

                array(
                    'id'       => 'off_canvas',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Show off Canvas', 'finanix'),
                    'subtitle' => esc_html__('You can show or hide off canvas here', 'finanix'),
                    'default'  => false,
                ),

                array(
                    'id'       => 'offcanvas_logo',
                    'type'     => 'media',
                    'title'    => esc_html__( 'Offcanvas Logo', 'finanix' ),
                    'subtitle' => esc_html__( 'Upload your  logo', 'finanix' ),                  
                ), 

             
                array(
                    'id'       => 'offcanvas_logo_height',                               
                    'title'    => esc_html__( 'Logo Height', 'finanix' ),
                    'subtitle' => esc_html__( 'Logo max height example(50px)', 'finanix' ),
                    'type'     => 'text',
                    'default'  => '30px'                    
                ),

                array(
                    'id'        => 'offcan_bgs_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Background Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#083D59',                        
                    'validate'  => 'color',                        
                ),  

                array(
                    'id'        => 'offcan_text_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Text Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ),                 

                array(
                    'id'        => 'offcan_title_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Title Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'offcan_link_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Link  Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ),

                array(
                    'id'        => 'offcan_link_hover_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Link Hover Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#FFA84B',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'offcan_border_color',
                    'type'      => 'color_rgba',                       
                    'title'     => esc_html__('Seperator Border Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),   
                      
                    'default'  => array(
		                'color'     => '#164964',
		                'alpha'     => 1	                
            		),
				    'output' => array(				   
				    'border-color'            => '.sidenav .widget,
						body .sidenav #mobile_menu .widget_nav_menu ul li a'
					)
                ),                 

                array(
                    'id'        => 'offcanvas_icon_bgs_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Icon Bg Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ),    

                array(
                    'id'        => 'offcanvas_icon_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Icon Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#083D59',                        
                    'validate'  => 'color',                        
                ), 

          
                array(
                    'id'        => 'offcanvas_close_bg_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Close Icon Bg Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#FFA84B',                        
                    'validate'  => 'color',                        
                ),

                array(
                    'id'        => 'offcanvas_close_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Close Icon Color','finanix'),
                    'subtitle'  => esc_html__('Pick color', 'finanix'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ),   
            )
        )
    );
    
    //Mobile settings
    Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Mobile Settings', 'finanix' ),
    'id'               => 'mobilestle',
    'customizer_width' => '450px',
    'icon' => 'el el-iphone-home',
    ));

    Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Header Settings', 'finanix' ),
    'desc'   => esc_html__( 'Header Settings Here', 'finanix' ),        
    'subsection' => true,
    'fields' => array(  

                array(
                    'id'       => 'mobile_top_bar',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Topbar Hide On Mobile', 'finanix'),
                    'subtitle' => esc_html__('You can show or hide On Mobile', 'finanix'),
                    'default'  => false,
                ),

                array(
                    'id'       => 'mobile_off_cart',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Cart Hide On Mobile', 'finanix'),
                    'subtitle' => esc_html__('You can show or hide On Mobile', 'finanix'),
                    'default'  => false,
                ),
                array(
                    'id'       => 'mobile_off_search',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Search Hide On Mobile', 'finanix'),
                    'subtitle' => esc_html__('You can show or hide On Mobile', 'finanix'),
                    'default'  => false,
                ), 
                array(
                    'id'       => 'mobile_off_button',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Quote Button Hide On Mobile', 'finanix'),
                    'subtitle' => esc_html__('You can show or hide On Mobile', 'finanix'),
                    'default'  => false,
                ),
            )
        )
    ); 

    //-> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Typography', 'finanix' ),
        'id'     => 'typography',
        'desc'   => esc_html__( 'You can specify your body and heading font here','finanix'),
        'icon'   => 'el el-font',
        'fields' => array(
            array(
                'id'       => 'opt-typography-body',
                'type'     => 'typography',
                'title'    => esc_html__( 'Body Font', 'finanix' ),
                'subtitle' => esc_html__( 'Specify the body font properties.', 'finanix' ),
                'google'   => true, 
                'font-style' =>false,           
                'default'  => array(                    
                    'font-size'   => '16px',
                    'font-family' => 'Rubik',
                    'font-weight' => '400',
                ),
            ),
             array(
                'id'       => 'opt-typography-menu',
                'type'     => 'typography',
                'title'    => esc_html__( 'Navigation Font', 'finanix' ),
                'subtitle' => esc_html__( 'Specify the menu font properties.', 'finanix' ),
                'google'   => true,
                'font-backup' => true,                
                'all_styles'  => true,              
                'default'  => array(
                    'color'       => '',                    
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '15px',                    
                    'font-weight' => '500',                    
                ),
            ),
            array(
                'id'          => 'opt-typography-h1',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H1', 'finanix' ),
                'font-backup' => true,                
                'all_styles'  => true,
                'units'       => 'px',
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'finanix' ),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '46px',
                    'line-height' => '56px'
                    
                    ),
                ),
            array(
                'id'          => 'opt-typography-h2',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H2', 'finanix' ),
                'font-backup' => true,                
                'all_styles'  => true,                 
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'finanix' ),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '36px',
                    'line-height' => '46px'
                    
                ),
                ),
            array(
                'id'          => 'opt-typography-h3',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H3', 'finanix' ),             
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'finanix' ),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '28px',
                    'line-height' => '32px'
                    
                    ),
                ),
            array(
                'id'          => 'opt-typography-h4',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H4', 'finanix' ),                
                'font-backup' => false,                
                'all_styles'  => true,               
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'finanix' ),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '20px',
                    'line-height' => '28px'
                    ),
                ),
            array(
                'id'          => 'opt-typography-h5',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H5', 'finanix' ),                
                'font-backup' => false,                
                'all_styles'  => true,                
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'finanix' ),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '18px',
                    'line-height' => '26px'
                    ),
                ),
            array(
                'id'          => 'opt-typography-6',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H6', 'finanix' ),
             
                'font-backup' => false,                
                'all_styles'  => true,                
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'finanix' ),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '20px'
                ),
            ),
                
        )
    )                    
   
);

    /*Blog Sections*/
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Blog', 'finanix' ),
        'id'               => 'blog',
        'customizer_width' => '450px',
        'icon' => 'el el-comment',
        )
    );
        
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Blog Settings', 'finanix' ),
        'id'               => 'blog-settings',
        'subsection'       => true,
        'customizer_width' => '450px',      
        'fields'           => array(
                array(
                    'id'    => 'blog_banner_main', 
                    'url'   => true,     
                    'title' => esc_html__( 'Blog Page Banner', 'finanix' ),                 
                    'type'  => 'media',                                  
                ),  

                array(
                    'id'        => 'blog_bg_color',
                    'type'      => 'color',                           
                    'title'     => esc_html__('Body Backgroud Color','finanix'),
                    'subtitle'  => esc_html__('Pick body background color', 'finanix'),
                    'default'   => '#fbfbfb',
                    'validate'  => 'color',                        
                ),
                
                array(
                    'id'       => 'blog_title',                               
                    'title'    => esc_html__( 'Blog  Title', 'finanix' ),
                    'subtitle' => esc_html__( 'Enter Blog  Title Here', 'finanix' ),
                    'type'     => 'text',                                   
                ),
                
                array(
                    'id'               => 'blog-layout',
                    'type'             => 'image_select',
                    'title'            => esc_html__('Select Blog Layout', 'finanix'), 
                    'subtitle'         => esc_html__('Select your blog layout', 'finanix'),
                    'options'          => array(
                    'full'             => array(
                        'alt'              => esc_html__('Blog Style 1', 'finanix'), 
                        'img'              => get_template_directory_uri().'/libs/img/1c.png'          
                    ),
                    '2right'           => array(
                        'alt'              => esc_html__('Blog Style 2', 'finanix'), 
                        'img'              => get_template_directory_uri().'/libs/img/2cr.png'
                    ),
                    '2left'            => array(
                        'alt'              => esc_html__('Blog Style 3', 'finanix'), 
                        'img'              => get_template_directory_uri().'/libs/img/2cl.png'
                        ),                                  
                    ),
                    'default'          => '2right'
                ),                      
                
                array(
                    'id'               => 'blog-grid',
                    'type'             => 'select',
                    'title'            => esc_html__('Select Blog Gird', 'finanix'),                   
                    'desc'             => esc_html__('Select your blog gird layout', 'finanix'),
                //Must provide key => value pairs for select options
                'options'          => array(
                    '12'               => esc_html__('1 Column','finanix'),                                   
                    '6'                => esc_html__('2 Column', 'finanix'),                                         
                    '4'                => esc_html__('3 Column', 'finanix'),
                    '3'                => esc_html__('4 Column', 'finanix'),
                    ),
                    'default'          => '12',                                  
                ),  
                
                array(
                'id'               => 'blog-author-post',
                'type'             => 'select',
                'title'            => esc_html__('Show Author Info ', 'finanix'),                   
                'desc'             => esc_html__('Select author info show or hide', 'finanix'),
                //Must provide key => value pairs for select options
                'options'          => array(                                            
                'show'             => esc_html__('Show','finanix'), 
                'hide'             => esc_html__('Hide', 'finanix'),
                ),
                'default'          => 'show',
                
                ), 

                

                array(
                'id'               => 'blog-category',
                'type'             => 'select',
                'title'            => esc_html__('Show Category', 'finanix'),                   
               
                //Must provide key => value pairs for select options
                'options'          => array(                                            
                'show'             => esc_html__('Show','finanix'), 
                'hide'             => esc_html__('Hide', 'finanix'),
                ),
                'default'          => 'show',
                
                ), 
                
                array(
                    'id'               => 'blog-date',
                    'type'             => 'switch',
                    'title'            => esc_html__('Show Date', 'finanix'),                   
                    'desc'             => esc_html__('You can show/hide date at blog page', 'finanix'),
                    
                    'default'          => true,
                ), 
                array(
                    'id'               => 'blog_readmore',                               
                    'title'            => esc_html__( 'Blog  ReadMore Text', 'finanix' ),
                    'subtitle'         => esc_html__( 'Enter Blog  ReadMore Here', 'finanix' ),
                    'type'             => 'text',                                   
                ),
                
            )
        ) 
                
    );
    
    
    /*Single Post Sections*/
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Single Post', 'finanix' ),
        'id'               => 'spost',
        'subsection'       => true,
        'customizer_width' => '450px',      
        'fields'           => array(                            
        
                            array(
                                    'id'       => 'blog_banner', 
                                    'url'      => true,     
                                    'title'    => esc_html__( 'Blog Single page banner', 'finanix' ),                  
                                    'type'     => 'media',
                                    
                            ),  
                           
                            array(
                                    'id'       => 'blog-comments',
                                    'type'     => 'select',
                                    'title'    => esc_html__('Show Comment', 'finanix'),                   
                                    'desc'     => esc_html__('Select comments show or hide', 'finanix'),
                                     //Must provide key => value pairs for select options
                                    'options'  => array(                                            
                                            'show' => esc_html__('Show', 'finanix'),
                                            'hide' => esc_html__('Hide', 'finanix'),
                                            ),
                                        'default'  => 'show',
                                        
                            ),  
                            
                            array(
                                    'id'       => 'blog-author',
                                    'type'     => 'select',
                                    'title'    => esc_html__('Show Ahthor Info', 'finanix'),                   
                                    'desc'     => esc_html__('Select author info show or hide', 'finanix'),
                                     //Must provide key => value pairs for select options
                                    'options'  => array(                                            
                                            'show' => esc_html__('Show', 'finanix'),
                                            'hide' => esc_html__('Hide', 'finanix'),
                                        ),
                                    'default'  => 'show',
                                        
                            ),  
                              
                        )
                ) 
    
    
    );

  
    /*Team Sections*/
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Team Section', 'finanix' ),
        'id'               => 'team',
        'customizer_width' => '450px',
        'icon' => 'el el-user',
        'fields'           => array(
        
            array(
                    'id'       => 'team_single_image', 
                    'url'      => true,     
                    'title'    => esc_html__( 'Team Single page banner image', 'finanix' ),                    
                    'type'     => 'media',
                    
            ),  

             array(
                    'id'        => 'team_single_bg_color',
                    'type'      => 'color',                           
                    'title'     => esc_html__('Sinlge Team Body Backgroud Color','finanix'),
                    'subtitle'  => esc_html__('Pick body background color', 'finanix'),
                    'default'   => '#fff',
                    'validate'  => 'color',                        
                ),
            
            array(
                    'id'       => 'team_slug',                               
                    'title'    => esc_html__( 'Team Slug', 'finanix' ),
                    'subtitle' => esc_html__( 'Enter Team Slug Here', 'finanix' ),
                    'type'     => 'text',
                    'default'  => esc_html__('teams', 'finanix'),
                    
                ),      
                
                          
             )
         ) 
    );
    
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Portfolio Section', 'finanix' ),
        'id'               => 'Portfolio',
        'customizer_width' => '450px',
        'icon' => 'el el-align-right',
        'fields'           => array(
        
            array(
                    'id'       => 'department_single_image', 
                    'url'      => true,     
                    'title'    => esc_html__( 'Portfolio Single page banner image', 'finanix' ),                    
                    'type'     => 'media',
                    
            ),  

             array(
                    'id'       => 'portfolio_slug',                               
                    'title'    => esc_html__( 'Portfolio Slug', 'finanix' ),
                    'subtitle' => esc_html__( 'Enter Portfolio Slug Here', 'finanix' ),
                    'type'     => 'text',
                    'default'  => 'rt-portfolios',
                    
                ), 
            )
         ) 
    );

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Social Icons', 'finanix' ),
        'desc'   => esc_html__( 'Add your social icon here', 'finanix' ),
        'icon'   => 'el el-share',
         'submenu' => true, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields' => array(
                    array(
                        'id'       => 'facebook',                               
                        'title'    => esc_html__( 'Facebook Link', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter Facebook Link', 'finanix' ),
                        'type'     => 'text',                     
                    ),
                        
                     array(
                        'id'       => 'twitter',                               
                        'title'    => esc_html__( 'Twitter Link', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter Twitter Link', 'finanix' ),
                        'type'     => 'text'
                    ),
                    
                        array(
                        'id'       => 'rss',                               
                        'title'    => esc_html__( 'Rss Link', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter Rss Link', 'finanix' ),
                        'type'     => 'text'
                    ),
                    
                     array(
                        'id'       => 'pinterest',                               
                        'title'    => esc_html__( 'Pinterest Link', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter Pinterest Link', 'finanix' ),
                        'type'     => 'text'
                    ),
                     array(
                        'id'       => 'linkedin',                               
                        'title'    => esc_html__( 'Linkedin Link', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter Linkedin Link', 'finanix' ),
                        'type'     => 'text',
                        
                    ),
                     array(
                        'id'       => 'google',                               
                        'title'    => esc_html__( 'Google Plus Link', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter Google Plus  Link', 'finanix' ),
                        'type'     => 'text',                       
                    ),

                    array(
                        'id'       => 'instagram',                               
                        'title'    => esc_html__( 'Instagram Link', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter Instagram Link', 'finanix' ),
                        'type'     => 'text',                       
                    ),

                     array(
                        'id'       => 'youtube',                               
                        'title'    => esc_html__( 'Youtube Link', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter Youtube Link', 'finanix' ),
                        'type'     => 'text',                       
                    ),

                    array(
                        'id'       => 'tumblr',                               
                        'title'    => esc_html__( 'Tumblr Link', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter Tumblr Link', 'finanix' ),
                        'type'     => 'text',                       
                    ),

                    array(
                        'id'       => 'vimeo',                               
                        'title'    => esc_html__( 'Vimeo Link', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter Vimeo Link', 'finanix' ),
                        'type'     => 'text',                       
                    ),         
            ) 
        ) 
    );

    if ( class_exists( 'WooCommerce' ) ) {
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Woocommerce', 'finanix' ),    
        'icon'   => 'el el-shopping-cart',    
        ) 
    ); 

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Shop', 'finanix' ),
        'id'               => 'shop_layout',
        'customizer_width' => '450px',
        'subsection' => true,      
        'fields'           => array(                      
            array(
                'id'       => 'shop_banner', 
                'url'      => true,     
                'title'    => esc_html__( 'Shop page banner', 'finanix' ),                    
                'type'     => 'media',
            ), 
            array(
                    'id'       => 'shop-layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__('Select Shop Layout', 'finanix'), 
                    'subtitle' => esc_html__('Select your shop layout', 'finanix'),
                    'options'  => array(
                        'full'      => array(
                            'alt'   => esc_html__('Shop Style 1','finanix'),
                            'img'   => get_template_directory_uri().'/libs/img/1c.png'                                      
                        ),
                        'right-col' => array(
                            'alt'   => esc_html__('Shop Style 2','finanix'), 
                            'img'   => get_template_directory_uri().'/libs/img/2cr.png'
                        ),
                        'left-col'  => array(
                            'alt'   => esc_html__('Shop Style 3','finanix'), 
                            'img'   => get_template_directory_uri().'/libs/img/2cl.png'
                        ),                                  
                    ),
                    'default' => 'full'
                ),

                array(
                    'id'       => 'wc_num_product',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Number of Products Per Page', 'finanix' ),
                    'default'  => '9',
                ),

                array(
                    'id'       => 'wc_num_product_per_row',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Number of Products Per Row', 'finanix' ),
                    'default'  => '3',
                ),

                array(
                    'id'       => 'wc_cart_icon',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Cart Icon Show At Menu Area', 'finanix' ),
                    'on'       => esc_html__( 'Enabled', 'finanix' ),
                    'off'      => esc_html__( 'Disabled', 'finanix' ),
                    'default'  => false,
                ), 

                 array(
                'id'       => 'disable-sidebar',
                'type'     => 'switch', 
                'title'    => esc_html__('Sidebar Disable For Single Product Page', 'finanix'),                
                'default'  => true,
            ), 
               
            )
        ) 
    );
}




    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Event Section', 'finanix' ),
        'id'               => 'event',
        'customizer_width' => '450px',
        'icon' => 'el el-camera',
        'fields'           => array(
             array(
                'id'    => 'event_banner_main', 
                'url'   => true,     
                'title' => esc_html__( 'Event Main Page Banner', 'finanix' ),                 
                'type'  => 'media',                                  
            ),  
            array(
                'id'       => 'event_single_image', 
                'url'      => true,     
                'title'    => esc_html__( 'Event Single page banner image', 'finanix' ),                   
                'type'     => 'media', 
            ),  

            array(
                'id'        => 'event_title_font_size',
                'type'      => 'text',                       
                'title'    => __( 'Event Page Title Font Size', 'finanix' ),
                'subtitle' => __( 'Event page title font here', 'finanix' ),  
                'default'   => '',                                            
            ), 

            
            array(
                'id'       => 'date_style',
                'type'     => 'select',
                'title'    => esc_html__('Select Event Date Format', 'finanix'),                  
                'desc'     => esc_html__('Choose event date format', 'finanix'),
                'options'  => array(                                            
                        'style1' => 'mm / dd / yyyy',
                        'style2' => 'dd / mm / yyyy'
                        ),
                    'default'  => 'style1',    
            ),
            array(
                'id'       => 'time_style',
                'type'     => 'select',
                'title'    => esc_html__('Select Event Time Format', 'finanix'),                  
                'desc'     => esc_html__('Choose event time format', 'finanix'),
                'options'  => array(                                            
                        'style1' => '12 Hours clock',
                        'style2' => '24 Hours Clock'
                        ),
                    'default'  => 'style1',    
            ),
     
            array(
                'id'       => 'event_btn',                               
                'title'    => __( 'BooK Now', 'finanix' ),
                'subtitle' => __( 'Event book now here', 'finanix' ),
                'type'     => 'text',
                'default'  => 'Book Now', 
                
            ),
        )
    ));
     Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Footer Option', 'finanix' ),
    'desc'   => esc_html__( 'Footer style here', 'finanix' ),
    'subsection' => false, 
    'icon'   => 'el el-th-large',   
    'fields' => array(

                array(
                    'id'               => 'footer_style',
                    'type'             => 'select',
                    'title'            => esc_html__('Select Footer Style', 'finanix'),             
                    'options'          => array(
                        'style1' => esc_html__( 'Style 1', 'finanix' ),
                        'style2'    =>  esc_html__( 'Style 2', 'finanix' ), 
                        'style3'    =>  esc_html__( 'Style 3', 'finanix' ),                       
                    ),
                    'default'          => 'style1',            
                ),
                array(
                    'id'       => 'footer_bg_image', 
                    'url'      => true,     
                    'title'    => esc_html__( 'Footer Background Image', 'finanix' ),                 
                    'type'     => 'media',                                  
                ),

                array(
                    'id'               => 'background_position',
                    'type'             => 'select',
                    'title'            => esc_html__('Background Position', 'finanix'),             
                    'options'          => array(
                        'center center' => esc_html__( 'Center Center', 'finanix' ),
                        'center top'    =>  esc_html__( 'Center Top', 'finanix' ),          
                        'center bottom' =>  esc_html__( 'Center Bottom', 'finanix' ),           
                        'left top'      =>  esc_html__( 'Left Top', 'finanix' ),            
                        'left bottom'   =>  esc_html__( 'Left Bottom', 'finanix' ),         
                        'right top'     =>  esc_html__( 'Right Top', 'finanix' ),           
                        'right bottom'  =>  esc_html__( 'Right Bottom', 'finanix' ),
                    ),

                    'default'          => 'center bottom',            
                ),

                array(
                    'id'               => 'background_repeat',
                    'type'             => 'select',
                    'title'            => esc_html__('Background Repeat', 'finanix'),             
                    'options'          => array(
                        'repeat'    => esc_html__( 'Repeat', 'finanix' ),
                        'no-repeat' =>  esc_html__( 'No Repeat', 'finanix' ),            
                        'repeat-x'  =>  esc_html__( 'Repeat X', 'finanix' ),         
                        'repeat-y'  =>  esc_html__( 'Repeat Y', 'finanix' ),
                    ),

                    'default'          => 'no-repeat',            
                ),

                array(
                    'id'               => 'background_size',
                    'type'             => 'select',
                    'title'            => esc_html__('Background Size', 'finanix'),             
                    'options'          => array(
                        'auto'    => esc_html__( 'Auto', 'finanix' ),
                        'contain' =>  esc_html__( 'Contain', 'finanix' ),            
                        'cover'   =>  esc_html__( 'Cover', 'finanix' ),   
                        '100%'    =>  esc_html__( '100%', 'finanix' ),   
                    ),

                    'default'          => 'cover',            
                ),

                array(
                        'id'        => 'footer_bg_color',
                        'type'      => 'color',
                        'title'     => esc_html__('Footer Bg Color','finanix'),
                        'subtitle'  => esc_html__('Pick color.', 'finanix'),
                        'default'   => '#083D59',
                        'validate'  => 'color',                        
                    ),  

                array(
                    'id'               => 'header_grid2',
                    'type'             => 'select',
                    'title'            => esc_html__('Footer Area Width', 'finanix'),                  
                    'options'          => array(                  
                    
                        'container' => esc_html__('Container', 'finanix'),
                        'full'      => esc_html__('Container Fluid', 'finanix')
                    ),

                    'default'          => 'container',            
                ),

                array(
                    'id'       => 'footer_logo',
                    'type'     => 'media',
                    'title'    => esc_html__( 'Footer Logo', 'finanix' ),
                    'subtitle' => esc_html__( 'Upload your footer logo', 'finanix' ),                  
                ), 

             
                array(
                    'id'       => 'footer-logo-height',                               
                    'title'    => esc_html__( 'Logo Height', 'finanix' ),
                    'subtitle' => esc_html__( 'Logo max height example(50px)', 'finanix' ),
                    'type'     => 'text',
                    'default'  => '30px'                    
                ),                                  
  
                array(
                    'id'        => 'footer_aicons_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer All Icon Color','finanix'),
                    'subtitle'  => esc_html__('Pick color.', 'finanix'),
                    'default'   => '#ffffff',
                    'validate'  => 'color',                        
                ), 


                array(
                    'id'        => 'foot_social_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon Color','finanix'),
                    'subtitle'  => esc_html__('Pick color.', 'finanix'),
                    'default'   => '#ffffff',
                    'validate'  => 'color',                        
                ),  

                array(
                    'id'        => 'foot_social_bg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon Bg Color','finanix'),
                    'subtitle'  => esc_html__('Pick color.', 'finanix'),
                    'default'   => '',
                    'validate'  => 'color',   
                    'output' => array(                 
                        'background' => 'ul.footer_social li a'
                    )                       
                ),                

                array(
                    'id'        => 'foot_social_hover',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon Hover','finanix'),
                    'subtitle'  => esc_html__('Pick color.', 'finanix'),
                    'default'   => '#eee',
                    'validate'  => 'color',                        
                ),  

                 array(
                    'id'        => 'foot_social_bg_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon Bg Hover Color','finanix'),
                    'subtitle'  => esc_html__('Pick color.', 'finanix'),
                    'default'   => '',
                    'validate'  => 'color',   
                    'output' => array(                 
                        'background' => 'ul.footer_social li a:hover'
                    )                       
                ),     

                array(
                    'id'        => 'footer_text_size',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Footer Font Size','finanix'),
                    'subtitle'  => esc_html__('Font Size', 'finanix'),    
                    'default'   => '16px',                                            
                ),  

                array(
                    'id'        => 'footer_h3_size',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Footer Title Font Size','finanix'),
                    'subtitle'  => esc_html__('Font Size', 'finanix'),    
                    'default'   => '18px',                                            
                ),  

                array(
                    'id'        => 'footer_link_size',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Footer Link Font Size','finanix'),
                    'subtitle'  => esc_html__('Font Size', 'finanix'),    
                    'default'   => '',                                            
                ), 
                array(
                    'id'        => 'footer_title_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer Title Color','finanix'),
                    'subtitle'  => esc_html__('Pick color.', 'finanix'),
                    'default'   => '#e0e0e0',
                    'validate'  => 'color',                        
                ),   

                array(
                    'id'        => 'footer_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer Text Color','finanix'),
                    'subtitle'  => esc_html__('Pick color.', 'finanix'),
                    'default'   => '#fff',
                    'validate'  => 'color',                        
                ),  

                array(
                    'id'        => 'footer_link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer Link Hover Color','finanix'),
                    'subtitle'  => esc_html__('Pick color.', 'finanix'),
                    'default'   => '#ff5421',
                    'validate'  => 'color',                        
                ),                  
                
                array(
                    'id'       => 'copyright',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'Footer CopyRight', 'finanix' ),
                    'subtitle' => esc_html__( 'Add/Edit copyright text', 'finanix' ),
                    'default'  => esc_html__( '2022 All Rights Reserved', 'finanix' ),
                ),  

                array(
                    'id'       => 'copyright_bg',
                    'type'     => 'color',
                    'title'    => esc_html__( 'Copyright Background', 'finanix' ),
                    'subtitle' => esc_html__( 'Copyright Background Color', 'finanix' ),      
                    'default'  => '',            
                ),
                array(
                    'id'       => 'copyright_borders',
                    'type'     => 'color',
                    'title'    => esc_html__( 'Copyright Border Color', 'finanix' ),
                    'subtitle' => esc_html__( 'Copyright Border Color', 'finanix' ),      
                    'default'  => '',            
                ),
                array(
                    'id'       => 'copyright_text_color',
                    'type'     => 'color',
                    'title'    => esc_html__( 'Copyright Text Color', 'finanix' ),
                    'subtitle' => esc_html__( 'Copyright Text Color', 'finanix' ),      
                    'default'  => '#e0e0e0',            
                ), 
            ) 
        ) 
    );

Redux::setSection( $opt_name, array(
    'title'  => esc_html__( '404 Error Page', 'finanix' ),
    'desc'   => esc_html__( '404 details  here', 'finanix' ),
    'icon'   => 'el el-error-alt',    
    'fields' => array(

                array(
                        'id'       => 'title_404',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Title', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter title for 404 page', 'finanix' ), 
                        'default'  => esc_html__('404', 'finanix')                
                    ),  
                
                array(
                        'id'       => 'text_404',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Text', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter text for 404 page', 'finanix' ),  
                        'default'  => esc_html__('Page Not Found', 'finanix')             
                    ),                      
                       
                
                array(
                        'id'       => 'back_home',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Back to Home Button Label', 'finanix' ),
                        'subtitle' => esc_html__( 'Enter label for "Back to Home" button', 'finanix' ),
                        'default'  => esc_html__('Back to Homepage', 'finanix')  
                                    
                    ),                             
                array(
                        'id'       => '404_bg',
                        'type'     => 'media',
                        'title'    => esc_html__( '404 page Image', 'finanix' ),
                        'subtitle' => esc_html__( 'Upload your image', 'finanix' ),
                        'url'=> true                
                    ), 
            
                                  
            ) 
        ) 
    );   


    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";           
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.     
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => esc_html__( 'Section via hook', 'finanix' ),
                'desc'   => esc_html__( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'finanix' ),
                'icon'   => 'el el-paper-clip',              
                'fields' => array()
            );
            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';
            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_action( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );              
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }