<?php 
/*
Plugin Name:  custom-endpoints
Plugin URI:   https://lotuswp.netiapps.com
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area. 
Version:      1.0
Author:       Janagiraman
Author URI:   https://www.wpbeginner.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-tutorial
Domain Path:  /languages
*/

function lotus_products() {
	$meta_key = $_REQUEST['meta_key'];
	$meta_value = $_REQUEST['meta_value'];
	
	$args = array(
        'post_type' => 'products',
		'meta_query' => array(
            array(
                'key' => $meta_key, // replace with your relationship field key
                'value' => $meta_value, // replace with the ID of the related post you want to filter by
                'compare' => '=', // use 'LIKE' to match against serialized data
            ),
        ),
		'orderby' => 'ID',
        'order' => 'ASC',
    );
    $result = new WP_Query( $args );
	// echo '<pre>';
	// print_r($result->posts);
	// exit;
	$data= [];
	if($result->posts){
		foreach($result->posts as $key => $value){
			$data[]['acf'] = get_fields($value->ID);
		}

		print_r($data);
		foreach($data as $key1 => $value1){
			$data[$key1]['acf']['brand'] = get_fields($value1['acf']['brand']->ID);
		}
		
	}
	
	exit;
    wp_send_json($data);
}

add_action('rest_api_init', function() {
	register_rest_route('wl/v1', 'products', [
		'methods' => 'GET',
		'callback' => 'lotus_products',
	]);

	register_rest_route( 'wl/v1', 'products/(?P<slug>[a-zA-Z0-9-]+)', array(
		'methods' => 'GET',
		'callback' => 'lotus_products',
    ) );
    
    // register_rest_route('wp/v1', 'page/(?P<slug>[a-zA-Z0-9-]+)/(?P<section>[a-zA-Z0-9-]+)', [
	// 	'methods' => 'GET',
	// 	'callback' => 'wl_page',
	// ]);

//     register_rest_route( 'wl/v1', '/menus/(?P<slug>[a-zA-Z0-9-]+)', 
//     array(
//       'methods'  => 'GET',
//       'callback' => 'get_menu'
//     )
//   );

//   register_rest_route( 'wl/v1', '/article/(?P<slug>[a-zA-Z0-9-]+)', 
//     array(
//         'methods'  => 'GET',
//         'callback' => 'get_article'
//     )
//     );

//     register_rest_route( 'wl/v1', '/information/(?P<slug>[a-zA-Z0-9-]+)', 
//         array(
//             'methods'  => 'GET',
//             'callback' => 'get_information'
//         )
//     );

//   register_rest_route( 'wl/v1', '/contact-us', 
//     array(
//       'methods'  => 'POST',
//       'callback' => 'send_contact_us'
//     )
//   );
//   register_rest_route( 'wl/v1', '/articles', 
//     array(
//         'methods'  => 'GET',
//         'callback' => 'get_article_stories'
//     )
//     );
});