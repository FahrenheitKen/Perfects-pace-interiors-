<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--Why Choose One Start-->
    <section class="why-choose-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="why-choose-one__left">
                        <div class="why-choose-one__img">
                            <?php pitoon_elementor_rendered_image($settings, 'choose_bg_image_one'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="why-choose-one__right">
                        <div class="why-choose-one__shape-1">
                            <?php pitoon_elementor_rendered_image($settings, 'choose_bg_shape_one'); ?>
                        </div>
                        <?php

                        if (!empty($settings['sec_title'])) :
                            $this->add_inline_editing_attributes('sec_title', 'none');
                            pitoon_elementor_rendered_content($this, 'sec_title', 'why-choose-one__title', $settings['section_title_tag_layout_one']);
                        endif;

                        if (!empty($settings['sec_sub_title'])) :
                            $this->add_inline_editing_attributes('sec_sub_title', 'none');
                            pitoon_elementor_rendered_content($this, 'sec_sub_title', 'why-choose-one__text', 'p');
                        endif;

                        ?>
                        <ul class="why-choose-one__points list-unstyled ml-0">
                            <?php
                            foreach ($settings['check_list_one'] as $index => $item) :
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
    </section>
    <!--Why Choose One End-->

<?php endif; ?>