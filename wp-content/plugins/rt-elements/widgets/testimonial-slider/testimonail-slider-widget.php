<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;

use Elementor\Group_Control_Background;
defined( 'ABSPATH' ) || die();
class ReacTheme_Testimonial_Slider_Widget extends \Elementor\Widget_Base {
    /**
     * Get widget name.
     *
     * Retrieve rsgallery widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'rt-testimonial-slider';
    }       

    /**
     * Get widget title.
     *
     * Retrieve rsgallery widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__( 'RT Testimonial Slider', 'rtelements' );
    }

    /**
     * Get widget icon.
     *
     * Retrieve rsgallery widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'glyph-icon flaticon-slider-2';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the rsgallery widget belongs to.
     *
     * @since 1.0.0
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'pielements_category' ];
    }

    /**
     * Register rsgallery widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Content', 'rtelements' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'style',
            [
                'label' => esc_html__( 'Choose Style', 'rtelements' ),
                'type'  => Controls_Manager::SELECT,
                'label_block' => false,
                'options' => [
                    'style1'  => esc_html__( 'Style 1', 'rtelements' ),
                    'style2' => esc_html__( 'Style 2', 'rtelements' ),
                ],
                'default' => 'style1',
                
            ]
        );

        $this->add_control(
            'per_page',
            [
                'label' => esc_html__( 'Testimonial Show Per Page', 'rtelements' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( '5', 'rtelements' ),
                'separator' => 'before',
            ]
        );   
        
        

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'large',
                'separator' => 'before',
                'exclude' => [
                    'custom'
                ],
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'align',
            [
                'label' => esc_html__( 'Alignment', 'rtelements' ),
                'type' => Controls_Manager::CHOOSE,
                'label_block' => false,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'rtelements' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'rtelements' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'rtelements' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                   
                ],
                'toggle' => false,
                'default' => 'left',
                'prefix_class' => 'reactheme-testimonial--',
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial' => 'text-align: {{VALUE}}'
                ]
               
            ]
        );

        $this->add_control(
            '_design',
            [
                'label' => esc_html__( 'Design', 'rtelements' ),
                'type'  => Controls_Manager::SELECT,
                'label_block' => false,
                'options' => [
                    'basic'  => esc_html__( 'Default', 'rtelements' ),
                    'bubble' => esc_html__( 'Bubble', 'rtelements' ),
                ],
                'default' => 'bubble',
                
            ]
        );


        $this->add_responsive_control(
            'bubble_position',
            [
                'label' => esc_html__( 'Bubble Position', 'rtelements' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item .item-content.bubble:after' => 'left: {{SIZE}}%;',                    
                    '{{WRAPPER}} .reactheme-testimonial--center .item-content.bubble:after'           => 'left: {{SIZE}}%;',                    
                    '{{WRAPPER}} .reactheme-testimonial--right .item-content.bubble:after'            => 'left: {{SIZE}}%;',                    
                ],

                'condition' => [
                    '_design' => 'bubble'
                ]
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => esc_html__( 'Quote Icon', 'rtelements' ),
                'type' => Controls_Manager::ICON,
                'default' => 'quote-right',                
            ]
        );

		$this->add_control(
			'quote_image_icon',
			[
				'label' => esc_html__( 'Choose Quote Icon Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->end_controls_section();

         $this->start_controls_section(
            '_section_ratings',
            [
                'label' => esc_html__( 'Ratings', 'rtelements' ),
            ]
        );

        $this->add_control(
            'show_ratings',
            [
                'label'        => esc_html__( 'Show', 'rtelements' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Show', 'rtelements' ),
                'label_off'    => esc_html__( 'Hide', 'rtelements' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        $this->add_responsive_control(
            'rating_bottom_position',
            [
                'label'      => esc_html__( 'Bottom Gap', 'rtelements' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                
                'selectors' => [
                    '{{WRAPPER}} .ratings' => 'padding-bottom: {{SIZE}}{{UNIT}};',                    
                ],

                'condition' => [
                    'show_ratings' => 'yes'
                ]
            ]
        );     
       

        $this->end_controls_section();

         $this->start_controls_section(
            'content_slider',
            [
                'label' => esc_html__( 'Slider Settings', 'rtelements' ),
                'tab'   => Controls_Manager::TAB_CONTENT,               
            ]
        );

    
        $this->add_control(
            'col_lg',
            [
                'label'   => esc_html__( 'Desktops > 1199px', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 3,
                'options' => [
                    '1' => esc_html__( '1 Column', 'rtelements' ), 
                    '2' => esc_html__( '2 Column', 'rtelements' ),
                    '3' => esc_html__( '3 Column', 'rtelements' ),
                    '4' => esc_html__( '4 Column', 'rtelements' ),
                    '6' => esc_html__( '6 Column', 'rtelements' ),                 
                ],
                'separator' => 'before',                            
            ]
            
        );

        $this->add_control(
            'col_md',
            [
                'label'   => esc_html__( 'Desktops > 991px', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 3,         
                'options' => [
                    '1' => esc_html__( '1 Column', 'rtelements' ), 
                    '2' => esc_html__( '2 Column', 'rtelements' ),
                    '3' => esc_html__( '3 Column', 'rtelements' ),
                    '4' => esc_html__( '4 Column', 'rtelements' ),
                    '6' => esc_html__( '6 Column', 'rtelements' ),                     
                ],
                'separator' => 'before',
                            
            ]
            
        );

        $this->add_control(
            'col_sm',
            [
                'label'   => esc_html__( 'Tablets > 767px', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 2,         
                'options' => [
                    '1' => esc_html__( '1 Column', 'rtelements' ), 
                    '2' => esc_html__( '2 Column', 'rtelements' ),
                    '3' => esc_html__( '3 Column', 'rtelements' ),
                    '4' => esc_html__( '4 Column', 'rtelements' ),
                    '6' => esc_html__( '6 Column', 'rtelements' ),                 
                ],
                'separator' => 'before',
                            
            ]
            
        );

        $this->add_control(
            'col_xs',
            [
                'label'   => esc_html__( 'Tablets < 768px', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 1,         
                'options' => [
                    '1' => esc_html__( '1 Column', 'rtelements' ), 
                    '2' => esc_html__( '2 Column', 'rtelements' ),
                    '3' => esc_html__( '3 Column', 'rtelements' ),
                    '4' => esc_html__( '4 Column', 'rtelements' ),
                    '6' => esc_html__( '6 Column', 'rtelements' ),                 
                ],
                'separator' => 'before',
                            
            ]
            
        );

        $this->add_control(
            'slides_ToScroll',
            [
                'label'   => esc_html__( 'Slide To Scroll', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 2,         
                'options' => [
                    '1' => esc_html__( '1 Item', 'rtelements' ),
                    '2' => esc_html__( '2 Item', 'rtelements' ),
                    '3' => esc_html__( '3 Item', 'rtelements' ),
                    '4' => esc_html__( '4 Item', 'rtelements' ),                   
                ],
                'separator' => 'before',
                            
            ]
            
        );      

        $this->add_control(
            'slider_dots',
            [
                'label'   => esc_html__( 'Navigation Dots', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 'false',
                'options' => [
                    'true' => esc_html__( 'Enable', 'rtelements' ),
                    'false' => esc_html__( 'Disable', 'rtelements' ),              
                ],
                'separator' => 'before',                            
            ]            
        );

        $this->add_control(
            'slider_nav',
            [
                'label'   => esc_html__( 'Navigation Nav', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 'false',           
                'options' => [
                    'true' => esc_html__( 'Enable', 'rtelements' ),
                    'false' => esc_html__( 'Disable', 'rtelements' ),              
                ],
                'separator' => 'before',
                            
            ]
            
        );

        $this->add_control(
            'slider_autoplay',
            [
                'label'   => esc_html__( 'Autoplay', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 'false',           
                'options' => [
                    'true' => esc_html__( 'Enable', 'rtelements' ),
                    'false' => esc_html__( 'Disable', 'rtelements' ),              
                ],
                'separator' => 'before',
                            
            ]
            
        );

        $this->add_control(
            'slider_autoplay_speed',
            [
                'label'   => esc_html__( 'Autoplay Slide Speed', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 3000,          
                'options' => [
                    '1000' => esc_html__( '1 Seconds', 'rtelements' ),
                    '2000' => esc_html__( '2 Seconds', 'rtelements' ), 
                    '3000' => esc_html__( '3 Seconds', 'rtelements' ), 
                    '4000' => esc_html__( '4 Seconds', 'rtelements' ), 
                    '5000' => esc_html__( '5 Seconds', 'rtelements' ), 
                ],
                'separator' => 'before',                            
            ]
            
        );

        $this->add_control(
            'slider_stop_on_hover',
            [
                'label'   => esc_html__( 'Stop on Hover', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'false',               
                'options' => [
                    'true' => esc_html__( 'Enable', 'rtelements' ),
                    'false' => esc_html__( 'Disable', 'rtelements' ),              
                ],
                'separator' => 'before',
                            
            ]
            
        );

        $this->add_control(
            'slider_interval',
            [
                'label'   => esc_html__( 'Autoplay Interval', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 3000,          
                'options' => [
                    '5000' => esc_html__( '5 Seconds', 'rtelements' ), 
                    '4000' => esc_html__( '4 Seconds', 'rtelements' ), 
                    '3000' => esc_html__( '3 Seconds', 'rtelements' ), 
                    '2000' => esc_html__( '2 Seconds', 'rtelements' ), 
                    '1000' => esc_html__( '1 Seconds', 'rtelements' ),     
                ],
                'separator' => 'before',
                            
            ]
            
        );

        $this->add_control(
            'slider_loop',
            [
                'label'   => esc_html__( 'Loop', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'true' => esc_html__( 'Enable', 'rtelements' ),
                    'false' => esc_html__( 'Disable', 'rtelements' ),
                ],
                'separator' => 'before',
                            
            ]
            
        );

        $this->add_control(
            'slider_centerMode',
            [
                'label'   => esc_html__( 'Center Mode', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'true' => esc_html__( 'Enable', 'rtelements' ),
                    'false' => esc_html__( 'Disable', 'rtelements' ),
                ],
                'separator' => 'before',
                            
            ]
            
        );

        $this->add_responsive_control(
            'item_gap_custom',
            [
                'label' => esc_html__( 'Item Middle Gap', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'show_label' => true,               
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'size' => 15,
                ],          

                'selectors' => [
                    '{{WRAPPER}} .reactheme-addon-slider .testimonial-item' => 'margin-left:{{SIZE}}{{UNIT}};',     
                    '{{WRAPPER}} .reactheme-addon-slider .testimonial-item' => 'margin-right:{{SIZE}}{{UNIT}};',                    
                ],
            ]
        ); 

         $this->add_control(
            'item_gap_custom_bottom',
            [
                'label' => esc_html__( 'Item Bottom Gap', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'show_label' => true,               
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'size' => 15,
                ],          

                'selectors' => [
                    '{{WRAPPER}} .reactheme-addon-slider .testimonial-item' => 'margin-bottom:{{SIZE}}{{UNIT}};',                    
                ],
            ]
        ); 
                
        $this->end_controls_section();
       
  
        $this->start_controls_section(
            'section_slider_style',
            [
                'label' => esc_html__( 'Title/Designation/Ratings', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__( 'Title Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-name' => 'color: {{VALUE}};',             

                ],                
            ]
        );


        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__( 'Title Typography', 'rtelements' ),
                
                'selector' => '{{WRAPPER}} .reactheme-testimonial .testimonial-name',                     
            ]
        );


        $this->add_control(
            'designation_color',
            [
                'label' => esc_html__( 'Designation Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [                    
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-title' => 'color: {{VALUE}};',

                ],                
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_typography',
                'label' => esc_html__( 'Designation Typography', 'rtelements' ),
                
                'selector' => '{{WRAPPER}} .reactheme-testimonial .testimonial-title',                    
            ]
        );
        

         $this->add_responsive_control(
            'title_padding',
            [
                'label' => esc_html__( 'Title Area Padding', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_position',
            [
                'label'   => esc_html__( 'Title/Ratings/Image ', 'rtelements' ),
                'type'    => Controls_Manager::SELECT,  
                'default' => 'bottom',            
                'options' => [
                    'top' => esc_html__( 'Above Content', 'rtelements' ),
                    'bottom' => esc_html__( 'Below Content', 'rtelements' ),                                  
                ],
                'separator' => 'before',                            
            ]
        );      

        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_content_style',
            [
                'label' => esc_html__( 'Testimonial Content', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'content_color',
            [
                'label' => esc_html__( 'Content Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial p' => 'color: {{VALUE}};',                    

                ],                
            ]
        );

          $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'label' => esc_html__( 'Content Typography', 'rtelements' ),
                
                'selector' => '{{WRAPPER}} .reactheme-testimonial p'
            ]
        );

         $this->add_responsive_control(
            'testimonial_padding',
            [
                'label' => esc_html__( 'Content Padding', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_top_position',
            [
                'label' => esc_html__( 'Top/Bottom Position', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => -100,
                        'max' => 300,
                    ],
                ],
               
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item p' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        ); 

       
        $this->add_control(
            'testimonial_bg_color',
            [
                'label' => esc_html__( 'Content Background Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item p' => 'background-color:{{VALUE}};',
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item .item-content.bubble:after' => 'border-top-color:{{VALUE}};',
                ],
            ]
        );      

        $this->add_responsive_control(
            'testimonial_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item p' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'testimonial_box_shadow',
                'selector' => '{{WRAPPER}} .reactheme-testimonial .testimonial-item p',
            ]
        );

        $this->add_responsive_control(
            'name_spacing',
            [
                'label' => esc_html__( 'Content Bottom Spacing', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item p' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            '_section_style_image',
            [
                'label' => esc_html__( 'Image', 'rtelements' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

         $this->add_control(
            'show_images',
            [
                'label' => esc_html__( 'Show', 'rtelements' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rtelements' ),
                'label_off' => esc_html__( 'Hide', 'rtelements' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


        $this->add_responsive_control(
            'image_width',
            [
                'label' => esc_html__( 'Width', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 65,
                        'max' => 200,
                    ],
                    'default' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-wrap img' => 'width: {{SIZE}}{{UNIT}};',                    
                ],

                'condition' => [
                    'show_images' => 'yes'
                ]
            ]
        );

        $this->add_responsive_control(
            'image_height',
            [
                'label' => esc_html__( 'Height', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 200,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-wrap img' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'show_images' => 'yes'
                ]
            ]
        );

        

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'selector' => '{{WRAPPER}} .image-wrap > img',
                'condition' => [
                    'show_images' => 'yes'
                ]
            ]

        );

        $this->add_responsive_control(
            'image_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .image-wrap > img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'show_images' => 'yes'
                ],
				'default' => [
					'unit' => '%',
					'top' => 100,
					'right' => 100,
					'bottom' => 100,
					'left' => 100,
				],

            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'image_box_shadow',
                'selector' => '.image-wrap > img',
                'condition' => [
                    'show_images' => 'yes'
                ]
            ]
        );


         $this->add_responsive_control(
            'title_top_position',
            [
                'label' => esc_html__( 'Top/Bottom Position', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => -100,
                        'max' => 300,
                    ],
                ],
               
                'selectors' => [
                    '{{WRAPPER}} .testimonial-content' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'show_images' => 'yes'
                ]
            ]
        );

        $this->add_responsive_control(
            'title_left_position',
            [
                'label' => esc_html__( 'Left/Right Position', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
               
                'selectors' => [
                    '{{WRAPPER}} .testimonial-content' => 'left: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'show_images' => 'yes'
                ]
            ]
        );

        $this->end_controls_section();

         $this->start_controls_section(
            'section_quote_style',
            [
                'label' => esc_html__( 'Quote Icon', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        

        $this->add_control(
            'icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .item-content span i' => 'color: {{VALUE}};',             

                ],                
            ]
        );


         $this->add_responsive_control(
            'icon_font_size',
            [
                'label' => esc_html__( 'Icon Font Size', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
               
                'selectors' => [
                    '{{WRAPPER}} .item-content span i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                
            ]
        );

        $this->add_responsive_control(
            'icon_position',
            [
                'label' => esc_html__( 'Icon Top/Bottom Position', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
               
                'selectors' => [
                    '{{WRAPPER}} .item-content span i' => 'top: {{SIZE}}{{UNIT}}; position:absolute',
                ],
                
            ]
        );

        $this->add_responsive_control(
            'icon_position_left',
            [
                'label' => esc_html__( 'Icon Left/Right Position', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                   
                ],
               
                'selectors' => [
                    '{{WRAPPER}} .item-content span i' => 'left: {{SIZE}}%; position:absolute',
                ],
                
            ]
        );


       

        $this->end_controls_section();
        

        $this->start_controls_section(
            'section_boxes_style',
            [
                'label' => esc_html__( 'Testimonial Box Style', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => ['style' => 'style1'],
            ]
        );


         $this->add_responsive_control(
            'box_padding',
            [
                'label' => esc_html__( 'Padding', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

          $this->add_responsive_control(
            'box_margin',
            [
                'label' => esc_html__( 'Margin', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

       
        $this->add_control(
            'box_bg_color',
            [
                'label' => esc_html__( 'Background Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item' => 'background-color: {{VALUE}};',                    
                ],
                'condition' => ['style' => 'style1'],
            ],

        );  


        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'box_border',
                'selector' => '{{WRAPPER}} .reactheme-testimonial .testimonial-item',
            ]
        );    

        $this->add_responsive_control(
            'box_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .reactheme-testimonial .testimonial-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'testimonial_boxes_shadow',
                'selector' => '{{WRAPPER}} .reactheme-testimonial .testimonial-item',
            ]
        );
        $this->end_controls_section();


/***********START********************************* */
$this->start_controls_section(
    'section_box_elements_style',
    [
        'label' => esc_html__( 'Testimonial Box Style', 'rtelements' ),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => ['style' => 'style2'],
    ]
);


