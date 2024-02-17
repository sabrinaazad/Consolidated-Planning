<?php
 /* Template Name: Business HP Template */
get_header();

// Check value exists.
if (have_rows('modules')) :
    // Loop through rows.
    while (have_rows('modules')) : the_row();
        // Case: banner-cta layout.
        if (get_row_layout() == 'banner_cta') :
            get_template_part('modules/banner-cta');
        endif;
        // Case: hero layout.
        if (get_row_layout() == 'hero') :
            get_template_part('modules/hero');
        endif;
        // Case: featured-services-alt layout.
         if (get_row_layout() == 'featured_services_alt') :
            get_template_part('modules/featured-services-alt');
        endif;
        // Case: featured-blogs layout.
         if (get_row_layout() == 'featured_blogs') :
            get_template_part('modules/featured-blogs-bo');
        endif;
    // End loop.
    endwhile;
// No value.
else :
// Do something...
endif;

get_footer();