<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product_custom_template;
$product_custom_template = 'productTemplate';

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
global $product;
if (!$product) {
	global $post;
	$product = wc_get_product($post->ID);
}
add_action(
    'theme_content_styles',
    function () use ($product_custom_template) {
        theme_product_content_styles($product_custom_template);
    }
);

function product_single_body_class_filter($classes) {
	$classes[] = 'u-body';
	return $classes;
}
add_filter('body_class', 'product_single_body_class_filter');

function product_single_body_style_attribute() {
	return "";
}
add_filter('add_body_style_attribute', 'product_single_body_style_attribute');

function product_single_body_back_to_top() {
	return <<<BACKTOTOP

BACKTOTOP;
}
add_filter('add_back_to_top', 'product_single_body_back_to_top');


function product_single_get_local_fonts() {
	return '';
}
add_filter('get_local_fonts', 'product_single_get_local_fonts');

ob_start();
get_header();
$header = ob_get_clean();
if (function_exists('renderTemplate')) {
    renderTemplate($header, '', 'echo', 'header');
} else {
    echo $header;
}

theme_layout_before('product', '', $product_custom_template); ?>

<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>

    <?php wc_get_template_part( 'template-parts/' . $product_custom_template . '/content', 'single-product' ); ?>

<?php endwhile; // end of the loop.

theme_layout_after('product'); ?>

<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>

<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
?>

<?php
ob_start();
get_footer();
$footer = ob_get_clean();
if (function_exists('renderTemplate')) {
    renderTemplate($footer, '', 'echo', 'footer');
} else {
    echo $footer;
}

remove_action('theme_content_styles', 'theme_product_content_styles');
remove_filter('body_class', 'theme_single_body_class_filter');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
