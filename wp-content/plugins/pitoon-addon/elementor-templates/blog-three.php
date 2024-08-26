<?php if ('layout_three' == $settings['layout_type']) : ?>

	<!--News Two Start-->
	<section class="news-three">
		<div class="container">
			<div class="section-title text-center">
				<div class="section-title__icon">
					<?php \Elementor\Icons_Manager::render_icon($settings['sec_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
				</div>
				<?php
				if (!empty($settings['sec_sub_title'])) :
					$this->add_inline_editing_attributes('sec_sub_title', 'none');
					pitoon_elementor_rendered_content($this, 'sec_sub_title', 'section-title__tagline', $settings['section_sub_title_tag_layout_one']);
				endif;

				if (!empty($settings['sec_title'])) :
					$this->add_inline_editing_attributes('sec_title', 'none');
					pitoon_elementor_rendered_content($this, 'sec_title', 'section-title__title', $settings['section_title_tag_layout_one']);
				endif;
				?>
			</div>
			<div class="news-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='<?php echo esc_attr(pitoon_get_owl_options($settings)); ?>'>
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
					<!--News Two Single Start-->
					<div class="item">
						<div class="news-two__single">
							<?php if (has_post_thumbnail()) : ?>
								<div class="news-two__img-box">
									<div class="news-two__img">
										<?php the_post_thumbnail('pitoon_blog_200X283'); ?>
									</div>
									<div class="news-two__date">
										<p><?php echo get_the_date('d'); ?><br><?php echo get_the_date('M'); ?></p>
									</div>
								</div>
							<?php endif; ?>
							<div class="news-two__content">
								<div class="news-two__user-and-meta">
									<div class="news-two__user">
										<div class="news-two__user-img">
											<img src="<?php echo esc_url($author_img); ?>" alt="<?php echo bloginfo('name') ?>">
										</div>
										<div class="news-two__user-text">
											<p><?php echo esc_html("by", 'pitoon'); ?><br><?php echo get_the_author(); ?></p>
										</div>
									</div>
									<div class="news-two__meta">
										<?php pitoon_comment_count(); ?>
									</div>
								</div>
								<h3 class="news-two__title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<p class="news-two__text"><?php echo esc_html(wp_trim_words(get_the_content(), $settings['content_length'], '')); ?></p>
								<div class="news-two__btn">
									<a href="<?php the_permalink(); ?>"><?php echo esc_html($settings['read_more']); ?><?php \Elementor\Icons_Manager::render_icon($settings['blog_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></a>
								</div>
							</div>
						</div>
					</div>
					<!--News Two Single End-->
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
	<!--News Two End-->


<?php endif; ?>