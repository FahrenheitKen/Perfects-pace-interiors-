<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--Neighborhoods Start-->
    <section class="neighborhoods">
        <div class="neighborhoods__shape-1" style="background-image: url(<?php echo esc_url($settings['bac_image_one']['url']); ?>);"></div>
        <div class="container">
            <div class="section-title text-center">
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
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="neighborhoods__left">
                        <div class="neighborhoods__img-box">
                            <div class="neighborhoods__img">
                                <?php pitoon_elementor_rendered_image($settings, 'bac_image_two'); ?>
                            </div>

                            <?php
                            $i = 1;
                            foreach ($settings['neighbour_faq_lists'] as $item) :
                            ?>
                                <div class="neighborhoods__location-1 <?php if ($i != '1') : echo esc_attr("neighborhoods__location-");
                                                                            echo $i;
                                                                        endif; ?> location-<?php echo esc_attr($i); ?> <?php echo esc_attr(('yes' == $item['active_status'] ? 'active' : '')); ?>">
                                    <div class="neighborhoods__map-markar <?php if ($i != '1') : echo esc_attr("neighborhoods__map-markar-");
                                                                                echo $i;
                                                                            endif; ?>"></div>
                                    <div class="neighborhoods__popup-box">
                                        <div class="neighborhoods__popup">
                                            <div class="neighborhoods__popup-inner">
                                                <?php
                                                if (!empty($item['title'])) :
                                                    pitoon_basic_rendered_content($this, $item,  'title', 'neighborhoods__popup-title', 'h5');
                                                endif;

                                                if (!empty($item['sub_title'])) :
                                                    pitoon_basic_rendered_content($this, $item,  'sub_title', 'neighborhoods__popup-km', 'span');
                                                endif;
                                                ?>
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
                <div class="col-xl-4 col-lg-5">
                    <div class="neighborhoods__right">
                        <div class="neighborhoods__faq">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <?php
                                $counter = 0;
                                foreach ($settings['neighbour_faq_lists'] as $index => $item) :
                                ?>
                                    <div class="accrodion <?php if ($item === end($settings['neighbour_faq_lists'])) {
                                                                echo esc_attr("last-child", 'pitoon-addon');
                                                            } ?> <?php echo esc_attr(('yes' == $item['active_status'] ? 'active' : '')); ?>" data-name="location-<?php echo esc_attr($index + 1); ?>">
                                        <div class="accrodion-title">
                                            <?php
                                            if (!empty($item['title'])) :
                                                pitoon_basic_rendered_content($this, $item,  'title', '', 'h4');
                                            endif;
                                            ?>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <?php
                                                if (!empty($item['summary'])) :
                                                    pitoon_basic_rendered_content($this, $item,  'summary', '', 'p');
                                                endif
                                                ?>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                <?php
                                endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Neighborhoods End-->

<?php endif; ?>