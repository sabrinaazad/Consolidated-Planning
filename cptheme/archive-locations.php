<?php get_header(); ?>
<main class="cpt-archive-template location">
    <?php
    $args = array(
        'p' => 39,
        'post_type' => 'any'
    );
    $page_fields = new WP_Query($args);
    if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post();

    ?>

        <?php // Check value exists.
            if (have_rows('modules')) :

                // Loop through rows.
                while (have_rows('modules')) : the_row();
                    // Case: hero-banner layout.
                    if (get_row_layout() == 'hero_banner') :
                        get_template_part('modules/hero-banner');
                    endif;
                    // Case: banner-cta layout.
                    if (get_row_layout() == 'banner_cta') :
                        get_template_part('modules/banner-cta');
                    endif;
                // End loop.
                endwhile;

            // No value.
            else :
            // Do something...
            endif;
        endwhile; ?>


        <section class="section section--blog-archive no-padded-top">
            <?php echo do_shortcode(' [mapsvg id="1"] ') ?>
            <div class="btn-wrapper align--center"><a class="btn btn-secondary" href="<?php the_field('link'); ?>">ALL OTHER STATES</a></div>
        </section>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>


    <section class="full-width" id="resultsWrapper">
        <div id="results" class="gray-bg">
        </div>
    </section>

</main>
<?php get_footer(); ?>