<?php
$search_status = $settings['search_enable'];

if ('layout_one' === $settings['layout_type']) : ?>
	<header class="main-header">
		<div class="main-header__top">
			<div class="main-header__top-inner">
				<div class="main-header__top-left">
					<ul class="list-unstyled main-header__contact-list ml-0">
						<?php foreach ($settings['topbar_infos'] as $info) : ?>
							<li>
								<div class="icon">
									<?php \Elementor\Icons_Manager::render_icon($info['topbar_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
								</div>
								<div class="text">
									<p><?php echo wp_kses($info['topbar_info_text'], 'pitoon_allowed_tags'); ?></p>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="main-header__top-right">
					<?php
					wp_nav_menu(
						array(
							'menu' => $settings['topbar_nav_menu'],
							'menu_class' => 'list-unstyled main-header__top-menu ml-0',
							'walker'         => class_exists('\Layerdrops\Pitoon\Megamenu\Walker_Nav_Menu') ? new \Layerdrops\Pitoon\Megamenu\Walker_Nav_Menu : '',
						)
					);
					?>
					<div class="main-header__social-box">
						<?php
						if (!empty($settings['social_title'])) :
							$this->add_inline_editing_attributes('social_title', 'none');
							pitoon_elementor_rendered_content($this, 'social_title', 'main-header__social-title', 'h4');
						endif;
						?>
						<div class="main-header__social">
							<?php foreach ($settings['topbar_nav_social_icons'] as $social_icon) : ?>
								<a <?php echo esc_attr(!empty($social_icon['social_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($social_icon['social_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($social_icon['social_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-menu">
			<div class="main-menu__wrapper">
				<div class="main-menu__wrapper-inner">
					<div class="main-menu__left">
						<div class="main-menu__logo logo-retina">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img width="<?php echo esc_attr($settings['logo_dimension']['width']); ?>" height="<?php echo esc_attr($settings['logo_dimension']['height']); ?>" src="<?php echo esc_url($settings['light_logo']['url']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
							</a>
						</div>
						<div class="main-menu__main-menu-box">
							<a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
							<?php
							wp_nav_menu(
								array(
									'menu' => $settings['nav_menu'],
									'menu_class' => 'main-menu__list',
									'walker'         => class_exists('\Layerdrops\Pitoon\Megamenu\Walker_Nav_Menu') ? new \Layerdrops\Pitoon\Megamenu\Walker_Nav_Menu : '',
								)
							);
							?>
						</div>
					</div>
					<div class="main-menu__right">
						<?php if (!empty($settings['header_call_title'] || $settings['header_call_title'])) : ?>
							<div class="main-menu__call">
								<div class="main-menu__call-icon">
									<?php pitoon_elementor_rendered_image($settings, 'header_info_image'); ?>
								</div>
								<div class="main-menu__call-content">
									<?php
									if (!empty($settings['header_call_title'])) :
										$this->add_inline_editing_attributes('header_call_title', 'none');
										pitoon_elementor_rendered_content($this, 'header_call_title', 'main-menu__call-sub-title', 'p');
									endif;

									if (!empty($settings['header_call_number'])) :
										$this->add_inline_editing_attributes('header_call_number', 'none');
										pitoon_elementor_rendered_content($this, 'header_call_number', 'main-menu__call-number', 'h5');
									endif;
									?>
								</div>
							</div>
						<?php endif; ?>
						<?php if (('yes' == $search_status) || ('yes' == $settings['cart_enable'])) : ?>
							<div class="main-menu__search-cart-box">
								<?php
								if (('yes' == $search_status)) : ?>
									<div class="main-menu__search-box">
										<a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
									</div>
								<?php endif; ?>
								<?php if ('yes' == $settings['cart_enable'] && class_exists('WooCommerce')) : ?>
									<div class="main-menu__cart-box">
										<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="main-menu__cart icon-shopping-cart"></a>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<?php if (get_theme_mod('header_sticky_menu') == 'yes' && !is_admin_bar_showing()) : ?>
		<div class="stricky-header stricked-menu main-menu">
			<div class="sticky-header__content"></div>
			<!-- /.sticky-header__content -->
		</div>
		<!-- /.stricky-header -->
	<?php endif; ?>

<?php endif; ?>

<?php if ('layout_two' === $settings['layout_type']) : ?>

	<header class="main-header-two">
		<nav class="main-menu main-menu-two">
			<div class="main-menu-two__wrapper">
				<div class="main-menu-two__wrapper-inner">
					<div class="main-menu-two__left">
						<div class="main-menu-two__logo logo-retina">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img width="<?php echo esc_attr($settings['logo_dimension']['width']); ?>" height="<?php echo esc_attr($settings['logo_dimension']['height']); ?>" src="<?php echo esc_url($settings['light_logo']['url']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
							</a>
						</div>
						<div class="main-menu-two__main-menu-box">
							<a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
							<?php
							wp_nav_menu(
								array(
									'menu' => $settings['nav_menu'],
									'menu_class' => 'main-menu__list',
									'walker'         => class_exists('\Layerdrops\Pitoon\Megamenu\Walker_Nav_Menu') ? new \Layerdrops\Pitoon\Megamenu\Walker_Nav_Menu : '',
								)
							);
							?>
						</div>
					</div>
					<div class="main-menu-two__right">
						<?php if (!empty($settings['header_call_title'] || $settings['header_call_title'])) : ?>
							<div class="main-menu-two__call">
								<div class="main-menu-two__call-icon">
									<?php pitoon_elementor_rendered_image($settings, 'header_info_image'); ?>
								</div>
								<div class="main-menu-two__call-content">
									<?php
									if (!empty($settings['header_call_title'])) :
										$this->add_inline_editing_attributes('header_call_title', 'none');
										pitoon_elementor_rendered_content($this, 'header_call_title', 'main-menu-two__call-sub-title', 'p');
									endif;

									if (!empty($settings['header_call_number'])) :
										$this->add_inline_editing_attributes('header_call_number', 'none');
										pitoon_elementor_rendered_content($this, 'header_call_number', 'main-menu-two__call-number', 'h5');
									endif;
									?>
								</div>
							</div>
						<?php endif; ?>
						<div class="main-menu-two__search-cart-box">
							<?php
							if (('yes' == $search_status)) : ?>
								<div class="main-menu-two__search-box">
									<a href="#" class="main-menu-two__search search-toggler icon-magnifying-glass"></a>
								</div>
							<?php endif; ?>
							<?php if ('yes' == $settings['cart_enable'] && class_exists('WooCommerce')) : ?>
								<div class="main-menu-two__cart-box">
									<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="main-menu-two__cart icon-shopping-cart"></a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<?php if (get_theme_mod('header_sticky_menu') == 'yes' && !is_admin_bar_showing()) : ?>
		<div class="stricky-header stricked-menu main-menu main-menu-two">
			<div class="sticky-header__content"></div>
			<!-- /.sticky-header__content -->
		</div>
		<!-- /.stricky-header -->
	<?php endif; ?>


<?php endif; ?>

<?php if ('layout_three' === $settings['layout_type']) : ?>

	<header class="main-header-three">
		<div class="main-header-three__top">
			<div class="main-header-three__top-inner">
				<div class="main-header-three__top-left">
					<ul class="list-unstyled main-header-three__contact-list ml-0">
						<?php foreach ($settings['topbar_infos'] as $info) : ?>
							<li>
								<div class="icon">
									<?php \Elementor\Icons_Manager::render_icon($info['topbar_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
								</div>
								<div class="text">
									<p><?php echo wp_kses($info['topbar_info_text'], 'pitoon_allowed_tags'); ?></p>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="main-header-three__top-right">
					<?php
					wp_nav_menu(
						array(
							'menu' => $settings['topbar_nav_menu'],
							'menu_class' => 'list-unstyled main-header-three__top-menu ml-0',
							'walker'         => class_exists('\Layerdrops\Pitoon\Megamenu\Walker_Nav_Menu') ? new \Layerdrops\Pitoon\Megamenu\Walker_Nav_Menu : '',
						)
					);
					?>
					<div class="main-header-three__social-box">
						<?php
						if (!empty($settings['social_title'])) :
							$this->add_inline_editing_attributes('social_title', 'none');
							pitoon_elementor_rendered_content($this, 'social_title', 'main-header-three__social-title', 'h4');
						endif;
						?>
						<div class="main-header-three__social">
							<?php foreach ($settings['topbar_nav_social_icons'] as $social_icon) : ?>
								<a <?php echo esc_attr(!empty($social_icon['social_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($social_icon['social_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($social_icon['social_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-menu main-menu-three">
			<div class="main-menu-three__wrapper">
				<div class="main-menu-three__wrapper-inner">
					<div class="main-menu-three__left">

						<div class="main-menu-three__logo">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img width="<?php echo esc_attr($settings['logo_dimension']['width']); ?>" height="<?php echo esc_attr($settings['logo_dimension']['height']); ?>" src="<?php echo esc_url($settings['light_logo']['url']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
							</a>
						</div>
						<div class="main-menu-three__main-menu-box">
							<a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
							<?php
							wp_nav_menu(
								array(
									'menu' => $settings['nav_menu'],
									'menu_class' => 'main-menu__list',
									'walker'         => class_exists('\Layerdrops\Pitoon\Megamenu\Walker_Nav_Menu') ? new \Layerdrops\Pitoon\Megamenu\Walker_Nav_Menu : '',
								)
							);
							?>
						</div>
					</div>
					<div class="main-menu-three__right">
						<?php if (('yes' == $search_status) || ('yes' == $settings['cart_enable'])) : ?>
							<div class="main-menu-three__search-cart-box">
								<?php
								if (('yes' == $search_status)) : ?>
									<div class="main-menu-three__search-box">
										<a href="#" class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
									</div>
								<?php endif; ?>

								<?php if ('yes' == $settings['cart_enable'] && class_exists('WooCommerce')) : ?>
									<div class="main-menu-three__cart-box">
										<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="main-menu-three__cart icon-shopping-cart"></a>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<?php if (('yes' == $search_status) || ('yes' == $settings['cart_enable'])) : ?>
							<div class="main-menu-three__call">
								<div class="main-menu-three__call-icon">
									<?php pitoon_elementor_rendered_image($settings, 'header_info_image'); ?>
								</div>
								<div class="main-menu-three__call-content">
									<?php
									if (!empty($settings['header_call_title'])) :
										$this->add_inline_editing_attributes('header_call_title', 'none');
										pitoon_elementor_rendered_content($this, 'header_call_title', 'main-menu-three__call-sub-title', 'p');
									endif;

									if (!empty($settings['header_call_number'])) :
										$this->add_inline_editing_attributes('header_call_number', 'none');
										pitoon_elementor_rendered_content($this, 'header_call_number', 'main-menu-three__call-number', 'h5');
									endif;
									?>
								</div>
							</div>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</nav>
	</header>

	<?php if (get_theme_mod('header_sticky_menu') == 'yes' && !is_admin_bar_showing()) : ?>
		<div class="stricky-header stricked-menu main-menu main-menu-three">
			<div class="sticky-header__content"></div><!-- /.sticky-header__content -->
		</div><!-- /.stricky-header -->
		<!-- /.stricky-header -->
	<?php endif; ?>

<?php endif; ?>

<div class="mobile-nav__wrapper">
	<div class="mobile-nav__overlay mobile-nav__toggler"></div>
	<!-- /.mobile-nav__overlay -->
	<div class="mobile-nav__content">
		<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

		<div class="logo-box">
			<a href="<?php echo esc_url(home_url('/')); ?>" aria-label="logo image">
				<img width="<?php echo esc_attr($settings['logo_dimension']['width']); ?>" height="<?php echo esc_attr($settings['logo_dimension']['height']); ?>" src="<?php echo esc_attr($settings['mobile_menu_logo']['url']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
			</a>
		</div>
		<!-- /.logo-box -->
		<div class="mobile-nav__container"></div>
		<!-- /.mobile-nav__container -->
		<ul class="mobile-nav__contact list-unstyled ml-0">
			<?php if ($settings['mobile_email']) : ?>
				<li>
					<i class="fa fa-envelope"></i>
					<a href="mailto:<?php echo esc_attr($settings['mobile_email']); ?>"><?php echo esc_html($settings['mobile_email']); ?></a>
				</li>
			<?php endif; ?>
			<?php if ($settings['mobile_phone']) : ?>
				<li>
					<i class="fa fa-phone-alt"></i>
					<a href="tel:<?php echo esc_url(str_replace(' ', '-', $settings['mobile_phone'])); ?>">
						<?php echo esc_html($settings['mobile_phone']); ?>
					</a>
				</li>
			<?php endif; ?>
		</ul><!-- /.mobile-nav__contact -->
		<div class="mobile-nav__top">
			<div class="mobile-nav__social">
				<?php foreach ($settings['mobile_menu_social_icons'] as $social_icon) : ?>
					<a href="<?php echo esc_url($social_icon['social_url']['url']); ?>" class="fab <?php echo esc_attr($social_icon['social_icon']); ?>"></a>
				<?php endforeach; ?>
			</div><!-- /.mobile-nav__social -->
		</div><!-- /.mobile-nav__top -->

	</div>
	<!-- /.mobile-nav__content -->
</div>


<div class="search-popup">
	<div class="search-popup__overlay search-toggler"></div>
	<!-- /.search-popup__overlay -->
	<div class="search-popup__content">
		<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
			<label for="search" class="sr-only"><?php echo esc_html__("search here", 'pitoon-addon'); ?></label><!-- /.sr-only -->
			<input type="search" name="s" id="search" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr__('Search Here...', 'pitoon-addon') ?>" />
			<button type="submit" aria-label="search submit" class="thm-btn">
				<i class="icon-magnifying-glass"></i>
			</button>
		</form>
	</div>
	<!-- /.search-popup__content -->
</div>


<?php $pitoon_back_to_top_status = get_theme_mod('scroll_to_top', 'no'); ?>
<?php if ('yes' === $pitoon_back_to_top_status) : ?>
	<span data-target="html" class="scroll-to-target scroll-to-top"><i class="fa <?php echo esc_attr(get_theme_mod('scroll_to_top_icon', 'fa-angle-up')); ?>"></i></span>

<?php endif; ?>