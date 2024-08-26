<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="services-details__importance">
        <div class="services-details__importance-shape-1">
            <?php pitoon_elementor_rendered_image($settings, 'shape'); ?>
        </div>
        <div class="services-details__importance-img">
            <?php pitoon_elementor_rendered_image($settings, 'image'); ?>
        </div>
        <div class="services-details__importance-title-box">
            <?php
            if (!empty($settings['title'])) :
                pitoon_basic_rendered_content($this, $settings,  'title', 'services-details__importance-title', $settings['title_tag_layout_one']);
            endif;
            ?>
            <?php if (!empty($settings['button_label'])) : ?>
                <div class="services-details__importance-btn-box">
                    <?php
                    pitoon_basic_rendered_content($this, $settings,  'button_label', 'services-details__importance-btn', 'a', 'button_url', '');
                    ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>