<?php

namespace Layerdrops\Pitoon\Widgets;


class FloorPlan extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-floor-plan';
    }

    public function get_title()
    {
        return __('Floor Plan', 'pitoon-addon');
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

        include pitoon_get_elementor_option('floor-plan-one-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Style Options', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .section-title__title', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Section Summary', '{{WRAPPER}} .floor-plan__top-text', ['layout_one']);

        pitoon_elementor_general_style_options($this, 'Name', '{{WRAPPER}} .floor-plan__main-tab-box .tab-buttons .tab-btn span', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .floor-plan__tab-content-details li p', ['layout_one']);
        pitoon_elementor_general_style_options($this, 'Content', '{{WRAPPER}} .floor-plan__tab-content-details li span', ['layout_one']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('floor-plan-one.php');
    }
}
