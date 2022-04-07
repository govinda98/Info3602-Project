<?php

function testimonials(){
    $query = new WP_Query(
        array(
            'post_type' => 'testimonial',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )
    );
    $j = 1;
    $str = '<div class="elementor-row testimonial">';
    while ($query->have_posts()):
        $query->the_post();
        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'testimonial');
        $str .= '
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element data-element_type="column">
            <div class="testimonial-box">
                <div class="content">
                    <div class="elementor-widget-container"> 
                        <div class="elementor-testimonial-wrapper">
                            <div class="elementor-testimonial-content">
                                <a class="review-text" href="'.get_the_permalink().'" title="'.get_the_title().'">'.do_shortcode('[acf field="review"]').'</a>
                            </div> 
                            <div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside"> 
                                <div class="elementor-testimonial-meta-inner">
                                    <div class="elementor-testimonial-image">
                                        <img src="'.$thumbnail.'" alt="'.get_the_title().'">
                                    </div>
                                        <div class="elementor-testimonial-details">
                                            <div class="elementor-testimonial-name">'.do_shortcode('[acf field="name"]').'</div>
                                            <div class="elementor-testimonial-job">'.do_shortcode('[acf field="job"]').'</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>          
        ';
        if($j % 2 == 0): // checks if 2 posts are displayed in a row
            $str .= '</div>'; // closes row div tag 
            $str .= '<div class="elementor-row testimonial">'; // creates new row 
        endif;
        $j++;
    endwhile;
  
    wp_reset_postdata();
    return $str;
}

add_shortcode('testimonials', 'testimonials');

function testimonials_link(){
    $query = new WP_Query(
        array(
            'post_type' => 'testimonial',
            'post_status' => 'publish',
            'showposts' => '2',
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )
    );
    $j = 1;
    $str = '<div class="elementor-row testimonial">';
    while ($query->have_posts()):
        $query->the_post();
        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'testimonial');
        $str .= '
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element data-element_type="column">
            <div class="testimonial-box">
                <div class="content">
                    <div class="elementor-widget-container"> 
                        <div class="elementor-testimonial-wrapper">
                            <div class="elementor-testimonial-content">
                                <a class="review-text" href="'.get_the_permalink().'" title="'.get_the_title().'">'.do_shortcode('[acf field="review"]').'</a>
                            </div> 
                            <div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside"> 
                                <div class="elementor-testimonial-meta-inner">
                                    <div class="elementor-testimonial-image">
                                        <img src="'.$thumbnail.'" alt="'.get_the_title().'">
                                    </div>
                                        <div class="elementor-testimonial-details">
                                            <div class="elementor-testimonial-name">'.do_shortcode('[acf field="name"]').'</div>
                                            <div class="elementor-testimonial-job">'.do_shortcode('[acf field="job"]').'</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>          
        ';
        if($j % 2 == 0): // checks if 2 posts are displayed in a row
            $str .= '</div>'; // closes row div tag 
            $str .= '<div class="elementor-row testimonial">'; // creates new row 
        endif;
        $j++;
    endwhile;
  
    wp_reset_postdata();
    return $str;
}

add_shortcode('testimonials_link', 'testimonials_link');