 $this->add_responsive_control(
    'elements_box_padding',
    [
        'label' => esc_html__( 'Padding', 'rtelements' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', 'em', '%' ],
        'selectors' => [
            '{{WRAPPER}} .reactheme-testimonial .testimonial-item .testimonial-item-elements' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

  $this->add_responsive_control(
    'elements_box_margin',
    [
        'label' => esc_html__( 'Margin', 'rtelements' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', 'em', '%' ],
        'selectors' => [
            '{{WRAPPER}} .reactheme-testimonial .testimonial-item .testimonial-item-elements' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Background::get_type(),
    [
        'name' => 'elements_box_background',
        'label' => esc_html__( 'Box Background', 'rtelements' ),
        'types' => [ 'classic', 'gradient'],
        'selector' => '{{WRAPPER}} .reactheme-testimonial .testimonial-item .testimonial-item-elements',
    ],
    
);


$this->add_group_control(
    Group_Control_Border::get_type(),
    [
        'name' => 'elements_box_border',
        'selector' => '{{WRAPPER}} .reactheme-testimonial .testimonial-item .testimonial-item-elements',
    ]
);    

$this->add_responsive_control(
    'elements_box_border_radius',
    [
        'label' => esc_html__( 'Border Radius', 'rtelements' ),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%' ],
        'selectors' => [
            '{{WRAPPER}} .reactheme-testimonial .testimonial-item .testimonial-item-elements' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->add_group_control(
    Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'elements_testimonial_boxes_shadow',
        'selector' => '{{WRAPPER}} .reactheme-testimonial .testimonial-item .testimonial-item-elements',
    ]
);
$this->end_controls_section();

/******END************************************** */


        $this->start_controls_section(
            'section_slider_style_arrow',
            [
                'label' => esc_html__( 'Slider Style', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'testimonial_style' => 'slider'
                ],

            ]
        );     
       
      
        $this->add_control(
            'arrow_options',
            [
                'label' => esc_html__( 'Arrow Style', 'rtelements' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'navigation_arrow_background',
            [
                'label' => esc_html__( 'Background', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-addon-slider .slick-next, .reactheme-addon-slider .slick-prev' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .reactheme-addon-slider .slick-next, .reactheme-addon-slider .slick-next' => 'background: {{VALUE}};',

                ],                
            ]
        );

        $this->add_control(
            'navigation_arrow_icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-addon-slider .slick-next::before' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .reactheme-addon-slider .slick-prev::before' => 'color: {{VALUE}};',

                ],                
            ]
        );

         $this->add_control(
            'bullet_options',
            [
                'label' => esc_html__( 'Bullet Style', 'rtelements' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'navigation_dot_border_color',
            [
                'label' => esc_html__( 'Border Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-addon-slider .slick-dots li button' => 'border-color: {{VALUE}};',

                ],                
            ]
        );



        $this->add_control(
            'navigation_dot_icon_background',
            [
                'label' => esc_html__( 'Background Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .reactheme-addon-slider .slick-dots li button:hover' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .reactheme-addon-slider .slick-dots li.slick-active button' => 'background: {{VALUE}};',

                ],                
            ]
        );

          $this->add_control(
            'bullet_spacing_custom',
            [
                'label' => esc_html__( 'Top Gap', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'show_label' => true,               
                'range' => [
                    'px' => [
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'size' => 25,
                ],          

                'selectors' => [
                    '{{WRAPPER}} .reactheme-addon-slider .slick-dots' => 'margin-bottom:-{{SIZE}}{{UNIT}};',                    
                ],
            ]
        ); 

        

        $this->end_controls_section();
  

    }

    /**
     * Render rsgallery widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */

    protected function render() {
        $settings = $this->get_settings_for_display();

        $slidesToShow    = !empty($settings['col_lg']) ? $settings['col_lg'] : 3;
        $autoplaySpeed   = $settings['slider_autoplay_speed'];
        $interval        = $settings['slider_interval'];
        $slidesToScroll  = $settings['slides_ToScroll'];
        $slider_autoplay = $settings['slider_autoplay'] === 'true' ? 'true' : 'false';
        $pauseOnHover    = $settings['slider_stop_on_hover'] === 'true' ? 'true' : 'false';
        $sliderDots      = $settings['slider_dots'] == 'true' ? 'true' : 'false';
        $sliderNav       = $settings['slider_nav'] == 'true' ? 'true' : 'false';        
        $infinite        = $settings['slider_loop'] === 'true' ? 'true' : 'false';
        $centerMode      = $settings['slider_centerMode'] === 'true' ? 'true' : 'false';
        $col_lg          = $settings['col_lg'];
        $col_md          = $settings['col_md'];
        $col_sm          = $settings['col_sm'];
        $col_xs          = $settings['col_xs'];
        
        $unique = rand(2012,35120);

        $slider_conf = compact('slidesToShow', 'autoplaySpeed', 'interval', 'slidesToScroll', 'slider_autoplay','pauseOnHover', 'sliderDots', 'sliderNav', 'infinite', 'centerMode', 'col_lg', 'col_md', 'col_sm', 'col_xs');   
        if($settings['style'] == 'style1'){
            ?>
            <div class="reactheme-unique-slider reactheme-testimonial-grid reactheme-testimonial">
                <div id="reactheme-slick-slider-<?php echo esc_attr($unique); ?>" class="reactheme-addon-slider" >
                    <?php
                        $url = plugin_dir_url( __FILE__ );

                        $best_wp = new wp_Query(array(
                                'post_type'      => 'rt-testimonials',
                                'posts_per_page' => $settings['per_page'],
                                                
                        ));

                        while($best_wp->have_posts()): $best_wp->the_post();
                            $designation  = !empty(get_post_meta( get_the_ID(), 'designation', true )) ? get_post_meta( get_the_ID(), 'designation', true ):'';

                            $ratings  = !empty(get_post_meta( get_the_ID(), 'ratings', true )) ? get_post_meta( get_the_ID(), 'ratings', true ):'';
                            
                        ?>                           
                        
                        <div class="testimonial-item <?php echo esc_attr( $settings['align'] );?> <?php echo esc_attr($settings['title_position']);?>"> 
                            <div class="testimonial-item-elements">
                                <?php if($settings['show_ratings'] == 'yes' && $ratings != ''): ?>
                                                <div class="ratings"><img src="<?php echo esc_url($url); ?>/img/<?php echo esc_html($ratings); ?>.png" /></div>
                                            <?php endif;?> 
                                <?php if('top' == $settings['title_position']) {?>                               
                                <div class="testimonial-content">                                   
                                    <?php if(has_post_thumbnail() && $settings['show_images'] == 'yes' ): ?>
                                        <div class="image-wrap">                                    
                                            <?php the_post_thumbnail($settings['thumbnail_size']); ?>                                                   
                                        </div>
                                    <?php endif;?>                     
                                    
                                </div>                           

                                <div class="item-content <?php echo esc_attr($settings['_design']);?>"> 
                                    <div class="testimonial-information">
                                            
                                                <?php if(get_the_title()):?>                         
                                                    <div class="testimonial-name"><?php the_title();?></div>
                                                <?php endif;?>
                                                <?php if( $designation ):?>
                                                    <span class="testimonial-title"><?php echo esc_html( $designation );?></span>
                                                <?php endif; ?>
                                            </div>
                                    <?php if(!empty($settings['icon'])){
                                        ?>
                                        <span><i class="<?php echo esc_attr( $settings['icon'] ); ?>"></i></span>
                                        <?php
                                    }
                                    the_content();
                                
                                    ?>  
                                </div>  
                        <?php }?> 
                                <?php if('bottom' == $settings['title_position']) {  the_content();?>                               
                                <div class="testimonial-content ">                                   
                                    <?php if(has_post_thumbnail() && $settings['show_images'] == 'yes' ): ?>
                                        <div class="image-wrap">                                    
                                            <?php the_post_thumbnail($settings['thumbnail_size']); ?>                                                   
                                        </div>
                                    <?php endif;?>  
                                    
                                        <div class="testimonial-information">
                                            
                                            <?php if(get_the_title()):?>                         
                                                <div class="testimonial-name"><?php the_title();?></div>
                                            <?php endif;?>
                                            <?php if( $designation ):?>
                                                <span class="testimonial-title"><?php echo esc_html( $designation );?></span>
                                            <?php endif; ?>
                                        </div>
                                
                                </div>
                            <?php }?>                       
                            </div>
                        </div>
                            
                        <?php   
                        endwhile;
                        wp_reset_query();  
                    ?>  
                    
                </div>
                <div class="reactheme-slider-conf wpsisac-hide" data-conf="<?php echo htmlspecialchars(json_encode($slider_conf)); ?>"></div>
            </div>
            <?php   
        } else {
            ?>
            <div class="reactheme-unique-slider reactheme-testimonial-grid reactheme-testimonial rt-testimonial-s2">
                <div id="reactheme-slick-slider-<?php echo esc_attr($unique); ?>" class="reactheme-addon-slider" >
                    <?php
                        $url = plugin_dir_url( __FILE__ );

                        $best_wp = new wp_Query(array(
                                'post_type'      => 'rt-testimonials',
                                'posts_per_page' => $settings['per_page'],
                                                
                        ));

                        while($best_wp->have_posts()): $best_wp->the_post();
                            $designation  = !empty(get_post_meta( get_the_ID(), 'designation', true )) ? get_post_meta( get_the_ID(), 'designation', true ):'';

                            $ratings  = !empty(get_post_meta( get_the_ID(), 'ratings', true )) ? get_post_meta( get_the_ID(), 'ratings', true ):'';
                            
                        ?>                           
                        
                        <div class="testimonial-item <?php echo esc_attr( $settings['align'] );?> <?php echo esc_attr($settings['title_position']);?>"> 
                            <div class="testimonial-item-elements">
                                <?php if($settings['show_ratings'] == 'yes' && $ratings != ''): ?>
                                                <div class="ratings">
                                                    <img src="<?php echo esc_url($url); ?>/img/<?php echo esc_html($ratings); ?>.png" />
                                                </div>
                                            <?php endif;?> 
                                <?php if('top' == $settings['title_position']) {?>                               
                                <div class="testimonial-content">                                   
                                    <?php if(has_post_thumbnail() && $settings['show_images'] == 'yes' ): ?>
                                        <div class="image-wrap">                                    
                                            <?php the_post_thumbnail($settings['thumbnail_size']); ?>                                                   
                                        </div>
                                    <?php endif;?>                     
                                    
                                </div>                           

                                <div class="item-content <?php echo esc_attr($settings['_design']);?>"> 
                                    <div class="testimonial-information">
                                    
                                        <?php if(get_the_title()):?>                         
                                            <div class="testimonial-name"><?php the_title();?></div>
                                        <?php endif;?>
                                        <?php if( $designation ):?>
                                            <span class="testimonial-title"><?php echo esc_html( $designation );?></span>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(!empty($settings['icon'])){
                                        ?>
                                        <span><i class="<?php echo esc_attr( $settings['icon'] ); ?>"></i></span>
                                        <?php
                                    }
                                    the_content();
                                
                                    ?>  
                                </div>  
                        <?php }?> 
                                <?php if('bottom' == $settings['title_position']) {  the_content();?>                               
                                <div class="testimonial-content">  
                                
                                    <div class="testimonial-information">
                                        <?php if(get_the_title()):?>                         
                                            <div class="testimonial-name"><?php the_title();?></div>
                                        <?php endif;?>
                                        <?php if( $designation ):?>
                                            <span class="testimonial-title"><?php echo esc_html( $designation );?></span>
                                        <?php endif; ?>
                                    </div>

                                    <?php if(has_post_thumbnail() && $settings['show_images'] == 'yes' ): ?>
                                        <div class="image-wrap">                                    
                                            <?php the_post_thumbnail($settings['thumbnail_size']); ?>                                                   
                                        </div>
                                        <?php
                                        if( $settings['quote_image_icon']['url'] ){
                                            echo '<img class="quote-image" src="' . $settings['quote_image_icon']['url'] . '">';
                                        }
                                        ?>
                                    <?php endif;?>  
                                    
                                
                                </div>
                            <?php }?>                       
                            </div>
                        </div>
                            
                        <?php   
                        endwhile;
                        wp_reset_query();  
                    ?>  
                    
                </div>
                <div class="reactheme-slider-conf wpsisac-hide" data-conf="<?php echo htmlspecialchars(json_encode($slider_conf)); ?>"></div>
            </div>
            <?php   

        }
        ?>









        <script type="text/javascript"> 
            jQuery(document).ready(function(){
                jQuery( '.reactheme-addon-slider' ).each(function( index ) {        
                var slider_id       = jQuery(this).attr('id'); 
                var slider_conf     = jQuery.parseJSON( jQuery(this).closest('.reactheme-unique-slider').find('.reactheme-slider-conf').attr('data-conf'));
               
                if( typeof(slider_id) != 'undefined' && slider_id != '' ) {
                jQuery('#'+slider_id).not('.slick-initialized').slick({
                slidesToShow    : parseInt(slider_conf.col_lg),
                centerMode      : (slider_conf.centerMode)  == "true" ? true : false,
                dots            : (slider_conf.sliderDots)  == "true" ? true : false,
                arrows          : (slider_conf.sliderNav) == "true" ? true : false,
                autoplay        : (slider_conf.slider_autoplay) == "true" ? true : false,
                slidesToScroll  : parseInt(slider_conf.slidesToScroll),
                centerPadding   : '15px',
                autoplaySpeed   : parseInt(slider_conf.autoplaySpeed),
                pauseOnHover    : (slider_conf.pauseOnHover) == "true" ? true : false,
                loop : false,

                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: parseInt(slider_conf.col_md),
                    }
                }, 
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: parseInt(slider_conf.col_sm),
                    }
                }, 
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: parseInt(slider_conf.col_xs),
                    }
                }, ]
                });
            }
   
         });
            });
        </script>
    <?php        
        
    }
}?>