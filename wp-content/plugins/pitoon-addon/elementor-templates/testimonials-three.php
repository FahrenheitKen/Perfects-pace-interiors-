<?php if ('layout_three' === $settings['layout_type']) : ?>
    <!--Testimonial Three Start-->
    <section class="testimonial-three">
        <?php if (!empty($settings['layout_three_bac_image']['url'])) : ?>
            <div class="testimonial-three__shape-1 float-bob-x">
                <?php pitoon_elementor_rendered_image($settings, 'layout_three_bac_image'); ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial-three__left">
                        <?php if (!empty($settings['layout_three_sec_sub_title'] || $settings['layout_three_sec_title'])) : ?>
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <?php
                                    if (!empty($settings['layout_three_sec_sub_title'])) :
                                        $this->add_inline_editing_attributes('layout_three_sec_sub_title', 'none');
                                        pitoon_elementor_rendered_content($this, 'layout_three_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_three']);
                                    endif;
                                    ?>
                                    <div class="section-title__icon-box-1">
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                    </div>
                                    <div class="section-title__icon-box-2">
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                    </div>
                                </div>
                                <?php
                                if (!empty($settings['layout_three_sec_title'])) :
                                    $this->add_inline_editing_attributes('layout_three_sec_title', 'none');
                                    pitoon_elementor_rendered_content($this, 'layout_three_sec_title', 'section-title__title', $settings['section_title_tag_layout_three']);
                                endif;
                                ?>
                            </div>
                        <?php endif; ?>
                        <div class="testimonial-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='<?php echo esc_attr(pitoon_get_owl_options($settings)); ?>'>
                            <?php foreach ($settings['layout_three_testimonials'] as $index => $item) :  ?>
                                <!--Testimonial Three Single Start-->
                                <div class="item">
                                    <div class="testimonial-three__single">
                                        <div class="testimonial-three__client-info">
                                            <div class="testimonial-three__client-img-box">
                                                <div class="testimonial-three__client-img">
                                                    <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                                </div>
                                            </div>
                                            <div class="testimonial-three__client-content">
                                                <?php
                                                if (!empty($item['name'])) :
                                                    pitoon_basic_rendered_content($this, $item,  'name', 'testimonial-three__client-name', 'h4');
                                                endif;

                                                if (!empty($item['designation'])) :
                                                    pitoon_basic_rendered_content($this, $item,  'designation', 'testimonial-three__client-sub-title', 'p');
                                                endif;
                                                ?>
                                                <div class="testimonial-three__client-rating">
                                                    <?php for ($i = 0; $i < $item['rating']['size']; $i++) : ?>
                                                        <i class="fa fa-star"></i>
                                                    <?php endfor; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        if (!empty($item['testimonial'])) :
                                            pitoon_basic_rendered_content($this, $item,  'testimonial', 'testimonial-three__text', 'p');
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <!--Testimonial Three Single End-->
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial-three__right">
                        <div class="testimonial-three__client-single-img-box">
                            <?php if (!empty($settings['layout_three_image_one']['url'])) : ?>
                                <div class="testimonial-three__client-single-img-2">
                                    <?php pitoon_elementor_rendered_image($settings, 'layout_three_image_two'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_three_image_two']['url'])) : ?>
                                <div class="testimonial-three__client-single-img-3">
                                    <?php pitoon_elementor_rendered_image($settings, 'layout_three_image_three'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_three_image_three']['url'])) : ?>
                                <div class="testimonial-three__client-single-img-4">
                                    <?php pitoon_elementor_rendered_image($settings, 'layout_three_image_four'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_three_image_four']['url'])) : ?>
                                <div class="testimonial-three__client-single-img">
                                    <?php pitoon_elementor_rendered_image($settings, 'layout_three_image_one'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Three End-->

<?php endif; ?>