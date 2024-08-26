<?php if ('layout_three' === $settings['layout_type']) : ?>

	<!--Services Three Start-->
	<section class="services-three">
		<div class="container">
			<?php if ($settings['layout_three_sec_sub_title'] || $settings['layout_three_sec_title']) : ?>
				<div class="section-title text-center">
					<div class="section-title__tagline-box">
						<?php
						if (!empty($settings['layout_three_sec_sub_title'])) :
							$this->add_inline_editing_attributes('layout_three_sec_sub_title', 'none');
							pitoon_elementor_rendered_content($this, 'layout_three_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_three']);
						endif;
						?>
						<div class="section-title__icon-box-1">
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
						</div>
						<div class="section-title__icon-box-2">
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
							<?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sec_left_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
						</div>
					</div>
					<?php
					if (!empty($settings['layout_three_sec_title'])) :
						$this->add_inline_editing_attributes('layout_three_sec_title', 'none');
						pitoon_elementor_rendered_content($this, 'layout_three_sec_title', 'section-title__title', $settings['section_title_tag_layout_three']);
					endif;
					?>
				</div>
			<?php endif; ?>
			<div class="row">
				<?php
				foreach ($settings['layout_three_service_items'] as $index => $item) : ?>
					<!--Services Three Single Start-->
					<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo esc_attr($index + 1); ?>00ms">
						<div class="services-three__single">
							<div class="services-three__icon">
								<?php pitoon_elementor_rendered_image($item, 'image'); ?>
							</div>
							<<?php echo esc_attr($item['service_title_tag_layout_three']); ?> class="services-three__title">
								<?php
								if (!empty($item['title'])) :
									pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
								endif;
								?>
							</<?php echo esc_attr($item['service_title_tag_layout_three']); ?>>
							<?php
							if (!empty($item['subtitle'])) :
								pitoon_basic_rendered_content($this, $item,  'subtitle', 'services-three__tex', 'p');
							endif;
							?>
							<ul class="services-three__points list-unstyled ml-0">
								<?php echo wp_kses($item['point_list'], 'pitoon_allowed_tags'); ?>
							</ul>
							<?php if (!empty($item['url']['url'])) : ?>
								<div class="services-three__plus-box">
									<a href="<?php echo $item['url']['url']; ?>" class="services-three__plus"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<!--Services Three Single End-->
				<?php
				endforeach; ?>
			</div>
		</div>
	</section>
	<!--Services Three End-->
<?php endif; ?>