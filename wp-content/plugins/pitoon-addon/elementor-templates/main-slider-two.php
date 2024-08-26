<?php if ('layout_two' === $settings['layout_type']) : ?>
	<!-- Main Sllider Start -->
	<section class="main-slider-two">
		<div class="main-slider-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{"loop": <?php echo esc_attr(('yes' == $settings['loop']) ? 'true' : 'false'); ?>, "items": <?php echo esc_attr($settings['items']['size']); ?>, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

			<?php
			foreach ($settings['layout_two_sliders'] as $index => $slider) :
			?>
				<div class="item main-slider-two__slide-<?php echo esc_attr($index + 1); ?>">
					<div class="main-slider-two__bg" style="background-image: url(<?php echo esc_url($slider['background_image']['url']); ?>);">
					</div><!-- /.slider-one__bg -->
					<div class="main-slider-two__shadow"></div>
					<div class="main-slider-two__shape-2 img-bounce">
						<?php pitoon_elementor_rendered_image($slider, 'shape_two'); ?>
					</div>
					<div class="main-slider-two__shape-3 float-bob-y">
						<?php pitoon_elementor_rendered_image($slider, 'shape_three'); ?>
					</div>
					<div class="main-slider-two__shape-4 img-bounce">
						<?php pitoon_elementor_rendered_image($slider, 'shape_four'); ?>
					</div>

					<div class="container">
						<div class="main-slider-two__content">
							<div class="main-slider-two__shape-1 float-bob-x">
								<?php pitoon_elementor_rendered_image($slider, 'shape_one'); ?>
							</div>
							<?php
							if (!empty($slider['sub_title'])) :
								pitoon_basic_rendered_content($this, $slider,  'sub_title', 'main-slider-two__sub-title', 'p');
							endif;

							if (!empty($slider['title'])) :
								pitoon_basic_rendered_content($this, $slider,  'title', 'main-slider-two__title', $slider['title_tag_layout_two']);
							endif;
							?>
							<a href="<?php echo esc_url($slider['button_url']['url']); ?>" class="main-slider-two__curved-circle-box">
								<div class="curved-circle">
									<?php
									if (!empty($slider['circle_text'])) :
										pitoon_basic_rendered_content($this, $slider,  'circle_text', 'curved-circle--item', 'span');
									endif;
									?>
								</div><!-- /.curved-circle -->
								<div class="main-slider-two__arrow-down">
									<?php \Elementor\Icons_Manager::render_icon($slider['sec_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
								</div>
							</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
	<!--Main Sllider Start -->
<?php endif; ?>