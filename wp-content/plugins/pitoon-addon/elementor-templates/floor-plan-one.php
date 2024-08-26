<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--Floor Plan Start-->
    <section class="floor-plan">
        <div class="container">
            <div class="floor-plan__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="floor-plan__top-left">
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
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="floor-plan__top-right">
                            <?php
                            if (!empty($settings['sec_summary'])) :
                                pitoon_basic_rendered_content($this, $settings, 'sec_summary', 'floor-plan__top-text', 'p');
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="floor-plan__main-tab-box tabs-box">
                <ul class="tab-buttons clearfix list-unstyled ml-0">
                    <?php
                    $i = 1;
                    foreach ($settings['floor_list_one'] as $index => $item) :
                        $floor_title = str_replace(' ', '', ($item['title']));
                    ?>
                        <li data-tab="#<?php echo esc_attr(strtolower($floor_title)); ?>" class="tab-btn <?php if ($i == '1') : echo esc_attr("active-btn");
                                                                                                            endif; ?>"><span><?php echo esc_html($item['title']); ?></span></li>
                    <?php $i++;
                    endforeach; ?>
                </ul>
                <div class="tabs-content">
                    <?php
                    $i = 1;
                    foreach ($settings['floor_list_one'] as $index => $item) :
                        $floor_title = str_replace(' ', '', ($item['title']));
                    ?>
                        <!--tab-->
                        <div class="tab <?php if ($i == '1') : echo esc_attr("active-tab");
                                        endif; ?>" id="<?php echo esc_attr(strtolower($floor_title)); ?>">
                            <div class="floor-plan__tab-content-inner">
                                <div class="floor-plan__tab-content-left">
                                    <ul class="list-unstyled floor-plan__tab-content-details ml-0">
                                        <?php echo wp_kses($item['content'], 'pitoon_allowed_tags'); ?>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ">
                                    <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                </div>
                            </div>
                        </div>
                    <?php $i++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!--Floor Plan End-->
<?php endif; ?>