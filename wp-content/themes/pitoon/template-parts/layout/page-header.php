<?php

/**
 * Template part for displaying Page Header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pitoon
 */
?>
<?php
$pitoon_page_header_extra_class = apply_filters('pitoon_page_header_extra_class', 'page-header--unit-test');
?>
<!--Page Header Start-->
<section class="page-header <?php echo esc_attr($pitoon_page_header_extra_class); ?>">
	<div class="page-header__bg"></div>
	<div class="page-header__bg-two-outer">
		<div class="page-header__bg-two"></div>
	</div>
	<?php if (!empty(get_theme_mod('page_header_shape_one'))) : ?>
		<div class="page-header__shape-1 float-bob-x">
			<img src="<?php echo esc_url(get_theme_mod('page_header_shape_one')); ?>" alt="<?php echo esc_attr('Shape One', 'pitoon'); ?>">
		</div>
	<?php endif; ?>
	<?php if (!empty(get_theme_mod('page_header_shape_two'))) : ?>
		<div class="page-header__shape-2 float-bob-x">
			<img src="<?php echo esc_url(get_theme_mod('page_header_shape_two')); ?>" alt="<?php echo esc_attr('Shape Two', 'pitoon'); ?>">
		</div>
	<?php endif; ?>
	<?php if (!empty(get_theme_mod('page_header_shape_three'))) : ?>
		<div class="page-header__shape-3 float-bob-y">
			<img src="<?php echo esc_url(get_theme_mod('page_header_shape_three')); ?>" alt="<?php echo esc_attr('Shape Three', 'pitoon'); ?>">
		</div>
	<?php endif; ?>

	<div class="container">
		<div class="page-header__inner">
			<?php
			$pitoon_page_title_text = !empty(get_post_meta(get_the_ID(), 'pitoon_set_header_title', true)) ? get_post_meta(get_the_ID(), 'pitoon_set_header_title', true) : get_the_title();
			$pitoon_page_header_tag = apply_filters('pitoon_page_header_tag', 'h2');
			?>
			<?php $pitoon_page_meta_breadcumb_status = empty(get_post_meta(get_the_ID(), 'pitoon_show_page_breadcrumb', true)) ? 'on' : get_post_meta(get_the_ID(), 'pitoon_show_page_breadcrumb', true); ?>
			<?php if (function_exists('bcn_display_list') && 'yes' == get_theme_mod('breadcrumb_opt', 'off') && 'on' == $pitoon_page_meta_breadcumb_status) : ?>
				<ul class="thm-breadcrumb list-unstyled ml-0">
					<?php bcn_display_list(); ?>
				</ul>
			<?php endif; ?>
			<<?php echo esc_attr($pitoon_page_header_tag); ?>>
				<?php if (!is_page()) : ?>
					<?php pitoon_page_title(); ?>
				<?php else : ?>
					<?php echo wp_kses($pitoon_page_title_text, 'pitoon_allowed_tags') ?>
				<?php endif; ?>
			</<?php echo esc_attr($pitoon_page_header_tag); ?>>

		</div>
	</div>
</section>
<!--Page Header End-->