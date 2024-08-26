<?php

namespace Layerdrops\Pitoon;

class Assets
{

    /**
     * Class constructor
     */
    function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'register_assets']);
        add_action('admin_enqueue_scripts', [$this, 'register_assets']);
    }

    /**
     * All available scripts
     *
     * @return array
     */
    public function get_scripts()
    {
        return [
            'bootstrap-select' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/bootstrap-select/js/bootstrap-select.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/bootstrap-select/js/bootstrap-select.min.js'),
                'deps'    => ['jquery', 'bootstrap']
            ],
            'jquery-bxslider' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/bxslider/jquery.bxslider.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/bxslider/jquery.bxslider.min.js'),
                'deps'    => ['jquery']
            ],
            'countdown' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/countdown/countdown.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/countdown/countdown.min.js'),
                'deps'    => ['jquery']
            ],
            'circle-type' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/circleType/jquery.circleType.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/circleType/jquery.circleType.js'),
                'deps'    => ['jquery']
            ],
            'circle-lettering' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/circleType/jquery.lettering.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/circleType/jquery.lettering.min.js'),
                'deps'    => ['jquery']
            ],
            'jarallax' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/jarallax/jarallax.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/jarallax/jarallax.min.js'),
                'deps'    => ['jquery']
            ],
            'jquery-ajaxchimp' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js'),
                'deps'    => ['jquery']
            ],
            'jquery-appear' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/jquery-appear/jquery.appear.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/jquery-appear/jquery.appear.min.js'),
                'deps'    => ['jquery']
            ],
            'jquery-circle-progress' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/jquery-circle-progress/jquery.circle-progress.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js'),
                'deps'    => ['jquery']
            ],
            'jquery-magnific-popup' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js'),
                'deps'    => ['jquery']
            ],
            'odometer' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/odometer/odometer.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/odometer/odometer.min.js'),
                'deps'    => ['jquery']
            ],
            'owl-carousel' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/owl-carousel/owl.carousel.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/owl-carousel/owl.carousel.min.js'),
                'deps'    => ['jquery']
            ],
            'swiper' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/swiper/swiper.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/swiper/swiper.min.js'),
                'deps'    => ['jquery']
            ],
            'wow' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/wow/wow.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/wow/wow.js'),
                'deps'    => ['jquery']
            ],

            'sharer' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/sharer/sharer.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/sharer/sharer.min.js'),
                'deps'    => ['jquery']
            ],

            'select2' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/select2/js/select2.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/select2/js/select2.min.js'),
                'deps'    => ['jquery']
            ],
            'range-slider' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/rangeSlider/js/ion.rangeSlider.min.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/rangeSlider/js/ion.rangeSlider.min.js'),
                'deps'    => ['jquery']
            ],
            'pitoon-addon-customizer' => [
                'src'     => PITOON_ADDON_ASSETS . '/js/pitoon-addon-customizer.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/js/pitoon-addon-customizer.js'),
                'deps'    => ['jquery', 'select2']
            ],
            'pitoon-addon-script' => [
                'src'     => PITOON_ADDON_ASSETS . '/js/pitoon-addon.js',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/js/pitoon-addon.js'),
                'deps'    => ['jquery']
            ]
        ];
    }

    /**
     * All available styles
     *
     * @return array
     */
    public function get_styles()
    {
        return [
            'animate' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/animate/animate.min.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/animate/animate.min.css')
            ],
            'range-slider' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/rangeSlider/css/ion.rangeSlider.min.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/rangeSlider/css/ion.rangeSlider.min.css')
            ],
            'custom-animate' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/animate/custom-animate.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/animate/custom-animate.css')
            ],
            'bootstrap-select' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/bootstrap-select/css/bootstrap-select.min.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')
            ],
            'bxslider' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/bxslider/jquery.bxslider.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/bxslider/jquery.bxslider.css')
            ],
            'jarallax' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/jarallax/jarallax.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/jarallax/jarallax.css')
            ],
            'jquery-magnific-popup' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/jquery-magnific-popup/jquery.magnific-popup.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')
            ],
            'odometer' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/odometer/odometer.min.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/odometer/odometer.min.css')
            ],
            'owl-carousel' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/owl-carousel/owl.carousel.min.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/owl-carousel/owl.carousel.min.css')
            ],
            'owl-theme' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/owl-carousel/owl.theme.default.min.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/owl-carousel/owl.theme.default.min.css')
            ],
            'reey-font' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/reey-font/stylesheet.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/reey-font/stylesheet.css')
            ],
            'swiper' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/swiper/swiper.min.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/swiper/swiper.min.css')
            ],
            'select2' => [
                'src'     => PITOON_ADDON_ASSETS . '/vendors/select2/css/select2.min.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/vendors/select2/css/select2.min.css')
            ],
            'pitoon-addon-style' => [
                'src'     => PITOON_ADDON_ASSETS . '/css/pitoon-addon.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/css/pitoon-addon.css')
            ],
            'pitoon-addon-admin-style' => [
                'src'     => PITOON_ADDON_ASSETS . '/css/pitoon-addon-admin.css',
                'version' => filemtime(PITOON_ADDON_PATH . '/assets/css/pitoon-addon-admin.css')
            ]
        ];
    }

    /**
     * Register scripts and styles
     *
     * @return void
     */
    public function register_assets()
    {
        $scripts = $this->get_scripts();
        $styles  = $this->get_styles();

        foreach ($scripts as $handle => $script) {
            $deps = isset($script['deps']) ? $script['deps'] : false;

            wp_register_script($handle, $script['src'], $deps, $script['version'], true);
        }

        foreach ($styles as $handle => $style) {
            $deps = isset($style['deps']) ? $style['deps'] : false;

            wp_register_style($handle, $style['src'], $deps, $style['version']);
        }
    }
}
