<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="services-details__benefit">
        <div class="row">
            <div class="col-xl-6">
                <div class="services-details__benefit-img">
                    <?php pitoon_elementor_rendered_image($settings, 'benefit_box_image'); ?>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="services-details__benefit-content">
                    <?php
                    if (!empty($settings['benefit_title'])) :
                        $this->add_inline_editing_attributes('benefit_title', 'none');
                        pitoon_elementor_rendered_content($this, 'benefit_title', 'services-details__benefit-title', $settings['benefit_title_tag_layout_one']);
                    endif;

                    if (!empty($settings['benefit_sub_title'])) :
                        $this->add_inline_editing_attributes('benefit_sub_title', 'none');
                        pitoon_elementor_rendered_content($this, 'benefit_sub_title', 'services-details__benefit-text', 'p');
                    endif;
                    ?>
                    <ul class="services-details__benefit-points list-unstyled ml-0">
                        <?php
                        foreach ($settings['check_list'] as $index => $item) :
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