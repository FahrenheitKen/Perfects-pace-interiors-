<?php if ('layout_three' === $settings['layout_type']) : ?>

	<!-- Main Sllider Start -->
	<section class="main-slider-three">
		<div class="main-slider-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{"loop": <?php echo esc_attr(('yes' == $settings['loop']) ? 'true' : 'false'); ?>, "items": <?php echo esc_attr($settings['items']['size']); ?>, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

			<?php
			$i = 1;
			foreach ($settings['layout_three_sliders'] as $slider) : ?>
				<div class="item main-slider-three__slide-<?php echo esc_attr($i); ?>">
					<div class="main-slider-three__bg" style="background-image: url(<?php echo esc_url($slider['image_one']['url']); ?>);">
					</div><!-- /.slider-one__bg -->
					<div class="main-slider-three__shape-1">
						<?php pitoon_elementor_rendered_image($slider, 'shape_one'); ?>
					</div>
					<div class="main-slider-three__small-img float-bob-x">
						<?php pitoon_elementor_rendered_image($slider, 'image_two'); ?>
					</div>
					<div class="container">
						<div class="main-slider-three__content">
							<?php
							if (!empty($slider['title'])) :
								pitoon_basic_rendered_content($this, $slider,  'title', 'main-slider-three__title', $slider['title_tag_layout_three']);
							endif;
							?>
							<?php if (!empty($slider['button_label'])) : ?>
								<div class="main-slider-three__btn-box">
									<?php
									pitoon_basic_rendered_content($this, $slider,  'button_label', 'main-slider-three__btn thm-btn', 'a', 'button_url', '');
									?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php $i++;
			endforeach; ?>
		</div>
	</section>
	<!--Main Sllider Start -->

<?php endif; ?>