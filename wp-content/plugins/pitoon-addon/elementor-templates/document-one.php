<?php if ('layout_one' == $settings['layout_type']) : ?>
    <?php
    foreach ($settings['document_list'] as $index => $item) :
    ?>
        <div class="services-details__documents">
            <div class="icon">
                <?php \Elementor\Icons_Manager::render_icon($item['icon_one'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
            </div>
            <div class="content">
                <<?php echo esc_attr($item['document_title_tag_layout_one']); ?>>
                    <?php
                    if (!empty($item['title'])) :
                        pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
                    endif;
                    ?>
                </<?php echo esc_attr($item['document_title_tag_layout_one']); ?>>
                <?php
                if (!empty($item['subtitle'])) :
                    pitoon_basic_rendered_content($this, $item,  'subtitle', '', 'p');
                endif;
                ?>
            </div>
        </div>
    <?php endforeach; ?>

<?php endif; ?>