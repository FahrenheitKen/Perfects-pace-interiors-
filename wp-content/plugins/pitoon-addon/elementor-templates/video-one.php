<?php if ('layout_one' == $settings['layout_type']) : ?>

    <!--Video One Start-->
    <section class="video-one">
        <div class="container">
            <div class="video-one__inner">
                <div class="video-one__bg-1" style="background-image: url(<?php echo esc_url($settings['layout_one_bg_image']['url']); ?>)"></div>
                <div class="video-one__bg-2" style="background-image: url(<?php echo esc_url($settings['layout_one_bg_image_two']['url']); ?>)"></div>
                <div class="video-one__shape-1">
                    <?php pitoon_elementor_rendered_image($settings, 'layout_one_bg_image_three'); ?>
                </div>
                <div class="video-one__video-box">
                    <?php if (!empty($settings['layout_one_video_url']['url'])) : ?>
                        <div class="video-one__video-link">
                            <a href="<?php echo esc_url($settings['layout_one_video_url']['url']); ?>" class="video-popup">
                                <div class="video-one__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php
                    if (!empty($settings['layout_one_video_title'])) :
                        $this->add_inline_editing_attributes('layout_one_video_title', 'none');
                        pitoon_elementor_rendered_content($this, 'layout_one_video_title', 'video-one__title', $settings['video_title_tag_layout_one']);
                    endif;
                    ?>
                    <?php if (!empty($settings['url']['url'])) : ?>
                        <div class="video-one__plus">
                            <a href="<?php echo esc_url($settings['url']['url']); ?>"><span class="icon-plus"></span></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->

<?php endif; ?>