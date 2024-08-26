<?php if ('layout_five' == $settings['layout_type']) : ?>

	<!--About Four Start-->
	<section class="about-four">
		<div class="about-four__shape-1" style="background-image: url(<?php echo esc_url($settings['layout_five_shape_one']['url']) ?>);"></div>
		<?php if (!empty($settings['layout_five_shape_two']['url'])) : ?>
			<div class="about-four__shape-2 float-bob-x">
				<?php pitoon_elementor_rendered_image($settings, 'layout_five_shape_two'); ?>
			</div>
		<?php endif; ?>
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<div class="about-four__left">
						<?php if (!empty($settings['layout_five_image']['url'])) : ?>
							<div class="about-four__img">
								<?php pitoon_elementor_rendered_image($settings, 'layout_five_image'); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="about-four__right">
						<div class="section-title text-left">
							<?php
							if (!empty($settings['layout_five_sec_sub_title'])) :
								$this->add_inline_editing_attributes('layout_five_sec_sub_title', 'none');
								pitoon_elementor_rendered_content($this, 'layout_five_sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_five']);
							endif;

							if (!empty($settings['layout_five_sec_title'])) :
								$this->add_inline_editing_attributes('layout_five_sec_title', 'none');
								pitoon_elementor_rendered_content($this, 'layout_five_sec_title', 'section-title__title', $settings['section_title_tag_layout_five']);
							endif;
							?>
						</div>
						<?php
						if (!empty($settings['layout_five_summary'])) :
							pitoon_basic_rendered_content($this, $settings,  'layout_five_summary', 'about-four__text-1', 'p');
						endif;
						?>
						<ul class="list-unstyled about-four__points ml-0">
							<?php foreach ($settings['layout_five_check_list'] as $item) : ?>
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
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--About Four End-->
<?php endif; ?>