<?php

/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined('ABSPATH') || exit;

/* translators: %s: Quantity. */
$label = !empty($args['product_name']) ? sprintf(esc_html__('%s quantity', 'pitoon'), wp_strip_all_tags($args['product_name'])) : esc_html__('Quantity', 'pitoon');

// In some cases we wish to display the quantity but not allow for it to be changed.
if ($max_value && $min_value === $max_value) {
	$is_readonly = true;
	$input_value = $min_value;
} else {
	$is_readonly = false;
}
?>

<?php
/**
 * Hook to output something before the quantity input field.
 *
 * @since 7.2.0
 */
do_action('woocommerce_before_quantity_input_field');
?>
<div class="quantity-box">
	<?php do_action('woocommerce_before_quantity_input_field'); ?>
	<label class="screen-reader-text" for="<?php echo esc_attr($input_id); ?>"><?php echo esc_attr($label); ?></label>
	<button type="button" class="sub"><i class="fa fa-minus"></i></button>
	<input type="<?php echo esc_attr($is_readonly) ? 'text' : 'number'; ?>" <?php wp_readonly($is_readonly); ?> id="<?php echo esc_attr($input_id); ?>" class="<?php echo esc_attr(join(' ', (array) $classes)); ?>" name="<?php echo esc_attr($input_name); ?>" value="<?php echo esc_attr($input_value); ?>" title="<?php echo esc_attr_x('Qty', 'Product quantity input tooltip', 'pitoon'); ?>" min="<?php echo esc_attr($min_value); ?>" <?php if (!empty($max_value)) : ?> max="<?php echo esc_attr(0 < $max_value ? $max_value : ''); ?>" <?php endif;  ?> <?php if (!$is_readonly) : ?> step="<?php echo esc_attr($step); ?>" placeholder="<?php echo esc_attr($placeholder); ?>" inputmode="<?php echo esc_attr($inputmode); ?>" autocomplete="<?php echo esc_attr(isset($autocomplete) ? $autocomplete : 'on'); ?>" <?php endif; ?> />
	<button type="button" class="add"><i class="fa fa-plus"></i></button>
	<?php do_action('woocommerce_after_quantity_input_field'); ?>
</div>
<?php
/**
 * Hook to output something after quantity input field
 *
 * @since 3.6.0
 */
do_action('woocommerce_after_quantity_input_field');
?>

<?php
