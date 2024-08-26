<?php if ('layout_two' === $settings['layout_type']) : ?>
    <!--Testimonial Two Start-->
    <section class="testimonial-two">
        <div class="testimonial-two__bg-1" style="background-image: url(<?php echo esc_url($settings['layout_two_bg_image_one']['url']); ?>);"></div>
        <div class="testimonial-two__bg-2" style="background-image: url(<?php echo esc_url($settings['layout_two_bg_image_two']['url']); ?>);"></div>
        <div class="container">
            <div class="testimonial-two__slider">

                <div class="testimonial-two__thumb-outer-box">
                    <div class="testimonial-two__thumb-carousel owl-carousel owl-theme">
                        <?php foreach ($settings['layout_two_testimonials'] as $index => $item) :  ?>
                            <div class="testimonial-two__thumb-item">
                                <div class="testimonial-two__img-holder-box">
                                    <div class="testimonial-two__img-holder">
                                        <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="testimonial-two__main-content">
                    <div class="testimonial-two__carousel owl-carousel owl-theme">
                        <?php foreach ($settings['layout_two_testimonials'] as $index => $item) :  ?>
                            <div class="testimonial-two__item">
                                <div class="testimonial-two__inner-content">
                                    <div class="testimonial-two__inner-content-img">
                                        <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                    </div>
                                    <div class="testimonial-two__inner-content-box">
                                        <?php
                                        if (!empty($item['testimonial'])) :
                                            pitoon_basic_rendered_content($this, $item,  'testimonial', 'testimonial-two__text', 'p');
                                        endif;

                                        if (!empty($item['name'])) :
                                            pitoon_basic_rendered_content($this, $item,  'name', 'testimonial-two__client-name', $item['testimonial_name_tag_layout_two']);
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Testimonial Two End-->
<?php endif; ?>