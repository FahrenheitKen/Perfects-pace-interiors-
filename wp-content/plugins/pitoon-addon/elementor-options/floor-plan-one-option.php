<?php

//content
$this->start_controls_section(
    'content_one',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'sec_title',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h2', 'layout_one');

$this->add_control(
    'sec_sub_title',
    [
        'label' => __('Section Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_one');

$this->add_control(
    'sec_summary',
    [
        'label' => __('Section Summary', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add summary', 'pitoon-addon'),
        'default' => __('Default Summary', 'pitoon-addon'),
    ]
);


$floor_list = new \Elementor\Repeater();

$floor_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

$floor_list->add_control(
    'content',
    [
        'label' => __('Content', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::CODE,
        'label_block' => true,
        'default' => wp_kses('<li><p>Total area</p><span>2800 sqft</span></li>', 'pitoon_allowed_tags')
    ]
);


$floor_list->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);


$this->add_control(
    'floor_list_one',
    [
        'label' => __('Feature Lists', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $floor_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
