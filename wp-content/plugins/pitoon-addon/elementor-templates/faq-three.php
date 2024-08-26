<?php
if ('layout_three' == $settings['layout_type']) :
    $search_status = $settings['search_enable'];
?>
    <!--FAQ Page Start-->
    <section class="faq-page">
        <div class="container">
            <?php if (!empty($settings['layout_three_icon_image']['url'] || $settings['layout_three_sec_title'] || ('yes' == $search_status))) : ?>
                <div class="faq-page__top text-center">
                    <?php if ($settings['layout_three_icon_image']['url']) : ?>
                        <div class="faq-page__icon">
                            <?php pitoon_elementor_rendered_image($settings, 'layout_three_icon_image'); ?>
                        </div>
                    <?php endif; ?>
                    <?php
                    if (!empty($settings['layout_three_sec_title'])) :
                        $this->add_inline_editing_attributes('layout_three_sec_title', 'none');
                        pitoon_elementor_rendered_content($this, 'layout_three_sec_title', 'faq-page__title', $settings['section_title_tag_layout_three']);
                    endif;
                    ?>
                    <?php
                    if (('yes' == $search_status)) : ?>
                        <form class="faq-search-box__form" method="get" action="<?php echo esc_url(home_url()); ?>">
                            <div class="faq-search-box__form-input">
                                <input type="search" name="s" placeholder="<?php echo esc_attr('Search here', 'pitoon'); ?>">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="faq-page__faq-box">
                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                    <?php
                    foreach ($settings['layout_three_faq_lists'] as $key => $item) :
                    ?>
                        <div class="accrodion <?php echo esc_attr(('yes' == $item['active_status'] ? 'active' : '')); ?>">
                            <div class="accrodion-title">
                                <?php
                                if (!empty($item['question'])) :
                                    pitoon_basic_rendered_content($this, $item,  'question', '', $item['question_title_tag_layout_three']);
                                endif;
                                ?>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <?php
                                    if (!empty($item['answer'])) :
                                        pitoon_basic_rendered_content($this, $item,  'answer', '', 'p');
                                    endif;
                                    ?>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="faq-page__bottom">
                <div class="row">
                    <?php
                    $counter = 1;
                    foreach ($settings['layout_three_contact_box_list'] as $key => $item) :
                    ?>
                        <div class="col-xl-6 col-lg-6">
                            <div class="faq-page__contact-single <?php if ($counter == '2') {
                                                                        echo esc_attr("faq-page__contact-single-2");
                                                                    } ?>">
                                <div class="faq-page__contact-shape-1 float-bob-x">
                                    <?php pitoon_elementor_rendered_image($item, 'bac_shape'); ?>
                                </div>
                                <?php
                                if (!empty($item['title'])) :
                                    pitoon_basic_rendered_content($this, $item,  'title', 'faq-page__contact-title', $item['contact_title_tag_layout_three']);
                                endif;
                                ?>
                                <div class="faq-page__contact-box">
                                    <div class="icon">
                                        <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                    </div>
                                    <div class="content">
                                        <?php
                                        if (!empty($item['contact_title'])) :
                                            pitoon_basic_rendered_content($this, $item,  'contact_title', '', 'p');
                                        endif;
                                        ?>
                                        <h3><?php echo wp_kses($item['contact_info'], 'pitoon_allowed_tags'); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $counter++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ Page End-->

<?php endif; ?>