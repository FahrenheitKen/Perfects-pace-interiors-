<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Slider Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$sliders = new \Elementor\Repeater();

$sliders->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Awesome Title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($sliders, 'Title', 'h2', 'layout_one');

$sliders->add_control(
    'sub_title',
    [
        'label' => __('Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add paragraph text', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

$sliders->add_control(
    'button_label',
    [
        'label' => __('Button Label', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Button Label', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$sliders->add_control(
    'button_url',
    [
        'label' => __('Button Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => false,
        ],
        'show_label' => false,
    ]
);

$sliders->add_control(
    'background_image',
    [
        'label' => __('Background Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$sliders->add_control(
    'shape_one',
    [
        'label' => __('Shape One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$sliders->add_control(
    'shape_two',
    [
        'label' => __('Shape Two', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$sliders->add_control(
    'shape_three',
    [
        'label' => __('Shape Three', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);


$this->add_control(
    'sliders',
    [
        'label' => __('Main Slider', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $sliders->get_controls(),
        'title_field' => '{{{ title }}}',
        'prevent_empty' => false,
    ]
);

$this->end_controls_section();
