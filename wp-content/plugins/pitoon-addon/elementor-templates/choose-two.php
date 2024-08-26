<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!--Why Choose Two start-->
    <section class="why-choose-two">
        <div class="container">
            <div class="why-choose-two__top">
                <div class="why-choose-two__top-bg" style="background-image: url(<?php echo esc_url($settings['layout_two_choose_bg_image_one']['url']); ?>);"></div>
                <div class="why-choose-two__shape-2" style="background-image: url(<?php echo esc_url($settings['layout_two_choose_bg_shape_two']['url']); ?>);"></div>
                <div class="why-choose-two__title-box">
                    <div class="why-choose-two__shape-1">
                        <?php pitoon_elementor_rendered_image($settings, 'layout_two_choose_bg_shape_one'); ?>
                    </div>
                    <?php
                    if (!empty($settings['layout_two_sec_title'])) :
                        $this->add_inline_editing_attributes('layout_two_sec_title', 'none');
                        pitoon_elementor_rendered_content($this, 'layout_two_sec_title', 'why-choose-two__title', $settings['section_title_tag_layout_two']);
                    endif;
                    ?>
                    <?php
                    if (!empty($settings['layout_two_sec_sub_title'])) :
                    ?>
                        <div class="why-choose-two__sub-title">
                            <?php
                            $this->add_inline_editing_attributes('layout_two_sec_sub_title', 'none');
                            pitoon_elementor_rendered_content($this, 'layout_two_sec_sub_title', '', 'p');
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="why-choose-two__bottom">
                <div class="row">
                    <?php
                    foreach ($settings['layout_two_check_list'] as $index => $item) :
                    ?>
                        <!--Why Choose Two Points Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="why-choose-two__points-single">
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
                            </div>
                        </div>
                        <!--Why Choose Two Points Single End-->
                    <?php endforeach; ?>
                </div>
                <?php if (!empty($settings['layout_two_button_label'])) : ?>
                    <div class="why-choose-two__btn-box">
                        <?php
                        pitoon_basic_rendered_content($this, $settings,  'layout_two_button_label', 'why-choose-two__btn thm-btn', 'a', 'layout_two_button_url', '');
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--Why Choose Two End-->

<?php endif; ?>