<?php

$this->start_controls_section(
    'layout_three_content_section',
    [
        'label' => __('Slider Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);

$layout_three_sliders = new \Elementor\Repeater();

$layout_three_sliders->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Awesome Title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($layout_three_sliders, 'Title', 'h2', 'layout_three');


$layout_three_sliders->add_control(
    'image_one',
    [
        'label' => __('Image One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$layout_three_sliders->add_control(
    'image_two',
    [
        'label' => __('Image Two', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$layout_three_sliders->add_control(
    'shape_one',
    [
        'label' => __('Shape One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$layout_three_sliders->add_control(
    'button_label',
    [
        'label' => __('Button Label', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Button Label', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$layout_three_sliders->add_control(
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

$this->add_control(
    'layout_three_sliders',
    [
        'label' => __('Main Slider', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_three_sliders->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
