<?php

namespace Layerdrops\Pitoon\Widgets;


class Service extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-service';
    }

    public function get_title()
    {
        return __('Service', 'pitoon-addon');
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
                    'layout_two' => __('Layout Two', 'pitoon-addon'),
                    'layout_three' => __('Layout Three', 'pitoon-addon'),
                    'layout_four' => __('Layout Four', 'pitoon-addon'),
                ]
            ]
        );


        $this->end_controls_section();

        include pitoon_get_elementor_option('service-one-option.php');
        include pitoon_get_elementor_option('service-two-option.php');
        include pitoon_get_elementor_option('service-three-option.php');
        include pitoon_get_elementor_option('service-four-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .section-title__tagline', ['layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title__title', ['layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_two', 'layout_three']);

        pitoon_elementor_general_style_options($this, 'Service Title', '{{WRAPPER}} .services-one__title a,{{WRAPPER}} .services-two__title a,{{WRAPPER}} .services-three__title a', ['layout_one', 'layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Service Sub Title', '{{WRAPPER}} .services-two__text,{{WRAPPER}} .services-three__tex', ['layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Service Point List', '{{WRAPPER}} .services-three__points li .text p', ['layout_three']);

        pitoon_elementor_general_style_options($this, 'Service Icon', '{{WRAPPER}} .services-one__icon span', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Customer Text', '{{WRAPPER}} .services-one__satisfied-text', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Customer Link', '{{WRAPPER}} .services-one__satisfied-text a', ['layout_one']);

        $this->end_controls_section();

        //button style
        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__('Button Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'layout_type' => ['layout_two', 'layout_three']
                ]
            ]
        );

        pitoon_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .thm-btn,{{WRAPPER}} .services-three__plus', '{{WRAPPER}} .thm-btn:before,{{WRAPPER}} .services-three__plus:hover', ['layout_two', 'layout_three']);

        $this->end_controls_section();

        pitoon_elementor_column_count_options($this, ['layout_one']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('service-one.php');
        include pitoon_get_template('service-two.php');
        include pitoon_get_template('service-three.php');
        include pitoon_get_template('service-four.php');
    }
}
