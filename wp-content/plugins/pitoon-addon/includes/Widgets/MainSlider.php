<?php

namespace Layerdrops\Pitoon\Widgets;


class MainSlider extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-main-slider';
    }

    public function get_title()
    {
        return __('Main Slider', 'pitoon-addon');
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
                ]
            ]
        );


        $this->end_controls_section();

        include pitoon_get_elementor_option('main-slider-one-option.php');
        include pitoon_get_elementor_option('main-slider-two-option.php');
        include pitoon_get_elementor_option('main-slider-three-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .main-slider__title,{{WRAPPER}} .main-slider-two__sub-title,{{WRAPPER}} .main-slider-three__title', ['layout_one', 'layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .main-slider__sub-title,{{WRAPPER}} .main-slider-two__title', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Highlighted Text', '{{WRAPPER}} .main-slider-two__title span', ['layout_two']);
        $this->end_controls_section();

        //button style
        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__('Button Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .thm-btn.main-slider__btn,{{WRAPPER}} a.thm-btn', '{{WRAPPER}} .main-slider__btn:before,{{WRAPPER}} .main-slider-two__btn:before', ['layout_one', 'layout_three']);

        $this->end_controls_section();

        pitoon_get_elementor_carousel_options($this, ['layout_one', 'layout_two', 'layout_three']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('main-slider-one.php');
        include pitoon_get_template('main-slider-two.php');
        include pitoon_get_template('main-slider-three.php');
    }
}
