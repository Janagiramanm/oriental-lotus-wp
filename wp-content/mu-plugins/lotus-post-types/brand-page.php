<?php

function setup_brand_page() {
	register_post_type("brand-page", [
		"label" => "Brand",
		"labels" => [
			"name" => "Brands",
			"singular_name" => "brand-page",
			"add_new_item" => "Add New Brand",
			"edit_item" => "Edit Brand",
			"view_item" => "View Brand",
			"view_items" => "View Brands",
			"not_found" => "No Brand found",
			"all_items" => "All Brands",
			"archives" => "Brand Page archives"
		],
		"description" => "Brand Page provided by Oriental Lotus",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-businessman",
		"rewrite" => [
			"slug" => "brand-page"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		]
       

	]);
}

add_action("init", "setup_brand_page");

?>