<section class="section section--team-members">
    <div class="section-wrapper">
        <div class="content">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <span class="subheading uppercase"><?php echo $subheading; ?></span>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading border-bottom"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>
        </div>
        <div class="team_slider_2">
        <?php $teammembers = get_sub_field('team_members');
            if ($teammembers) : ?>
                <?php foreach ($teammembers as $post) :
                    setup_postdata($post); ?>
                    <div class="slide">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <div class="team_slider">
        <?php $teammembers = get_sub_field('team_members');
            if ($teammembers) : ?>
                <?php foreach ($teammembers as $post) :
                    setup_postdata($post); ?>
                    <div class="slide">
                        <div class="image-wrapper">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="content">
                            <h2 class="heading"><?php the_title(); ?></h2>
                            <div class="uppercase"><?php the_field("title"); ?></div>
                            <div class="phone"><a href="tel:<?php the_field('phone'); ?>"><?php the_field("phone"); ?></a></div>
                            <div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field("email"); ?></a></div>
                            <?php  if( have_rows('specialty') ): ?>
                                <div class="specialty">
                                    <?php while( have_rows('specialty') ) : the_row(); ?> 
                                
                                        <div><?php the_sub_field("specialty_title"); ?></div>
                                
                                    <?php  endwhile; ?>
                                </div> 
                            <?php else :  endif; ?>
                           
                            <a class="btn btn-secondary" href="<?php the_permalink() ?>">Read Biography</a>
                        </div>
                    </div>
                    <?php endforeach;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

    </div>
</section>