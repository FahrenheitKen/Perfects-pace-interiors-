<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'qrowd-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);
$this->add_control(
    'title',
    [
        'label' => __('Title', 'qrowd-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Register ', 'qrowd-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'email_placeholder',
    [
        'label' => __('Email Placeholder', 'qrowd-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Email Address', 'qrowd-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'password_placeholder',
    [
        'label' => __('Placeholder for Password', 'qrowd-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Password* ', 'qrowd-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'privacy_text',
    [
        'label' => __('Privacy Text', 'qrowd-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('I accept company <a href="#">privacy policy</a>.', 'qrowd-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'register_btn_text',
    [
        'label' => __('Register Button Text', 'qrowd-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Register', 'qrowd-addon'),
        'label_block' => true,
    ]
);

$this->end_controls_section();
