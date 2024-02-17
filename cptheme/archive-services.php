<?php get_header(); ?>
<?php
$args = array(
    'p' => 170,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post();
?>
<?php // Check value exists.
        if (have_rows('modules')) :

            // Loop through rows.
            while (have_rows('modules')) : the_row();
                // Case: anchors layout.
                if (get_row_layout() == 'anchors') :
                    get_template_part('modules/anchors');
                endif;
                // Case: hero-banner layout.
                if (get_row_layout() == 'hero_banner') :
                    get_template_part('modules/hero-banner');
                endif;
            // End loop.
            endwhile;

        // No value.
        else :
        // Do something...
        endif;
    endwhile;

endif; ?>

<?php wp_reset_postdata(); ?>

<main class="cpt-archive-template">
    <section class="section section--blog-archive full-width gray-bg" id="business">
        <?php
        $args = array(
            'p' => 170,
            'post_type' => 'any'
        );
        $content1 = new WP_Query($args);
        if ($content1->have_posts()) : while ($content1->have_posts()) : $content1->the_post(); ?>
                <div class="header-content">
                    <?php $subheading1 = get_field('subheading1');
                    if ($subheading1) : ?>
                        <div class="subheading align--center"><?php echo $subheading1; ?></div>
                    <?php endif; ?>

                    <?php $heading1 = get_field('heading1');
                    if ($heading1) : ?>
                        <h2 class="heading border-bottom align--center"><?php echo $heading1; ?></h2>
                    <?php endif; ?>

                    <?php $blurb1 = get_field('blurb1');
                    if ($blurb1) : ?>
                        <?php echo $blurb1; ?>
                    <?php endif; ?>
                </div>

            <?php endwhile;

        else : ?>

            <p>Sorry, no posts matched your criteria.</p>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
        <div class="post-grid">

            <?php
            $args = array(
                'post_type' => 'services',
                'service-types' => 'business-owner'
            );
            $query = new WP_Query($args);
            ?>
            <?php
            // Check if there are any posts to display
            if ($query->have_posts()) : ?>

                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a class="post" href="<?php the_permalink(); ?>">
                        <div class="content">
                            <div class="featured-image" style="background-image: url(<?php echo the_field('featured_image'); ?>);"><div class="blue-overlay"></div></div>
                            <div class="blurb">
                                <h4 class="uppercase"><?php the_title(); ?></h4>
                                <?php the_excerpt(); ?>
                                <button class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                    </a>
                <?php endwhile;

            else : ?>

                <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
    </section>
    <section class="section section--blog-archive full-width" id="personal">
        <?php
        $args = array(
            'p' => 170,
            'post_type' => 'any'
        );
        $content2 = new WP_Query($args);
        if ($content2->have_posts()) : while ($content2->have_posts()) : $content2->the_post(); ?>
                <div class="header-content">
                    <?php $subheading2 = get_field('subheading2');
                    if ($subheading2) : ?>
                        <div class="subheading align--center"><?php echo $subheading2; ?></div>
                    <?php endif; ?>

                    <?php $heading2 = get_field('heading2');
                    if ($heading2) : ?>
                        <h2 class="heading border-bottom align--center"><?php echo $heading2; ?></h2>
                    <?php endif; ?>

                    <?php $blurb2 = get_field('blurb2');
                    if ($blurb2) : ?>
                        <?php echo $blurb2; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile;

        else : ?>

            <p>Sorry, no posts matched your criteria.</p>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
        <div class="post-grid">

            <?php
            $args = array(
                'post_type' => 'services',
                'service-types' => 'personal-planning'
            );
            $query = new WP_Query($args);
            ?>
            <?php
            // Check if there are any posts to display
            if ($query->have_posts()) : ?>

                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a class="post" href="<?php the_permalink(); ?>">
                        <div class="content">
                            <div class="featured-image" style="background-image: url(<?php echo the_field('featured_image'); ?>);"><div class="blue-overlay"></div></div>
                            <div class="blurb">
                                <h4 class="uppercase"><?php the_title(); ?></h4>
                                <?php the_excerpt(); ?>
                                <button class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                    </a>
                <?php endwhile;

            else : ?>

                <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
    </section>
</main>
<?php get_footer(); ?>