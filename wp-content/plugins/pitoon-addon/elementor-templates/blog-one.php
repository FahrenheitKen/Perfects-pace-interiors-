<?php if ('layout_one' == $settings['layout_type']) : ?>

	<!--Blog One Start-->
	<section class="blog-one">
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
				$blog_post_one_query_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				if (!empty($settings['select_category'])) :
					$blog_post_one_query_args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'ignore_sticky_posts' => true,
						'orderby' => 'date',
						'order'   => $settings['query_order'],
						'posts_per_page' => $settings['post_count']['size'],
						'paged'          => $blog_post_one_query_paged,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field' => 'slug',
								'terms' => $settings['select_category']
							)
						)
					);
				else :
					$blog_post_one_query_args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'ignore_sticky_posts' => true,
						'orderby' => 'date',
						'paged'          => $blog_post_one_query_paged,
						'order'   => $settings['query_order'],
						'posts_per_page' => $settings['post_count']['size']
					);

				endif;
				$blog_post_one_query = new \WP_Query($blog_post_one_query_args);
				$i = 1;

				while ($blog_post_one_query->have_posts()) :
					$blog_post_one_query->the_post();

					$comments_number = get_comments_number();
					$user = wp_get_current_user();
					$author_id = get_the_author_meta('ID');
					$author_img = get_avatar_url($author_id, array("size" => 32));
				?>
					<!--Blog One Single Start-->
					<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo esc_attr($i); ?>00ms">
						<div class="blog-one__single">
							<?php if (has_post_thumbnail()) : ?>
								<div class="blog-one__img-box">
									<div class="blog-one__img">
										<?php the_post_thumbnail('pitoon_blog_370X280'); ?>
										<a href="<?php the_permalink(); ?>">
											<span class="blog-one__plus"></span>
										</a>
									</div>
									<div class="blog-one__date-box">
										<span><?php echo get_the_date('d'); ?></span>
										<p><?php echo get_the_date('M Y'); ?></p>
									</div>
								</div>
							<?php endif; ?>
							<div class="blog-one__content">
								<div class="blog-one__user">
									<div class="blog-one__user-img">
										<img src="<?php echo esc_url($author_img); ?>" alt="<?php echo bloginfo('name') ?>">
									</div>
									<div class="blog-one__user-text">
										<p><?php echo esc_html("by", 'pitoon'); ?>
											<br> <?php echo get_the_author(); ?>
										</p>
									</div>
								</div>
								<h3 class="blog-one__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p class="blog-one__text"><?php echo esc_html(wp_trim_words(get_the_content(), $settings['content_length'], '')); ?></p>
								<div class="blog-one__comment-and-btn-box">
									<div class="blog-one__comment">
										<p><span class="fas fa-comments"></span><?php echo esc_html($comments_number); ?> <?php if ($comments_number > '1') {
																																echo esc_html__("comments", 'pitoon');
																															} else {
																																echo esc_html__("comment", 'pitoon');
																															} ?></p>
									</div>
									<div class="blog-one__btn-box">
										<a href="<?php the_permalink(); ?>" class="blog-one__btn"><?php echo esc_html($settings['read_more']); ?><span class="fa fa-play"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Blog One Single End-->
				<?php $i++;
				endwhile; ?>
				<?php if ('yes' == $settings['pagination_status']) : ?>
					<div class="col-lg-12">
						<div class="blog-pagination portfolio-page__btn-box justify-content-center text-center">
							<?php pitoon_custom_query_pagination($blog_post_one_query_paged, $blog_post_one_query->max_num_pages); ?>
						</div><!-- /.blog-post-pagination -->
					</div><!-- /.col-lg-12 -->
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<!--Blog One End-->
<?php endif; ?>