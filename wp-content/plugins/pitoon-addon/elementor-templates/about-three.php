<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!--About Three Start-->
    <section class="about-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left">
                        <div class="about-three__img-box-1">
                            <div class="about-three__shape-3">
                                <?php pitoon_elementor_rendered_image($settings, 'layout_three_shape_two'); ?>
                            </div>
                            <div class="about-three__shape-4 img-bounce">
                                <?php pitoon_elementor_rendered_image($settings, 'layout_three_shape_one'); ?>
                            </div>
                            <div class="about-three__img-1">
                                <?php pitoon_elementor_rendered_image($settings, 'layout_three_image_one'); ?>
                            </div>
                            <div class="about-three__img-box-2">
                                <div class="about-three__shape-1 float-bob-x"></div>
                                <div class="about-three__shape-2 zoominout"></div>
                                <div class="about-three__img-2">
                                    <?php pitoon_elementor_rendered_image($settings, 'layout_three_image_two'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right">
                        <div class="section-title text-left">
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
                        <?php
                        if (!empty($settings['layout_three_summary'])) :
                            $this->add_inline_editing_attributes('layout_three_summary', 'none');
                            pitoon_elementor_rendered_content($this, 'layout_three_summary', 'about-three__text', 'p');
                        endif;
                        ?>
                        <div class="about-three__points-and-happy-clients">
                            <ul class="about-three__points list-unstyled ml-0">
                                <?php foreach ($settings['layout_three_features_list'] as $item) : ?>
                                    <li>
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                        </div>
                                        <div class="content">
                                            <?php
                                            if (!empty($item['title'])) :
                                                pitoon_basic_rendered_content($this, $item,  'title', '', $item['feature_title_tag_layout_three']);
                                            endif;

                                            if (!empty($item['subtitle'])) :
                                                pitoon_basic_rendered_content($this, $item,  'subtitle', '', 'p');
                                            endif;
                                            ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if (!empty($settings['layout_three_client_title'])) : ?>
                                <div class="about-three__happy-clients">
                                    <div class="about-three__happy-clients-icon">
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_client_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                    </div>
                                    <?php
                                    if (!empty($settings['layout_three_client_title'])) :
                                        $this->add_inline_editing_attributes('layout_three_client_title', 'none');
                                        pitoon_elementor_rendered_content($this, 'layout_three_client_title', 'about-three__happy-clients-text', 'h3');
                                    endif;
                                    ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($settings['layout_three_button_label'])) : ?>
                            <div class="about-three__btn-box">
                                <?php
                                pitoon_basic_rendered_content($this, $settings,  'layout_three_button_label', 'about-three__btn thm-btn', 'a', 'layout_three_button_url', '');
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Three End-->

<?php endif; ?>