<?php if ('layout_four' === $settings['layout_type']) : ?>
	<!--Services One Start -->
	<section class="services-page">
		<div class="container">
			<?php if (!empty($settings['layout_four_sec_sub_title'] || $settings['layout_four_sec_title'])) : ?>
				<div class="section-title text-center">
					<div class="section-title__tagline-box">
						<?php
						if (!empty($settings['layout_four_sec_sub_title'])) :
							$this->add_inline_editing_attributes('layout_four_sec_sub_title', 'none');
							pitoon_elementor_rendered_content($this, 'layout_four_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_four']);
						endif;
						?>
						<div class="section-title__icon-box-1">
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
						</div>
						<div class="section-title__icon-box-2">
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_four_sec_right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
						</div>
					</div>
					<?php
					if (!empty($settings['layout_four_sec_title'])) :
						$this->add_inline_editing_attributes('layout_four_sec_title', 'none');
						pitoon_elementor_rendered_content($this, 'layout_four_sec_title', 'section-title__title', $settings['section_title_tag_layout_four']);
					endif;
					?>
				</div>
			<?php endif; ?>
			<ul class="list-unstyled services-one__list">
				<?php
				foreach ($settings['layout_four_service_items'] as $index => $item) : ?>
					<!--Services One Single Start-->
					<li>
						<div class="services-one__single">
							<div class="services-one__plus">
								<a href="<?php echo esc_url($item['url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
							</div>
							<div class="services-one__content">
								<div class="services-one__shape-1">
									<?php pitoon_elementor_rendered_image($item, 'background_shape'); ?>
								</div>
								<div class="services-one__icon">
									<?php \Elementor\Icons_Manager::render_icon($item['icon_two'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
								</div>
								<<?php echo esc_attr($item['service_title_tag_layout_four']); ?> class="services-one__title">
									<?php
									if (!empty($item['title'])) :
										pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
									endif;
									?>
								</<?php echo esc_attr($item['service_title_tag_layout_four']); ?>>
							</div>
						</div>
					</li>
					<!--Services One Single End-->
				<?php
				endforeach; ?>
			</ul>
		</div>
	</section>
	<!--Services One End -->

<?php endif; ?>