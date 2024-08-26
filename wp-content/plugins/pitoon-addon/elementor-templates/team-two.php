<?php if ('layout_two' == $settings['layout_type']) : ?>

	<!--Team Two Start-->
	<section class="team-two">
		<div class="container">
			<?php if (!empty($settings['layout_two_sec_sub_title'] || $settings['layout_two_sec_title'])) : ?>
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
			<?php endif; ?>
			<div class="row">
				<?php
				$counter = 1;
				foreach ($settings['layout_two_team_item'] as $index => $item) : ?>
					<!--Team Two single start-->
					<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($index + 1); ?>00ms">
						<div class="team-two__single">
							<div class="team-two__img-box">
								<div class="team-two__img">
									<?php pitoon_elementor_rendered_image($item, 'image'); ?>
								</div>
								<?php if (!empty($item['social_network'])) : ?>
									<div class="team-two__social">
										<?php echo wp_kses($item['social_network'], 'pitoon_allowed_tags'); ?>
									</div>
								<?php endif; ?>
								<div class="team-two__hover-content">
									<<?php echo esc_attr($item['team_name_tag_layout_two']); ?> class="team-two__hover-name">
										<?php
										if (!empty($item['name'])) :
											pitoon_basic_rendered_content($this, $item,  'name', '', 'a');
										endif;
										?>
									</<?php echo esc_attr($item['team_name_tag_layout_two']); ?>>
									<?php
									if (!empty($item['designation'])) :
										pitoon_basic_rendered_content($this, $item,  'designation', 'team-two__hover-sub-title', 'p');
									endif;
									?>
								</div>
							</div>
							<div class="team-two__content">
								<<?php echo esc_attr($item['team_name_tag_layout_two']); ?> class="team-two__name">
									<?php
									if (!empty($item['name'])) :
										pitoon_basic_rendered_content($this, $item,  'name', '', 'a');
									endif;
									?>
								</<?php echo esc_attr($item['team_name_tag_layout_two']); ?>>
								<?php
								if (!empty($item['designation'])) :
									pitoon_basic_rendered_content($this, $item,  'designation', 'team-two__sub-title', 'p');
								endif;
								?>
							</div>
						</div>
					</div>
					<!--Team Two single End-->
				<?php $counter++;
				endforeach; ?>
			</div>
		</div>
	</section>
	<!--Team Two End-->

<?php endif; ?>