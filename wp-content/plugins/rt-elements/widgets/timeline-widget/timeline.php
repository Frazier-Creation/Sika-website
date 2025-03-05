<?php
/**
 * Logo widget class
 *
 */
use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Utils;
use Elementor\Control_Media;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;

defined( 'ABSPATH' ) || die();

class back_pro_timeline_Showcase_Widget extends \Elementor\Widget_Base {
    /**
     * Get widget name.
     *
     * Retrieve logo widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */

    public function get_name() {
        return 'back-timeline';
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
        return esc_html__( 'RT Timeline', 'back' );
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
        return [ 'backthemecore_category' ];
    }

    public function get_keywords() {
        return [ 'timeline', 'time', 'company', 'history'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            '_section_logo',
            [
                'label' => esc_html__( 'Timeline Item', 'back' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $repeater = new Repeater();

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Image', 'back'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'year',
            [
                'label'       => esc_html__( 'Year', 'back' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Year',
                'separator'   => 'before',
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label'       => esc_html__( 'Title', 'back' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Title',
                'separator'   => 'before',
            ]
        );

        $repeater->add_control(
            'text',
            [
                'label'       => esc_html__( 'Text', 'back' ),
                'type'        => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => 'Text',
                'separator'   => 'before',
            ]
        );


        $this->add_control(
            'items_list',
            [
                'show_label' => false,
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ name }}}',
                'default' => [
                    ['image' => ['url' => Utils::get_placeholder_image_src()]],
                    ['image' => ['url' => Utils::get_placeholder_image_src()]],
                    ['image' => ['url' => Utils::get_placeholder_image_src()]],
                    ['image' => ['url' => Utils::get_placeholder_image_src()]],
                ]
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
                ]
            ]
        );      

        $this->end_controls_section();
    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        if ( empty($settings['items_list'] ) ) {
            return;
        }
        ?>

            <div class="back-timeline our-journey-area"> 
            <div class="reacttimeline">
                <ul>
                    <li class="default-line"></li>
                    <li class="draw-line"></li>                                                                             
                </ul>
            </div>   
            <ul class="journey-list">                                    
                <?php
                foreach ( $settings['items_list'] as $index => $item ) :
                    $image = wp_get_attachment_image_url( $item['image']['id'], $settings['thumbnail_size'] );
                    if ( ! $image ) {
                        $image = Utils::get_placeholder_image_src();
                    }
                    

                    $year   = !empty($item['year']) ? $item['year'] : '';                         
                    $title   = !empty($item['title']) ? $item['title'] : '';                         
                    $text   = !empty($item['text']) ? $item['text'] : '';                         

                    ?>
                    <li class="items">
                        <div class="row timeline-box mb-10">
                            <div class="col-lg-6">
                                <div class="left-content mb-30">
                                    <h2><?php echo esc_html($year);?></h2>
                                    <h4><?php echo esc_html($title);?></h4>
                                    <p><?php echo esc_html($text);?></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-content mb-30">
                                    <img src="<?php echo esc_url( $image ); ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </li>           
                <?php endforeach; ?>
                </ul> 
            </div>
        <?php

    }
}