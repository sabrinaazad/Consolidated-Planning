<section class="section section--four-panels full-width" style="background-color:<?php echo the_sub_field('background_color'); ?>">
    <div class="section-wrapper">

        <div class="content">
        <?php $subheading = get_sub_field('subheading');
        if( $subheading ): ?>
            <span class="subheading"><?php echo $subheading; ?></span>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if( $heading ): ?>
            <h2 class="heading border-bottom"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
        if( $blurb ): ?>
            <?php echo $blurb; ?>
        <?php endif; ?>
        </div>
        <div class="panels four_panels">
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                    <div class="panel">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <h4 class="border-bottom"><?php the_sub_field('title'); ?></h4>
                        <p><?php the_sub_field('blurb'); ?></p>
                    </div>
            <?php endwhile;
            else :  endif; ?>
        </div>
    </div>
</section>