<?php if ('layout_one' === $settings['layout_type']) : ?>
    <!--Trust One Start -->
    <section class="trust-one">
        <div class="trust-one__img">
            <?php pitoon_elementor_rendered_image($settings, 'bac_image'); ?>
        </div>
        <div class="container">
            <div class="trust-one__inner">
                <div class="trust-one__left">
                    <?php
                    if (!empty($settings['title'])) :
                        pitoon_basic_rendered_content($this, $settings,  'title', 'trust-one__title', $settings['title_tag_layout_one']);
                    endif;
                    ?>
                </div>
                <div class="trust-one__right">
                    <div class="trust-one__btn-box">
                        <?php
                        if (!empty($settings['btn_label'])) :
                            pitoon_basic_rendered_content($this, $settings,  'btn_label', 'trust-one__btn thm-btn', 'a', 'url');
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Trust One End -->
<?php endif; ?>