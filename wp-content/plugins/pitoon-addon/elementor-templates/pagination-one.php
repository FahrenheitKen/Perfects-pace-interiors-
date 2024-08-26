<?php if ('layout_one' == $settings['layout_type']) : ?>
	<div class="project-details__pagination-box">
		<ul class="project-details__pagination list-unstyled clearfix ml-0">
			<li class="next">
				<a href="<?php echo esc_url($settings['prev_url']['url']); ?>" aria-label="Previous"><?php \Elementor\Icons_Manager::render_icon($settings['prev_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?><?php echo esc_html($settings['prev_text']); ?></a>
			</li>
			<li class="count"><a href="#"></a></li>
			<li class="count"><a href="#"></a></li>
			<li class="count"><a href="#"></a></li>
			<li class="count"><a href="#"></a></li>
			<li class="previous">
				<a href="<?php echo esc_url($settings['next_url']['url']); ?>" aria-label="Next"><?php echo esc_html($settings['next_text']); ?><?php \Elementor\Icons_Manager::render_icon($settings['next_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></a>
			</li>
		</ul>
	</div>
<?php endif; ?>