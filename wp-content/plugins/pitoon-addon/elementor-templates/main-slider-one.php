<?php if ('layout_one' === $settings['layout_type']) : ?>
    <!-- Main Sllider Start -->
    <section class="main-slider">
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{"loop": <?php echo esc_attr(('yes' == $settings['loop']) ? 'true' : 'false'); ?>, "items": <?php echo esc_attr($settings['items']['size']); ?>, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            <?php
            foreach ($settings['sliders'] as $index => $slider) :
            ?>
                <div class="item main-slider__slide-1">
                    <div class="main-slider__bg" style="background-image: url(<?php echo esc_url($slider['background_image']['url']); ?>);">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider__bg-two-outer">
                        <div class="main-slider__bg-two" style="background-image: url(<?php echo esc_url($slider['background_image']['url']); ?>);">
                        </div><!-- /.slider-one__bg-two -->
                    </div><!-- /.main-slider__bg-two-outer -->
                    <div class="main-slider__shape-1 float-bob-x">
                        <?php pitoon_elementor_rendered_image($slider, 'shape_one'); ?>
                    </div>
                    <div class="main-slider__shape-2 float-bob-x">
                        <?php pitoon_elementor_rendered_image($slider, 'shape_two'); ?>
                    </div>
                    <div class="main-slider__shape-3 float-bob-x">
                        <?php pitoon_elementor_rendered_image($slider, 'shape_three'); ?>
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <?php
                            if (!empty($slider['sub_title'])) :
                                pitoon_basic_rendered_content($this, $slider,  'sub_title', 'main-slider__sub-title', 'p');
                            endif;

                            if (!empty($slider['title'])) :
                                pitoon_basic_rendered_content($this, $slider,  'title', 'main-slider__title', $slider['title_tag_layout_one']);
                            endif;
                            ?>
                            <?php if (!empty($slider['button_label'])) : ?>
                                <div class="main-slider__btn-box">
                                    <?php
                                    pitoon_basic_rendered_content($this, $slider,  'button_label', 'main-slider__btn thm-btn', 'a', 'button_url', '');
                                    ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </section>
    <!--Main Sllider Start -->

<?php endif; ?>