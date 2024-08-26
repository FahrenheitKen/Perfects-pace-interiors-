<?php if ('layout_four' == $settings['layout_type']) : ?>
    <section class="feature-four">
        <div class="container">
            <div class="row">
                <?php
                foreach ($settings['feature_list_four'] as $index => $item) :
                ?>
                    <!--Feature Four Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-four__single">
                            <div class="feature-four__img-box">
                                <div class="feature-four__img">
                                    <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                </div>
                                <div class="feature-four__icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </div>
                            </div>
                            <<?php echo esc_attr($item['feature_title_tag_layout_four']); ?> class="feature-four__title">
                                <?php
                                if (!empty($item['title'])) :
                                    pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                endif;
                                ?>
                            </<?php echo esc_attr($item['feature_title_tag_layout_four']); ?>>
                        </div>
                    </div>
                    <!--Feature Four Single End-->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>