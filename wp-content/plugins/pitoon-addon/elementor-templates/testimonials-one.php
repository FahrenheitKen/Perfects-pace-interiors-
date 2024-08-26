<?php if ('layout_one' === $settings['layout_type']) : ?>

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="container">
            <?php if (!empty($settings['sec_sub_title']) || $settings['sec_title']) : ?>
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
            <div class="testimonial-one__bottom">
                <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='<?php echo esc_attr(pitoon_get_owl_options($settings)); ?>'>
                    <?php foreach ($settings['testimonials'] as $index => $item) :  ?>
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__shape-1">
                                    <?php pitoon_elementor_rendered_image($item, 'shape_one'); ?>
                                </div>
                                <div class="testimonial-one__shape-2"></div>
                                <div class="testimonial-one__shape-3">
                                    <?php pitoon_elementor_rendered_image($item, 'shape_two'); ?>
                                </div>
                                <div class="testimonial-one__img">
                                    <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <?php
                                    if (!empty($item['name'])) :
                                        pitoon_basic_rendered_content($this, $item,  'name', 'testimonial-one__client-name', 'h4');
                                    endif;
                                    ?>
                                    <div class="testimonial-one__client-rate">
                                        <?php for ($i = 0; $i < $item['rating']['size']; $i++) : ?>
                                            <span class="fa fa-star"></span>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <?php
                                if (!empty($item['testimonial'])) :
                                    pitoon_basic_rendered_content($this, $item,  'testimonial', 'testimonial-one__text', 'p');
                                endif;
                                ?>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->
<?php endif; ?>