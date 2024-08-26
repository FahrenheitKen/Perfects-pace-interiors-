<?php

namespace Layerdrops\Pitoon\Widgets;


class Shape extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-shape';
    }

    public function get_title()
    {
        return __('Shape', 'pitoon-addon');
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

        $this->start_controls_section(
            'layout_one_content_section',
            [
                'label' => __('Content', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'shape_one',
            [
                'label' => __('Shape One', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [],
            ]
        );
        $this->end_controls_section();

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('shape-one.php');
    }
}
