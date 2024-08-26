<?php if ('layout_one' == $settings['layout_type']) : ?>
	<!--Contact One Start-->
	<section class="contact">
		<div class="contact__shape-1">
			<?php pitoon_elementor_rendered_image($settings, 'bg_shape_one'); ?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="contact__left">
						<div class="contact__img">
							<?php pitoon_elementor_rendered_image($settings, 'image'); ?>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="contact__right">
						<div class="contact__shape-2"></div>
						<div class="contact__shape-3 float-bob-x">
							<?php pitoon_elementor_rendered_image($settings, 'bg_shape_two'); ?>
						</div>
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
						<div class="contact__form-box">
							<?php echo str_replace("<br />", "", trim(do_shortcode('[contact-form-7 id="' . $settings['select_wpcf7_form'] . '" ]'))); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact One End-->

<?php endif; ?>