<?php if ('layout_five' == $settings['layout_type']) : ?>
    <!--Projects Page Start-->
    <section class="projects-page">
        <div class="container">
            <div class="row">
                <?php foreach ($settings['layout_five_projects_items'] as $index => $item) :  ?>
                    <!--Project One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
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
                                        <<?php echo esc_attr($item['project_title_tag_layout_five']); ?> class="project-one__title">
                                            <?php
                                            if (!empty($item['title'])) :
                                                pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                                            endif;
                                            ?>
                                        </<?php echo esc_attr($item['project_title_tag_layout_five']); ?>>
                                    </div>
                                </div>
                                <div class="project-one__arrow-box">
                                    <a class="img-popup project-one__arrow" href="<?php echo esc_url($item['image']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--Projects Page End-->

<?php endif; ?>