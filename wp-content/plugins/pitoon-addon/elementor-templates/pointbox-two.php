<?php if ('layout_two' == $settings['layout_type']) : ?>
    <div class="service-details__benefit">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="service-details__benefit-img">
                    <?php pitoon_elementor_rendered_image($settings, 'point_box_image_two'); ?>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="service-details__benefit-content">
                    <?php
                    if (!empty($settings['point_title_two'])) :
                        $this->add_inline_editing_attributes('point_title_two', 'none');
                        pitoon_elementor_rendered_content($this, 'point_title_two', 'service-details__benefit-title', $settings['point_title_tag_layout_two']);
                    endif;

                    if (!empty($settings['point_sub_title_two'])) :
                        $this->add_inline_editing_attributes('point_sub_title_two', 'none');
                        pitoon_elementor_rendered_content($this, 'point_sub_title_two', 'service-details__benefit-text', 'p');
                    endif;
                    ?>
                    <ul class="list-unstyled service-details__benefit-points ml-0">
                        <?php
                        foreach ($settings['check_list_two'] as $index => $item) :
                        ?>
                            <li>
                                <div class="icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </div>
                                <div class="text">
                                    <?php
                                    if (!empty($item['title'])) :
                                        pitoon_basic_rendered_content($this, $item,  'title', '', 'p');
                                    endif;
                                    ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>