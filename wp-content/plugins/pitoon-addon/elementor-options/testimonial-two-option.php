<?php

$this->start_controls_section(
    'layout_two_content_section',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$layout_two_testimonial = new \Elementor\Repeater();

$layout_two_testimonial->add_control(
    'name',
    [
        'label' => __('Name', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Kevin martin', 'pitoon-addon'),
        'label_block' => true
    ]
);

pitoon_elementor_heading_option($layout_two_testimonial, 'Testimonial Name', 'h3', 'layout_two');

$layout_two_testimonial->add_control(
    'testimonial',
    [
        'label' => __('Testimonial', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Testimonial Content', 'pitoon-addon'),
    ]
);

$layout_two_testimonial->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);


$this->add_control(
    'layout_two_testimonials',
    [
        'label' => __('Testimonial Items', 'pitoon-addon'),
        'prevent_empty' => false,
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_two_testimonial->get_controls(),
        'title_field' => '{{{ name }}}',
    ]
);

$this->add_control(
    'layout_two_bg_image_one',
    [
        'label' => __('Background Image One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->add_control(
    'layout_two_bg_image_two',
    [
        'label' => __('Background Image Two', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);


$this->end_controls_section();
