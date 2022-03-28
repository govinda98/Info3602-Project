<?php 
function autorepair_post_types(){
        register_post_type('service',array(
            'supports' => array('title', 'editor','excerpt'),
            'rewrite'=> array('slug' => 'services' ),
            'has_archive' => true,
            'public' => true, 
            'labels' => array(
                'name' => "Services",
                'add_new_item' => 'Add New Service',
                'edit_item' => 'Edit Service',
                'all_items' => 'All Services',
                'singular_name' => "Service"
            ),
            'menu_icon' => 'dashicons-calendar'
        ));
        register_post_type('mechanic',array(
            'supports' => array('title', 'editor'),
            'rewrite'=> array('slug' => 'mechanics' ),
            'has_archive' => true,
            'public' => true, 
            'labels' => array(
                'name' => "Mechanics",
                'add_new_item' => 'Add New Mechanic',
                'edit_item' => 'Edit Mechanic',
                'all_items' => 'All Mechanics',
                'singular_name' => "Mechanic"
            ),
            'menu_icon' => 'dashicons-index-card'
        ));
}
 add_action('init', 'autorepair_post_types');
?>