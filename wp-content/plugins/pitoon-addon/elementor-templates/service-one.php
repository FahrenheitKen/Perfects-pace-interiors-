<?php if ('layout_one' === $settings['layout_type']) : ?>

	<!--Services One Start -->
	<section class="services-one">
		<div class="container">
			<div class="services-one__inner">
				<div class="services-one__shape-2 float-bob-x">
					<?php pitoon_elementor_rendered_image($settings, 'background_shape_two'); ?>
				</div>
				<div class="services-one__shape-3">
					<?php pitoon_elementor_rendered_image($settings, 'background_shape_three'); ?>
				</div>
				<div class="services-one__shape-4">
					<?php pitoon_elementor_rendered_image($settings, 'background_shape_four'); ?>
				</div>
				<div class="services-one__top">
					<ul class="list-unstyled services-one__list ml-0">
						<?php
						foreach ($settings['layout_one_service_items_one'] as $index => $item) : ?>
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
										<<?php echo esc_attr($item['service_title_tag_layout_one']); ?> class="services-one__title">
											<?php
											if (!empty($item['title'])) :
												pitoon_basic_rendered_content($this, $item,  'title', '', 'a');
											endif;
											?>
										</<?php echo esc_attr($item['service_title_tag_layout_one']); ?>>
									</div>
								</div>
							</li>
							<!--Services One Single End-->
						<?php
						endforeach; ?>
					</ul>
				</div>
				<div class="services-one__bottom">
					<div class="services-one__satisfied">
						<ul class="list-unstyled services-one__satisfied-list ml-0">
							<?php
							foreach ($settings['layout_one_service_items_two'] as $index => $item) : ?>
								<li>
									<div class="services-one__satisfied-img">
										<?php pitoon_elementor_rendered_image($item, 'image'); ?>
									</div>
								</li>
							<?php
							endforeach; ?>
						</ul>
						<div class="services-one__satisfied-content count-box">
							<?php
							if (!empty($settings['satisfied_customer_txt'])) :
								pitoon_basic_rendered_content($this, $settings,  'satisfied_customer_txt', 'services-one__satisfied-text', 'p');
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Services One End -->

<?php endif; ?>