<?php if ('layout_one' == $settings['layout_type']) : ?>

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="feature-one__bg" style="background-image: url(<?php echo esc_url($settings['background_shape']['url']); ?>);">
        </div>
        <div class="container">
            <div class="row">

                <?php
                foreach ($settings['feature_list_one'] as $index => $item) :
                ?>
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__content">
                                <div class="feature-one__shape-1">
                                    <?php pitoon_elementor_rendered_image($item, 'bac_shape'); ?>
                                </div>
                                <div class="feature-one__icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </div>
                                <div class="feature-one__img">
                                    <?php pitoon_elementor_rendered_image($item, 'bac_image_one'); ?>
                                </div>
                                <<?php echo esc_attr($item['feature_title_tag_layout_one']); ?> class="feature-one__title">
                                    <?php
                                    if (!empty($item['title'])) :
                                        pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                    endif;
                                    ?>
                                </<?php echo esc_attr($item['feature_title_tag_layout_one']); ?>>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__hover-bg" style="background-image: url(<?php echo esc_url($item['bac_image_two']['url']); ?>);">
                                </div>
                                <div class="feature-one__hover-icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </div>
                                <<?php echo esc_attr($item['feature_title_tag_layout_one']); ?> class="feature-one__hover-title">
                                    <?php
                                    if (!empty($item['title'])) :
                                        pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                    endif;
                                    ?>
                                </<?php echo esc_attr($item['feature_title_tag_layout_one']); ?>>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                <?php endforeach; ?>
            </div>
            <?php if (!empty($settings['bottom_text'] || $settings['button_label'])) : ?>
                <div class="feature-one__bottom">
                    <div class="feature-one__bottom-text-box">
                        <?php
                        if (!empty($settings['bottom_text'])) :
                            $this->add_inline_editing_attributes('bottom_text', 'none');
                            pitoon_elementor_rendered_content($this, 'bottom_text', '', 'p');
                        endif;

                        if (!empty($settings['button_label'])) :
                            pitoon_basic_rendered_content($this, $settings,  'button_label', 'feature-one__btn', 'a', 'button_url', '');
                        endif;
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--Feature One End-->
<?php endif; ?>