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

$this->add_control(
    'title',
    [
        'label' => __('Add Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Contact', 'pitoon-addon')
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h3', 'layout_one');

$this->add_control(
    'text',
    [
        'label' => __('Text', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add paragraph text', 'pitoon-addon'),
        'default' => __('80 Road Broklyn Street, 600 <br> New York, USA', 'pitoon-addon'),
    ]
);

$footer_contact_list = new \Elementor\Repeater();

$footer_contact_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('<a href="mailto:needhelp@company.com">needhelp@company.com</a>', 'pitoon-addon'),
    ]
);

$footer_contact_list->add_control(
    'icon',
    [
        'label' => __('Check Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fas fa-envelope',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'footer_contact_list',
    [
        'label' => __('Contact Info', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $footer_contact_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);


$this->end_controls_section();
