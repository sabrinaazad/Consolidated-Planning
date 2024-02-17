<section class="section section--three-panels">
    <div class="section-wrapper">
        <div class="panels">
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