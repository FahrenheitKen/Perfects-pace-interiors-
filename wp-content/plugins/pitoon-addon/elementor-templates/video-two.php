<?php if ('layout_two' == $settings['layout_type']) : ?>
	<!--Video One Start-->
	<section class="video-one video-two">
		<div class="container">
			<div class="video-one__img-box">
				<div class="video-one__bg" style="background-image: url(<?php echo esc_url($settings['layout_two_bg_image']['url']); ?>);"></div>
				<div class="video-one__video-link">
					<a href="<?php echo esc_url($settings['layout_two_video_url']); ?>" class="video-popup">
						<div class="video-one__video-icon">
							<span class="fa fa-play"></span>
							<i class="ripple"></i>
						</div>
					</a>
				</div>
				<div class="video-one__title">
					<?php
					if (!empty($settings['layout_two_video_title'])) :
						$this->add_inline_editing_attributes('layout_two_video_title', 'none');
						pitoon_elementor_rendered_content($this, 'layout_two_video_title', '', $settings['video_title_tag_layout_two']);
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
	<!--Video One End-->


<?php endif; ?>