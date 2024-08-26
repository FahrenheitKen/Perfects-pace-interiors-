<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--Why Choose One Start-->
    <section class="why-choose-one">
        <div class="why-choose-one__bg" style="background-image: url(<?php echo esc_url($settings['section_image']['url']); ?>);"></div>
        <div class="container">
            <div class="why-choose-one__main-tab-box tabs-box">
                <div class="tabs-content">
                    <?php
                    $counter = 1;
                    foreach ($settings['layout_one_tab_list'] as $item) : ?>
                        <!--tab-->
                        <div class="tab <?php echo esc_attr(('yes' == $item['active_status'] ? 'active-tab' : '')); ?>" id="<?php echo esc_attr($item['slug']); ?>">
                            <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content($item['layout_one_template'], true); ?>
                        </div>
                        <!--tab-->
                    <?php $counter++;
                    endforeach; ?>
                </div>
                <ul class="tab-buttons clearfix list-unstyled">
                    <?php
                    $counter = 1;
                    foreach ($settings['layout_one_tab_list'] as $item) : ?>
                        <li data-tab="#<?php echo esc_attr($item['slug']); ?>" class="tab-btn <?php echo esc_attr(('yes' == $item['active_status'] ? 'active-btn' : '')); ?>"><span><?php echo esc_html($item['title']); ?></span></li>
                    <?php $counter++;
                    endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
    <!--Why Choose One End-->
<?php endif; ?>