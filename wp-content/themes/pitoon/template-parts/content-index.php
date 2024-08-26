<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pitoon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-sidebar__single'); ?>>
	<?php if (has_post_thumbnail()) : ?>
		<div class="<?php if (function_exists('pitoon_elementor_rendered_image')) {
						echo esc_attr("blog-sidebar__img_plugin blend_mode");
					} else {
						echo esc_attr("blog-sidebar__img");
					} ?>">
			<?php the_post_thumbnail('pitoon_blog_770X428');  ?>
			<div class="blog-sidebar__date-box">
				<span><?php echo get_the_date(); ?></span>
			</div>
		</div>
	<?php endif; ?>
	<div class="blog-sidebar__content">
		<ul class="list-unstyled blog-sidebar__meta ml-0">
			<li><?php pitoon_posted_by(); ?></li>
			<li><?php pitoon_comment_count(); ?></li>
		</ul>
		<h3 class="blog-sidebar__title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<?php $pitoon_excerpt_count = apply_filters('pitoon_excerpt_count', 39); ?>
		<p class="blog-sidebar__text"><?php pitoon_excerpt($pitoon_excerpt_count); ?></p>
		<div class="blog-sidebar__btn">
			<a href="<?php the_permalink(); ?>"><?php esc_html_e('More', 'pitoon'); ?> <span class="fa fa-play"></span></a>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->