<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--Pricing Page Start-->
    <section class="pricing-page">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <?php
                    if (!empty($settings['sec_sub_title'])) :
                        $this->add_inline_editing_attributes('sec_sub_title', 'none');
                        pitoon_elementor_rendered_content($this, 'sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_one']);
                    endif;
                    ?>
                    <div class="section-title__icon-box-1">
                        <?php \Elementor\Icons_Manager::render_icon($settings['sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                    </div>
                    <div class="section-title__icon-box-2">
                        <?php \Elementor\Icons_Manager::render_icon($settings['sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                    </div>
                </div>
                <?php
                if (!empty($settings['sec_title'])) :
                    $this->add_inline_editing_attributes('sec_title', 'none');
                    pitoon_elementor_rendered_content($this, 'sec_title', 'section-title__title', $settings['section_title_tag_layout_one']);
                endif;
                ?>
            </div>
            <div class="pricing-page__main-tab-box tabs-box">
                <ul class="tab-buttons list-unstyled ml-0">
                    <li data-tab="#monthly" class="tab-btn tab-btn-one"><span><?php echo wp_kses($settings['monthly_heading'], 'pitoon_allowed_tags'); ?></span></li>
                    <li data-tab="#yearly" class="tab-btn active-btn tab-btn-two"><span><?php echo wp_kses($settings['yearly_heading'], 'pitoon_allowed_tags'); ?></span></li>
                </ul>
                <div class="tabs-content">
                    <!--tab-->
                    <div class="tab" id="monthly">
                        <div class="pricing-page__inner">
                            <div class="row">
                                <?php foreach ($settings['pricing_monthly_list'] as $index => $item) :  ?>
                                    <!--Pricing Page Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-page__single">
                                            <div class="pricing-page__single-inner">
                                                <div class="pricing-page__single-bg" style="background-image: url(<?php echo esc_url($item['image']['url']); ?>);">
                                                </div>
                                                <div class="pricing-page__price-box">
                                                    <?php
                                                    if (!empty($item['price'])) :
                                                        pitoon_basic_rendered_content($this, $item,  'price', 'pricing-page__price',  $item['price_tag_layout_one']);
                                                    endif;

                                                    if (!empty($item['plan_title'])) :
                                                        pitoon_basic_rendered_content($this, $item,  'plan_title', 'pricing-page__price-sub-title', 'p');
                                                    endif;
                                                    ?>
                                                </div>
                                                <div class="pricing-page__icon">
                                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                                </div>
                                                <div class="pricing-page__content">
                                                    <?php
                                                    if (!empty($item['service_title'])) :
                                                        pitoon_basic_rendered_content($this, $item,  'service_title', 'pricing-page__title',  $item['service_title_tag_layout_one']);
                                                    endif;
                                                    ?>
                                                    <ul class="list-unstyled pricing-page__service-list ml-0">
                                                        <?php echo wp_kses($item['service_list'], 'pitoon_allowed_tags'); ?>
                                                    </ul>
                                                    <?php if (!empty($item['button_label'])) : ?>
                                                        <div class="pricing-page__btn-box">
                                                            <?php
                                                            pitoon_basic_rendered_content($this, $item,  'button_label', 'thm-btn pricing-page__btn', 'a');
                                                            ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing Page Single End-->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!--tab-->
                    <div class="tab active-tab" id="yearly">
                        <div class="pricing-page__inner">
                            <div class="row">
                                <?php foreach ($settings['pricing_yearly_list'] as $index => $item) :  ?>
                                    <!--Pricing Page Single Start-->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="pricing-page__single">
                                            <div class="pricing-page__single-inner">
                                                <div class="pricing-page__single-bg" style="background-image: url(<?php echo esc_url($item['image']['url']); ?>);">
                                                </div>
                                                <div class="pricing-page__price-box">
                                                    <?php
                                                    if (!empty($item['price'])) :
                                                        pitoon_basic_rendered_content($this, $item,  'price', 'pricing-page__price',  $item['price_tag_layout_one']);
                                                    endif;

                                                    if (!empty($item['plan_title'])) :
                                                        pitoon_basic_rendered_content($this, $item,  'plan_title', 'pricing-page__price-sub-title', 'p');
                                                    endif;
                                                    ?>
                                                </div>
                                                <div class="pricing-page__icon">
                                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                                </div>
                                                <div class="pricing-page__content">
                                                    <?php
                                                    if (!empty($item['service_title'])) :
                                                        pitoon_basic_rendered_content($this, $item,  'service_title', 'pricing-page__title',  $item['service_title_tag_layout_one']);
                                                    endif;
                                                    ?>
                                                    <ul class="list-unstyled pricing-page__service-list ml-0">
                                                        <?php echo wp_kses($item['service_list'], 'pitoon_allowed_tags'); ?>
                                                    </ul>
                                                    <?php if (!empty($item['button_label'])) : ?>
                                                        <div class="pricing-page__btn-box">
                                                            <?php
                                                            pitoon_basic_rendered_content($this, $item,  'button_label', 'thm-btn pricing-page__btn', 'a');
                                                            ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Pricing Page Single End-->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!--tab-->
                </div>
            </div>
        </div>
    </section>
    <!--Pricing Page End-->
<?php endif; ?>