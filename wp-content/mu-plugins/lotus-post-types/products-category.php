<?php

function setup_product_category_page() {
	register_post_type("product-category", [
		"label" => "Product Category",
		"labels" => [
			"name" => "Product Overview",
			"singular_name" => "product-category",
			"add_new_item" => "Add New Product Category",
			"edit_item" => "Edit Product Category",
			"view_item" => "View Product Category",
			"view_items" => "View Product Categories",
			"not_found" => "No Product Category found",
			"all_items" => "All Product Categories",
			"archives" => "Product Category Page archives"
		],
		"description" => "Product Category Page provided by Oriental Lotus",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-products",
		"rewrite" => [
			"slug" => "product-category"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		]
       

	]);
}

add_action("init", "setup_product_category_page");

?>