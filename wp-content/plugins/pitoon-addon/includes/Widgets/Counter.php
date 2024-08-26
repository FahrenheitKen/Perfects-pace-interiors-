<?php

namespace Layerdrops\Pitoon\Widgets;


class Counter extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-counter';
    }

    public function get_title()
    {
        return __('Counter', 'pitoon-addon');
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

        include pitoon_get_elementor_option('counter-one-option.php');
        include pitoon_get_elementor_option('counter-two-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .counter-one__single h3,{{WRAPPER}} .counter-two__content h3', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Number', '{{WRAPPER}} .counter-one__text,{{WRAPPER}} .counter-two__text', ['layout_one', 'layout_two']);

        $this->end_controls_section();

        pitoon_elementor_column_count_options($this, ['layout_one']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('counter-one.php');
        include pitoon_get_template('counter-two.php');
    }
}
