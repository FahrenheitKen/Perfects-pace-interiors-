<?php if ('layout_one' == $settings['layout_type']) : ?>

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="counter-one__bg" style="background-image: url(<?php echo esc_url($settings['bg_image']['url']); ?>);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="list-unstyled counter-one__list">
                        <?php
                        foreach ($settings['counter_list'] as $index => $item) :
                        ?>
                            <li class="counter-one__single wow fadeInUp" data-wow-delay="<?php echo esc_attr($index + 1); ?>00ms">
                                <div class="counter-one__icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </div>
                                <h3 class="odometer" data-count="<?php echo esc_attr($item['number']); ?>">00</h3>
                                <?php
                                if (!empty($item['title'])) :
                                    pitoon_basic_rendered_content($this, $item,  'title', 'counter-one__text', 'p');
                                endif;
                                ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Counter One End-->

<?php endif; ?>