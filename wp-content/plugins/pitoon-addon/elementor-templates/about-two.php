<?php if ('layout_two' == $settings['layout_type']) : ?>
	<!--About Two Start -->
	<section class="about-two">
		<div class="about-two__shape-1">
			<?php pitoon_elementor_rendered_image($settings, 'layout_two_bg_shape_one'); ?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-3">
					<div class="about-two__left">
						<div class="about-two__img-box">
							<div class="about-two__img">
								<?php pitoon_elementor_rendered_image($settings, 'layout_two_image_one'); ?>
							</div>
							<?php if (!empty($settings['layout_two_video_url']['url'])) : ?>
								<div class="about-two__video-link">
									<a href="<?php echo esc_url($settings['layout_two_video_url']['url']); ?>" class="video-popup">
										<div class="about-two__video-icon">
											<span class="fa fa-play"></span>
											<i class="ripple"></i>
										</div>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="about-two__middle">
						<div class="section-title text-center">
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
						<div class="about-two__icon">
							<?php pitoon_elementor_rendered_image($settings, 'layout_two_icon_image'); ?>
						</div>
						<?php
						if (!empty($settings['layout_two_highlighted_text'])) :
							$this->add_inline_editing_attributes('layout_two_highlighted_text', 'none');
							pitoon_elementor_rendered_content($this, 'layout_two_highlighted_text', 'about-two__text-1', 'p');
						endif;

						if (!empty($settings['layout_two_summary'])) :
							$this->add_inline_editing_attributes('layout_two_summary', 'none');
							pitoon_elementor_rendered_content($this, 'layout_two_summary', 'about-two__text-2', 'p');
						endif;
						?>

						<?php if (!empty($settings['layout_two_button_label'])) : ?>
							<div class="about-two__btn-box">
								<?php
								if (!empty($settings['layout_two_button_label'])) :
									pitoon_basic_rendered_content($this, $settings,  'layout_two_button_label', 'about-two__btn thm-btn', 'a', 'layout_two_button_url', '');
								endif;
								?>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-xl-3">
					<div class="about-two__right">
						<div class="about-two__img-box-2">
							<div class="about-two__img-2">
								<?php pitoon_elementor_rendered_image($settings, 'layout_two_image_one'); ?>
							</div>
							<?php if (!empty($settings['layout_two_counter_number'] || $settings['layout_two_counter_title'])) : ?>
								<div class="about-two__satisfied-box">
									<div class="about-two__satisfied-icon-and-count">
										<div class="about-two__satisfied-icon">
											<?php \Elementor\Icons_Manager::render_icon($settings['layout_two_counter_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
										</div>
										<div class="about-two__satisfied-count">
											<h3 class="odometer" data-count="<?php echo esc_attr($settings['layout_two_counter_number']); ?>">00</h3>
										</div>
									</div>
									<?php
									if (!empty($settings['layout_two_counter_title'])) :
										$this->add_inline_editing_attributes('layout_two_counter_title', 'none');
										pitoon_elementor_rendered_content($this, 'layout_two_counter_title', 'about-two__satisfied-text', 'p');
									endif;
									?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--About Two End -->

<?php endif; ?>