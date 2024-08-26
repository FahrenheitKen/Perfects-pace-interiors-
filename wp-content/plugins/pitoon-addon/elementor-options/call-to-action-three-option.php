<?php

$this->start_controls_section(
    'layout_three_content_section',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);

$this->add_control(
    'layout_three_title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add Title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Title', 'h3', 'layout_three');

$this->add_control(
    'layout_three_sub_title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add Title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);


$this->add_control(
    'layout_three_button_label',
    [
        'label' => __('Button Label', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Button Label', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'layout_three_button_url',
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
        'show_label' => true,
    ]
);


$this->add_control(
    'layout_three_background_shape',
    [
        'label' => __('Add Background Shape', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$this->end_controls_section();
