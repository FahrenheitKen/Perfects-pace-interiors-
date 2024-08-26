<?php

namespace Layerdrops\Pitoon\Widgets;


class NewConcept extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-new-concept-slider';
    }

    public function get_title()
    {
        return __('New Concept', 'pitoon-addon');
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

        include pitoon_get_elementor_option('concept-one-option.php');
        include pitoon_get_elementor_option('concept-two-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Summary', '{{WRAPPER}} .new-concept__text', ['layout_one', 'layout_two']);

        pitoon_elementor_general_style_options($this, 'Feature Title', '{{WRAPPER}} .new-concept__points li .text h3', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Feature Summary', '{{WRAPPER}} .new-concept__points li .text p', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Feature Icon', '{{WRAPPER}} .new-concept__points li .icon span', ['layout_one', 'layout_two']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('concept-one.php');
        include pitoon_get_template('concept-two.php');
    }
}
