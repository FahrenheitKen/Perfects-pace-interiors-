<?php

namespace Layerdrops\Pitoon\Widgets;


class Tab extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-tab';
    }

    public function get_title()
    {
        return __('Tab', 'pitoon-addon');
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

        include  pitoon_get_elementor_option('tab-one-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Style Options', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two']);

        $this->end_controls_section();

        $this->start_controls_section(
            'feature_style',
            [
                'label' => esc_html__('Tab Options', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        pitoon_elementor_general_style_options($this, 'Tab Title', '{{WRAPPER}} .project-one__title,{{WRAPPER}} .project-two__title', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Tab Content', '{{WRAPPER}} .project-one__sub-title, {{WRAPPER}} .project-two__sub-title', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Tab Icon', '{{WRAPPER}} .project-one__icon span,{{WRAPPER}} .project-two__icon span', ['layout_one', 'layout_two']);

        pitoon_elementor_general_style_options($this, 'Big Title', '{{WRAPPER}} .project-one__big-text,{{WRAPPER}} .project-two__big-text', ['layout_one', 'layout_two']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('tab-one.php');
    }
}
