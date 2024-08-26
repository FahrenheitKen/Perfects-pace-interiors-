<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="project-details__right">
        <ul class="list-unstyled project-details__info-list ml-0">
            <?php
            foreach ($settings['layout_one_info_items'] as $key => $item) :
            ?>
                <li>
                    <?php
                    if (!empty($item['title'])) :
                        pitoon_basic_rendered_content($this, $item,  'title', '', 'span');
                    endif;
                    ?>
                    <?php
                    if (!empty($item['content'])) :
                        pitoon_basic_rendered_content($this, $item,  'content', '', 'p');
                    endif;
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="project-details__social">
            <?php foreach ($settings['social_icons'] as $item) : ?>
                <a <?php echo esc_attr(!empty($item['social_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['social_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($item['social_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></a>
            <?php endforeach; ?>
        </div>
    </div>

<?php endif; ?>