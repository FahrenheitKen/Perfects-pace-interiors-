<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--Process One Single Start-->
    <section class="process-one">
        <div class="container">
            <?php if (!empty($settings['sec_sub_title'] || $settings['sec_title'])) : ?>
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <?php
                        if (!empty($settings['sec_sub_title'])) :
                            $this->add_inline_editing_attributes('sec_sub_title', 'none');
                            pitoon_elementor_rendered_content($this, 'sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_one']);
                        endif;
                        ?>
                        <div class="section-title__icon-box-1">
                            <?php \Elementor\Icons_Manager::render_icon($settings['sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        </div>
                        <div class="section-title__icon-box-2">
                            <?php \Elementor\Icons_Manager::render_icon($settings['sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        </div>
                    </div>
                    <?php
                    if (!empty($settings['sec_title'])) :
                        $this->add_inline_editing_attributes('sec_title', 'none');
                        pitoon_elementor_rendered_content($this, 'sec_title', 'section-title__title', $settings['section_title_tag_layout_one']);
                    endif;
                    ?>
                </div>
            <?php endif; ?>
            <div class="process-one__inner">
                <div class="row">
                    <?php foreach ($settings['process_one_list'] as $index => $item) :  ?>
                        <!--Process One Single Start-->
                        <div class="col-xl-4 col-lg-4">
                            <div class="process-one__single">
                                <div class="process-one__img-box">
                                    <?php if ($index == '0') { ?>
                                        <div class="process-one__shape-1"></div>
                                    <?php  } elseif ($index == '1') { ?>
                                        <div class="process-one__shape-3"></div>
                                        <div class="process-one__shape-4"></div>
                                    <?php } elseif ($index == '2') { ?>
                                        <div class="process-one__shape-2"></div>
                                    <?php } ?>
                                    <div class="process-one__img">
                                        <div class="process-one__count"></div>
                                        <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                    </div>
                                </div>
                                <<?php echo esc_attr($item['process_title_tag_layout_one']); ?> class="process-one__title">
                                    <?php
                                    if (!empty($item['title'])) :
                                        pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                    endif;
                                    ?>
                                </<?php echo esc_attr($item['process_title_tag_layout_one']); ?>>
                                <?php
                                if (!empty($item['title'])) :
                                    pitoon_basic_rendered_content($this, $item,  'subtitle', 'process-one__text', 'a');
                                endif;
                                ?>
                            </div>
                        </div>
                        <!--Process One Single End-->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!--Process One Single End-->
<?php endif; ?>