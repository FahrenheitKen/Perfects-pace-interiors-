<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--Certificates Start-->
    <section class="certificates">
        <div class="container">
            <div class="certificates__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="certificates__top-left">
                            <?php
                            if (!empty($settings['sec_title'])) :
                                $this->add_inline_editing_attributes('sec_title', 'none');
                                pitoon_elementor_rendered_content($this, 'sec_title', 'certificates__top-title', $settings['section_title_tag_layout_one']);
                            endif;

                            if (!empty($settings['sec_sub_title'])) :
                                $this->add_inline_editing_attributes('sec_sub_title', 'none');
                                pitoon_elementor_rendered_content($this, 'sec_sub_title', 'certificates__top-text', 'p');
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="certificates__top-right">
                            <ul class="certificates__top-img-box list-unstyled">
                                <?php
                                foreach ($settings['certificate_list'] as $index => $item) :
                                ?>
                                    <li>
                                        <div class="certificates__top-img">
                                            <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="certificates__bottom">
                <ul class="certificates__points list-unstyled ml-0">
                    <?php
                    foreach ($settings['point_list'] as $index => $item) :
                    ?>
                        <li>
                            <div class="certificates__points-single">
                                <?php
                                if (!empty($item['date'])) :
                                    pitoon_basic_rendered_content($this, $item,  'date', 'certificates__points-date', 'p');
                                endif;

                                if (!empty($item['title'])) :
                                    pitoon_basic_rendered_content($this, $item,  'title', 'certificates__points-title', $item['list_title_tag_layout_one']);
                                endif;

                                if (!empty($item['subtitle'])) :
                                    pitoon_basic_rendered_content($this, $item,  'subtitle', 'certificates__points-text', 'p');
                                endif;
                                ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
    <!--Certificates End-->

<?php endif; ?>