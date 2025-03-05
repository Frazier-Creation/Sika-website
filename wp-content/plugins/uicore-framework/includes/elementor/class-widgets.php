<?php
namespace UiCore\Elementor;

defined('ABSPATH') || exit();

/**
 * Scripts and Styles Class
 */
class Widgets
{
    public function __construct()
    {
        add_action('elementor/widgets/register', [$this, 'init_widgets']);
  
    }

    public function init_widgets()
    {
        require_once UICORE_INCLUDES . '/elementor/widgets/spacer.php';

    }

    
}
new Widgets();
