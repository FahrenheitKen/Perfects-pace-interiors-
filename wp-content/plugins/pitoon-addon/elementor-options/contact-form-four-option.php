<?php

$this->start_controls_section(
    'layout_four_contact_form',
    [
        'label' => __('Contact Form', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_four'
        ]
    ]
);

$this->add_control(
    'layout_four_sec_title',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h2', 'layout_four');

$this->add_control(
    'layout_four_sec_sub_title',
    [
        'label' => __('Section Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_four');


$this->add_control(
    'layout_four_sec_left_icon',
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
    'layout_four_sec_right_icon',
    [
        'label' => __('Section Right Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-angle-right',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'layout_four_sec_summary',
    [
        'label' => __('Section Summary', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Summary', 'pitoon-addon'),
        'default' => __('Default Summary', 'pitoon-addon'),
    ]
);

$this->add_control(
    'layout_four_select_wpcf7_form',
    [
        'label'       => esc_html__('Select your contact form 7', 'pitoon-addon'),
        'label_block' => true,
        'type'        => \Elementor\Controls_Manager::SELECT,
        'options'     => pitoon_post_query('wpcf7_contact_form'),
    ]
);

$layout_four_contact_info = new \Elementor\Repeater();

$layout_four_contact_info->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fas fa-map-marker-alt',
            'library' => 'custom',
        ],
        'label_block' => true,
    ]
);

$layout_four_contact_info->add_control(
    'contact_title',
    [
        'label' => __('Contact Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$layout_four_contact_info->add_control(
    'contact_number',
    [
        'label' => __('Contact Number', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('<a href="tel:8898006802">Free +88 (9800) 6802</a>', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'layout_four_contact_info',
    [
        'label' => __('Contact List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_four_contact_info->get_controls(),
        'title_field' => '{{{ contact_title }}}',
        'prevent_empty' => false,
    ]
);

$this->end_controls_section();
