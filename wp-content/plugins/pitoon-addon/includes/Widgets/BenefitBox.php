<?php

namespace Layerdrops\Pitoon\Widgets;


class BenefitBox extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-benefit-box';
    }

    public function get_title()
    {
        return __('Benefit Box', 'pitoon-addon');
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

        include pitoon_get_elementor_option('benefit-one-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .services-details__benefit-title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .services-details__benefit-text', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Check List Title', '{{WRAPPER}} .services-details__benefit-points li .text p', ['layout_one']);


        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('benefit-one.php');
    }
}
