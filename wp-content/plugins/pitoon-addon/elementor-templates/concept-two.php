<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!--New Concept Two Start-->
    <section class="new-concept-two">
        <?php if (!empty($settings['layout_two_bg_shape_one']['url'])) : ?>
            <div class="new-concept-two__shape-1 float-bob-y">
                <?php pitoon_elementor_rendered_image($settings, 'layout_two_bg_shape_one') ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($settings['layout_two_bg_shape_two']['url'])) : ?>
            <div class="new-concept-two__shape-2 float-bob-x">
                <?php pitoon_elementor_rendered_image($settings, 'layout_two_bg_shape_two') ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="new-concept-two__left">
                        <div class="section-title text-left">
                            <?php
                            if (!empty($settings['layout_two_sec_sub_title'])) :
                                $this->add_inline_editing_attributes('layout_two_sec_sub_title', 'none');
                                pitoon_elementor_rendered_content($this, 'layout_two_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_two']);
                            endif;

                            if (!empty($settings['layout_two_sec_title'])) :
                                $this->add_inline_editing_attributes('layout_two_sec_title', 'none');
                                pitoon_elementor_rendered_content($this, 'layout_two_sec_title', 'section-title__title', $settings['section_title_tag_layout_two']);
                            endif;
                            ?>
                        </div>
                        <?php
                        if (!empty($settings['layout_two_sec_summary'])) :
                            pitoon_basic_rendered_content($this, $settings,  'layout_two_sec_summary', 'new-concept__text', 'p');
                        endif;
                        ?>
                        <ul class="new-concept__points list-unstyled ml-0">
                            <?php
                            foreach ($settings['feature_list_layout_two'] as $index => $item) :
                            ?>
                                <li>
                                    <div class="icon">
                                        <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                    </div>
                                    <div class="text">
                                        <?php
                                        if (!empty($item['title'])) :
                                            pitoon_basic_rendered_content($this, $item,  'title', '', $item['concept_title_tag_layout_two']);
                                        endif;

                                        if (!empty($item['subtitle'])) :
                                            pitoon_basic_rendered_content($this, $item,  'subtitle', '', 'p');
                                        endif;
                                        ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="new-concept-two__right">
                        <?php if (!empty($settings['layout_two_bg_image']['url'])) : ?>
                            <div class="new-concept-two__img">
                                <?php pitoon_elementor_rendered_image($settings, 'layout_two_bg_image') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--New Concept Two End-->
<?php endif; ?>