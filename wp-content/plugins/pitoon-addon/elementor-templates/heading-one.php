<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="section-title text-center">
        <?php
        if (!empty($settings['sec_sub_title'])) :
            $this->add_inline_editing_attributes('sec_sub_title', 'none');
            pitoon_elementor_rendered_content($this, 'sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_one']);
        endif;

        if (!empty($settings['sec_title'])) :
            $this->add_inline_editing_attributes('sec_title', 'none');
            pitoon_elementor_rendered_content($this, 'sec_title', 'section-title__title', $settings['section_title_tag_layout_one']);
        endif;
        ?>
    </div>
<?php endif; ?>