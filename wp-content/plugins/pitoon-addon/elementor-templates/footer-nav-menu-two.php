<?php if ('layout_two' == $settings['layout_type']) : ?>
    <div class="footer-widget__column footer-widget__departments">
        <div class="footer-widget__title-box">
            <?php
            if (!empty($settings['sec_title_two'])) :
                $this->add_inline_editing_attributes('sec_title_two', 'none');
                pitoon_elementor_rendered_content($this, 'sec_title_two', 'footer-widget__title', $settings['section_title_tag_layout_two']);
            endif;
            ?>
        </div>
        <?php
        foreach ($settings['nav_menus_department'] as $nav_menu) : ?>
            <?php wp_nav_menu(array(
                'menu' => $nav_menu['nav_menu'],
                'menu_class' => 'footer-widget__link-list list-unstyled ml-0'
            ));
            ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>