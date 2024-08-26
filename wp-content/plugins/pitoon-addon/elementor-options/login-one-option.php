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
        'default' => __('Login ', 'qrowd-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'user_name_placeholder',
    [
        'label' => __('Placeholder for username', 'qrowd-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Username or Email Address* ', 'qrowd-addon'),
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
    'remember_me_text',
    [
        'label' => __('Remember Me Text', 'qrowd-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Remember Me?', 'qrowd-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'login_btn_text',
    [
        'label' => __('Login Button Text', 'qrowd-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Login', 'qrowd-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'forget_text',
    [
        'label' => __('Forgot Password Text', 'qrowd-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Forgot your Password?', 'qrowd-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'forget_url',
    [
        'label' => __('Forgot Password Url', 'qrowd-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'qrowd-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => true,
        ],
        'show_label' => false,
    ]
);

$this->end_controls_section();
