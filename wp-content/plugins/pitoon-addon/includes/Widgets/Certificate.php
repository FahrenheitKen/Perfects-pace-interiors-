<?php

namespace Layerdrops\Pitoon\Widgets;


class Certificate extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-certificate';
    }

    public function get_title()
    {
        return __('Certificate', 'pitoon-addon');
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

        include pitoon_get_elementor_option('certificate-one-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .certificates__top-title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Section Sub Title', '{{WRAPPER}} .certificates__top-text', ['layout_one']);

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .certificates__points-title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Subtitle', '{{WRAPPER}} .certificates__points-text', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Date', '{{WRAPPER}} .certificates__points-date', ['layout_one']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('certificate-one.php');
    }
}
