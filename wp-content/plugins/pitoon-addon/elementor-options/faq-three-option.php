<?php

//content
$this->start_controls_section(
    'layout_three_content',
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
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add Title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h3', 'layout_three');

$this->add_control(
    'layout_three_icon_image',
    [
        'label' => __('Logo Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$this->add_control(
    'search_enable',
    [
        'label' => __('Enable Search?', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'pitoon-addon'),
        'label_off' => __('No', 'pitoon-addon'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);


$layout_three_faq = new \Elementor\Repeater();

$layout_three_faq->add_control(
    'question',
    [
        'label' => __('Question', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Question', 'pitoon-addon'),
        'default' => __('Default Question', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($layout_three_faq, 'Question Title', 'h4', 'layout_three');

$layout_three_faq->add_control(
    'answer',
    [
        'label' => __('Answer', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Answer', 'pitoon-addon'),
        'default' => __('Default Answer', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$layout_three_faq->add_control(
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
    'layout_three_faq_lists',
    [
        'label' => __('FAQ', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_three_faq->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ question }}}',
    ]
);

$this->add_control(
    'faq_three_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$contact_box_list = new \Elementor\Repeater();

$contact_box_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($contact_box_list, 'Contact Title', 'h3', 'layout_three');

$contact_box_list->add_control(
    'contact_title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add contact title', 'pitoon-addon'),
        'default' => __('Default Contact Title', 'pitoon-addon'),
    ]
);

$contact_box_list->add_control(
    'contact_info',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add contact Info', 'pitoon-addon'),
        'default' => __('Quick <a href="mailto:Needhelp@company.com">Needhelp@company.com</a>', 'pitoon-addon'),
    ]
);

$contact_box_list->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-envelope',
            'library' => 'font-awesome',
        ],
    ]
);

$contact_box_list->add_control(
    'bac_shape',
    [
        'label' => __('Shape', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);


$this->add_control(
    'layout_three_contact_box_list',
    [
        'label' => __('Contact Box List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $contact_box_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
