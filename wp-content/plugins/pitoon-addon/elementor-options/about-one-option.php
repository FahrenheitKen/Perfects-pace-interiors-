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

$this->add_control(
    'sec_highlighted_text',
    [
        'label' => __('Section Highlighted Text', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add highlighted text', 'pitoon-addon'),
        'default' => __('Default highlighted text', 'pitoon-addon'),
    ]
);

$this->add_control(
    'summary',
    [
        'label' => __('Summary One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Text', 'pitoon-addon'),
        'default' => __('Default Summary Text', 'pitoon-addon'),
    ]
);

$this->add_control(
    'sec_left_icon',
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
    'sec_right_icon',
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
    'sec_certified_title',
    [
        'label' => __('Certified Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add certified title', 'pitoon-addon'),
        'default' => __('Default Certified Title', 'pitoon-addon'),
    ]
);

$this->add_control(
    'sec_certified_icon',
    [
        'label' => __('Section Right Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-certificate',
            'library' => 'font-awesome',
        ],
    ]
);

$feature_list = new \Elementor\Repeater();

$feature_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Feature Title Text', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($feature_list, 'Feature Title', 'h4', 'layout_one');

$feature_list->add_control(
    'subtitle',
    [
        'label' => __('SubTitle', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Feature Subtitle Text', 'pitoon-addon'),
    ]
);

$feature_list->add_control(
    'icon',
    [
        'label' => __('Check Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-down-right',
            'library' => 'font-awesome',
        ],
    ]
);

$this->add_control(
    'layout_one_feature_list',
    [
        'label' => __('Feature Lists', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $feature_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);


$progress_list = new \Elementor\Repeater();

$progress_list->add_control(
    'title',
    [
        'label' => __('Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Add title', 'pitoon-addon'),
        'default' => __('Default Progress Title Text', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($progress_list, 'Progress Title', 'h4', 'layout_one');

$progress_list->add_control(
    'number',
    [
        'label' => __('SubTitle', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add number', 'pitoon-addon'),
        'default' => __('96%', 'pitoon-addon'),
    ]
);

$this->add_control(
    'layout_one_progress_list',
    [
        'label' => __('Progress Ttem Lists', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $progress_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->add_control(
    'button_label',
    [
        'label' => __('Button Label', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Button Label', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'button_url',
    [
        'label' => __('Button Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => false,
        ],
        'show_label' => true,
    ]
);


$this->end_controls_section();

$this->start_controls_section(
    'section_image_one',
    [
        'label' => __('Images', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'bg_image_one',
    [
        'label' => __('Background Image One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'bg_image_two',
    [
        'label' => __('Background Image Two', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'bg_shape_one',
    [
        'label' => __('Background Shape One', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->add_control(
    'bg_shape_two',
    [
        'label' => __('Background Shape Two', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->end_controls_section();
