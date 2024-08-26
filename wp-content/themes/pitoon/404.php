<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pitoon
 */

get_header();
?>

<main id="primary" class="site-main">

    <!--Error Page Start-->
    <section class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-page__inner">
                        <?php if (!empty(get_theme_mod('404_page_bg_image'))) : ?>
                            <div class="error-page__shape-1">
                                <img src="<?php echo esc_url(get_theme_mod('404_page_bg_image')); ?>" alt="<?php echo esc_attr('404 image', 'pitoon'); ?>">
                            </div>
                        <?php else : ?>
                            <h2 class="error-page__title"><?php echo esc_html_e('404', 'pitoon'); ?></h2>
                        <?php endif; ?>
                        <h3 class="error-page__tagline"><?php esc_html_e('Oops! Page Not Found', 'pitoon'); ?></h3>
                        <p class="error-page__text"><?php echo esc_html_e('The page you are looking for is not exist.', 'pitoon'); ?></p>
                        <form class="error-page__form" method="get" action="<?php echo esc_url(home_url()); ?>">
                            <div class="error-page__form-input">
                                <input type="search" name="s" placeholder="<?php echo esc_attr('Search here', 'pitoon'); ?>">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </div>
                        </form>
                        <div class="error-page__btn-box">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="thm-btn error-page__btn"><?php esc_html_e('Back to Home', 'pitoon'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Error Page End-->

</main><!-- #main -->

<?php
get_footer();
