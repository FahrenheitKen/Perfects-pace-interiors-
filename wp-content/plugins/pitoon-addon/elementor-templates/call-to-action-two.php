<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!--CTA Two Start-->
    <section class="cta-two">
        <div class="cta-two__bg" style="background-image: url(<?php echo esc_url($settings['layout_two_bg_image_one']['url']); ?>);"></div>
        <div class="cta-two__wrap">
            <div class="cta-two__wrap-inner">
                <div class="cta-two__wrap-bg" style="background-image: url(<?php echo esc_url($settings['layout_two_bg_image_two']['url']); ?>);"></div>
                <div class="container">
                    <div class="cta-two__inner">
                        <div class="cta-two__title-box">
                            <?php
                            if (!empty($settings['layout_two_title'])) :
                                $this->add_inline_editing_attributes('layout_two_title', 'none');
                                pitoon_elementor_rendered_content($this, 'layout_two_title', 'cta-two__title', $settings['title_tag_layout_two']);
                            endif; ?>
                        </div>
                        <?php if (!empty($settings['layout_two_button_label'])) : ?>
                            <div class="cta-two__btn-box">
                                <?php
                                pitoon_basic_rendered_content($this, $settings,  'layout_two_button_label', 'cta-two__btn thm-btn', 'a', 'layout_two_button_url', '');
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA Two End-->
<?php endif; ?>