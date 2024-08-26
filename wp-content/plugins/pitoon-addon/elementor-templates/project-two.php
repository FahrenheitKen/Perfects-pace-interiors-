<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!--Project Two Start-->
    <section class="project-two">
        <div class="project-two__top">
            <div class="container">
                <div class="row">
                    <?php if (!empty($settings['layout_two_sec_sub_title'] || $settings['layout_two_sec_title'])) : ?>
                        <div class="col-xl-6 col-lg-6">
                            <div class="project-two__left">
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
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($settings['layout_two_sec_summary'])) : ?>
                        <div class="col-xl-6 col-lg-6">
                            <div class="project-two__right">
                                <div class="project-two__text">
                                    <?php
                                    $this->add_inline_editing_attributes('layout_two_sec_summary', 'none');
                                    pitoon_elementor_rendered_content($this, 'layout_two_sec_summary', '', 'p');
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="project-two__bottom">
            <div class="container">
                <div class="project-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='<?php echo esc_attr(pitoon_get_owl_options($settings)); ?>'>
                    <?php
                    foreach ($settings['project_two_list'] as $index => $item) :
                    ?>
                        <!--Project Two Single Start-->
                        <div class="item">
                            <div class="project-two__single <?php echo esc_attr(('yes' == $item['active_top_class'] ? 'mar-top' : '')); ?>">
                                <div class="project-two__img-box">
                                    <div class="project-two__img">
                                        <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                    </div>
                                    <div class="project-two__content">
                                        <?php
                                        if (!empty($item['title'])) :
                                            pitoon_basic_rendered_content($this, $item,  'subtitle', 'project-two__sub-title');
                                        endif;
                                        ?>
                                        <<?php echo esc_attr($item['project_title_tag_layout_two']); ?> class="project-two__title">
                                            <?php
                                            if (!empty($item['title'])) :
                                                pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                            endif;
                                            ?>
                                        </<?php echo esc_attr($item['project_title_tag_layout_two']); ?>>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Two Single End-->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!--Project Two End-->
<?php endif; ?>