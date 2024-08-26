<?php if ('layout_one' === $settings['layout_type']) : ?>
    <!--Team Details Start-->
    <section class="team-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__left">
                        <div class="team-details__img">
                            <?php pitoon_elementor_rendered_image($settings, 'bg_image'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__right">
                        <?php
                        if (!empty($settings['name'])) :
                            $this->add_inline_editing_attributes('name', 'none');
                            pitoon_elementor_rendered_content($this, 'name', 'team-details__name', $settings['name_tag_layout_one']);
                        endif;

                        if (!empty($settings['designation'])) :
                            $this->add_inline_editing_attributes('designation', 'none');
                            pitoon_elementor_rendered_content($this, 'designation', 'team-details__sub-title', 'p');
                        endif;
                        ?>

                        <div class="team-details__social">
                            <?php foreach ($settings['social_icons'] as $item) : ?>
                                <a href="<?php echo esc_url($item['social_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($item['social_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></a>
                            <?php endforeach; ?>
                        </div>
                        <?php
                        if (!empty($settings['summary'])) :
                            pitoon_basic_rendered_content($this, $settings,  'summary', 'team-details__text-1', 'p');
                        endif;

                        if (!empty($settings['point_list_title'])) :
                            pitoon_basic_rendered_content($this, $settings,  'point_list_title', 'team-details__points-title', $settings['point_title_tag_layout_one']);
                        endif;
                        ?>
                        <div class="team-details__points-box">
                            <ul class="team-details__points list-unstyled ml-0">
                                <?php foreach ($settings['point_list'] as $index => $item) : ?>
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
                            <ul class="team-details__points list-unstyled ml-0">
                                <?php foreach ($settings['point_list_two'] as $index => $item) : ?>
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
                        <div class="team-details__progress">
                            <?php foreach ($settings['progress_list'] as $index => $item) : ?>
                                <div class="team-details__progress-single">
                                    <?php
                                    if (!empty($item['title'])) :
                                        pitoon_basic_rendered_content($this, $item,  'title', 'team-details__progress-title', 'h4');
                                    endif;
                                    ?>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="<?php echo esc_attr($item['number']); ?>">
                                            <div class="count-text"><?php echo esc_attr($item['number']); ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team Details End-->
<?php endif; ?>