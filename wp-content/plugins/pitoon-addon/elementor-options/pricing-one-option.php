<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Pricing Content', 'pitoon-addon'),
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
        'rows' => '2',
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
        'rows' => '2',
        'placeholder' => __('Add sub title', 'pitoon-addon'),
        'default' => __('Default Sub Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_one');

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
    'pricing_layout_one_pricing_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'monthly_heading',
    [
        'label' => __('Monthly Heading', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Monthly', 'pitoon-addon'),
        'default' => __('Monthly', 'pitoon-addon'),
    ]
);

$this->add_control(
    'yearly_heading',
    [
        'label' => __('Yearly Heading', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Yearly', 'pitoon-addon'),
        'default' => __('Yearly', 'pitoon-addon'),
    ]
);

$pricing_monthly_list = new \Elementor\Repeater();

$pricing_monthly_list->add_control(
    'plan_title',
    [
        'label' => __('Plan Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Default Plan', 'pitoon-addon'),
        'default' => __('Default Plan', 'pitoon-addon'),
    ]
);

$pricing_monthly_list->add_control(
    'price',
    [
        'label' => __('Price', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'label_block' => true,
        'default' => wp_kses('$330', 'pitoon_allowed_tags')
    ]
);

pitoon_elementor_heading_option($pricing_monthly_list, 'Price', 'h3', 'layout_one');

$pricing_monthly_list->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-pen-tool',
            'library' => 'font-awesome',
        ],
    ]
);

$pricing_monthly_list->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$pricing_monthly_list->add_control(
    'service_title',
    [
        'label' => __('Service Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Default Service Title', 'pitoon-addon'),
        'default' => __('Default Service Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($pricing_monthly_list, 'Service Title', 'h4', 'layout_one');

$pricing_monthly_list->add_control(
    'service_list',
    [
        'label' => __('Service List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::CODE,
        'label_block' => true,
        'default' => wp_kses('<li> <div class="icon"> <i class="fa fa-check"></i> </div> <div class="text"> <p>10 Days Time</p> </div> </li> <li> <div class="icon"> <i class="fa fa-check"></i> </div> <div class="text"> <p>Interview Training</p> </div> </li> <li> <div class="icon"> <i class="fa fa-check"></i> </div> <div class="text"> <p>Guarantee Approval</p> </div> </li> <li> <div class="icon"> <i class="fa fa-check"></i> </div> <div class="text"> <p>Documents Submission</p> </div> </li>', 'pitoon_allowed_tags')
    ]
);

$pricing_monthly_list->add_control(
    'button_label',
    [
        'label' => __('Button Label', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Button Label', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$pricing_monthly_list->add_control(
    'url',
    [
        'label' => __('Url', 'pitoon-addon'),
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

$this->add_control(
    'pricing_monthly_list',
    [
        'label' => __('Monthly List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $pricing_monthly_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ plan_title }}}',
    ]
);

$this->add_control(
    'pricing_layout_one_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$pricing_yearly_list = new \Elementor\Repeater();

$pricing_yearly_list->add_control(
    'plan_title',
    [
        'label' => __('Plan Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Default Plan', 'pitoon-addon'),
        'default' => __('Default Plan', 'pitoon-addon'),
    ]
);

$pricing_yearly_list->add_control(
    'price',
    [
        'label' => __('Price', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'label_block' => true,
        'default' => wp_kses('$730', 'pitoon_allowed_tags')
    ]
);

pitoon_elementor_heading_option($pricing_yearly_list, 'Price', 'h2', 'layout_one');


$pricing_yearly_list->add_control(
    'icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-pen-tool',
            'library' => 'font-awesome',
        ],
    ]
);

$pricing_yearly_list->add_control(
    'image',
    [
        'label' => __('Image', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$pricing_yearly_list->add_control(
    'service_title',
    [
        'label' => __('Service Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'placeholder' => __('Default Service Title', 'pitoon-addon'),
        'default' => __('Default Service Title', 'pitoon-addon'),
    ]
);

pitoon_elementor_heading_option($pricing_yearly_list, 'Service Title', 'h4', 'layout_one');

$pricing_yearly_list->add_control(
    'service_list',
    [
        'label' => __('Service List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::CODE,
        'label_block' => true,
        'default' => wp_kses('<li> <div class="icon"> <i class="fa fa-check"></i> </div> <div class="text"> <p>10 Days Time</p> </div> </li> <li> <div class="icon"> <i class="fa fa-check"></i> </div> <div class="text"> <p>Interview Training</p> </div> </li> <li> <div class="icon"> <i class="fa fa-check"></i> </div> <div class="text"> <p>Guarantee Approval</p> </div> </li> <li> <div class="icon"> <i class="fa fa-check"></i> </div> <div class="text"> <p>Documents Submission</p> </div> </li>', 'pitoon_allowed_tags')
    ]
);

$pricing_yearly_list->add_control(
    'button_label',
    [
        'label' => __('Button Label', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Button Label', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$pricing_yearly_list->add_control(
    'url',
    [
        'label' => __('Url', 'pitoon-addon'),
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

$this->add_control(
    'pricing_yearly_list',
    [
        'label' => __('Monthly List', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $pricing_yearly_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ plan_title }}}',
    ]
);

$this->end_controls_section();
