<?php 
function autorepair_post_types(){
	  // Services Post Type
        register_post_type('service',array(
            'map_meta_cap' => true,
            'capability_type' => 'service',
            'supports' => array('title', 'editor','excerpt', 'thumbnail', 'page-attributes', 'custom-fields'),
		    'has_archive' => false,
            'rewrite'=> array('slug' => 'services' ),
            'public' => true, 
            'labels' => array(
                'name' => "Services",
                'add_new_item' => 'Add New Service',
                'edit_item' => 'Edit Service',
                'all_items' => 'All Services',
                'singular_name' => "Service"
            ),
		'taxonomies' => array( 'category' ),
            'menu_icon' => 'dashicons-calendar'
        ));

	  // Testimonials Post Type
        register_post_type('testimonial',array(
            'map_meta_cap' => true,
            'capability_type' => 'testimonial',
            'supports' => array('title', 'thumbnail', 'custom-fields'),
		    'has_archive' => false,
            'rewrite'=> array('slug' => 'testimonials' ),
            'public' => true, 
            'labels' => array(
                'name' => "Testimonials",
                'add_new_item' => 'Add New Testimonial',
                'edit_item' => 'Edit Testimonial',
                'all_items' => 'All Testimonials',
                'singular_name' => "Testimonial"
            ),
            'menu_icon' => 'dashicons-star-filled'
        ));

	  // Staff Post Type
        register_post_type('staff',array(
            'map_meta_cap' => true,
            'capability_type' => 'staff',
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'),
            'has_archive' => false,
		    'rewrite'=> array('slug' => 'staffs' ),
            'public' => true, 
            'labels' => array(
                'name' => "Staffs",
                'add_new_item' => 'Add New Staff',
                'edit_item' => 'Edit Staff',
                'all_items' => 'All Staff',
                'singular_name' => "Staff"
            ),
		'taxonomies' => array( 'category' ),
            'menu_icon' => 'dashicons-index-card'
        ));
}
 add_action('init', 'autorepair_post_types');
?>