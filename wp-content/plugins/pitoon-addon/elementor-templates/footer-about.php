<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="footer-widget__column footer-widget__about">
        <?php if ($settings['logo']['url']) : ?>
            <div class="footer-widget__logo logo-retina">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url($settings['logo']['url']); ?>" width="<?php echo esc_attr($settings['logo_dimension']['width']); ?>" height="<?php echo esc_attr($settings['logo_dimension']['height']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                </a>
            </div>
        <?php endif; ?>
        <?php if (!empty($settings['text'])) : ?>
            <?php
            if (!empty($settings['text'])) :
                pitoon_basic_rendered_content($this, $settings,  'text', 'footer-widget__about-text', 'p');
            endif;
            ?>
        <?php endif; ?>
        <?php if (is_array($settings['social_icons'])) : ?>
            <div class="site-footer__social">
                <?php foreach ($settings['social_icons'] as $item) : ?>
                    <a <?php echo esc_attr(!empty($item['social_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['social_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($item['social_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>