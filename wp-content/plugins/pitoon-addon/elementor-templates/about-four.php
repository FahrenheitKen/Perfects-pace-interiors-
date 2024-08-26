<?php if ('layout_four' == $settings['layout_type']) : ?>
    <!--About Four Start-->
    <section class="about-four">
        <div class="about-four__shape-3 float-bob-x">
            <?php pitoon_elementor_rendered_image($settings, 'layout_four_bg_shape_three'); ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left">
                        <div class="about-four__shape-1 float-bob-x">
                            <?php pitoon_elementor_rendered_image($settings, 'layout_four_bg_shape_one'); ?>
                        </div>
                        <div class="about-four__shape-2 float-bob-y">
                            <?php pitoon_elementor_rendered_image($settings, 'layout_four_bg_shape_two'); ?>
                        </div>
                        <div class="about-four__img">
                            <?php pitoon_elementor_rendered_image($settings, 'layout_four_image_one'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
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
                        <ul class="about-four__points list-unstyled ml-0">
                            <?php foreach ($settings['layout_four_features_list'] as $index => $item) : ?>
                                <li>
                                    <div class="icon">
                                        <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                    </div>
                                    <div class="text">
                                        <?php
                                        if (!empty($item['title'])) :
                                            pitoon_basic_rendered_content($this, $item,  'title', '', 'p');
                                        endif;
                                        ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php
                        if (!empty($settings['layout_four_summary'])) :
                            $this->add_inline_editing_attributes('layout_four_summary', 'none');
                            pitoon_elementor_rendered_content($this, 'layout_four_summary', 'about-four__text', 'p');
                        endif;
                        ?>
                        <?php if (!empty($settings['layout_four_button_label'])) : ?>
                            <div class="about-four__btn-box">
                                <?php
                                pitoon_basic_rendered_content($this, $settings,  'layout_four_button_label', 'about-four__btn thm-btn', 'a', 'layout_four_button_url', '');
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->
<?php endif; ?>