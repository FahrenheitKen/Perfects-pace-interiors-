<?php

$this->start_controls_section(
    'layout_three_content_section',
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
        'label' => __('Section Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Title', 'h2', 'layout_three');

$this->add_control(
    'layout_three_sec_sub_title',
    [
        'label' => __('Section Sub Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_three');


$this->add_control(
    'layout_three_sec_left_icon',
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
    'layout_three_sec_right_icon',
    [
        'label' => __('Section Right Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa fa-angle-right',
            'library' => 'font-awesome',
        ],
    ]
);

$layout_three_testimonial = new \Elementor\Repeater();

$layout_three_testimonial->add_control(
    'name',
    [
        'label' => __('Name', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Kevin martin', 'pitoon-addon'),
        'label_block' => true
    ]
);


$layout_three_testimonial->add_control(
    'designation',
    [
        'label' => __('Designation', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Customer', 'pitoon-addon'),
        'label_block' => true
    ]
);

$layout_three_testimonial->add_control(
    'rating',
    [
        'label' => __('Rating', 'jetly-addon'),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'size_units' => ['count'],
        'range' => [
            'count' => [
                'min' => 1,
                'max' => 5,
                'step' => 1,
            ],
        ],
        'default' => [
            'unit' => 'count',
            'size' => 5,
        ],
    ]
);

$layout_three_testimonial->add_control(
    'testimonial',
    [
        'label' => __('Testimonial', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Testimonial Content', 'pitoon-addon'),
    ]
);


$layout_three_testimonial->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->add_control(
    'layout_three_testimonials',
    [
        'label' => __('Testimonial Items', 'pitoon-addon'),
        'prevent_empty' => false,
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_three_testimonial->get_controls(),
        'title_field' => '{{{ name }}}',
    ]
);

$this->add_control(
    'layout_three_bac_image',
    [
        'label' => __('Background Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->add_control(
    'layout_three_image_one',
    [
        'label' => __('Image One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);
$this->add_control(
    'layout_three_image_two',
    [
        'label' => __('Image Two', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);
$this->add_control(
    'layout_three_image_three',
    [
        'label' => __('Image Three', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);
$this->add_control(
    'layout_three_image_four',
    [
        'label' => __('Image Four', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->end_controls_section();
