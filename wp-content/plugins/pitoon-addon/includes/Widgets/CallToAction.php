<?php

namespace Layerdrops\Pitoon\Widgets;


class CallToAction extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-call-to-action';
    }

    public function get_title()
    {
        return __('Call To Action', 'pitoon-addon');
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

        include pitoon_get_elementor_option('call-to-action-one-option.php');
        include pitoon_get_elementor_option('call-to-action-two-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .cta-one__title, {{WRAPPER}} .cta-two__title', ['layout_one', 'layout_two']);

        $this->end_controls_section();

        //button style
        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__('Button Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'layout_type' => ['layout_one', 'layout_two']
                ]
            ]
        );

        pitoon_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .thm-btn', '{{WRAPPER}} .thm-btn:before', ['layout_one', 'layout_two']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('call-to-action-one.php');
        include pitoon_get_template('call-to-action-two.php');
    }
}
