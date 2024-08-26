<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!--Brand One Start-->
    <section class="brand-two">
        <div class="container">
            <?php if (!empty($settings['sec_title'])) : ?>
                <div class="brand-one__title">
                    <?php
                    $this->add_inline_editing_attributes('sec_title', 'none');
                    pitoon_elementor_rendered_content($this, 'sec_title', '', 'p');
                    ?>
                </div>
            <?php endif; ?>
            <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='<?php echo esc_attr(pitoon_get_owl_options($settings)); ?>'>
                <?php foreach ($settings['sponsor_images'] as $image) : ?>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <?php pitoon_elementor_rendered_image($image, 'image') ?>
                        </div>
                    </div>
                    <!--Brand One Single-->
                <?php endforeach; ?>
            </div>
            <!-- If we need navigation buttons -->
        </div>
    </section>
    <!--Brand One End-->
<?php endif; ?>