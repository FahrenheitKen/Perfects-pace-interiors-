<?php

$this->start_controls_section(
    'layout_four_content_section',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_four'
        ]
    ]
);


$layout_four_testimonial = new \Elementor\Repeater();

$layout_four_testimonial->add_control(
    'name',
    [
        'label' => __('Name', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Kevin martin', 'pitoon-addon'),
        'label_block' => true
    ]
);


$layout_four_testimonial->add_control(
    'designation',
    [
        'label' => __('Designation', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Customer', 'pitoon-addon'),
        'label_block' => true
    ]
);

$layout_four_testimonial->add_control(
    'testimonial',
    [
        'label' => __('Testimonial', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Testimonial Content', 'pitoon-addon'),
    ]
);


$layout_four_testimonial->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-quote',
            'library' => 'custom-icon',
        ],
    ]
);

$layout_four_testimonial->add_control(
    'rating',
    [
        'label' => __('Rating', 'jetly-addon'),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'size_units' => ['count'],
        'range' => [
            'count' => [
                'min' => 1,
                'max' => 5,
                'step' => 1,
            ],
        ],
        'default' => [
            'unit' => 'count',
            'size' => 5,
        ],
    ]
);

$layout_four_testimonial->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);


$this->add_control(
    'layout_four_testimonials',
    [
        'label' => __('Testimonial Items', 'pitoon-addon'),
        'prevent_empty' => false,
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_four_testimonial->get_controls(),
        'title_field' => '{{{ name }}}',
    ]
);

$this->end_controls_section();
