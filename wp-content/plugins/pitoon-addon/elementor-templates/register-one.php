<?php if ('layout_one' == $settings['layout_type']) : ?>

    <?php if (!is_user_logged_in()) :
    ?>
        <div class="login-page__single">
            <?php if (!empty($settings['title'])) : ?>
                <h3 class="login-page__title"><?php echo esc_html($settings['title']); ?></h3><!-- /.login-register__title -->
            <?php endif; ?>
            <form class="login-page__form" id="pitoon-registration">
                <div class="registration-result text-center"></div>
                <?php wp_nonce_field('pitoon-register-nonce', 'security'); ?>
                <div class="login-page__form-input-box">
                    <input type="email" placeholder="<?php echo esc_attr($settings['email_placeholder']); ?>" name="singupEmail">
                </div><!-- /.contact-form__input-box -->
                <div class="login-page__form-input-box">
                    <input type="password" placeholder="<?php echo esc_attr($settings['password_placeholder']); ?>" name="singupPassword">
                </div><!-- /.contact-form__input-box -->
                <div class="login-page__form-input-box">
                    <input type="checkbox" id="login-register__policy" name="term">
                    <label for="login-register__policy">
                        <?php echo wp_kses($settings['privacy_text'], 'pitoon_allowed_tags'); ?>
                    </label>
                </div><!-- /.contact-form__input-box -->
                <div class="login-register__info">
                    <button type="submit" class="thm-btn login-register__btn"><?php echo esc_html($settings['register_btn_text']); ?></button>
                </div><!-- /.login-register__info -->

            </form>
        </div>
    <?php else :
    ?>
        <div class="alert alert-success"> <?php esc_html_e('You are logged in ', 'pitoon-login'); ?> </div>
        <div class="alert alert-danger"><a href="<?php echo wp_logout_url(home_url('/')); ?>"><?php echo esc_html_e('Log Out ?', 'pitoon-login'); ?></a></div>
    <?php endif;
    ?>

<?php endif; ?>