<?php

namespace Layerdrops\Pitoon\Widgets;


class Project extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-project';
    }

    public function get_title()
    {
        return __('Project', 'pitoon-addon');
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
                    'layout_five' => __('Layout Five', 'pitoon-addon')

                ]
            ]
        );

        $this->end_controls_section();

        include pitoon_get_elementor_option('project-one-option.php');
        include pitoon_get_elementor_option('project-two-option.php');
        include pitoon_get_elementor_option('project-three-option.php');
        include pitoon_get_elementor_option('project-four-option.php');
        include pitoon_get_elementor_option('project-five-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);
        pitoon_elementor_general_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);
        pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);

        pitoon_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .project-two__title a,{{WRAPPER}} .project-three__title a,{{WRAPPER}} .project-one__title a,{{WRAPPER}} .project-one__title a', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);
        pitoon_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .project-two__sub-title,{{WRAPPER}} .project-three__sub-title,{{WRAPPER}} .project-one__tag p', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);

        $this->end_controls_section();

        pitoon_get_elementor_carousel_options($this, ['layout_one', 'layout_two', 'layout_four']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('project-one.php');
        include pitoon_get_template('project-two.php');
        include pitoon_get_template('project-three.php');
        include pitoon_get_template('project-four.php');
        include pitoon_get_template('project-five.php');
    }
}
