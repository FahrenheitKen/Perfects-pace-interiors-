<?php if ('layout_five' == $settings['layout_type']) : ?>
    <!--Feature Five Start-->
    <section class="feature-five">
        <div class="container">
            <div class="row">
                <?php
                foreach ($settings['feature_list_five'] as $index => $item) :
                ?>
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__img-box">
                                <div class="feature-one__img">
                                    <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                </div>
                                <div class="feature-one__content">
                                    <div class="feature-one__icon">
                                        <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                    </div>
                                    <<?php echo esc_attr($item['feature_title_tag_layout_five']); ?> class="feature-one__title">
                                        <?php
                                        if (!empty($item['title'])) :
                                            pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                        endif;
                                        ?>
                                    </<?php echo esc_attr($item['feature_title_tag_layout_five']); ?>>
                                </div>
                                <div class="feature-one__content-two">
                                    <div class="feature-one__content-two-top">
                                        <div class="feature-one__icon-2">
                                            <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                        </div>
                                        <<?php echo esc_attr($item['feature_title_tag_layout_five']); ?> class="feature-one__title-2">
                                            <?php
                                            if (!empty($item['title'])) :
                                                pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                            endif;
                                            ?>
                                        </<?php echo esc_attr($item['feature_title_tag_layout_five']); ?>>
                                    </div>
                                    <div class="feature-one__content-two-bottom">
                                        <?php
                                        if (!empty($item['subtitle'])) :
                                            pitoon_basic_rendered_content($this, $item,  'subtitle', 'feature-one__content-two-text', 'p');
                                        endif;
                                        ?>
                                        <div class="feature-one__content-two-btn-box">
                                            <a <?php echo esc_attr(!empty($settings['url']['is_external']) ? "target=_blank" : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>" class="feature-one__content-two-read-more"><?php echo esc_html($item['button_label']); ?><?php \Elementor\Icons_Manager::render_icon($item['btn_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--Feature Five End-->
<?php endif; ?>