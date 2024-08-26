<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!--Feature Three Start-->
    <section class="feature-three">
        <div class="feature-three__shape-1 img-bounce">
            <?php pitoon_elementor_rendered_image($settings, 'layout_three_bac_image'); ?>
        </div>
        <div class="container">
            <div class="row">
                <?php
                $counter = 1;
                foreach ($settings['feature_list_three'] as $index => $item) :
                ?>
                    <div class="col-xl-6">
                        <div class="feature-three__single <?php if ($counter == '2') {
                                                                echo esc_attr("feature-three__single-two");
                                                            } ?>">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="feature-three__left">
                                        <div class="feature-three__left-bg-icon">
                                            <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                        </div>
                                        <<?php echo esc_attr($item['feature_title_tag_layout_three']); ?> class="feature-three__title">
                                            <?php
                                            if (!empty($item['title'])) :
                                                pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                            endif;
                                            ?>
                                        </<?php echo esc_attr($item['feature_title_tag_layout_three']); ?>>
                                        <div class="feature-three__btn-box">
                                            <a href="<?php echo esc_url($item['url']['url']); ?>" class="feature-three__btn"><?php echo esc_html($item['button_label']); ?><i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="feature-three__right">
                                        <div class="feature-three__img-box">
                                            <div class="feature-three__img">
                                                <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                            </div>
                                            <div class="feature-three__icon">
                                                <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $counter++;
                endforeach; ?>
            </div>
        </div>
    </section>
    <!--Feature Three End-->
<?php endif; ?>