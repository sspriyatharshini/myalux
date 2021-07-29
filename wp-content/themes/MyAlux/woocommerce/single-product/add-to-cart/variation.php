<?php
global $product_custom_template;
$product_custom_template = $product_custom_template ? $product_custom_template : 'productTemplate';
include_once get_template_directory() . '/woocommerce/template-parts/' . $product_custom_template . '/single-product/add-to-cart/variation.php';
?>