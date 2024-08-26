<?php if ('layout_four' == $settings['layout_type']) : ?>
    <div class="why-choose-one__top">
        <div class="row">
            <div class="col-xl-5">
                <div class="why-choose-one__left">
                    <ul class="why-choose-one__points list-unstyled ml-0">
                        <?php
                        foreach ($settings['layout_four_check_list'] as $index => $item) :
                        ?>
                            <li>
                                <div class="icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </div>
                                <div class="content">
                                    <?php
                                    if (!empty($item['title'])) :
                                        pitoon_basic_rendered_content($this, $item,  'title', '', $item['check_title_tag_layout_four']);
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
            <div class="col-xl-7">
                <div class="why-choose-one__right">
                    <div class="why-choose-one__experience-and-img">
                        <div class="why-choose-one__experience">
                            <div class="why-choose-one__experience-icon">
                                <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                            </div>
                            <?php
                            if (!empty($settings['layout_four_sec_title'])) :
                                $this->add_inline_editing_attributes('layout_four_sec_title', 'none');
                                pitoon_elementor_rendered_content($this, 'layout_four_sec_title', 'why-choose-one__experience-title', $settings['section_title_tag_layout_four']);
                            endif;
                            ?>
                        </div>
                        <div class="why-choose-one__experience-img">
                            <?php pitoon_elementor_rendered_image($settings, 'layout_four_bg_image'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>