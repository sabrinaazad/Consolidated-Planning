<section class="section section--featured-services full-width no-padded-sides no-padded-bottom">
    
    <?php $featuredimage = get_sub_field('featured_image'); 
    if ($featuredimage) : ?>    
    <div class="featured-image-wrapper">
       <img src="<?php echo esc_url($featuredimage['url']); ?>" alt="<?php echo esc_attr($featuredimage['alt']); ?>" class="image" />  
    </div>
    <?php endif; ?>

    <div class="background-image" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
    <div class="blue-overlay"></div>
        <div class="section-wrapper">
            <div class="content">

                <?php $subheading = get_sub_field('subheading');
                if ($subheading) : ?>
                    <span class="subheading"><?php echo $subheading; ?></span>
                <?php endif;

                $heading = get_sub_field('heading');
                if ($heading) : ?>
                    <h2 class="heading"><?php echo $heading; ?></h2>
                <?php endif; 
                
                $blurb = get_sub_field('blurb');
                if ($blurb) : ?>
                    <?php echo $blurb; ?>
                <?php endif; ?>
                
            </div>
            <div class="featured_slider">
                <?php $services = get_sub_field('services');
                if ($services) : ?>
                    <?php foreach ($services as $post) :
                        setup_postdata($post); ?>
                        <a class="slide" href="<?php the_permalink(); ?>">
                            <div class="icon"><img src="<?php the_post_thumbnail_url() ?>" /></div>
                            <h4 class="uppercase"><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                            <button class="btn btn-primary">Learn More</button>
                        </a>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
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
    </div>
</section>