<?php

//content
$this->start_controls_section(
    'content_three',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);

$this->add_control(
    'layout_three_sec_title',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h2', 'layout_three');

$this->add_control(
    'layout_three_sec_sub_title',
    [
        'label' => __('Section Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

$this->add_control(
    'layout_three_sec_summary',
    [
        'label' => __('Section Summary', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add summary', 'pitoon-addon'),
        'default' => __('Default Summary', 'pitoon-addon'),
    ]
);

$this->add_control(
    'layout_three_sec_left_icon',
    [
        'label' => __('Section Left Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-angle-left',
            'library' => 'font-awesome',
        ],
    ]
);
$this->add_control(
    'layout_three_sec_right_icon',
    [
        'label' => __('Section Right Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-angle-right',
            'library' => 'font-awesome',
        ],
    ]
);


$check_list_three = new \Elementor\Repeater();

$check_list_three->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default  Text', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($check_list_three, 'Choose Title', 'h3', 'layout_three');

$check_list_three->add_control(
    'icon',
    [
        'label' => __('Check Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-assurance',
            'library' => 'font-awesome',
        ],
    ]
);

$check_list_three->add_control(
    'bg_image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$check_list_three->add_control(
    'url',
    [
        'label' => __('Url', 'pitoon-addon'),
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
    'layout_three_choose_list',
    [
        'label' => __('Choose List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $check_list_three->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->add_control(
    'layout_three_bg_one',
    [
        'label' => __('Background Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->end_controls_section();
