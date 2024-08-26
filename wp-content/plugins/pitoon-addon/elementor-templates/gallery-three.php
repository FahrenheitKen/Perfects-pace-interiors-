<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!--Gallery Three Start-->
    <section class="gallery-three">
        <div class="container">
            <div class="gallery-three__title">
                <?php
                if (!empty($settings['layout_three_sec_title'])) :
                    $this->add_inline_editing_attributes('layout_three_sec_title', 'none');
                    pitoon_elementor_rendered_content($this, 'layout_three_sec_title', '', $settings['section_title_tag_layout_three']);
                endif;
                ?>
            </div>
            <div class="row">
                <?php foreach ($settings['gallery_list_three'] as $index => $item) :  ?>
                    <!--Gallery Three Single Start-->
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="gallery-three__single">
                            <div class="gallery-three__img">
                                <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                <div class="gallery-three__img-icon">
                                    <a class="img-popup" href="<?php echo esc_url($item['image']['url']); ?>"> <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery Three Single End-->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--Gallery Three End-->
<?php endif; ?>