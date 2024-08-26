<?php if ('layout_one' == $settings['layout_type']) : ?>

  <div class="footer-widget__column footer-widget__newsletter">
    <?php if (!empty($settings['title'])) : ?>
      <div class="footer-widget__title-box">
        <?php
        $this->add_inline_editing_attributes('title', 'none');
        pitoon_elementor_rendered_content($this, 'title', 'footer-widget__title', $settings['section_title_tag_layout_one']);
        ?>
      </div>
    <?php endif; ?>
    <div class="footer-widget__newsletter-form-box">
      <form class="footer-widget__newsletter-form mc-form" data-url="<?php echo esc_html($settings['mailchimp_url']); ?>" novalidate="novalidate">
        <div class="footer-widget__newsletter-form-input-box">
          <input type="email" placeholder="<?php echo esc_attr($settings['mc_input_placeholder']); ?>" name="EMAIL">
          <button type="submit" class="footer-widget__newsletter-btn"><span class="fas fa-paper-plane"></span></button>
        </div>
      </form>
      <div class="mc-form__response"></div>
      <?php if (!empty($settings['checked_title'])) : ?>
        <div class="checked-box">
          <input type="checkbox" name="skipper1" id="skipper" checked="">
          <label for="skipper"><span></span><?php echo esc_html($settings['checked_title']); ?></label>
        </div>
      <?php endif; ?>
    </div>
  </div>

<?php endif; ?>