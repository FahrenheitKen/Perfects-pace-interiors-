<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!--Contact Two Start-->
    <section class="contact-two">
        <div class="contact-two__bg" style="background-image: url(<?php echo esc_url($settings['layout_three_shape_one']['url']); ?>);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <?php
                    if (!empty($settings['layout_three_sec_sub_title'])) :
                        $this->add_inline_editing_attributes('layout_three_sec_sub_title', 'none');
                        pitoon_elementor_rendered_content($this, 'layout_three_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_three']);
                    endif;
                    ?>
                    <div class="section-title__icon-box-1">
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                    </div>
                    <div class="section-title__icon-box-2">
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                    </div>
                </div>
                <?php
                if (!empty($settings['layout_three_sec_title'])) :
                    $this->add_inline_editing_attributes('layout_three_sec_title', 'none');
                    pitoon_elementor_rendered_content($this, 'layout_three_sec_title', 'section-title__title', $settings['section_title_tag_layout_three']);
                endif;
                ?>
            </div>
            <div class="contact-two__form-box">
                <?php echo str_replace("<br />", "", trim(do_shortcode('[contact-form-7 id="' . $settings['layout_three_select_wpcf7_form'] . '" ]'))); ?>
            </div>
        </div>
    </section>
    <!--Contact Two End-->

<?php endif; ?>