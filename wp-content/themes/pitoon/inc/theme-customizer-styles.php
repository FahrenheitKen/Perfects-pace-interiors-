<?php

/**
 * pitoon functions for getting inline styles from theme customizer
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pitoon
 */

if (!function_exists('pitoon_theme_customizer_styles')) :
	function pitoon_theme_customizer_styles()
	{

		// pitoon color option

		$pitoon_inline_style = '';
		$pitoon_inline_style .= ':root {
			--pitoon-primary: ' . get_theme_mod('theme_primary_color', sanitize_hex_color('#f5f3ee')) . ';
			--pitoon-primary-rgb: ' . pitoon_hex_to_rgb(get_theme_mod('theme_primary_color', sanitize_hex_color('#f5f3ee'))) . ';

			--pitoon-base: ' . get_theme_mod('theme_base_color', sanitize_hex_color('#f9be17')) . ';
			--pitoon-base-rgb: ' . pitoon_hex_to_rgb(get_theme_mod('theme_base_color', sanitize_hex_color('#f9be17'))) . ';

			--pitoon-black: ' . get_theme_mod('theme_black_color', sanitize_hex_color('#04171a')) . ';
			--pitoon-black-rgb: ' . pitoon_hex_to_rgb(get_theme_mod('theme_black_color', sanitize_hex_color('#04171a'))) . ';
		}';

		$pitoon_inner_banner_bg = get_theme_mod('page_header_bg_image');
		$pitoon_inline_style .= '.page-header__bg { background-image: url(' . $pitoon_inner_banner_bg . '); } ';
		$pitoon_inline_style .= '.page-header__bg-two { background-image: url(' . $pitoon_inner_banner_bg . '); } ';

		$pitoon_preloader_icon = get_theme_mod('preloader_image');
		if ($pitoon_preloader_icon) {
			$pitoon_inline_style .= '.preloader .preloader__image { background-image: url(' . $pitoon_preloader_icon . '); } ';
		}

		if (is_page()) {


			$pitoon_page_primary_color = empty(get_post_meta(get_the_ID(), 'pitoon_primary_color', true)) ? get_theme_mod('theme_primary_color', sanitize_hex_color('#f3f3f3')) : get_post_meta(get_the_ID(), 'pitoon_primary_color', true);

			$pitoon_page_base_color = empty(get_post_meta(get_the_ID(), 'pitoon_base_color', true)) ? get_theme_mod('theme_base_color', sanitize_hex_color('#0ca554')) : get_post_meta(get_the_ID(), 'pitoon_base_color', true);

			$pitoon_page_black_color = empty(get_post_meta(get_the_ID(), 'pitoon_black_color', true)) ? get_theme_mod('theme_black_color', sanitize_hex_color('#151515')) : get_post_meta(get_the_ID(), 'pitoon_black_color', true);

			$pitoon_inline_style .= ':root {
				--pitoon-primary: ' . $pitoon_page_primary_color . ';
				--pitoon-primary-rgb: ' . pitoon_hex_to_rgb($pitoon_page_primary_color) . ';
				--pitoon-base: ' . $pitoon_page_base_color . ';
				--pitoon-base-rgb: ' . pitoon_hex_to_rgb($pitoon_page_base_color) . ';
				--pitoon-black: ' . $pitoon_page_black_color . ';
				--pitoon-black-rgb: ' . pitoon_hex_to_rgb($pitoon_page_black_color) . ';
			}';

			$pitoon_page_header_bg = empty(get_post_meta(get_the_ID(), 'pitoon_set_header_image', true)) ? get_theme_mod('page_header_bg_image') : get_post_meta(get_the_ID(), 'pitoon_set_header_image', true);

			$pitoon_inline_style .= '.page-header__bg { background-image: url(' . $pitoon_page_header_bg . '); }';
			$pitoon_inline_style .= '.page-header__bg-two { background-image: url(' . $pitoon_inner_banner_bg . '); } ';
		}

		if (is_singular('post')) {
			$pitoon_post_header_bg = empty(get_post_meta(get_the_ID(), 'pitoon_set_header_image', true)) ? get_theme_mod('page_header_bg_image') : get_post_meta(get_the_ID(), 'pitoon_set_header_image', true);

			$pitoon_inline_style .= '.page-header__bg { background-image: url(' . $pitoon_post_header_bg . '); }';
			$pitoon_inline_style .= '.page-header__bg-two { background-image: url(' . $pitoon_inner_banner_bg . '); } ';
		}


		wp_add_inline_style('pitoon-style', $pitoon_inline_style);
	}
endif;

add_action('wp_enqueue_scripts', 'pitoon_theme_customizer_styles');
