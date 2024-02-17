<section class="section section--featured-blogs full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>">
    <div class="white-overlay"></div>
    <div class="section-wrapper">
        <div class="content">

            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <span class="subheading"><?php echo $subheading; ?></span>
            <?php endif;

            $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading border-bottom"><?php echo $heading; ?></h2>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>
            
        </div>
        <div class="featured_blogs">
            <?php
            $the_query = new WP_Query(array(
                'posts_per_page' => 4,
                'category_name' => 'personal-finance',
            ));
            ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="blog">
                        <?php if( has_post_thumbnail() ) { ?>
                            <div style="background-image: url(<?php the_post_thumbnail_url() ?>)" class="image-wrapper"></div>
                        <?php } else { ?>
                            <div style="background-image: url(/wp-content/themes/cptheme/assets/CP_Logo_Vertical.svg)" class="image-wrapper"></div>
                        <?php } ?>
                        <h4 class="uppercase"><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                        <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php __('No Blogs'); ?></p>
            <?php endif; ?>
        </div>

        <?php $link = get_sub_field('link');
        if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a class="btn btn-secondary view-all" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
    </div>
</section>