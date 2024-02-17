<?php get_header();
/* Template Name: Team Archive Template */
?>
<?php $args = array(
    'p' => 136,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); ?>
<?php // Check value exists.
        if (have_rows('modules')) :

            // Loop through rows.
            while (have_rows('modules')) : the_row();
                // Case: hero-banner layout.
                if (get_row_layout() == 'hero_banner') :
                    get_template_part('modules/hero-banner');
                endif;
                // Case: text-editor layout.
                if (get_row_layout() == 'text_editor') :
                    get_template_part('modules/text-editor');
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

    <?php
    $leadership = get_field('leadership');
    if ($leadership) : ?>
        <section class="section section--banner-cta full-width">
            <div class="section-wrapper">
                <?php
                $subheading = $leadership['subheading'];
                if ($subheading) : ?>
                    <span class="subheading"><?php echo $subheading; ?></span>
                <?php endif; ?>

                <?php $heading = $leadership['heading'];
                if ($heading) : ?>
                    <h2 class="heading border-bottom"><?php echo $heading; ?></h2>
                <?php endif; ?>

                <?php $blurb = $leadership['blurb'];
                if ($blurb) : ?>
                    <?php echo $blurb; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="section section--blog-archive section--team-members">
        <div class="team-grid">
            <?php
            $args = array(
                'post_type' => 'team-members',
                'post_status' => 'publish',
                'orderby' => 'title',
                'order'   => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'teams',
                        'field'    => 'slug',
                        'terms'    => array('leadership')
                    )
                ),
                'posts_per_page' => -1
            );

            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()) : ?>
                <div class="leadership_2">

                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="slide">
                            <?php the_post_thumbnail(); ?>
                        </div>

                    <?php endwhile; ?>

                </div>
            <?php else : ?>

                <p>Sorry, no posts exist.</p>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <?php
            $args = array(
                'post_type' => 'team-members',
                'post_status' => 'publish',
                'orderby' => 'title',
                'order'   => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'teams',
                        'field'    => 'slug',
                        'terms'    => array('leadership')
                    )
                ),
                'posts_per_page' => -1
            );

            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()) : ?>
                <div class="leadership">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="slide">
                            <div class="image-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="content">
                                <h2 class="heading"><?php the_title(); ?><span class="small"><?php the_field("creds"); ?></span></h2>
                                <div class="uppercase"><?php the_field("title"); ?></div>
                                <div class="phone"><a href="tel:<?php the_field('phone'); ?>"><?php the_field("phone"); ?></a></div>
                                <div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field("email"); ?></a></div>
                                <?php if (have_rows('specialty')) : ?>
                                    <div class="specialty">
                                        <?php while (have_rows('specialty')) : the_row(); ?>

                                            <div><?php the_sub_field("specialty_title"); ?></div>

                                        <?php endwhile; ?>
                                    </div>
                                <?php else :  endif; ?>

                                <a class="btn btn-secondary" href="<?php the_permalink() ?>">Read Biography</a>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>
            <?php else : ?>

                <p>Sorry, no posts exist.</p>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <?php
    $brokerage_leadership = get_field('brokerage_leadership');
    if ($brokerage_leadership) : ?>
        <section class="section section--banner-cta full-width gray-bg">
            <div class="section-wrapper">
                <?php
                $subheading = $brokerage_leadership['subheading'];
                if ($subheading) : ?>
                    <span class="subheading"><?php echo $subheading; ?></span>
                <?php endif; ?>

                <?php $heading = $brokerage_leadership['heading'];
                if ($heading) : ?>
                    <h2 class="heading border-bottom"><?php echo $heading; ?></h2>
                <?php endif; ?>

                <?php $blurb = $brokerage_leadership['blurb'];
                if ($blurb) : ?>
                    <?php echo $blurb; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="section section--blog-archive section--team-members full-width gray-bg">
        <div class="team-grid">
            <?php
            $args = array(
                'post_type' => 'team-members',
                'post_status' => 'publish',
                'orderby' => 'title',
                'order'   => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'teams',
                        'field'    => 'slug',
                        'terms'    => array('brokerage-leadership')
                    )
                ),
                'posts_per_page' => -1
            );

            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()) : ?>
                <div class="brokerage_2">

                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="slide">
                            <?php the_post_thumbnail(); ?>
                        </div>

                    <?php endwhile; ?>

                </div>
            <?php else : ?>

                <p>Sorry, no posts exist.</p>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <?php
            $args = array(
                'post_type' => 'team-members',
                'post_status' => 'publish',
                'orderby' => 'title',
                'order'   => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'teams',
                        'field'    => 'slug',
                        'terms'    => array('brokerage-leadership')
                    )
                ),
                'posts_per_page' => -1
            );

            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()) : ?>
                <div class="brokerage">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="slide">
                            <div class="image-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="content">
                                <h2 class="heading"><?php the_title(); ?><span class="small"><?php the_field("creds"); ?></span></h2>
                                <div class="uppercase"><?php the_field("title"); ?></div>
                                <div class="phone"><a href="tel:<?php the_field('phone'); ?>"><?php the_field("phone"); ?></a></div>
                                <div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field("email"); ?></a></div>
                                <?php if (have_rows('specialty')) : ?>
                                    <div class="specialty">
                                        <?php while (have_rows('specialty')) : the_row(); ?>

                                            <div><?php the_sub_field("specialty_title"); ?></div>

                                        <?php endwhile; ?>
                                    </div>
                                <?php else :  endif; ?>

                                <a class="btn btn-secondary" href="<?php the_permalink() ?>">Read Biography</a>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>
            <?php else : ?>

                <p>Sorry, no posts exist.</p>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <?php
    $advisory = get_field('advisory');
    if ($advisory) : ?>
        <section class="section section--banner-cta full-width">
            <div class="section-wrapper">
                <?php
                $subheading = $advisory['subheading'];
                if ($subheading) : ?>
                    <span class="subheading"><?php echo $subheading; ?></span>
                <?php endif; ?>

                <?php $heading = $advisory['heading'];
                if ($heading) : ?>
                    <h2 class="heading border-bottom"><?php echo $heading; ?></h2>
                <?php endif; ?>

                <?php $blurb = $advisory['blurb'];
                if ($blurb) : ?>
                    <?php echo $blurb; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="section section--blog-archive section--team-members">
        <div class="team-grid">
            <?php
            $args = array(
                'post_type' => 'team-members',
                'post_status' => 'publish',
                'orderby' => 'title',
                'order'   => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'teams',
                        'field'    => 'slug',
                        'terms'    => array('field-advisory')
                    )
                ),
                'posts_per_page' => -1
            );

            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()) : ?>
                <div class="advisory_2">

                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="slide">
                            <?php the_post_thumbnail(); ?>
                        </div>

                    <?php endwhile; ?>

                </div>
            <?php else : ?>

                <p>Sorry, no posts exist.</p>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <?php
            $args = array(
                'post_type' => 'team-members',
                'post_status' => 'publish',
                'orderby' => 'title',
                'order'   => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'teams',
                        'field'    => 'slug',
                        'terms'    => array('field-advisory')
                    )
                ),
                'posts_per_page' => -1
            );

            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()) : ?>
                <div class="advisory">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="slide">
                            <div class="image-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="content">
                                <h2 class="heading"><?php the_title(); ?><span class="small"><?php the_field("creds"); ?></span></h2>
                                <div class="uppercase"><?php the_field("title"); ?></div>
                                <div class="phone"><a href="tel:<?php the_field('phone'); ?>"><?php the_field("phone"); ?></a></div>
                                <div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field("email"); ?></a></div>
                                <?php if (have_rows('specialty')) : ?>
                                    <div class="specialty">
                                        <?php while (have_rows('specialty')) : the_row(); ?>

                                            <div><?php the_sub_field("specialty_title"); ?></div>

                                        <?php endwhile; ?>
                                    </div>
                                <?php else :  endif; ?>

                                <a class="btn btn-secondary" href="<?php the_permalink() ?>">Read Biography</a>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>
            <?php else : ?>

                <p>Sorry, no posts exist.</p>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <?php
    $chairman = get_field('chairman');
    if ($chairman) : ?>
        <section class="section section--banner-cta full-width gray-bg">
            <div class="section-wrapper">
                <?php
                $subheading = $chairman['subheading'];
                if ($subheading) : ?>
                    <span class="subheading"><?php echo $subheading; ?></span>
                <?php endif; ?>

                <?php $heading = $chairman['heading'];
                if ($heading) : ?>
                    <h2 class="heading border-bottom"><?php echo $heading; ?></h2>
                <?php endif; ?>

                <?php $blurb = $chairman['blurb'];
                if ($blurb) : ?>
                    <?php echo $blurb; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
    <section class="section section--blog-archive section--team-members full-width gray-bg">
        <div class="team-grid">
            <?php
            $args = array(
                'post_type' => 'team-members',
                'post_status' => 'publish',
                'orderby' => 'title',
                'order'   => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'teams',
                        'field'    => 'slug',
                        'terms'    => array('chairman')
                    )
                ),
                'posts_per_page' => -1
            );

            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()) : ?>
                <div class="chairman">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="slide">
                            <div class="image-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="content">
                                <h2 class="heading"><?php the_title(); ?><span class="small"><?php the_field("creds"); ?></span></h2>
                                <div class="uppercase"><?php the_field("title"); ?></div>
                                <div class="phone"><a href="tel:<?php the_field('phone'); ?>"><?php the_field("phone"); ?></a></div>
                                <div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field("email"); ?></a></div>
                                <?php if (have_rows('specialty')) : ?>
                                    <div class="specialty">
                                        <?php while (have_rows('specialty')) : the_row(); ?>

                                            <div><?php the_sub_field("specialty_title"); ?></div>

                                        <?php endwhile; ?>
                                    </div>
                                <?php else :  endif; ?>

                                <a class="btn btn-secondary" href="<?php the_permalink() ?>">Read Biography</a>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>
            <?php else : ?>

                <p>Sorry, no posts exist.</p>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>