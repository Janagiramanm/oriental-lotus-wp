<?php

function setup_product_overview_page() {
	register_post_type("product-overview", [
		"label" => "Product Overview",
		"labels" => [
			"name" => "Product Overview",
			"singular_name" => "product-overview",
			"add_new_item" => "Add New Product Category",
			"edit_item" => "Edit Product Overview",
			"view_item" => "View Product Overview",
			"view_items" => "View Product Overview",
			"not_found" => "No Product Overview found",
			"all_items" => "All Overviews",
			"archives" => "Product Overview Page archives"
		],
		"description" => "Product Overview Page provided by Oriental Lotus",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-products",
		"rewrite" => [
			"slug" => "product-overview"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		]
       

	]);
}

add_action("init", "setup_product_overview_page");

?>