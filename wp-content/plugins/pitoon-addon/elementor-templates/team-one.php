<?php if ('layout_one' == $settings['layout_type']) : ?>

	<!--Team One Start-->
	<section class="team-one">
		<div class="container">
			<?php if (!empty($settings['sec_sub_title'] || $settings['sec_title'])) : ?>
				<div class="section-title text-center">
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
			<div class="row">
				<?php
				$counter = 1;
				foreach ($settings['team_items'] as $item) : ?>
					<!--Team One Single Start-->
					<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo esc_attr($counter); ?>00ms">
						<div class="team-one__single">
							<div class="team-one__img-box">
								<div class="team-one__img">
									<?php pitoon_elementor_rendered_image($item, 'image'); ?>
								</div>
							</div>
							<div class="team-one__content">
								<<?php echo esc_attr($item['team_name_tag_layout_one']); ?> class="team-one__name">
									<?php
									if (!empty($item['name'])) :
										pitoon_basic_rendered_content($this, $item,  'name', '', 'a');
									endif;
									?>
								</<?php echo esc_attr($item['team_name_tag_layout_one']); ?>>
								<?php
								if (!empty($item['designation'])) :
									pitoon_basic_rendered_content($this, $item,  'designation', 'team-one__sub-title', 'p');
								endif;
								?>
								<div class="team-one__social">
									<?php echo wp_kses($item['social_network'], 'pitoon_allowed_tags'); ?>
								</div>
								<div class="team-one__hover-content">
									<div class="team-one__shape-1">
										<?php pitoon_elementor_rendered_image($item, 'shape'); ?>
									</div>
									<<?php echo esc_attr($item['team_name_tag_layout_one']); ?> class="team-one__hover-name">
										<?php
										if (!empty($item['name'])) :
											pitoon_basic_rendered_content($this, $item,  'name', '', 'a');
										endif;
										?>
									</<?php echo esc_attr($item['team_name_tag_layout_one']); ?>>
									<?php
									if (!empty($item['designation'])) :
										pitoon_basic_rendered_content($this, $item,  'designation', 'team-one__hover-sub-title', 'p');
									endif;

									if (!empty($item['content'])) :
										pitoon_basic_rendered_content($this, $item,  'content', 'team-one__hover-text', 'p');
									endif;
									?>
									<div class="team-one__hover-social">
										<?php echo wp_kses($item['social_network'], 'pitoon_allowed_tags'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Team One Single End-->
				<?php $counter++;
				endforeach; ?>
			</div>
		</div>
	</section>
	<!--Team One End-->
<?php endif; ?>