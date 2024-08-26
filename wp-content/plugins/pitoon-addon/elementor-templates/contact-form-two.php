<?php if ('layout_two' == $settings['layout_type']) : ?>
	<!--Contact One Start-->
	<section class="contact-one">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="contact-one__left">
						<div class="contact-one__shape-1 float-bob-x">
							<?php pitoon_elementor_rendered_image($settings, 'bg_shape_layout_two'); ?>
						</div>
						<?php if (!empty($settings['layout_two_sec_sub_title'] || $settings['layout_two_sec_title'])) : ?>
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
						<?php endif; ?>
						<?php
						if (!empty($settings['layout_two_sec_summary'])) :
							$this->add_inline_editing_attributes('layout_two_sec_summary', 'none');
							pitoon_elementor_rendered_content($this, 'layout_two_sec_summary', 'contact-one__text', 'p');
						endif;
						?>
						<div class="contact-one__points-and-signature-box">
							<ul class="contact-one__points list-unstyled ml-0">
								<?php
								foreach ($settings['point_list'] as $index => $item) :
								?>
									<li>
										<div class="icon">
											<?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
										</div>
										<div class="text">
											<?php
											if (!empty($item['title'])) :
												pitoon_basic_rendered_content($this, $item,  'title', '', 'p');
											endif;
											?>
										</div>
									</li>
								<?php endforeach; ?>
							</ul>
							<div class="contact-one__signature-box">
								<div class="contact-one__signature-img">
									<?php pitoon_elementor_rendered_image($settings, 'signature_image'); ?>
								</div>
								<?php
								if (!empty($settings['signature_title'])) :
									pitoon_basic_rendered_content($this, $settings,  'signature_title', '', 'p');
								endif;
								?>
							</div>
						</div>
						<ul class="contact-one__points-two list-unstyled ml-0">
							<?php
							foreach ($settings['contact_list'] as $index => $item) :
							?>
								<li>
									<div class="icon">
										<?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
									</div>
									<div class="content">
										<?php
										if (!empty($item['title'])) :
											pitoon_basic_rendered_content($this, $item,  'title', '', 'p');
										endif;
										?>
										<?php echo wp_kses($item['content'], 'pitoon_allowed_tags'); ?>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="contact-one__right">
						<div class="contact-one__form-box">
							<?php echo str_replace("<br />", "", trim(do_shortcode('[contact-form-7 id="' . $settings['layout_two_select_wpcf7_form'] . '" ]'))); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact One End-->
<?php endif; ?>