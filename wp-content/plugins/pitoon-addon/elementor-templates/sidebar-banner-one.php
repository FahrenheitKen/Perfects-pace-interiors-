<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="banner-one">
        <div class="banner-one__shape-1">
            <?php pitoon_elementor_rendered_image($settings, 'shape'); ?>
        </div>
        <div class="banner-one__img">
            <?php pitoon_elementor_rendered_image($settings, 'image'); ?>
        </div>
        <?php
        if (!empty($settings['title'])) :
            pitoon_basic_rendered_content($this, $settings,  'title', 'banner-one__title', $settings['title_tag_layout_one']);
        endif;
        ?>
        <?php if (!empty($settings['button_label'])) : ?>
            <div class="banner-one__btn-box">
                <?php
                pitoon_basic_rendered_content($this, $settings,  'button_label', 'banner-one__btn thm-btn', 'a', 'button_url', '');
                ?>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>