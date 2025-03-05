<?php
/**
 * Feature List
 *
 */

use Elementor\Repeater;
use Elementor\Utils;
use Elementor\Control_Media;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;

defined( 'ABSPATH' ) || die();

class ReacTheme_Portfolio_Features_List_Widget extends \Elementor\Widget_Base {


    public function get_name() {
        return 'rt-portfolio-featureslist';
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
        return esc_html__( 'RT Portfolio Features', 'rtelements' );
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
        return 'glyph-icon flaticon-price';
    }


    public function get_categories() {
        return [ 'pielements_category' ];
    }

    public function get_keywords() {
        return [ 'list', 'title', 'features', 'heading', 'plan' ];
    }

	protected function register_controls() {
		$this->start_controls_section(
			'_section_header',
			[
				'label' => esc_html__( 'Content', 'rtelements' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		); 

        $this->add_control(
        'show_category',
        [
            'label' => esc_html__( 'Show Catgegory', 'rtelements' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'rtelements' ),
            'label_off' => esc_html__( 'Hide', 'rtelements' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );
        $this->add_control(
        'show_category_prefix',
        [
            'label' => esc_html__( 'Show Catgegory Title Text', 'rtelements' ),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__( 'Catgegory:', 'rtelements' ),
            'condition' => [
                'show_category' => 'yes',
            ],
        ]
    );
    

        $repeater = new Repeater();

        $repeater->add_control(
            'text',
            [
                'label' => esc_html__( 'Title', 'rtelements' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'Client', 'rtelements' ),
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => esc_html__( 'Values', 'rtelements' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'Alonso Dicosa', 'rtelements' ),             
            ]
        );

        $this->add_control(
            'features_list',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'show_label' => false,
                'default' => [
                    [
                        'text' => esc_html__( 'Client', 'rtelements' ),
                        'description' => esc_html__( 'Alonso Dicosa', 'rtelements' ),
                    ],
                    [
                        'text' => esc_html__( 'Values', 'rtelements' ),
                        'description' => esc_html__( '$20,000', 'rtelements' ),
                    ],
                    
                ],
                'title_field' => '{{{ text }}}',
            ]
        );

       
        $this->add_control(
            'live_preview',
            [
                'label' => esc_html__( 'Live Preview Text', 'rtelements'),
                'default' => esc_html__( 'Live Preview', 'rtelements' ),              
            ]
        );

        $this->add_control(
            'live_preview_link',
            [
                'label' => esc_html__( 'Live Preview Link', 'rtelements' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( '#', 'rtelements' ),              
            ]
        );

        $this->end_controls_section();
    }
  

	protected function render() {
        $settings = $this->get_settings_for_display();?> 

        <div class="rt-features-list-portfolio-content">        
                <?php if($settings['show_category'] == 'yes'){
                    $term_obj_list = get_the_terms( get_the_ID(), 'rt-portfolio-category' );
                    ?>
                    <ul class="category-info">
                        <li> <?php if(!empty($settings['show_category_prefix'])) : ?>
                        <b><?php echo $settings['show_category_prefix'].' ';?></b> <?php endif; ?>
                            <?php echo $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));?> </li>
                        
                    </ul>
               <?php }?>
                <?php if ( is_array( $settings['features_list'] ) ) : ?>
                    <ul class="rt-portfolio-features-list">
                        <?php foreach ( $settings['features_list'] as $index => $feature ) :
                            $name_key = $this->get_repeater_setting_key( 'text', 'features_list', $index );
                            $this->add_inline_editing_attributes( $name_key, 'basic' );
                            $this->add_render_attribute( $name_key, 'class', 'rt-feature-text' );
                            ?>
                            <li class="<?php echo esc_attr( 'elementor-repeater-item-' . $feature['_id'] ); ?>">
                               
                                <b <?php $this->print_render_attribute_string( $name_key ); ?>><?php echo wp_kses_post( $feature['text'] ); ?></b> <?php echo $feature['description'];?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>  

                <?php if(!empty($settings['live_preview'] )){ ?>
                   
                    <ul class="live-preview">
                        <li>
                            <a href="<?php echo esc_url($settings['live_preview_link']);?>" target="_blank"><?php echo $settings['live_preview'];?> <i class="fal fa-long-arrow-right"></i></a>
                        </li>                        
                    </ul>
               <?php }?>          
        </div>
        <?php
    }
}
