<?php

function services(){
    $query = new WP_Query(
        array(
            'post_type' => 'service',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )
    );
    $i = 1;
    $str = '<div class="elementor-row">';
    while ($query->have_posts()):
        $query->the_post();
        $str .= '
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element" data-element_type="column">
            <div class="services-box services-page">
                <div class="content"> 
                    <a class ="icon" href="'.get_the_permalink().'"><i aria-hidden="true" class="'.do_shortcode('[acf field="icon"]').'"></i></a>
                    <h4 class="title">'.get_the_title().'</h4>
                    <p class="description">'.do_shortcode('[acf field="description"]').'</p> 
                </div>
            </div>
        </div>
        ';
        if($i % 3 == 0): // checks if 3 posts are displayed in a row
            $str .= '</div>'; // closes row div tag 
            $str .= '<div class="elementor-row">'; // creates new row 
        endif;
        $i++;
    endwhile;
  
    wp_reset_postdata();
    return $str;
}

add_shortcode('services', 'services');

function services_link(){
    $query = new WP_Query(
        array(
            'post_type' => 'service',
            'post_status' => 'publish',
            'showposts' => '6',
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )
    );
    $i = 1;
    $str = '<div class="elementor-row">';
    while ($query->have_posts()):
        $query->the_post();
        $str .= '
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element" data-element_type="column">
            <div class="services-box services-page">
                <div class="content"> 
                    <a class ="icon" href="'.get_the_permalink().'"><i aria-hidden="true" class="'.do_shortcode('[acf field="icon"]').'"></i></a>
                    <h4 class="title">'.get_the_title().'</h4>
                    <p class="description">'.do_shortcode('[acf field="description"]').'</p> 
                </div>
            </div>
        </div>
        ';
        if($i % 3 == 0): // checks if 3 posts are displayed in a row
            $str .= '</div>'; // closes row div tag 
            $str .= '<div class="elementor-row">'; // creates new row 
        endif;
        $i++;
    endwhile;
  
    wp_reset_postdata();
    return $str;
}

add_shortcode('services_link', 'services_link');