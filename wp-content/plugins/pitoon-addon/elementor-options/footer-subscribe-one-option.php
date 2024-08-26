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
        'label' => __('Widget Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Newsletter', 'pitoon-addon'),
        'label_block' => true
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h3', 'layout_one');

$this->add_control(
    'mailchimp_url',
    [
        'label' => __('Add Mailchimp URL', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => '#',
        'label_block' => true
    ]
);

$this->add_control(
    'mc_input_placeholder',
    [
        'label' => __('Input Placeholder Text', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Email Address', 'pitoon-addon'),
        'label_block' => true
    ]
);

$this->add_control(
    'checked_title',
    [
        'label' => __('Checked Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('I agree to all your terms and policies', 'pitoon-addon'),
        'label_block' => true
    ]
);

$this->end_controls_section();
