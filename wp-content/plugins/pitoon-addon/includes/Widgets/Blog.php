<?php

namespace Layerdrops\Pitoon\Widgets;


class Blog extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'pitoon-blog';
    }

    public function get_title()
    {
        return __('Blog', 'pitoon-addon');
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

        include  pitoon_get_elementor_option('blog-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'pitoon-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        pitoon_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Section Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two', 'layout_three']);
        pitoon_elementor_general_style_options($this, 'Section Icon', '{{WRAPPER}} .section-title__icon-box-1 i,{{WRAPPER}} .section-title__icon-box-2 i', ['layout_one', 'layout_two']);

        pitoon_elementor_general_style_options($this, 'Post Title', '{{WRAPPER}} .blog-one__title a,{{WRAPPER}} .blog-two__title a', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Post Content', '{{WRAPPER}} .blog-one__text,{{WRAPPER}} .blog-two__text', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Post Author Name', '{{WRAPPER}} .blog-one__user-text p,{{WRAPPER}} .blog-two__user-text p', ['layout_one', 'layout_two']);

        pitoon_elementor_general_style_options($this, 'Post Date', '{{WRAPPER}} .blog-one__date-box span,{{WRAPPER}} .blog-two__date-box span', ['layout_one', 'layout_two'], 'background-color');
        pitoon_elementor_general_style_options($this, 'Post Date Year', '{{WRAPPER}} .blog-one__date-box p, {{WRAPPER}} .blog-two__date-box p', ['layout_one', 'layout_two']);
        pitoon_elementor_general_style_options($this, 'Comments Text', '{{WRAPPER}} .blog-one__comment p, {{WRAPPER}} .blog-two__comment p', ['layout_one', 'layout_two']);

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

        pitoon_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .blog-one__btn,{{WRAPPER}} .blog-two__btn', '{{WRAPPER}} .blog-one__btn:hover, {{WRAPPER}} .blog-two__btn:hover', ['layout_one', 'layout_two']);

        $this->end_controls_section();

        pitoon_elementor_column_count_options($this, ['layout_one']);
        pitoon_get_elementor_carousel_options($this, ['layout_two']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include pitoon_get_template('blog-one.php');
        include pitoon_get_template('blog-two.php');
    }
}
