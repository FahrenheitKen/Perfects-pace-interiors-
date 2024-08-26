<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--Make website Start-->
    <section class="make-website">
        <div class="make-website__bg" style="background-image: url(<?php echo esc_url($settings['background_image']['url']); ?>);">
        </div>
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
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="make-website__left">
                        <div class="make-website__img-1">
                            <?php pitoon_elementor_rendered_image($settings, 'image_one'); ?>
                        </div>
                        <div class="make-website__img-2">
                            <?php pitoon_elementor_rendered_image($settings, 'image_two'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="make-website__right">
                        <ul class="make-website__points list-unstyled">
                            <?php foreach ($settings['feature_one_list'] as $index => $item) :  ?>
                                <li>
                                    <?php
                                    if (!empty($item['title'])) :
                                        pitoon_basic_rendered_content($this, $item,  'title', 'make-website__title', $item['feature_title_tag_layout_one']);
                                    endif;

                                    if (!empty($item['subtitle'])) :
                                        pitoon_basic_rendered_content($this, $item,  'subtitle', 'make-website__text', 'p');
                                    endif;
                                    ?>
                                    <?php if (!empty($item['url']['url'])) : ?>
                                        <div class="make-website__arrow-box">
                                            <a href="<?php echo esc_url($item['url']['url']); ?>" class="make-website__arrow"> <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
                                        </div>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Make website End-->
<?php endif; ?>