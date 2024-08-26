<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!--Feature Two Start-->
    <section class="feature-two">
        <div class="feature-two__bg" style="background-image: url(<?php echo esc_url($settings['layout_two_bg_image']['url']); ?>);">
        </div>
        <div class="container">
            <div class="row">

                <?php
                foreach ($settings['feature_list_two'] as $index => $item) :
                ?>
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo esc_attr($index + 1); ?>00ms">
                        <div class="feature-two__single">
                            <div class="feature-two__img">
                                <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                            </div>
                            <div class="feature-two__content">
                                <div class="feature-two__shape-1">
                                    <?php pitoon_elementor_rendered_image($item, 'shape_one'); ?>
                                </div>
                                <div class="feature-two__shape-2">
                                    <?php pitoon_elementor_rendered_image($item, 'shape_one'); ?>
                                </div>
                                <div class="feature-two__content-inner">
                                    <div class="feature-two__icon">
                                        <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                    </div>
                                    <<?php echo esc_attr($item['feature_title_tag_layout_two']); ?> class="feature-two__title">
                                        <?php
                                        if (!empty($item['title'])) :
                                            pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                        endif;
                                        ?>
                                    </<?php echo esc_attr($item['feature_title_tag_layout_two']); ?>>
                                    <?php
                                    if (!empty($item['subtitle'])) :
                                        pitoon_basic_rendered_content($this, $item,  'subtitle', 'feature-two__text', 'p');
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--Feature Two End-->

<?php endif; ?>