<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--New Concept start-->
    <section class="new-concept">
        <?php if ($settings['concept_bg_shape_one']['url']) : ?>
            <div class="new-concept__shape-1 float-bob-y">
                <?php pitoon_elementor_rendered_image($settings, 'concept_bg_shape_one'); ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="new-concept-left">
                        <div class="section-title text-left">
                            <?php
                            if (!empty($settings['sec_sub_title'])) :
                                $this->add_inline_editing_attributes('sec_sub_title', 'none');
                                pitoon_elementor_rendered_content($this, 'sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_one']);
                            endif;

                            if (!empty($settings['sec_title'])) :
                                $this->add_inline_editing_attributes('sec_title', 'none');
                                pitoon_elementor_rendered_content($this, 'sec_title', 'section-title__title', $settings['section_title_tag_layout_one']);
                            endif;
                            ?>
                        </div>
                        <?php
                        if (!empty($settings['sec_summary'])) :
                            pitoon_basic_rendered_content($this, $settings,  'sec_summary', 'new-concept__text', 'p');
                        endif;
                        ?>
                        <?php if (is_array($settings['feature_list_one'])) : ?>
                            <ul class="new-concept__points list-unstyled ml-0">
                                <?php
                                foreach ($settings['feature_list_one'] as $index => $item) :
                                ?>
                                    <li>
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                        </div>
                                        <div class="text">
                                            <?php
                                            if (!empty($item['title'])) :
                                                pitoon_basic_rendered_content($this, $item,  'title', '', $item['concept_title_tag_layout_one']);
                                            endif;

                                            if (!empty($item['subtitle'])) :
                                                pitoon_basic_rendered_content($this, $item,  'subtitle', '', 'p');
                                            endif;
                                            ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="new-concept__right">
                        <div class="new-concept__img-box">
                            <?php if ($settings['concept_bg_image_one']['url']) : ?>
                                <div class="new-concept__img">
                                    <?php pitoon_elementor_rendered_image($settings, 'concept_bg_image_one'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--New Concept End-->
<?php endif; ?>