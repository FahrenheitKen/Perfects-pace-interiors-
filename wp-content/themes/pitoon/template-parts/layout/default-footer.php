<?php

/**
 * Template part for displaying footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pitoon
 */
?>


<?php
$pitoon_page_id     = get_queried_object_id();
$pitoon_custom_footer_status = !empty(get_post_meta($pitoon_page_id, 'pitoon_custom_footer_status', true)) ? get_post_meta($pitoon_page_id, 'pitoon_custom_footer_status', true) : 'off';

$pitoon_custom_footer_id = '';
if ((is_page() && 'on' === $pitoon_custom_footer_status) || (is_singular('portfolio') && 'on' === $pitoon_custom_footer_status) || (is_singular('service') && 'on' === $pitoon_custom_footer_status) || (is_singular('team') && 'on' === $pitoon_custom_footer_status)) {
    $pitoon_custom_footer_id = get_post_meta($pitoon_page_id, 'pitoon_select_custom_footer', true);
} elseif ('yes' == get_theme_mod('footer_custom')) {
    $pitoon_custom_footer_id = get_theme_mod('footer_custom_post');
} else {
    $pitoon_custom_footer_id = 'default_footer';
}

$pitoon_dynamic_footer = isset($_GET['custom_footer_id']) ? $_GET['custom_footer_id'] : $pitoon_custom_footer_id;
?>


<?php if ('default_footer' == $pitoon_dynamic_footer) : ?>
    <footer class="site-footer default-footer">
        <div class="container">
            <div class="site-footer__inner">
                <div class="site-footer__bottom_default">
                    <div class="footer-one__bottom-inner-default text-center">
                        <div class="footer-one__bottom-text">
                            <p class="site-footer__bottom-text"><?php echo wp_kses(get_theme_mod('footer_copytext', esc_html__('&copy; All Copyright 2024 by Pitoon', 'pitoon')), 'pitoon_allowed_tags'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php else : ?>
    <?php echo do_shortcode('[pitoon-footer id="' . $pitoon_dynamic_footer . '"]');
    ?>
<?php endif; ?>