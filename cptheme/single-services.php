<?php get_header(); ?>
<main class="single-template">
    <div class="single">
        <?php while (have_posts()) : the_post(); ?>
            <div class="content">
                <div class="blog-post">
                    <?php
                    // Check value exists.
                    if (have_rows('modules')) :
                        // Loop through rows.
                        while (have_rows('modules')) : the_row();
                            // Case: anchors layout.
                            if (get_row_layout() == 'anchors') :
                                get_template_part('modules/anchors');
                            endif;
                            // Case: banner-cta layout.
                            if (get_row_layout() == 'banner_cta') :
                                get_template_part('modules/banner-cta');
                            endif;
                            // Case: featured-blogs layout.
                            if (get_row_layout() == 'featured_blogs') :
                                get_template_part('modules/featured-blogs');
                            endif;
                            // Case: featured-services layout.
                            if (get_row_layout() == 'featured_services') :
                                get_template_part('modules/featured-services');
                            endif;
                            // Case: featured-services-condensed layout.
                            if (get_row_layout() == 'featured_services_condensed') :
                                get_template_part('modules/featured-services-condensed');
                            endif;
                            // Case: four-panels layout.
                            if (get_row_layout() == 'four_panels') :
                                get_template_part('modules/four-panels');
                            endif;
                            // Case: hero layout.
                            if (get_row_layout() == 'hero') :
                                get_template_part('modules/hero');
                            endif;
                            // Case: hero-banner layout.
                            if (get_row_layout() == 'hero_banner') :
                                get_template_part('modules/hero-banner');
                            endif;
                            // Case: location-info layout.
                            if (get_row_layout() == 'location_info') :
                                get_template_part('modules/location-info');
                            endif;
                            // Case: side-by-side layout.
                            if (get_row_layout() == 'sbs') :
                                get_template_part('modules/side-by-side');
                            endif;
                            // Case: side-by-side-alt layout.
                            if (get_row_layout() == 'sbs_alt') :
                                get_template_part('modules/side-by-side-alt');
                            endif;
                            // Case: team-members layout.
                            if (get_row_layout() == 'team_members') :
                                get_template_part('modules/team-members');
                            endif;
                            // Case: text-editor layout.
                            if (get_row_layout() == 'text_editor') :
                                get_template_part('modules/text-editor');
                            endif;
                            // Case: three-panels layout.
                            if (get_row_layout() == 'three_panels') :
                                get_template_part('modules/three-panels');
                            endif;
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                    // Do something...
                    endif; ?>
                    <?php get_field('featured_image'); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>