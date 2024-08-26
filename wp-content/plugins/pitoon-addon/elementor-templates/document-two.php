<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!--Documents One Start-->
    <section class="documents-two">
        <div class="documents-two__bg" style="background-image: url(<?php echo esc_url($settings['layout_two_bac_image']['url']); ?>);"></div>
        <div class="container">
            <div class="documents-two__inner">
                <div class="documents-two__left">
                    <?php
                    if (!empty($settings['section_title_layout_two'])) :
                        $this->add_inline_editing_attributes('section_title_layout_two', 'none');
                        pitoon_elementor_rendered_content($this, 'section_title_layout_two', '', 'p');
                    endif;
                    ?>
                </div>
                <div class="documents-two__right">
                    <ul class="documents-two__points list-unstyled">
                        <?php
                        foreach ($settings['document_list_two'] as $index => $item) :
                        ?>
                            <li>
                                <div class="documents-two__single">
                                    <div class="documents-two__content">
                                        <div class="documents-two__icon">
                                            <?php \Elementor\Icons_Manager::render_icon($item['icon_one'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                        </div>
                                        <<?php echo esc_attr($item['document_title_tag_layout_two']); ?> class="documents-two__title">
                                            <?php
                                            if (!empty($item['title'])) :
                                                pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                            endif;
                                            ?>
                                        </<?php echo esc_attr($item['document_title_tag_layout_two']); ?>>
                                        <?php
                                        if (!empty($item['subtitle'])) :
                                            pitoon_basic_rendered_content($this, $item,  'subtitle', 'documents-two__text', 'p');
                                        endif;
                                        ?>
                                    </div>
                                    <div class="documents-two__icon-two">
                                        <?php \Elementor\Icons_Manager::render_icon($item['icon_two'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Documents One End-->
<?php endif; ?>