<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- Measurement Style One Start-->
    <section class="measurement">
        <div class="container">
            <div class="section-title text-center">
                <?php
                if (!empty($settings['sec_sub_title'])) :
                    $this->add_inline_editing_attributes('sec_sub_title', 'none');
                    pitoon_elementor_rendered_content($this, 'sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_one']);
                endif;
                ?>

                <?php
                if (!empty($settings['sec_title'])) :
                    $this->add_inline_editing_attributes('sec_title', 'none');
                    pitoon_elementor_rendered_content($this, 'sec_title', 'section-title__title', $settings['section_title_tag_layout_one']);
                endif;
                ?>
            </div>
            <div class="measurement__main-tab-box tabs-box">
                <ul class="tab-buttons clearfix list-unstyled">
                    <?php $i = 1;
                    foreach ($settings['measurement_list'] as $index => $item) :
                        $measurment_title = str_replace(' ', '', ($item['title']));
                    ?>
                        <li data-tab="#<?php echo esc_html(strtolower($measurment_title)); ?>" class="tab-btn <?php if ($i == '2') {
                                                                                                                    echo esc_attr("active-btn");
                                                                                                                } ?>">
                            <div class="measurement__single">
                                <div class="measurement__icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </div>
                                <?php
                                if (!empty($item['title'])) :
                                    pitoon_basic_rendered_content($this, $item,  'title', 'measurement__title', $item['measurement_title_tag_layout_one']);
                                endif;
                                ?>
                            </div>
                        </li>
                    <?php $i++;
                    endforeach; ?>
                </ul>

                <div class="tabs-content">
                    <?php
                    $i = 1;
                    foreach ($settings['measurement_list'] as $index => $item) :
                        $measurment_title = str_replace(' ', '', ($item['title']));
                    ?>
                        <!--tab-->
                        <div class="tab <?php if ($i == '2') {
                                            echo esc_attr("active-tab");
                                        } ?>" id="<?php echo esc_html(strtolower($measurment_title)); ?>">
                            <div class="measurement__bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 animated fadeInLeft">
                                        <div class="measurement__bottom-left">
                                            <?php
                                            if (!empty($item['title'])) :
                                                pitoon_basic_rendered_content($this, $item,  'title', 'measurement__bottom-title', $item['measurement_title_tag_layout_one']);
                                            endif;

                                            if (!empty($item['summary'])) :
                                                pitoon_basic_rendered_content($this, $item,  'summary', 'measurement__bottom-text', 'p');
                                            endif;
                                            ?>
                                            <div class="measurement__bottom-points-box">
                                                <?php echo wp_kses($item['points'], 'pitoon_allowed_tags'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 animated fadeInRight">
                                        <div class="measurement__bottom-right">
                                            <div class="measurement__bottom-img">
                                                <?php pitoon_elementor_rendered_image($item, 'image') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!--Measurement Style One  End-->

<?php endif; ?>