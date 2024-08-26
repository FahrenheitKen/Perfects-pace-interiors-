<?php if ('layout_four' === $settings['layout_type']) : ?>

    <!--Testimonials Four Start-->
    <section class="testimonials-carousel-page">
        <div class="container">
            <div class="testimonials-carousel-box thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='<?php echo esc_attr(pitoon_get_owl_options($settings)); ?>'>

                <?php foreach ($settings['layout_four_testimonials'] as $index => $item) :  ?>
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__client-img-box">
                                <?php if (!empty($item['image']['url'])) : ?>
                                    <div class="testimonial-two__client-img">
                                        <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-details">
                                    <div class="testimonial-two__client-rating">
                                        <?php for ($i = 0; $i < $item['rating']['size']; $i++) : ?>
                                            <i class="fa fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <?php
                                    if (!empty($item['name'])) :
                                        pitoon_basic_rendered_content($this, $item,  'name', 'testimonial-two__client-name', 'h3');
                                    endif;

                                    if (!empty($item['designation'])) :
                                        pitoon_basic_rendered_content($this, $item,  'designation', 'testimonial-two__client-sub-title', 'p');
                                    endif;
                                    ?>
                                </div>
                                <div class="testimonial-two__quote">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ''], 'span'); ?>
                                </div>
                            </div>
                            <?php
                            if (!empty($item['testimonial'])) :
                                pitoon_basic_rendered_content($this, $item,  'testimonial', 'testimonial-two__text', 'p');
                            endif;
                            ?>
                        </div>
                    </div>
                    <!--Testimonial Two Single Start-->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--Testimonials Four End-->
<?php endif; ?>