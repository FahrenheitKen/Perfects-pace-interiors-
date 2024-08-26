<?php if ('layout_one' == $settings['layout_type']) : ?>

	<!--About One Start -->
	<section class="about-one">
		<div class="about-one__shape-2 img-bounce">
			<?php pitoon_elementor_rendered_image($settings, 'bg_shape_two'); ?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="about-one__left">
						<div class="about-one__img-box">
							<div class="about-one__img">
								<?php pitoon_elementor_rendered_image($settings, 'bg_image_one'); ?>
							</div>
							<div class="about-one__img-2">
								<?php pitoon_elementor_rendered_image($settings, 'bg_image_two'); ?>
							</div>
							<div class="about-one__shape-1">
								<?php pitoon_elementor_rendered_image($settings, 'bg_shape_one'); ?>
							</div>
							<?php if (!empty($settings['sec_certified_title'])) : ?>
								<div class="about-one__certified">
									<div class="about-one__certified-icon">
										<?php \Elementor\Icons_Manager::render_icon($settings['sec_certified_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
									</div>
									<?php
									if (!empty($settings['sec_certified_title'])) :
										pitoon_basic_rendered_content($this, $settings,  'sec_certified_title', 'about-one__certified-title', 'h3');
									endif;
									?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="about-one__right">
						<?php if (!empty($settings['sec_sub_title'] || $settings['sec_title'])) : ?>
							<div class="section-title text-left">
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
						<?php endif; ?>
						<?php
						if (!empty($settings['sec_highlighted_text'])) :
							pitoon_basic_rendered_content($this, $settings,  'sec_highlighted_text', 'about-one__text-1', 'p');
						endif;

						if (!empty($settings['summary'])) :
							pitoon_basic_rendered_content($this, $settings,  'summary', 'about-one__text-2', 'p');
						endif;
						?>
						<ul class="about-one__points list-unstyled ml-0">
							<?php foreach ($settings['layout_one_feature_list'] as $index => $item) : ?>
								<li>
									<div class="about-one__icon-and-title">
										<div class="about-one__icon">
											<?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
										</div>
										<?php
										if (!empty($item['title'])) :
											pitoon_basic_rendered_content($this, $item,  'title', 'about-one__progress-title', $item['feature_title_tag_layout_one']);
										endif;
										?>
									</div>
									<?php
									if (!empty($item['subtitle'])) :
										pitoon_basic_rendered_content($this, $item,  'subtitle', 'about-one__points-text', 'p');
									endif;
									?>
								</li>
							<?php endforeach; ?>
						</ul>
						<?php foreach ($settings['layout_one_progress_list'] as $index => $item) : ?>
							<div class="about-one__progress">
								<?php
								if (!empty($item['title'])) :
									pitoon_basic_rendered_content($this, $item,  'title', 'about-one__title', $item['progress_title_tag_layout_one']);
								endif;
								?>
								<div class="bar">
									<div class="bar-inner count-bar" data-percent="<?php echo esc_attr($item['number']); ?>">
										<div class="count-text"><?php echo esc_html($item['number']); ?></div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

						<?php if (!empty($settings['button_label'])) : ?>
							<div class="about-one__btn-box">
								<?php
								pitoon_basic_rendered_content($this, $settings,  'button_label', 'about-one__btn thm-btn', 'a', 'button_url', '');
								?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--About One End-->

<?php endif; ?>