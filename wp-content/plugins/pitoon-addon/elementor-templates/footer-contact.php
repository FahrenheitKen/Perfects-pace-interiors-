<?php if ('layout_one' == $settings['layout_type']) : ?>

    <div class="footer-widget__column footer-widget__Contact">
        <?php if (!empty($settings['title'])) : ?>
            <div class="footer-widget__title-box">
                <?php
                $this->add_inline_editing_attributes('title', 'none');
                pitoon_elementor_rendered_content($this, 'title', 'footer-widget__title', $settings['section_title_tag_layout_one']);
                ?>
            </div>
        <?php endif; ?>
        <?php
        if (!empty($settings['text'])) :
            pitoon_basic_rendered_content($this, $settings,  'text', 'footer-widget__Contact-text', 'p');
        endif;
        ?>
        <ul class="footer-widget__Contact-list list-unstyled ml-0">
            <?php
            foreach ($settings['footer_contact_list'] as $index => $item) :
            ?>
                <li>
                    <div class="icon">
                        <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ''], 'span'); ?>
                    </div>
                    <div class="text">
                        <?php echo wp_kses($item['title'], 'pitoon_allowed_tags'); ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php endif; ?>