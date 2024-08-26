<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--Sliding Text Start -->
    <section class="sliding-text">
        <div class="sliding-text__wrap">
            <ul class="sliding-text__list list-unstyled ml-0">
                <?php
                foreach ($settings['sliding_text_list'] as $index => $item) :
                    if (!empty($item['title'])) : ?>
                        <li><?php echo wp_kses($item['title'], 'pitoon_allowed_tags'); ?></li>
                <?php endif;
                endforeach;
                ?>
            </ul>
        </div>
    </section>
    <!--Sliding Text Start -->

<?php endif; ?>