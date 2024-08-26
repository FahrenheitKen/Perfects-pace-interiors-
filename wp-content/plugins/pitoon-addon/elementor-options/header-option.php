<?php

$this->start_controls_section(
    'logo_section',
    [
        'label' => __('Site Logo', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'light_logo',
    [
        'label' => __('Light Logo', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'logo_dimension',
    [
        'label' => __('Logo Dimension', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
        'description' => __('Set Custom Logo Size.', 'pitoon-addon'),
        'default' => [
            'width' => '94',
            'height' => '44',
        ],
    ]
);


$this->end_controls_section();

$this->start_controls_section(
    'nav_section',
    [
        'label' => __('Navigation', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'nav_menu',
    [
        'label' => __('Select Nav Menu', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => pitoon_get_nav_menu(),
        'label_block' => true,
    ]
);

$this->end_controls_section();

//top bar
$this->start_controls_section(
    'topbar_section',
    [
        'label' => __('Topbar', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => ['layout_one', 'layout_three']
        ]
    ]
);

$topbar_infos = new \Elementor\Repeater();

$topbar_infos->add_control(
    'topbar_icon',
    [
        'label' => __('Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fas fa-map-marker-alt',
            'library' => 'custom',
        ],
        'label_block' => true,
    ]
);

$topbar_infos->add_control(
    'topbar_info_text',
    [
        'label' => __('Topbar Right Info Text', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('30 Commercial Road Fratton, Australia ', 'pitoon-addon'),
        'label_block' => true,
    ]
);


$this->add_control(
    'topbar_infos',
    [
        'label' => __('Topbar Info', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $topbar_infos->get_controls(),
        'title_field' => '{{{ topbar_info_text }}}',
        'prevent_empty' => false,
        'condition' => [
            'layout_type' => ['layout_one', 'layout_two', 'layout_three']
        ]
    ]
);

$this->add_control(
    'header_topbar_navmenu_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'topbar_nav_menu',
    [
        'label' => __('Select Topbar Nav Menu', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => pitoon_get_nav_menu(),
        'label_block' => true,
        'condition' => [
            'layout_type' => ['layout_one', 'layout_three']
        ]
    ]
);

$this->add_control(
    'header_topbar_divider',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$this->add_control(
    'social_title',
    [
        'label' => __('Social Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Follow', 'pitoon-addon'),
        'label_block' => true,
        'condition' => [
            'layout_type' => ['layout_one']
        ]
    ]
);

$topbar_nav_social_icons = new \Elementor\Repeater();

$topbar_nav_social_icons->add_control(
    'social_icon',
    [
        'label' => __('Select Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fab fa-facebook-f',
            'library' => 'brand',
        ],
        'label_block' => true,
    ]
);

$topbar_nav_social_icons->add_control(
    'social_url',
    [
        'label' => __('Add Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => false,
        ],
        'show_label' => false,
    ]
);

$this->add_control(
    'topbar_nav_social_icons',
    [
        'label' => __('Social Icons', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $topbar_nav_social_icons->get_controls(),
        'prevent_empty' => false,
        'condition' => [
            'layout_type' => ['layout_one', 'layout_three']
        ],
        'default' => [
            [
                'social_url' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => false,
                ],
            ],
        ],
        'condition' => [
            'layout_type' => ['layout_one', 'layout_three']
        ]
    ]
);


$this->end_controls_section();

//other
$this->start_controls_section(
    'others_section',
    [
        'label' => __('Others', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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

$this->add_control(
    'cart_enable',
    [
        'label' => __('Display Cart Icon', 'alipes-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'alipes-addon'),
        'label_off' => __('No', 'alipes-addon'),
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);


$nav_social_icons = new \Elementor\Repeater();

$nav_social_icons->add_control(
    'social_icon',
    [
        'label' => __('Select Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fab fa-facebook-f',
            'library' => 'brand',
        ],
        'label_block' => true,
    ]
);

$nav_social_icons->add_control(
    'social_url',
    [
        'label' => __('Add Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => false,
        ],
        'show_label' => false,
    ]
);

$this->add_control(
    'nav_social_icons',
    [
        'label' => __('Social Icons', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $nav_social_icons->get_controls(),
        'prevent_empty' => false,
        'condition' => [
            'layout_type' => ['layout_one', 'layout_three']
        ],
        'default' => [
            [
                'social_url' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => false,
                ],
            ],
        ],
        'condition' => [
            'layout_type' => ['layout_three']
        ]
    ]
);

$this->add_control(
    'header_info_image',
    [
        'label' => __('Info Image Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$this->add_control(
    'header_call_title',
    [
        'label' => __('Call Title', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '1',
        'default' => __('Default Title', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'header_call_number',
    [
        'label' => __('Call Number', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '1',
        'default' => __('Default Number', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'mobile_menu_section',
    [
        'label' => __('Mobile Drawer', 'pitoon-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);


$this->add_control(
    'mobile_menu_logo',
    [
        'label' => __('Mobile Drawer Logo', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'mobile_email',
    [
        'label' => __('Email', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Email', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'mobile_phone',
    [
        'label' => __('Phone', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Phone Number', 'pitoon-addon'),
        'label_block' => true,
    ]
);

$mobile_menu_social_icons = new \Elementor\Repeater();

$mobile_menu_social_icons->add_control(
    'social_icon',
    [
        'label' => __('Select Icon', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => pitoon_get_fa_icons(),
        'default' => 'fa-facebook-f',
        'label_block' => true,
    ]
);

$mobile_menu_social_icons->add_control(
    'social_url',
    [
        'label' => __('Add Url', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'pitoon-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => false,
        ],
        'show_label' => false,
    ]
);

$this->add_control(
    'mobile_menu_social_icons',
    [
        'label' => __('Social Icons', 'pitoon-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $mobile_menu_social_icons->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'social_icon' => 'fa-facebook-f',
                'social_url' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => false,
                ],
            ],
        ],
        'title_field' => '{{{ social_icon }}}',
    ]
);

$this->end_controls_section();
