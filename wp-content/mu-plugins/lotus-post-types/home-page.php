<?php

function setup_home_page() {
	register_post_type("Home-page", [
		"label" => "Home Page",
		"labels" => [
			"name" => "Home Page",
			"singular_name" => "home-page",
			"add_new_item" => "Add Home Page",
			"edit_item" => "Edit Home Page",
			"view_item" => "View Home Page",
			"view_items" => "View Home Page",
			"not_found" => "No Clients found",
			"all_items" => "All Home Page",
			"archives" => "Home Page archives"
		],
		"description" => "Home Page provided by Oriental Lotus",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-businessman",
		"rewrite" => [
			"slug" => "home-page"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		]
       

	]);
}

add_action("init", "setup_home_page");

?>