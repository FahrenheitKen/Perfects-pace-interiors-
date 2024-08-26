<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!--Counter Two Start-->
    <section class="counter-three">
        <div class="counter-two__bg" style="background-image: url(<?php echo esc_url($settings['layout_two_bg_image']['url']); ?>);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                </div>
                <?php
                if (!empty($settings['layout_two_sec_sub_title'])) :
                    $this->add_inline_editing_attributes('layout_two_sec_sub_title', 'none');
                    pitoon_elementor_rendered_content($this, 'layout_two_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_two']);
                endif;

                if (!empty($settings['layout_two_sec_title'])) :
                    $this->add_inline_editing_attributes('layout_two_sec_title', 'none');
                    pitoon_elementor_rendered_content($this, 'layout_two_sec_title', 'section-title__title', $settings['section_title_tag_layout_two']);
                endif;
                ?>
            </div>
            <div class="counter-two__inner">
                <ul class="counter-two__list list-unstyled ml-0">
                    <?php
                    foreach ($settings['counter_list_two'] as $index => $item) :
                    ?>
                        <li>
                            <div class="counter-two__count">
                                <h3 class="odometer" data-count="<?php echo esc_attr($item['number']); ?>">00</h3>
                                <span class=""><?php echo esc_html($item['symbol']); ?></span>
                            </div>
                            <?php
                            if (!empty($item['title'])) :
                                pitoon_basic_rendered_content($this, $item,  'title', 'counter-two__text', 'p');
                            endif;
                            ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter Two End-->
<?php endif; ?>