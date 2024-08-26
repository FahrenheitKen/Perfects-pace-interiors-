<?php

//content
$this->start_controls_section(
    'content_two',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$this->add_control(
    'point_title_two',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Point Title', 'h4', 'layout_two');

$this->add_control(
    'point_sub_title_two',
    [
        'label' => __('Section Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

$check_list_two = new \Elementor\Repeater();

$check_list_two->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default  Text', 'pitoon-addon'),
    ]
);

$check_list_two->add_control(
    'icon',
    [
        'label' => __('Check Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-tick',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'check_list_two',
    [
        'label' => __('Check List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $check_list_two->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->add_control(
    'pont_box_divider_two',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);


$this->add_control(
    'point_box_image_two',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->end_controls_section();
