<?php

//content
$this->start_controls_section(
    'content_one',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'sec_title',
    [
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h2', 'layout_one');


$this->add_control(
    'sec_sub_title',
    [
        'label' => __('Section Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_one');


$neighbour_faq = new \Elementor\Repeater();

$neighbour_faq->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($neighbour_faq, 'Accordian Title', 'h4', 'layout_one');

$neighbour_faq->add_control(
    'sub_title',
    [
        'label' => __('Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Sub Title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$neighbour_faq->add_control(
    'summary',
    [
        'label' => __('Summary', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Summary', 'pitoon-addon'),
        'default' => __('Default Summary', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$neighbour_faq->add_control(
    'active_status',
    [
        'label' => __('Is active?', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'pitoon-addon'),
        'label_off' => __('No', 'pitoon-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);


$this->add_control(
    'neighbour_faq_lists',
    [
        'label' => __('Neighborhood List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $neighbour_faq->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->add_control(
    'bac_image_one',
    [
        'label' => __('Backround Image One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$this->add_control(
    'bac_image_two',
    [
        'label' => __('Backround Image Two', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);


$this->end_controls_section();
