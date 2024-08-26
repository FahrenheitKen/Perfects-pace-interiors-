<?php if ('layout_four' == $settings['layout_type']) : ?>

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <?php
                                if (!empty($settings['layout_four_sec_sub_title'])) :
                                    $this->add_inline_editing_attributes('layout_four_sec_sub_title', 'none');
                                    pitoon_elementor_rendered_content($this, 'layout_four_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_four']);
                                endif;
                                ?>
                                <div class="section-title__icon-box-1">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                </div>
                                <div class="section-title__icon-box-2">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                </div>
                            </div>
                            <?php
                            if (!empty($settings['layout_four_sec_title'])) :
                                $this->add_inline_editing_attributes('layout_four_sec_title', 'none');
                                pitoon_elementor_rendered_content($this, 'layout_four_sec_title', 'section-title__title', $settings['section_title_tag_layout_four']);
                            endif;
                            ?>
                        </div>
                        <?php
                        if (!empty($settings['layout_four_sec_summary'])) :
                            $this->add_inline_editing_attributes('layout_four_sec_summary', 'none');
                            pitoon_elementor_rendered_content($this, 'layout_four_sec_summary', 'contact-page__text', 'p');
                        endif;
                        ?>
                        <ul class="contact-page__points list-unstyled ml-0">
                            <?php foreach ($settings['layout_four_contact_info'] as $info) : ?>
                                <li>
                                    <div class="icon">
                                        <?php \Elementor\Icons_Manager::render_icon($info['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                    </div>
                                    <div class="content">
                                        <?php if ($info['contact_title']) : ?>
                                            <p><?php echo wp_kses($info['contact_title'], 'pitoon_allowed_tags'); ?></p>
                                        <?php endif; ?>
                                        <?php if ($info['contact_number']) : ?>
                                            <h4><?php echo wp_kses($info['contact_number'], 'pitoon_allowed_tags'); ?></h4>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page__right">
                        <div class="contact-page__form-box">
                            <?php echo str_replace("<br />", "", trim(do_shortcode('[contact-form-7 id="' . $settings['layout_four_select_wpcf7_form'] . '" ]'))); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

<?php endif; ?>