<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pitoon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail()) : ?>
		<div class="blog-details__img-box <?php if (function_exists('pitoon_elementor_rendered_image')) {
												echo esc_attr("blend_mode");
											} ?>">
			<?php the_post_thumbnail('pitoon_blog_770X428'); ?>
			<div class="blog-details__date-box">
				<span><?php echo get_the_date(); ?></span>
			</div>
		</div>
	<?php endif; ?>

	<div class="blog-details__content clearfix">
		<ul class="list-unstyled blog-details__meta ml-0">
			<li><?php pitoon_posted_by(); ?></li>
			<li><?php pitoon_comment_count(); ?></li>
		</ul>

		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'pitoon'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'pitoon'),
				'after'  => '</div>',
			)
		);
		?>
	</div>
	<div class="blog-details__bottom">
		<?php pitoon_entry_footer(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->