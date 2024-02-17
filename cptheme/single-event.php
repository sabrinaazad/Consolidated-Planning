<?php get_header(); ?>
<section class="section section--hero_banner full-width" style="background-color: #01395E">
    <div class="section-wrapper">
        <h1 class="heading align--center"><?php the_title(); ?></h1>
    </div>
 </section>

<main class="single-template event">
    <section class="section section--single">
        <a class="back-btn" href="/resources/events/">« Back to All Events</a>
        <div class="single">

            <?php while (have_posts()) : the_post(); ?>

                <div class="content">
                    <div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
                    <div class="blog-post">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        
                    </div>
                </div>

            <?php endwhile; ?>

        </div>
    </section>
</main>
<?php get_footer(); ?>