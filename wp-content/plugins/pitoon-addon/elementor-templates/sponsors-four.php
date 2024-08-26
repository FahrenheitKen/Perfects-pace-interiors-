<?php if ('layout_four' == $settings['layout_type']) : ?>
    <!--Brand four Start-->
    <section class="brand-one brand-three">
        <div class="brand-three__img float-bob-x">
            <?php pitoon_elementor_rendered_image($settings, 'shape_image'); ?>
        </div>
        <div class="container">
            <div class="brand-one__title">
                <?php
                if (!empty($settings['sec_title'])) :
                    $this->add_inline_editing_attributes('sec_title', 'none');
                    pitoon_elementor_rendered_content($this, 'sec_title', '', 'p');
                endif;
                ?>
            </div>
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
    <!--Brand four End-->
<?php endif; ?>