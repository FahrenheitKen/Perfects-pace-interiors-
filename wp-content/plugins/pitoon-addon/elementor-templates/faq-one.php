<?php if ('layout_one' == $settings['layout_type']) : ?>
	<!--FAQ One Start-->
	<section class="faq-one">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="faq-one__left">
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
						<?php
						if (!empty($settings['summary'])) :
							$this->add_inline_editing_attributes('summary', 'none');
							pitoon_elementor_rendered_content($this, 'summary', 'faq-one__text', 'p');
						endif;
						?>
						<div class="faq-one__points-and-counter-box">
							<ul class="faq-one__points list-unstyled ml-0">

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
							<div class="faq-one__counter-box">
								<div class="faq-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='<?php echo esc_attr(pitoon_get_owl_options($settings)); ?>'>
									<?php
									foreach ($settings['faq_project_list'] as $index => $item) :
									?>
										<!--FAQ One Counter single Start-->
										<div class="item">
											<div class="faq-one__counter-single">
												<div class="faq-one__counter-icon">
													<?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
												</div>
												<div class="faq-one__counter-content">
													<h3 class="odometer" data-count="<?php echo esc_attr($item['number']); ?>">00</h3>
													<?php
													if (!empty($item['title'])) :
														pitoon_basic_rendered_content($this, $item,  'title', '', 'p');
													endif;
													?>
												</div>
											</div>
										</div>
										<!--FAQ One Counter single End-->
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="faq-one__right">
						<div class="faq-one__faq-box">
							<div class="accrodion-grp" data-grp-name="faq-one-accrodion">
								<?php
								$last_key = array_key_last($settings['faq_lists']);
								foreach ($settings['faq_lists'] as $key => $item) :
								?>
									<div class="accrodion <?php echo esc_attr(('yes' == $item['active_status'] ? 'active' : '')); ?>">
										<div class="accrodion-title">
											<?php
											if (!empty($item['question'])) :
												pitoon_basic_rendered_content($this, $item,  'question', '', $item['question_title_tag_layout_one']);
											endif;
											?>
										</div>
										<div class="accrodion-content">
											<div class="inner">
												<?php
												if (!empty($item['answer'])) :
													pitoon_basic_rendered_content($this, $item,  'answer', '', 'p');
												endif;
												?>
											</div><!-- /.inner -->
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--FAQ One End-->

<?php endif; ?>