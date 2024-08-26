<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!--CTA Three End-->
    <section class="cta-three">
        <div class="cta-three__shape-1 float-bob-x">
            <?php pitoon_elementor_rendered_image($settings, 'layout_three_background_shape') ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="cta-three__left">
                        <?php
                        if (!empty($settings['layout_three_sub_title'])) :
                            $this->add_inline_editing_attributes('layout_three_sub_title', 'none');
                            pitoon_elementor_rendered_content($this, 'layout_three_sub_title', 'cta-three__sub-title', 'p');
                        endif;

                        if (!empty($settings['layout_three_title'])) :
                            $this->add_inline_editing_attributes('layout_three_title', 'none');
                            pitoon_elementor_rendered_content($this, 'layout_three_title', 'cta-three__title', $settings['title_tag_layout_three']);
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="cta-three__btn-box">
                        <?php
                        if (!empty($settings['layout_three_button_label'])) :
                            pitoon_basic_rendered_content($this, $settings,  'layout_three_button_label', 'thm-btn cta-three__btn', 'a', 'layout_three_button_url', '');
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA Three End-->
<?php endif; ?>