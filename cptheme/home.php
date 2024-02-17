<?php get_header(); ?>
<section class="section section--hero_banner full-width" style="background-color: #01395E">
    <div class="section-wrapper">
        <h1 class="heading align--center">Blogs</h1>
    </div>
</section>

<main class="archive-template">
    <section class="section section--blog-archive">
        <div class="post-grid">
            <?php
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('posts_per_page=6' . '&paged=' . $paged);

            while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <div class="post">
                    <a href="<?php the_permalink(); ?>">
                        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                        <?php if ($url) : ?><div class="image-wrapper" style="background-image: url( <?php echo $url ?> );"></div><?php else: ?><div class="image-wrapper" style="background-image: url(/wp-content/themes/cptheme/assets/blog-placeholder.jpg);"></div><?php endif; ?>
                    </a>
                    <div class="content">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <?php echo get_the_date(); ?>
                        <?php the_excerpt(); ?>
                        <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>

            <?php endwhile; ?>

            <?php if ($paged > 1) { ?>

                <nav id="nav-posts">
                    <div class="next"><?php previous_posts_link('« Newer Posts'); ?></div>
                    <div class="prev"><?php next_posts_link('Older Posts »'); ?></div>
                </nav>

            <?php } else { ?>

                <nav id="nav-posts">
                    <div class="prev"><?php next_posts_link('Older Posts »'); ?></div>
                </nav>

            <?php } ?>

            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <section class="section section--aside">

        <?php if (is_active_sidebar('blog-sidebar')) : ?>
            <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php else : ?>
            <!-- Time to add some widgets! -->
        <?php endif; ?>

    </section>
</main>
<?php get_footer(); ?>