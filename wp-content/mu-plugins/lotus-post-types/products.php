<?php

function setup_product_page() {
	register_post_type("products", [
		"label" => "Products",
		"labels" => [
			"name" => "Products",
			"singular_name" => "product",
			"add_new_item" => "Add New Product",
			"edit_item" => "Edit Product",
			"view_item" => "View Product",
			"view_items" => "View Products",
			"not_found" => "No Product found",
			"all_items" => "All Products",
			"archives" => "Product Page archives"
		],
		"description" => "Product Page provided by Oriental Lotus",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-products",
		"rewrite" => [
			"slug" => "products"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		]
       

	]);
}

add_action("init", "setup_product_page");

?>