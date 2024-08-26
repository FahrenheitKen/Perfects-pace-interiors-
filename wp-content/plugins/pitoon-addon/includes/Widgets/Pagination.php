<?php

namespace Layerdrops\Pitoon\Widgets;


class Pagination extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-pagination';
    }

    public function get_title()
    {
        return __('Pagination', 'pitoon-addon');
    }

    public function get_icon()
    {
        return 'eicon-cogs';
    }

    public function get_categories()
    {
        return ['pitoon-category'];
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'layout_section',
            [
                'label' => __('Layout', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'layout_type',
            [
                'label' => __('Select Layout', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'default' => 'layout_one',
                'options' => [
                    'layout_one' => __('Layout One', 'pitoon-addon'),
                ]
            ]
        );


        $this->end_controls_section();

        include pitoon_get_elementor_option('pagination-one-option.php');


        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Text', '{{WRAPPER}} .project-details__pagination li a', ['layout_one', 'layout_two', 'layout_three']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        include pitoon_get_template('pagination-one.php');
    }
}
