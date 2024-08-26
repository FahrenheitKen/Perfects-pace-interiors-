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

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_three');

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

$layout_three_service = new \Elementor\Repeater();

$layout_three_service->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($layout_three_service, 'Service Title', 'h3', 'layout_three');

$layout_three_service->add_control(
    'subtitle',
    [
        'label' => __('SubTitle', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Sub Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$layout_three_service->add_control(
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
    ]
);


$layout_three_service->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$layout_three_service->add_control(
    'point_list',
    [
        'label' => __('Point List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::CODE,
        'label_block' => true,
        'default' => wp_kses('<li><div class="icon"><span class="icon-down-right"></span></div><div class="text"></div></li>', 'pitoon_allowed_tags')
    ]
);

$layout_three_service->add_control(
    'icon',
    [
        'label' => __('Count Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-plus',
            'library' => 'custom-icon',
        ],
    ]
);

$this->add_control(
    'layout_three_service_items',
    [
        'label' => __('Service Items', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_three_service->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);


$this->end_controls_section();
