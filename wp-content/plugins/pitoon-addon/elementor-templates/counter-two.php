<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!--Counter Two Start-->
    <section class="counter-two">
        <div class="container">
            <ul class="counter-two__inner list-unstyled ml-0">
                <?php
                foreach ($settings['counter_list_two'] as $index => $item) :
                ?>
                    <li class="counter-two__single">
                        <div class="counter-two__icon">
                            <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ''], 'i'); ?>
                        </div>
                        <div class="counter-two__content">
                            <h3 class="odometer" data-count="<?php echo esc_attr($item['number']); ?>">00</h3>
                            <?php
                            if (!empty($item['title'])) :
                                pitoon_basic_rendered_content($this, $item,  'title', 'counter-two__text', 'p');
                            endif;
                            ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <!--Counter two End-->
<?php endif; ?>