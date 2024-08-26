<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!--Why Choose Three Start-->
    <section class="why-choose-three">
        <div class="why-choose-three__bg" style="background-image: url(<?php echo esc_url($settings['layout_three_bg_one']['url']); ?>);"></div>
        <div class="container">
            <div class="why-choose-three__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="why-choose-three__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <?php
                                    if (!empty($settings['layout_three_sec_sub_title'])) :
                                        $this->add_inline_editing_attributes('layout_three_sec_sub_title', 'none');
                                        pitoon_elementor_rendered_content($this, 'layout_three_sec_sub_title', 'section-title__tagline', 'span');
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
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="why-choose-three__right">
                            <?php
                            if (!empty($settings['layout_three_sec_summary'])) :
                                $this->add_inline_editing_attributes('layout_three_sec_summary', 'none');
                                pitoon_elementor_rendered_content($this, 'layout_three_sec_summary', 'why-choose-three__text', 'p');
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-choose-three__bottom">
                <div class="row">
                    <?php
                    foreach ($settings['layout_three_choose_list'] as $index => $item) :
                    ?>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($index + 1); ?>00ms">
                            <div class="why-choose-three__single">
                                <div class="why-choose-three__single-bg-1" style="background-image: url(<?php echo esc_url($item['bg_image']['url']); ?>);">
                                </div>
                                <div class="why-choose-three__icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </div>
                                <div class="why-choose-three__title">
                                    <<?php echo esc_attr($item['choose_title_tag_layout_three']); ?>>
                                        <?php
                                        if (!empty($item['title'])) :
                                            pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                        endif;
                                        ?>
                                    </<?php echo esc_attr($item['choose_title_tag_layout_three']); ?>>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose Three End-->

<?php endif; ?>