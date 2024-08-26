<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="project-details__title-and-date-box">
        <div class="project-details__title">
            <?php
            if (!empty($settings['title'])) :
                $this->add_inline_editing_attributes('title', 'none');
                pitoon_elementor_rendered_content($this, 'title', '', $settings['title_tag_layout_one']);
            endif;
            ?>
        </div>
        <?php if (!empty($settings['date'])) : ?>
            <div class="project-details__date-box">
                <?php
                $this->add_inline_editing_attributes('date', 'none');
                pitoon_elementor_rendered_content($this, 'date', 'project-details__date', 'p');
                ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>