<?php

//content
$this->start_controls_section(
    'layout_two_content',
    [
        'label' => __('Content', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$this->add_control(
    'layout_two_sec_title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add Title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h2', 'layout_two');

$this->add_control(
    'layout_two_sec_sub_title',
    [
        'label' => __('SubTitle', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add Sub Title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_two');

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


$layout_two_faq = new \Elementor\Repeater();

$layout_two_faq->add_control(
    'question',
    [
        'label' => __('Question', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Question', 'pitoon-addon'),
        'default' => __('Default Question', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($layout_two_faq, 'Question Title', 'h4', 'layout_two');

$layout_two_faq->add_control(
    'answer',
    [
        'label' => __('Answer', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Answer', 'pitoon-addon'),
        'default' => __('Default Answer', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$layout_two_faq->add_control(
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
    'layout_two_faq_lists',
    [
        'label' => __('FAQ', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_two_faq->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ question }}}',
    ]
);


$this->add_control(
    'layout_two_box_title',
    [
        'label' => __('Box Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add Box Title', 'pitoon-addon'),
        'default' => __('Default Box Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

pitoon_elementor_heading_option($this, 'Box Title', 'h3', 'layout_two');

$this->add_control(
    'layout_two_box_icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-recommend-1',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'bac_image',
    [
        'label' => __('Background Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'bac_shape',
    [
        'label' => __('Background Shape', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$this->end_controls_section();
