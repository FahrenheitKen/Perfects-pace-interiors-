<?php if ('layout_one' == $settings['layout_type']) : ?>
	<!--CTA One Start-->
	<section class="cta-one">
		<div class="container">
			<div class="cta-one__inner">
				<div class="cta-one__shape-1 img-bounce">
					<?php pitoon_elementor_rendered_image($settings, 'shape_one'); ?>
				</div>
				<?php
				if (!empty($settings['title'])) :
					$this->add_inline_editing_attributes('title', 'none');
					pitoon_elementor_rendered_content($this, 'title', 'cta-one__title', $settings['section_title_tag_layout_one']);
				endif;
				?>
				<?php
				if (!empty($settings['button_label'])) : ?>
					<div class="cta-one__btn-box">
						<?php
						pitoon_basic_rendered_content($this, $settings,  'button_label', 'cta-one__btn thm-btn', 'a', 'button_url', '');
						?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!--CTA One End-->

<?php endif; ?>