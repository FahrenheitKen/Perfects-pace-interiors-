<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="services-details__services-list">
        <?php if (!empty($settings['title'])) : ?>
            <div class="services-details__services-title">
                <?php
                pitoon_basic_rendered_content($this, $settings,  'title', '', 'h3');
                ?>
            </div>
        <?php endif; ?>
        <?php foreach ($settings['nav_menus'] as $nav_menu) : ?>
            <?php wp_nav_menu(array(
                'menu' => $nav_menu['nav_menu'],
                'menu_class' => 'services-details__services list-unstyled ml-0',
                'container'  => '',
            )); ?>
        <?php endforeach; ?>
    </div>

<?php endif; ?>