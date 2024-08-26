<?php

namespace Layerdrops\Pitoon\Widgets;


class MakeWebsite extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-make-website';
    }

    public function get_title()
    {
        return __('Make Website', 'pitoon-addon');
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

        include pitoon_get_elementor_option('make-website-one-option.php');


        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .section-title__title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_one']);

        pitoon_elementor_general_style_options($this, 'Feature Title', '{{WRAPPER}} .make-website__title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Feature Sub Title', '{{WRAPPER}} .make-website__text', ['layout_one']);


        $this->end_controls_section();

        //button style
        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__('Button Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'layout_type' => ['layout_one']
                ]
            ]
        );

        pitoon_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .make-website__arrow', '{{WRAPPER}} .make-website__arrow:hover', ['layout_one']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        include pitoon_get_template('make-website-one.php');
    }
}
