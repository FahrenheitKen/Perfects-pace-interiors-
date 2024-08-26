<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!--Project Three Start-->
    <section class="project-three">
        <div class="project-three__shape-1">
            <?php pitoon_elementor_rendered_image($settings, 'layout_three_bg_shape'); ?>
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <?php
                    if (!empty($settings['layout_three_sec_sub_title'])) :
                        $this->add_inline_editing_attributes('layout_three_sec_sub_title', 'none');
                        pitoon_elementor_rendered_content($this, 'layout_three_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_three']);
                    endif;
                    ?>
                    <div class="section-title__icon-box-1">
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                    </div>
                    <div class="section-title__icon-box-2">
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                    </div>
                </div>
                <?php
                if (!empty($settings['layout_three_sec_title'])) :
                    $this->add_inline_editing_attributes('layout_three_sec_title', 'none');
                    pitoon_elementor_rendered_content($this, 'layout_three_sec_title', 'section-title__title', $settings['section_title_tag_layout_three']);
                endif;
                ?>
            </div>
            <?php if ('yes' == $settings['layout_three_enable_filter']) : ?>
                <div class="project-three__filter-box">
                    <ul class="project-three__filter style1 post-filter list-unstyled clearfix">
                        <li data-filter=".filter-item" class="active"><span class="filter-text"><?php esc_html_e('All', 'pitoon-addon'); ?></span>
                        </li>
                        <?php foreach ($settings['layout_three_projects_filter'] as $item) : ?>
                            <li data-filter=".<?php echo esc_attr($item['slug']); ?>"><span class="filter-text"><?php echo esc_html($item['name']); ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="row filter-layout masonary-layout">
                <?php foreach ($settings['layout_three_projects_items'] as $index => $item) : ?>
                    <!--Project Three Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item <?php echo esc_attr($item['slug']); ?>">
                        <div class=" project-three__single">
                            <div class="project-three__img-box">
                                <div class="project-three__img">
                                    <?php pitoon_elementor_rendered_image($item, 'image'); ?>
                                </div>
                                <div class="project-three__content">
                                    <p class="project-three__sub-title"><?php $slug = $item['slug'];
                                                                        $category = str_replace(" ", " / ", $slug);
                                                                        echo esc_html($category); ?></p>
                                    <<?php echo esc_attr($item['project_title_tag_layout_three']); ?> class="project-three__title">
                                        <?php
                                        if (!empty($item['title'])) :
                                            pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                        endif;
                                        ?>
                                    </<?php echo esc_attr($item['project_title_tag_layout_three']); ?>>
                                </div>
                                <?php if (!empty($item['image']['url'])) : ?>
                                    <div class="project-three__icon">
                                        <a class="img-popup" href="<?php echo esc_url($item['image']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!--Project Three Single End-->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--Project Three End-->


<?php
endif; ?>