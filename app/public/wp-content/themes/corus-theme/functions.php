<?php
/**
 * functions
 *
 * Where general codes are put in
 *
 * @package Corus-Theme
 */

?>

<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: This creates a new post type called Galleries.
	 * Created using 'Custom Post Type UI plugin'
	 */

	$labels = [
		"name" => __( "Galleries", "custom-post-type-ui" ),
		"singular_name" => __( "Gallery", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Galleries", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "gallery", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "/wp-content/uploads/2020/11/slider-1.png",
		"supports" => [ "title" ],
	];

	register_post_type( "gallery", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );



?>