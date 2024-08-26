<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$layout_one_service = new \Elementor\Repeater();

$layout_one_service->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'default' => __('Default Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($layout_one_service, 'Service Title', 'h3', 'layout_one');

$layout_one_service->add_control(
    'icon',
    [
        'label' => __('Section Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-plus',
            'library' => 'font-awesome',
        ],
    ]
);

$layout_one_service->add_control(
    'icon_two',
    [
        'label' => __('Section Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-online-shopping',
            'library' => 'font-awesome',
        ],
    ]
);

$layout_one_service->add_control(
    'background_shape',
    [
        'label' => __('Background Shape', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$layout_one_service->add_control(
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
        'label_block' => true,
    ]
);

$this->add_control(
    'layout_one_service_items_one',
    [
        'label' => __('Service Items List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_one_service->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->add_control(
    'service_one_item_hr',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$layout_one_service_two = new \Elementor\Repeater();

$layout_one_service_two->add_control(
    'image',
    [
        'label' => __('Background Shape', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$this->add_control(
    'layout_one_service_items_two',
    [
        'label' => __('Satisfied Customer List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_one_service_two->get_controls(),
        'prevent_empty' => false,
    ]
);

$this->add_control(
    'satisfied_customer_txt',
    [
        'label' => __('Satisfied customer text', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::CODE,
        'label_block' => true,
    ]
);

$this->add_control(
    'background_shape_two',
    [
        'label' => __('Background Shape Two', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$this->add_control(
    'background_shape_three',
    [
        'label' => __('Background Shape Three', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$this->add_control(
    'background_shape_four',
    [
        'label' => __('Background Shape Four', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$this->end_controls_section();
