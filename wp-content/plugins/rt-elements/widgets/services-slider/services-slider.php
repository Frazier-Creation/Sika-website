<?php
/**
 * Services Slider widget class
 *
 */
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Repeater;

use Elementor\Utils;
use Elementor\Control_Media;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;

defined( 'ABSPATH' ) || die();

class ReacThemes_Service_slider_Widget extends \Elementor\Widget_Base {
    /**
     * Get widget name.
     *    
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */

    public function get_name() {
        return 'rts-services-slider';
    }

    /**
     * Get widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */

    public function get_title() {
        return esc_html__( 'Services Slider', 'rtelements' );
    }

    /**
     * Get widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-gallery-grid';
    }


    public function get_categories() {
        return [ 'pielements_category' ];
    }

    public function get_keywords() {
        return [ 'logo', 'clients', 'brand', 'parnter', 'image' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            '_section_logo',
            [
                'label' => esc_html__( 'Services Section', 'rtelements' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'selected_image',
            [
                'label' => esc_html__( 'Choose Services Image', 'rtelements' ),
                'type'  => Controls_Manager::MEDIA,     
                
               
                'separator' => 'before',
            ]
        );      

        

        $repeater->add_control(
            'title',
            [
                'label'       => esc_html__( 'Services Title', 'rtelements' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Services Title',
                'placeholder' => esc_html__( 'Services Title', 'rtelements' ),
                'separator'   => 'before',
            ]
        );

        $repeater->add_control(
            'title_link',
            [   'label_block' => true,
                'label' => esc_html__( 'Title Link', 'rtelements' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( '#', 'rtelements' ),   
                    
            ]
        ); 

        $repeater->add_control(
            'text',
            [
                'label' => esc_html__( 'Services Text', 'rtelements' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,              
                'default' => esc_html__( 'Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas. Dummy text generator.', 'rtelements' ),
                'separator' => 'before',
            ]   
        );
        $repeater->add_control(
            'services_btn_text',
            [
                'label' => esc_html__( 'Services Button Text', 'rtelements' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => '',
                'placeholder' => esc_html__( 'Services Button Text', 'rtelements' ),
                'separator' => 'before',
            ] 
        );

        $repeater->add_control(
            'services_btn_text',
            [
                'label' => esc_html__( 'Services Button Text', 'rtelements' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => '',
                'placeholder' => esc_html__( 'Services Button Text', 'rtelements' ),
                'separator' => 'before',
            ] 
        );

        $repeater->add_control(
            'services_btn_link',
            [
                'label' => esc_html__( 'Services Button Link', 'rtelements' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => '',
                'placeholder' => esc_html__( '#', 'rtelements' ),           
            ]
        );

        $this->add_control(
            'logo_list',
            [
                'show_label' => false,
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ name }}}',
              
            ]
        );        


        $this->end_controls_section();

        $this->start_controls_section(
            '_section_media_style',
            [
                'label' => esc_html__( 'Icon / Image', 'rtelements' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_size',
            [
                'label' => esc_html__( 'Size', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 300,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .services-icon' => 'font-size: {{SIZE}}{{UNIT}} !important;',
                    '{{WRAPPER}} .services-icon i:before' => 'font-size: {{SIZE}}{{UNIT}} !important;',
                ],
                'condition' => [
                    'icon_type' => 'icon'
                ]
            ]
        );

        $this->add_responsive_control(
            'icon_line_height',
            [
                'label' => esc_html__( 'Line Height', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 300,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .services-icon' => 'line-height: {{SIZE}}{{UNIT}} !important;',
                ],
                'condition' => [
                    'icon_type' => 'icon'
                ],

                'separator' => 'before',

            ]
        );

        $this->add_responsive_control(
            'image_width',
            [
                'label' => esc_html__( 'Width', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 400,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .services-icon img' => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .single-work img' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'icon_type' => 'image'
                ],
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'image_height',
            [
                'label'      => esc_html__( 'Height', 'rtelements' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 400,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .services-icon img' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'icon_type' => 'image'
                ],
                'separator' => 'before',
            ]
        );              


        $this->add_control(
            'offset_toggle',
            [
                'label' => esc_html__( 'Offset', 'rtelements' ),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => esc_html__( 'None', 'your-plugin' ),
                'label_on' => esc_html__( 'Custom', 'your-plugin' ),
                'return_value' => 'yes',
            ]
        );

        $this->start_popover();

        $this->add_responsive_control(
            'media_offset_x',
            [
                'label' => esc_html__( 'Offset Left', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'condition' => [
                    'offset_toggle' => 'yes'
                ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                    ],
                ],
                'render_type' => 'ui',

            ]
        );

        $this->add_responsive_control(
            'media_offset_y',
            [
                'label' => esc_html__( 'Offset Top', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'condition' => [
                    'offset_toggle' => 'yes'
                ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    // Media translate styles
                    '(desktop){{WRAPPER}} .services-icon' => '-ms-transform: translate({{media_offset_x.SIZE || 0}}{{UNIT}}, {{media_offset_y.SIZE || 0}}{{UNIT}}); -webkit-transform: translate({{media_offset_x.SIZE || 0}}{{UNIT}}, {{media_offset_y.SIZE || 0}}{{UNIT}}); transform: translate({{media_offset_x.SIZE || 0}}{{UNIT}}, {{media_offset_y.SIZE || 0}}{{UNIT}}) !important;',
                    '(tablet){{WRAPPER}} .services-icon' => '-ms-transform: translate({{media_offset_x_tablet.SIZE || 0}}{{UNIT}}, {{media_offset_y_tablet.SIZE || 0}}{{UNIT}}); -webkit-transform: translate({{media_offset_x_tablet.SIZE || 0}}{{UNIT}}, {{media_offset_y_tablet.SIZE || 0}}{{UNIT}}); transform: translate({{media_offset_x_tablet.SIZE || 0}}{{UNIT}}, {{media_offset_y_tablet.SIZE || 0}}{{UNIT}}) !important;',
                    '(mobile){{WRAPPER}} .services-icon' => '-ms-transform: translate({{media_offset_x_mobile.SIZE || 0}}{{UNIT}}, {{media_offset_y_mobile.SIZE || 0}}{{UNIT}}); -webkit-transform: translate({{media_offset_x_mobile.SIZE || 0}}{{UNIT}}, {{media_offset_y_mobile.SIZE || 0}}{{UNIT}}); transform: translate({{media_offset_x_mobile.SIZE || 0}}{{UNIT}}, {{media_offset_y_mobile.SIZE || 0}}{{UNIT}}) !important;',
                    // Body text styles
                    '{{WRAPPER}} .services-text' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_popover();

        $this->add_responsive_control(
            'media_spacing',
            [
                'label' => esc_html__( 'Bottom Spacing', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .services-icon' => 'margin-bottom: {{SIZE}}{{UNIT}} !important;',
                ],
            ]
        );

        $this->add_responsive_control(
            'media_padding',
            [
                'label' => esc_html__( 'Padding', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .services-icon > img, {{WRAPPER}} .services-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'media_border',
                'selector' => '{{WRAPPER}} .services-icon > img, {{WRAPPER}} .services-icon',
            ]
        );

        $this->add_responsive_control(
            'media_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .services-icon > img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .services-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'media_box_shadow',
                'exclude' => [
                    'box_shadow_position',
                ],
                'selector' => '{{WRAPPER}} .services-icon > img, {{WRAPPER}} .react-addon-services.services-style3 .services-part .services-icon, {{WRAPPER}} .services-icon'
            ]
        );

        $this->add_control(
            'icon_color',
            [
                'label' => esc_html__( 'Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-icon' => 'color: {{VALUE}} !important',
                ],
                'condition' => [
                    'icon_type' => 'icon'
                ]
            ]
        );

        $this->add_control(
            'icon_hover_color',
            [
                'label' => esc_html__( 'Hover Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container:hover .services-part .services-icon' => 'color: {{VALUE}} !important',
                ],
                'condition' => [
                    'icon_type' => 'icon'
                ]
            ]
        );

        $this->add_control(
            'icon_bg_color',
            [
                'label' => esc_html__( 'Background Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .services-icon' => 'background-color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_control(
            'icon_hover_bg_color',
            [
                'label' => esc_html__( 'Hover Background Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container .services-part .services-icon' => 'background-color: {{VALUE}} !important',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_effect',
            [
                'label' => esc_html__( 'Effect Enable/Disable', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'block' => esc_html__( 'Enable', 'rtelements'),
                    'none' => esc_html__( 'Disable', 'rtelements'),     

                ],
                'default' => 'none',
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-icon::after' => 'display: {{VALUE}}'
                ],
            ]
        );

        $this->add_control(
            'icon_effect_color',
            [
                'label' => esc_html__( 'Effect Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                    'icon_effect' => 'block'
                ],
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-icon::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'icon_bg_rotate',
            [
                'label' => esc_html__( 'Background Rotate', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'deg' ],
                'default' => [
                    'unit' => 'deg',
                ],
                'range' => [
                    'deg' => [
                        'min' => 0,
                        'max' => 360,
                    ],
                ],
                'selectors' => [
                    // Icon box transform styles
                    '(desktop){{WRAPPER}} .services-icon' => '-ms-transform: translate({{media_offset_x.SIZE || 0}}px, {{media_offset_y.SIZE || 0}}px) rotate({{SIZE}}deg); -webkit-transform: translate({{media_offset_x.SIZE || 0}}px, {{media_offset_y.SIZE || 0}}px) rotate({{SIZE}}deg); transform: translate({{media_offset_x.SIZE || 0}}px, {{media_offset_y.SIZE || 0}}px) rotate({{SIZE}}deg) !important;',
                    '(tablet){{WRAPPER}} .services-icon' => '-ms-transform: translate({{media_offset_x_tablet.SIZE || 0}}px, {{media_offset_y_tablet.SIZE || 0}}px) rotate({{SIZE}}deg); -webkit-transform: translate({{media_offset_x_tablet.SIZE || 0}}px, {{media_offset_y_tablet.SIZE || 0}}px) rotate({{SIZE}}deg); transform: translate({{media_offset_x_tablet.SIZE || 0}}px, {{media_offset_y_tablet.SIZE || 0}}px) rotate({{SIZE}}deg) !important;',
                    '(mobile){{WRAPPER}} .services-icon' => '-ms-transform: translate({{media_offset_x_mobile.SIZE || 0}}px, {{media_offset_y_mobile.SIZE || 0}}px) rotate({{SIZE}}deg); -webkit-transform: translate({{media_offset_x_mobile.SIZE || 0}}px, {{media_offset_y_mobile.SIZE || 0}}px) rotate({{SIZE}}deg); transform: translate({{media_offset_x_mobile.SIZE || 0}}px, {{media_offset_y_mobile.SIZE || 0}}px) rotate({{SIZE}}deg) !important;',
                ],
            ]
        );

        $this->end_controls_section();
        

        $this->start_controls_section(
            '_section_title_style',
            [
                'label' => esc_html__( 'Title & Description', 'rtelements' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'content_padding',
            [
                'label' => esc_html__( 'Content Box Padding', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .services-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'content_border',
                'selector' => '{{WRAPPER}} .services-text',
            ]
        );

        $this->add_responsive_control(
            'content_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .services-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );      

        $this->add_responsive_control(
            'content_bottom_border',
            [
                'label' => esc_html__( 'Bottom Border Enable/Disable', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => true,
                'options' => [
                    'block' => esc_html__( 'Enable', 'rtelements'),
                    'none' => esc_html__( 'Disable', 'rtelements'),     

                ],
                'default' => 'none',
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part::after' => 'display: {{VALUE}};',
                ],
            ]
        );          

        $this->add_responsive_control(
            'fixed_bottom_border',
            [
                'label' => esc_html__( 'Fixed Bottom Border', 'rtelements' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => true,
                'options' => [
                    'unset' => esc_html__( 'Enable', 'rtelements'),
                    '' => esc_html__( 'Disable', 'rtelements'),     

                ],
                'default' => 'unset',
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part::after' => 'width: {{VALUE}};',
                ],
                'condition' => [
                    'content_bottom_border' => 'block',
                ],
            ]
        );      

        $this->add_responsive_control(
            'content_bottom_border_width',
            [
                'label' => esc_html__( 'Border Width', 'rtelements' ),              
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part::after' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'fixed_bottom_border' => 'unset',
                ],
            ]
        );

        $this->add_control(
            'offset_border',
            [
                'label' => esc_html__( 'Offset', 'rtelements' ),
                'type' => Controls_Manager::POPOVER_TOGGLE,
                'label_off' => esc_html__( 'None', 'your-plugin' ),
                'label_on' => esc_html__( 'Custom', 'your-plugin' ),
                'return_value' => 'yes',
            ]
        );

        $this->start_popover();

        $this->add_responsive_control(
            'border_offset_x',
            [
                'label' => esc_html__( 'Offset Left', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'condition' => [
                    'offset_toggle' => 'yes'
                ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                    ],
                ],
                'render_type' => 'ui',

            ]
        );

        $this->add_responsive_control(
            'border_offset_y',
            [
                'label' => esc_html__( 'Offset Top', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'condition' => [
                    'offset_toggle' => 'yes'
                ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    // Media translate styles
                    '(desktop){{WRAPPER}} .react-addon-services .services-part::after' => '-ms-transform: translate({{border_offset_x.SIZE}}{{UNIT}}, {{border_offset_y.SIZE}}{{UNIT}}); -webkit-transform: translate({{border_offset_x.SIZE}}{{UNIT}}, {{border_offset_y.SIZE}}{{UNIT}}); transform: translate({{border_offset_x.SIZE}}{{UNIT}}, {{border_offset_y.SIZE}}{{UNIT}});',
                    '(tablet){{WRAPPER}} .react-addon-services .services-part::after' => '-ms-transform: translate({{border_offset_x_tablet.SIZE}}{{UNIT}}, {{border_offset_y_tablet.SIZE}}{{UNIT}}); -webkit-transform: translate({{border_offset_x_tablet.SIZE}}{{UNIT}}, {{border_offset_y_tablet.SIZE}}{{UNIT}}); transform: translate({{border_offset_x_tablet.SIZE}}{{UNIT}}, {{border_offset_y_tablet.SIZE}}{{UNIT}});',
                    '(mobile){{WRAPPER}} .react-addon-services .services-part::after' => '-ms-transform: translate({{border_offset_x_mobile.SIZE}}{{UNIT}}, {{border_offset_y_mobile.SIZE}}{{UNIT}}); -webkit-transform: translate({{border_offset_x_mobile.SIZE}}{{UNIT}}, {{border_offset_y_mobile.SIZE}}{{UNIT}}); transform: translate({{border_offset_x_mobile.SIZE}}{{UNIT}}, {{border_offset_y_mobile.SIZE}}{{UNIT}});',
                    // Body text styles
                ],
            ]
        );
        $this->end_popover();   


        $this->add_responsive_control(
            'content_bottom_border_height',
            [
                'label' => esc_html__( 'Bottom Border Height', 'rtelements' ),              
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part::after' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'content_bottom_border' => 'block',
                ],
            ]
        );


        $this->add_responsive_control(
            'content_bottom_border_left',
            [
                'label' => esc_html__( 'Start Point', 'rtelements' ),               
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part::after' => 'left: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'content_bottom_border' => 'block',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_bottom_border_color',
            [
                'label' => esc_html__( 'Bottom Border Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                    'content_bottom_border' => 'block',
                ],
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part::after' => 'background:  {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'content_box_shadow',
                'exclude' => [
                    'box_shadow_position',
                ],
                'selector' => '{{WRAPPER}} .services-text'
            ]
        );

        $this->add_control(
            'title_heading',
            [
                'type' => Controls_Manager::HEADING,
                'label' => esc_html__( 'Title', 'rtelements' ),
                'separator' => 'before'
            ]
        );

        $this->add_responsive_control(
            'title_spacing',
            [
                'label' => esc_html__( 'Bottom Spacing', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-text .services-title .title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__( 'Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-text .services-title .title, {{WRAPPER}}  .react-addon-services .services-part .services-text .services-title .title a' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'title_hover_color',
            [
                'label' => esc_html__( 'Hover Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [

                    '{{WRAPPER}}  .react-addon-services .services-part .services-text .services-title .title:hover,
                    {{WRAPPER}}  .react-addon-services:hover .services-part .services-text .services-title .title,
                    {{WRAPPER}}   .react-addon-services .services-part .services-text .services-title .title a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );      

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__( 'Typography', 'rtelements' ),
                'selector' => '{{WRAPPER}}  .react-addon-services .services-part .services-title .title',
                
            ]
        );      

        $this->add_control(
            'title_color_prefix',
            [
                'label' => esc_html__( 'Title Prefix Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services.services-style1 .services-title span' => 'color: {{VALUE}}',
                ],
            ]
        );  

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_prefix_typography',
                'label' => esc_html__( 'Typography', 'rtelements' ),
                'selector' => '{{WRAPPER}}  .react-addon-services.services-style1 .services-title span',
                
            ]
        );  
        
        $this->add_control(
            'description_heading',
            [
                'type' => Controls_Manager::HEADING,
                'label' => esc_html__( 'Description', 'rtelements' ),
                'separator' => 'before'
            ]
        );

        $this->add_responsive_control(
            'description_spacing',
            [
                'label' => esc_html__( 'Bottom Spacing', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-text .services-txt' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => esc_html__( 'Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-text .services-txt' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'description_hover_color',
            [
                'label' => esc_html__( 'Hover Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container:hover .react-addon-services .services-part .services-text .services-txt' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'label' => esc_html__( 'Typography', 'rtelements' ),
                'selector' => '{{WRAPPER}} .react-addon-services .services-part .services-text .services-txt',
                
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            '_section_style_button',
            [
                'label' => esc_html__( 'Button', 'rtelements' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'link_padding',
            [
                'label' => esc_html__( 'Padding', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-text .services-btn-part .services-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typography',
                'selector' => '{{WRAPPER}} .react-addon-services .services-part .services-text .services-btn-part .services-btn,
                {{WRAPPER}} .react-addon-services .services-part .services-btn-part .services-btn',
                
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_border',
                'selector' => '{{WRAPPER}} .services-btn',
            ]
        );

        $this->add_control(
            'button_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rtelements' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-text .services-btn-part .services-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'button_box_shadow',
                'selector' => '{{WRAPPER}} .react-addon-services .services-part .services-text .services-btn-part .services-btn',
            ]
        );

        $this->add_control(
            'hr',
            [
                'type' => Controls_Manager::DIVIDER,
                'style' => 'thick',
            ]
        );

        $this->start_controls_tabs( '_tabs_button' );

        $this->start_controls_tab(
            '_tab_button_normal',
            [
                'label' => esc_html__( 'Normal', 'rtelements' ),
            ]
        );

        $this->add_control(
            'link_color',
            [
                'label' => esc_html__( 'Text Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-text .services-btn-part .services-btn' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .react-addon-services .services-btn-part .services-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_color',
            [
                'label' => esc_html__( 'Background Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-text .services-btn-part .services-btn' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .react-addon-services.services-style4 .services-part .services-btn-part .services-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_border_2',
                'selector' => '{{WRAPPER}} .services-btn',
            ]
        );
        $this->add_control(
            'button_icon_translate',
            [
                'label' => esc_html__( 'Icon Translate X', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .react-addon-services .services-part .services-text .services-btn-part .services-btn.icon-before i' => '-webkit-transform: translateX(calc(-1 * {{SIZE}}{{UNIT}})); transform: translateX(calc(-1 * {{SIZE}}{{UNIT}}));',
                    '{{WRAPPER}} .react-addon-services .services-part .services-text .services-btn-part .services-btn.icon-after i' => '-webkit-transform: translateX({{SIZE}}{{UNIT}}); transform: translateX({{SIZE}}{{UNIT}});',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            '_tab_button_hover',
            [
                'label' => esc_html__( 'Hover', 'rtelements' ),
            ]
        );

        $this->add_control(
            'button_hover_color',
            [
                'label' => esc_html__( 'Text Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container:hover .react-addon-services .services-part .services-text .services-btn-part .services-btn, {{WRAPPER}} .elementor-widget-container:hover .react-addon-services .services-part .services-text .services-btn-part:focus .services-btn',
                    '{{WRAPPER}}  .react-addon-services.services-style4 .services-part .services-btn-part .services-btn:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}}  .react-addon-services.services-style1 .services-part .services-btn-part .services-btn:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}}  .react-addon-services .services-btn-part .services-btn:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}}  .react-addon-services .services-part .services-text .services-btn-part .services-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_bg_color',
            [
                'label' => esc_html__( 'Background Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container:hover .react-addon-services .services-part .services-text .services-btn-part .services-btn, {{WRAPPER}} .elementor-widget-container:hover .react-addon-services .services-part:focus .services-text .services-btn-part .services-btn' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}}  .react-addon-services.services-style4 .services-part .services-btn-part .services-btn:hover' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .react-addon-services .services-btn-part .services-btn:hover' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_border_color',
            [
                'label' => esc_html__( 'Border Color', 'rtelements' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                    'button_border_border!' => '',
                ],
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container:hover .react-addon-services .services-part .services-text .services-btn-part, {{WRAPPER}} .elementor-widget-container .react-addon-services .services-part .services-text .services-btn-part .services-btn:focus' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_hover_border_2',
                'selector' => '{{WRAPPER}} .services-btn:hover',
            ]
        );

        $this->add_control(
            'button_hover_icon_translate',
            [
                'label' => esc_html__( 'Icon Translate X', 'rtelements' ),
                'type' => Controls_Manager::SLIDER,
                
                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container:hover .react-addon-services .services-part .services-text .services-btn-part .services-btn.icon-before i' => '-webkit-transform: translateX(calc(-1 * {{SIZE}}{{UNIT}})); transform: translateX(calc(-1 * {{SIZE}}{{UNIT}}));',
                    '{{WRAPPER}} .elementor-widget-container .react-addon-services .services-part .services-text .services-btn-part .services-btn.icon-after i' => '-webkit-transform: translateX({{SIZE}}{{UNIT}}); transform: translateX({{SIZE}}{{UNIT}});',
                ],
            ]
        );

        $this->end_controls_tab();

        
    }

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

        if ( empty($settings['logo_list'] ) ) {
            return;
        }
        ?>

     
       

            <div class="rtelements-unique-slider">
                <div id="rtelements-slick-slider-<?php echo esc_attr($unique); ?>" class="rt-addon-slider">                   
                        
                        <?php
                            foreach ( $settings['logo_list'] as $index => $item ) :
                                $image = wp_get_attachment_image_url( $item['image']['id'], $settings['thumbnail_size'] );
                                $image1 = wp_get_attachment_image_url( $item['image1']['id'], $settings['thumbnail_size'] );
                                if ( ! $image ) {
                                    $image = Utils::get_placeholder_image_src();
                                }
                                
                                $title = !empty($item['name']) ? $item['name'] : '';

                                $title_tag = !empty($settings['title_tag']) ? $settings['title_tag'] : 'h3';
                                
                                $description = !empty($item['description']) ? $item['description'] : '';

                                $target = !empty($item['link']['is_external']) ? 'target=_blank' : '';  

                                $link = !empty($item['link']['URL']) ? $item['link']['URL'] : '';

                                $gap = $settings['columns-gap'] == 'no-padding' ? 'no-padding' : '';

                                $show_tooltip = $settings['show_tooltip'] == 'yes' ? 'data-toggle= tooltip data-placement= top ' : '';
                                $animation = !empty($settings['hover_animation'])? 'elementor-animation-'.$settings['hover_animation'].'':'';
                                ?>
                                <div class="react-addon-services services-<?php echo esc_attr( $settings['services_style'] ); ?>">
                                    <div class="services-part">
                                        <?php if( !empty($settings['selected_icon']) || !empty($settings['selected_image']['url'])){?>
                                            <div class="services-icon">
                                                <?php if(!empty($settings['selected_icon'])) : ?>
                                                    <i class="fa <?php echo esc_html( $settings['selected_icon'] );?>"></i>
                                                <?php endif; ?>
                                                <?php if(!empty($settings['selected_image'])) :?>
                                                    <img src="<?php echo esc_url( $settings['selected_image']['url'] );?>" alt="image"/>
                                                <?php endif;?>
                                            </div>  
                                        <?php }?>                          
                                        <div class="services-text style5">
                                            <?php if(!empty($settings['title'])){ ?>
                                                <div class="services-title">                    
                                                    
                                                    <?php if(!empty($settings['title_link'])) : 
                                                        $link_open = $settings['link_open'] == 'yes' ? 'target=_blank' : '';
                                                    ?>                                                                  
                                                    <<?php echo esc_html($settings['title_tag']);?>  <?php  echo wp_kses_post($this->print_render_attribute_string( 'title' )); ?>> <a href="<?php echo esc_url($settings['title_link']);?>" <?php echo wp_kses_post($link_open); ?> ><?php echo esc_html($settings['title']);?></a></<?php echo esc_html($settings['title_tag']);?>>
                                                    <?php else: ?>
                                                        <<?php echo esc_html($settings['title_tag']);?> <?php  echo wp_kses_post($this->print_render_attribute_string( 'title' )); ?>><?php if(!empty($settings['title_prefix_icon'])) :?>
                                                        <img src="<?php echo esc_url( $settings['title_prefix_icon']['url'] );?>" alt="image"/>
                                                    <?php endif;?>   <?php echo esc_html($settings['title']);?></<?php echo esc_html($settings['title_tag']);?>>
                                                    <?php endif; ?>                         
                                                </div>
                                            <?php } ?>  

                                            <?php if(!empty($settings['text'])) : ?>
                                                <p <?php  echo wp_kses_post($this->print_render_attribute_string( 'text' )); ?>>  <?php echo wp_kses_post($settings['text']);?></p> 
                                            <?php endif; ?> 

                                            <?php if(!empty($settings['services_btn_text'])){ ?>

                                                <div class="services-btn-part">
                                                    <?php 
                                                        $link_open = $settings['services_btn_link_open'] == 'yes' ? 'target=_blank' : '';                    
                                                        $icon_position = $settings['services_btn_icon_position'] == 'before' ? 'icon-before' : 'icon-after';
                                                    ?>
                                                    
                                                    <a class="services-btn <?php echo esc_html($icon_position); ?>" href="<?php echo esc_url($settings['services_btn_link']);?>" <?php echo wp_kses_post($link_open); ?>>

                                                        <span <?php echo wp_kses_post($this->print_render_attribute_string( 'services_btn_text' )); ?>>
                                                            <?php echo esc_html($settings['services_btn_text']);?>                          
                                                        </span>
                                                        <i class="fal fa-long-arrow-right"></i>

                                                    </a>                            
                                                    
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>          
                            <?php endforeach; ?>
                      
                </div>
                <div class="rtelements-slider-conf wpsisac-hide" data-conf="<?php echo htmlspecialchars(json_encode($slider_conf)); ?>"></div>
            </div>
            <script type="text/javascript"> 
                jQuery(document).ready(function(){
                    jQuery( '.rt-addon-slider' ).each(function( index ) {        
                    var slider_id       = jQuery(this).attr('id'); 
                    var slider_conf     = jQuery.parseJSON( jQuery(this).closest('.rtelements-unique-slider').find('.rtelements-slider-conf').attr('data-conf'));
                   
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
        <?php endif;

    }
}