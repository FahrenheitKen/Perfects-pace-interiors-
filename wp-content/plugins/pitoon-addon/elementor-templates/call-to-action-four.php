<?php if ('layout_four' == $settings['layout_type']) : ?>
    <!--CTA Two Start-->
    <section class="cta-two cta-four">
        <div class="cta-two__bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?php echo esc_url($settings['layout_four_bg_image']['url']); ?>);"></div>
        <div class="cta-two__inner">
            <?php
            if (!empty($settings['layout_four_title'])) :
                $this->add_inline_editing_attributes('layout_four_title', 'none');
                pitoon_elementor_rendered_content($this, 'layout_four_title', 'cta-two__title', $settings['title_tag_layout_four']);
            endif; ?>
            <?php
            if (!empty($settings['layout_four_text'])) :
                $this->add_inline_editing_attributes('layout_four_text', 'none');
                pitoon_elementor_rendered_content($this, 'layout_four_text', 'cta-two__text', 'p');
            endif; ?>
            <div class="cta-two__btn-box">
                <?php
                if (!empty($settings['layout_four_button_label'])) :
                    pitoon_basic_rendered_content($this, $settings,  'layout_four_button_label', 'cta-two__btn thm-btn', 'a', 'layout_four_button_url', '');
                endif;
                ?>
            </div>
        </div>
    </section>
    <!--CTA Two End-->
<?php endif; ?>