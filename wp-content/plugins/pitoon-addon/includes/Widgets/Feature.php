<?php

namespace Layerdrops\Pitoon\Widgets;


class Feature  extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-feature';
    }

    public function get_title()
    {
        return __('Feature', 'pitoon-addon');
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
                ]
            ]
        );

        $this->end_controls_section();

        include pitoon_get_elementor_option('feature-one-option.php');
        include pitoon_get_elementor_option('feature-two-option.php');


        //General style

        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .feature-one__title a,{{WRAPPER}} .feature-one__hover-title a,{{WRAPPER}} .feature-two__title a ', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'SubTitle', '{{WRAPPER}} .feature-two__text', ['layout_two']);
        pitoon_elementor_general_style_options($this, 'Bottom Text', '{{WRAPPER}} .feature-one__bottom-text-box p', ['layout_one']);
        $this->end_controls_section();

        //button style
        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__('Button Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .feature-one__btn', '{{WRAPPER}} .feature-one__btn:hover', ['layout_one']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('feature-one.php');
        include pitoon_get_template('feature-two.php');
    }
}
