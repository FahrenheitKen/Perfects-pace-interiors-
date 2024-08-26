<?php if ('layout_four' == $settings['layout_type']) : ?>
    <!--Similar Portfolio Start-->
    <section class="similar-project">
        <div class="container">
            <?php if (!empty($settings['layout_four_sec_sub_title'] || $settings['layout_four_sec_title'])) : ?>
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <?php
                        if (!empty($settings['layout_four_sec_sub_title'])) :
                            $this->add_inline_editing_attributes('layout_four_sec_sub_title', 'none');
                            pitoon_elementor_rendered_content($this, 'layout_four_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_four']);
                        endif;
                        ?>
                        <div class="section-title__icon-box-1">
                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        </div>
                        <div class="section-title__icon-box-2">
                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        </div>
                    </div>
                    <?php
                    if (!empty($settings['layout_four_sec_title'])) :
                        $this->add_inline_editing_attributes('layout_four_sec_title', 'none');
                        pitoon_elementor_rendered_content($this, 'layout_four_sec_title', 'section-title__title', $settings['section_title_tag_layout_four']);
                    endif;
                    ?>
                </div>
            <?php endif; ?>
            <div class="owl-carousel thm-owl__carousel owl-with-shadow" data-owl-options='<?php echo esc_attr(pitoon_get_owl_options($settings)); ?>'>
                <?php foreach ($settings['layout_four_projects_items'] as $index => $item) :  ?>
                    <!--Project One Single Start-->
                    <div class="item">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                </div>
                                <div class="project-one__content">
                                    <div class="project-one__tag">
                                        <?php
                                        if (!empty($item['subtitle'])) :
                                            pitoon_basic_rendered_content($this, $item,  'subtitle', '', 'p');
                                        endif;
                                        ?>
                                    </div>
                                    <div class="project-one__title-box">
                                        <<?php echo esc_attr($item['project_title_tag_layout_four']); ?> class="project-one__title">
                                            <?php
                                            if (!empty($item['title'])) :
                                                pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                            endif;
                                            ?>
                                        </<?php echo esc_attr($item['project_title_tag_layout_four']); ?>>
                                    </div>
                                </div>
                                <?php if (!empty($item['image']['url'])) : ?>
                                    <div class="project-one__arrow-box">
                                        <a class="img-popup project-one__arrow" href="<?php echo esc_url($item['image']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--Similar Portfolio End-->

<?php endif; ?>