<?php
 /* Template Name: Advisor Template */
get_header();

?>

<section class="section section--hero_banner full-width" style="background-image: url(<?php the_field("background_image"); ?>);">
<div class="blue-overlay"></div>
    <div class="section-wrapper">
        <h1 class="heading align--center"><?php the_field("hero_heading"); ?></h1>
    </div>
</section>
<section class="section section--advisor-info full-width">
    <div class="section-wrapper">
   
            <?php $texteditor = get_field('text_editor');
            if ($texteditor) : ?>
                <?php echo $texteditor; ?>
            <?php endif; ?>
           
        <?php
            $args = array(
                'post_type' => 'team-members',
                'teams' => 'advisor',
                'orderby'   => 'title',
                'order' => 'ASC',
                'posts_per_page'   => -1
            );
            $query = new WP_Query($args);
            ?>
            <div class="advisors">
            <?php
            // Check if there are any posts to display
            if ($query->have_posts()) : ?>

                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="advisor">
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                        <div class="featured-image" style="background-image: url(<?php echo $url ?>);"></div>
                        <div class="blurb">
                            <h4>
                                <?php the_title(); ?>
                                <span class="small"><?php the_field("creds"); ?></span>
                            </h4>

                            <div class="content">
                                <div class="position"><?php the_field("title"); ?></div>
                                <div class="phone"><a href="tel:<?php the_field("phone"); ?>"><?php the_field("phone"); ?></a></div>
                                <div class="email"><a href="mailto:<?php the_field("email"); ?>"><?php the_field("email"); ?></a></div>
                                <a href="<?php echo the_permalink()?>" class="btn btn-primary">Read Bio</a>
                            </div>
                        </div>  
                    </div>
                <?php endwhile;

            else : ?>

                <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
            </div>
    </div>
</section>
<?php

get_footer();
