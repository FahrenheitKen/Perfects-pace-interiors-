<?php if ('layout_one' == $settings['layout_type']) : ?>
    <ul class="services-details__points list-unstyled ml-0">
        <?php
        foreach ($settings['business_box_list'] as $index => $item) :
        ?>
            <li>
                <div class="icon">
                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                </div>
                <div class="text">
                    <?php
                    if (!empty($item['title'])) :
                        pitoon_basic_rendered_content($this, $item,  'title', 'service-details__business-title', 'p');
                    endif;
                    ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>