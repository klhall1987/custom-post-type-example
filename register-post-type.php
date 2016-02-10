<?php

/*
 * Plugin Name: Phones Custom Post Type
 * Plugin URI: https://github.com/klhall1987/custom-post-type-example
 * Description: An example of how to build a custom post type and attach custom taxonomies in WordPress.
 * Version: 1.0
 * Author: Kenny Hall
 * Author URI: http://kennyinthewild.com
 */

class Register_Custom_Post_Type
{
    /**
     * Register_Custom_Post_Type constructor.
     */
    public function __construct()
    {
        add_action('init', array( $this, 'Register_Phone_Post_Type' ), 0);
        include( 'register-taxonomy.php' );
    }

    public function Register_Phone_Post_Type()
    {
        $labels = array(
            'name' => _x('Phones', 'Post Type General Name', 'text_domain'),
            'singular_name' => _x('Phone', 'Post Type Singular Name', 'text_domain'),
            'menu_name' => __('Phones', 'text_domain'),
            'name_admin_bar' => __('Phones', 'text_domain'),
            'archives' => __('Item Archives', 'text_domain'),
            'parent_item_colon' => __('Parent Item:', 'text_domain'),
            'all_items' => __('All Phones', 'text_domain'),
            'add_new_item' => __('Add New Phone', 'text_domain'),
            'add_new' => __('Add Phone', 'text_domain'),
            'new_item' => __('New Item', 'text_domain'),
            'edit_item' => __('Edit Item', 'text_domain'),
            'update_item' => __('Update Item', 'text_domain'),
            'view_item' => __('View Item', 'text_domain'),
            'search_items' => __('Search Item', 'text_domain'),
            'not_found' => __('Not found', 'text_domain'),
            'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
            'featured_image' => __('Featured Image', 'text_domain'),
            'set_featured_image' => __('Set featured image', 'text_domain'),
            'remove_featured_image' => __('Remove featured image', 'text_domain'),
            'use_featured_image' => __('Use as featured image', 'text_domain'),
            'insert_into_item' => __('Insert into item', 'text_domain'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
            'items_list' => __('Items list', 'text_domain'),
            'items_list_navigation' => __('Items list navigation', 'text_domain'),
            'filter_items_list' => __('Filter items list', 'text_domain'),
        );

        $args = array(
            'label' => __('Phone', 'text_domain'),
            'description' => __('All cell phones we sell. ', 'text_domain'),
            'labels' => $labels,
            'supports' => array(),
            'taxonomies' => array('os', ' makemodel'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
        );

        register_post_type('phone', $args);
    }
}

return new Register_Custom_Post_Type();

