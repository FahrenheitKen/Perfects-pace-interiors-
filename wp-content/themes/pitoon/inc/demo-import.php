<?php
function pitoon_demo_import()
{
	return array(
		array(
			'import_file_name'             => 'Pitoon Demo Import',
			'categories'                   => array('pitoon'),
			'local_import_file'            => trailingslashit(get_template_directory()) . 'inc/demo-data/sample-data.xml',
			'local_import_widget_file'     => trailingslashit(get_template_directory()) . 'inc/demo-data/widgets.wie',
			'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-data/customizer.dat',
			'import_notice'                => esc_html__('Please keep patients while importing sample data.', 'pitoon'),
		),
	);
}
add_filter('pt-ocdi/import_files', 'pitoon_demo_import');

function pitoon_after_import_setup()
{
	// Assign menus to their locations.
	$main_menu = get_term_by('name', 'Main Menu', 'nav_menu');

	set_theme_mod('nav_menu_locations', array(
		'menu-1' => $main_menu->term_id
	));

	// Assign front page and posts page (blog page).
	$front_page_id = pitoon_get_page_by_title('Home One');
	$blog_page_id  = pitoon_get_page_by_title('Blog Sidebar');

	update_option('show_on_front', 'page');
	update_option('page_on_front', $front_page_id->ID);
	update_option('page_for_posts', $blog_page_id->ID);

	//woocommerce
	$woocommerce_shop = pitoon_get_page_by_title('Pitoon shop');
	$woocommerce_checkout = pitoon_get_page_by_title('Pitoon checkout');
	$woocommerce_cart = pitoon_get_page_by_title('Pitoon cart');
	$woocommerce_myaccount = pitoon_get_page_by_title('Pitoon my account');

	update_option('woocommerce_cart', $woocommerce_cart->ID);
	update_option('woocommerce_checkout_page_id', $woocommerce_checkout->ID);
	update_option('woocommerce_cart_page_id', $woocommerce_cart->ID);
	update_option('woocommerce_myaccount_page_id', $woocommerce_myaccount->ID);
	update_option('woocommerce_shop_page_id', $woocommerce_shop->ID);
}
add_action('pt-ocdi/after_import', 'pitoon_after_import_setup');
add_filter('pt-ocdi/disable_pt_branding', '__return_true');
