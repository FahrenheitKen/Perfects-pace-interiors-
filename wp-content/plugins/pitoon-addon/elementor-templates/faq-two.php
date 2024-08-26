<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!--FAQ Two Start-->
    <section class="faq-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="faq-two__left">
                        <?php if (!empty($settings['layout_two_sec_sub_title'] || $settings['layout_two_sec_title'])) : ?>
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <?php
                                    if (!empty($settings['layout_two_sec_sub_title'])) :
                                        $this->add_inline_editing_attributes('layout_two_sec_sub_title', 'none');
                                        pitoon_elementor_rendered_content($this, 'layout_two_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_two']);
                                    endif;
                                    ?>
                                    <div class="section-title__icon-box-1">
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                    </div>
                                    <div class="section-title__icon-box-2">
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                    </div>
                                </div>
                                <?php
                                if (!empty($settings['layout_two_sec_title'])) :
                                    $this->add_inline_editing_attributes('layout_two_sec_title', 'none');
                                    pitoon_elementor_rendered_content($this, 'layout_two_sec_title', 'section-title__title', $settings['section_title_tag_layout_two']);
                                endif;
                                ?>
                            </div>
                        <?php endif; ?>
                        <div class="faq-two__faq-box">
                            <div class="accrodion-grp" data-grp-name="faq-two-accrodion">
                                <?php
                                foreach ($settings['layout_two_faq_lists'] as $index => $item) :
                                ?>
                                    <div class="accrodion <?php echo esc_attr(('yes' == $item['active_status'] ? 'active' : '')); ?>">
                                        <div class="accrodion-title">
                                            <?php
                                            if (!empty($item['question'])) :
                                                pitoon_basic_rendered_content($this, $item,  'question', '', $item['question_title_tag_layout_two']);
                                            endif;
                                            ?>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <?php
                                                if (!empty($item['answer'])) :
                                                    pitoon_basic_rendered_content($this, $item,  'answer', '', 'p');
                                                endif;
                                                ?>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="faq-two__right">
                        <div class="faq-two__img-box">
                            <div class="faq-two__img">
                                <?php pitoon_elementor_rendered_image($settings, 'bac_image'); ?>
                            </div>
                            <div class="faq-two__trusted">
                                <div class="faq-two__trusted-shape-1">
                                    <?php pitoon_elementor_rendered_image($settings, 'bac_shape'); ?>
                                </div>
                                <div class="faq-two__trusted-icon">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_box_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </div>
                                <?php
                                if (!empty($settings['layout_two_box_title'])) :
                                    $this->add_inline_editing_attributes('layout_two_box_title', 'none');
                                    pitoon_elementor_rendered_content($this, 'layout_two_box_title', 'faq-two__trusted-text', $settings['box_title_tag_layout_two']);
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ Two End-->

<?php endif; ?>