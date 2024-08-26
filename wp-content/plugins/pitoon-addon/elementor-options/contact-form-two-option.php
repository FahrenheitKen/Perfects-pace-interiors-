<?php

$this->start_controls_section(
    'layout_two_contact_form',
    [
        'label' => __('Contact Form', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$this->add_control(
    'layout_two_sec_title',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h2', 'layout_two');


$this->add_control(
    'layout_two_sec_sub_title',
    [
        'label' => __('Section Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_two');

$this->add_control(
    'layout_two_sec_summary',
    [
        'label' => __('Section Summary', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add summary', 'pitoon-addon'),
        'default' => __('Default Summary', 'pitoon-addon'),
    ]
);

$this->add_control(
    'layout_two_sec_left_icon',
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
    'layout_two_sec_right_icon',
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
    'section_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$check_point_list = new \Elementor\Repeater();

$check_point_list->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-check',
            'library' => 'font-awesome',
        ],
    ]
);

$check_point_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default  Text', 'pitoon-addon'),
    ]
);


$this->add_control(
    'point_list',
    [
        'label' => __('Check Lists', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $check_point_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);


$this->add_control(
    'point_list_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'signature_title',
    [
        'label' => __('Signature Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add signature title', 'pitoon-addon'),
        'default' => __('Default Text', 'pitoon-addon'),
    ]
);

$this->add_control(
    'signature_image',
    [
        'label' => __('Signature Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$contact_list = new \Elementor\Repeater();

$contact_list->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-phone-alt',
            'library' => 'font-awesome',
        ],
    ]
);

$contact_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default  Text', 'pitoon-addon'),
    ]
);

$contact_list->add_control(
    'content',
    [
        'label' => __('Content', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add content', 'pitoon-addon'),
        'default' => __('Default Content', 'pitoon-addon'),
    ]
);

$this->add_control(
    'contact_list',
    [
        'label' => __('Contact List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $contact_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->add_control(
    'contact_list_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'layout_two_select_wpcf7_form',
    [
        'label'       => esc_html__('Select your contact form 7', 'pitoon-addon'),
        'label_block' => true,
        'type'        => \Elementor\Controls_Manager::SELECT,
        'options'     => pitoon_post_query('wpcf7_contact_form'),
    ]
);

$this->add_control(
    'bg_shape_layout_two',
    [
        'label' => __('Shape', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->end_controls_section();
