<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!--Gallery Two Start-->
    <section class="gallery-two">
        <div class="gallery-two__top">
            <div class="gallery-two__shape-1" style="background-image: url(<?php echo esc_url($settings['layout_two_bac_image']['url']); ?>);"></div>
            <div class="section-title text-center">
                <?php
                if (!empty($settings['layout_two_sec_sub_title'])) :
                    $this->add_inline_editing_attributes('layout_two_sec_sub_title', 'none');
                    pitoon_elementor_rendered_content($this, 'layout_two_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_two']);
                endif;
                ?>

                <?php
                if (!empty($settings['layout_two_sec_title'])) :
                    $this->add_inline_editing_attributes('layout_two_sec_title', 'none');
                    pitoon_elementor_rendered_content($this, 'layout_two_sec_title', 'section-title__title', $settings['section_title_tag_layout_two']);
                endif;
                ?>
            </div>
        </div>
        <div class="gallery-two__container">
            <div class="gallery-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='<?php echo esc_attr(pitoon_get_owl_options($settings)); ?>'>
                <?php foreach ($settings['gallery_list_two'] as $item) :  ?>
                    <!--Gallery Two Single Start-->
                    <div class="item">
                        <div class="gallery-two__single">
                            <div class="gallery-two__img-box">
                                <div class="gallery-two__img">
                                    <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                </div>
                                <div class="gallery-two__content">
                                    <?php
                                    if (!empty($item['subtitle'])) :
                                        pitoon_basic_rendered_content($this, $item,  'subtitle', 'gallery-two__sub-title', 'p');
                                    endif;
                                    ?>
                                    <<?php echo esc_attr($item['gallery_title_tag_layout_two']); ?> class="gallery-two__title">
                                        <?php
                                        if (!empty($item['title'])) :
                                            pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                        endif;
                                        ?>
                                    </<?php echo esc_attr($item['gallery_title_tag_layout_two']); ?>>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Two Single End-->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--Gallery Two End-->
<?php endif; ?>