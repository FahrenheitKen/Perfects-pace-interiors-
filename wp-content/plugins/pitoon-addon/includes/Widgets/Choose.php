<?php

namespace Layerdrops\Pitoon\Widgets;

class Choose extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-choose';
    }

    public function get_title()
    {
        return __('Choose', 'pitoon-addon');
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

        include pitoon_get_elementor_option('choose-one-option.php');
        include pitoon_get_elementor_option('choose-two-option.php');
        include pitoon_get_elementor_option('choose-three-option.php');
        include pitoon_get_elementor_option('choose-four-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .why-choose-one__title,{{WRAPPER}} .why-choose-two__title,{{WRAPPER}} .why-choose-three__left .section-title__title,{{WRAPPER}} .why-choose-one__experience-title', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);
        pitoon_elementor_general_style_options($this, 'Subtitle', '{{WRAPPER}} .why-choose-one__text,{{WRAPPER}} .why-choose-two__sub-title p,{{WRAPPER}} .why-choose-three__left .section-title__tagline', ['layout_one', 'layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Summary', '{{WRAPPER}} .why-choose-one__text,{{WRAPPER}} .why-choose-three__text', ['layout_three']);
        pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_three']);

        pitoon_elementor_general_style_options($this, 'Point List', '{{WRAPPER}} .why-choose-one__points li .text p,{{WRAPPER}} .why-choose-two__points-single .text p', ['layout_one', 'layout_two']);

        pitoon_elementor_general_style_options($this, 'Choose Title', '{{WRAPPER}} .why-choose-three__title h3 a', ['layout_three']);

        pitoon_elementor_general_style_options($this, 'Feature Title', '{{WRAPPER}} .why-choose-one__points li .content h3', ['layout_four']);
        pitoon_elementor_general_style_options($this, 'Feature SubTitle', '{{WRAPPER}} .why-choose-one__points li .content p', ['layout_four']);


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

        pitoon_elementor_button_style_options($this, 'Video Button', '{{WRAPPER}} .why-choose-one__video-icon', '{{WRAPPER}} .why-choose-one__video-icon:hover', ['layout_one']);
        pitoon_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .thm-btn', '{{WRAPPER}} .thm-btn::before', ['layout_two']);
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('choose-one.php');
        include pitoon_get_template('choose-two.php');
        include pitoon_get_template('choose-three.php');
        include pitoon_get_template('choose-four.php');
    }
}
