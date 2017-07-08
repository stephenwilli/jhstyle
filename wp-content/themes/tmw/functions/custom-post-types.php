<?php

/* CUSTOM POST TYPES
/===================================================== */

add_action( 'init', 'create_post_type' );

	function create_post_type() {

	register_post_type( 'publication',
			array (	'label' => 'Publications',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'has_archive' => true,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array('title','editor','thumbnail','page-attributes'),
				'menu_icon' => 'dashicons-images-alt2',

				'labels' =>
					array (
	  					'name' => 'Publications', /* This is the Title of the Group */
	  					'singular_name' => 'Publication', /* This is the individual type */
						'menu_name' => 'Publications', /* The add new menu item */
						'add_new' => 'Add Publication', /* Add New Display Title */
						'add_new_item' => 'Add New Publication',
						'edit' => 'Edit', /* Edit Dialog */
						'edit_item' => 'Edit Publication', /* Edit Display Title */
						'new_item' => 'New Publication', /* New Display Title */
						'view_item' => 'View Publication', /* View Display Title */
						'search_items' => 'Search Publications', /* Search Custom Type Title */
						'not_found' => 'No Publications Found', /* This displays if there are no entries yet */
						'not_found_in_trash' => 'No Publications Found in Trash' /* This displays if there is nothing in the trash */
						),
			)
	); // End publication

	register_post_type( 'team',
			array (	'label' => 'Team',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'has_archive' => true,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array('title','thumbnail','page-attributes'),
				'menu_icon' => 'dashicons-admin-users',

				'labels' =>
					array (
	  					'name' => 'Team', /* This is the Title of the Group */
	  					'singular_name' => 'Team Member', /* This is the individual type */
						'menu_name' => 'Team', /* The add new menu item */
						'add_new' => 'Add Team Member', /* Add New Display Title */
						'add_new_item' => 'Add New Team Member',
						'edit' => 'Edit', /* Edit Dialog */
						'edit_item' => 'Edit Team Member', /* Edit Display Title */
						'new_item' => 'New Team Member', /* New Display Title */
						'view_item' => 'View Team Member', /* View Display Title */
						'search_items' => 'Search Team', /* Search Custom Type Title */
						'not_found' => 'No Team Found', /* This displays if there are no entries yet */
						'not_found_in_trash' => 'No Team Found in Trash' /* This displays if there is nothing in the trash */
						),
			)
	); // End team

}