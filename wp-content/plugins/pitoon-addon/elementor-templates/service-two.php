<?php if ('layout_two' === $settings['layout_type']) : ?>
	<!--Services Two Start-->
	<section class="services-two">
		<div class="services-two__bg-box">
			<div class="services-two__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?php echo esc_url($settings['layout_two_image']['url']); ?>);"></div>
		</div>
		<div class="services-two__top">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8">
						<div class="servicess-two__left">
							<div class="section-title text-left">
								<div class="section-title__tagline-box">
									<?php
									if (!empty($settings['layout_two_sec_sub_title'])) :
										$this->add_inline_editing_attributes('layout_two_sec_sub_title', 'none');
										pitoon_elementor_rendered_content($this, 'layout_two_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_two']);
									endif;
									?>
									<div class="section-title__icon-box-1">
										<?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
										<?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
										<?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
									</div>
									<div class="section-title__icon-box-2">
										<?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
										<?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
										<?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
									</div>
								</div>
								<?php
								if (!empty($settings['layout_two_sec_title'])) :
									$this->add_inline_editing_attributes('layout_two_sec_title', 'none');
									pitoon_elementor_rendered_content($this, 'layout_two_sec_title', 'section-title__title', $settings['section_title_tag_layout_two']);
								endif;
								?>
							</div>
						</div>
					</div>
					<?php if (!empty($settings['layout_two_button_label'])) : ?>
						<div class="col-xl-4 col-lg-4">
							<div class="servicess-two__right">
								<div class="servicess-two__btn-box">
									<?php
									pitoon_basic_rendered_content($this, $settings,  'layout_two_button_label', 'servicess-two__btn thm-btn', 'a', 'layout_two_button_url', '');
									?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="services-two__bottom">
			<div class="container">
				<ul class="services-two__single-list list-unstyled">
					<?php
					foreach ($settings['layout_two_service_items'] as $index => $item) :
					?>
						<li>
							<div class="services-two__single">
								<div class="services-two__icon">
									<?php pitoon_elementor_rendered_image($item, 'icon_image'); ?>
								</div>
								<<?php echo esc_attr($item['service_title_tag_layout_two']); ?> class="services-two__title">
									<?php
									if (!empty($item['title'])) :
										pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
									endif;
									?>
								</<?php echo esc_attr($item['service_title_tag_layout_two']); ?>>
								<?php
								if (!empty($item['subtitle'])) :
									pitoon_basic_rendered_content($this, $item,  'subtitle', 'services-two__text', 'p');
								endif;
								?>
								<div class="services-two__plus-box">
									<a href="<?php echo esc_url($item['url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
								</div>
							</div>
						</li>
					<?php
					endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
	<!--Services Two End-->

<?php endif; ?>