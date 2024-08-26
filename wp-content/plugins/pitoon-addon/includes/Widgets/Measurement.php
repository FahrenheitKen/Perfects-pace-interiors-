<?php

namespace Layerdrops\Pitoon\Widgets;


class Measurement extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-measurement';
    }

    public function get_title()
    {
        return __('Measurement', 'pitoon-addon');
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

        include pitoon_get_elementor_option('measurement-one-option.php');

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

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .measurement__bottom-title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Icon', '{{WRAPPER}} .measurement__icon span', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Summary', '{{WRAPPER}} .measurement__bottom-text', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Point List', '{{WRAPPER}} .measurement__bottom-points li .text p', ['layout_one']);
        $this->add_control(
            'pointlist_icon_color',
            [
                'label' => __('Point List Icon Color', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .measurement__bottom-points li .icon' => 'color: {{VALUE}}',
                ],

            ]
        );

        $this->add_control(
            'pointlist_icon_bg_color',
            [
                'label' => __('Point List Icon Bg Color', 'pitoon-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .measurement__bottom-points li .icon' => 'background-color: {{VALUE}}',
                ],

            ]
        );

        $this->end_controls_section();

        //button style
        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__('Button Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'layout_type' => ['layout_three', 'layout_four']
                ]
            ]
        );

        pitoon_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .thm-btn.project-page__btn', '.thm-btn.project-page__btn::before', ['layout_three', 'layout_four']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('measurement-one.php');
    }
}
