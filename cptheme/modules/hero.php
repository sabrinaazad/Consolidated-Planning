<section class="section section--hero full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
    <div class="blue-overlay"></div>
    <div class="section-wrapper">
        
        <?php $hero_subheading = get_sub_field('hero_subheading');
        if ($hero_subheading) : ?>
            <span class="subheading"><?php echo $hero_subheading; ?></span>
        <?php endif; ?>

        <?php $hero_heading = get_sub_field('hero_heading');
        if ($hero_heading) : ?>
            <h1 class="heading"><?php echo $hero_heading; ?></h1>
        <?php endif; ?>

        <div class="button-wrapper">
            <?php $hero_button_1 = get_sub_field('hero_button_1');
            if ($hero_button_1) :
                $link_url_1 = $hero_button_1['url'];
                $link_title_1 = $hero_button_1['title'];
                $link_target_1 = $hero_button_1['target'] ? $hero_button_1['target'] : '_self';
            ?>
                <a class="btn btn-primary" href="<?php echo $link_url_1 ?>" target="<?php echo $link_target_1 ?>"><?php echo $link_title_1 ?></a>
            <?php endif; ?>
            
            <?php $hero_button_2 = get_sub_field('hero_button_2');
            if ($hero_button_2) :
                $link_url_2 = $hero_button_2['url'];
                $link_title_2 = $hero_button_2['title'];
                $link_target_2 = $hero_button_2['target'] ? $hero_button_2['target'] : '_self';
            ?>
                <a class="btn btn-secondary" href="<?php echo $link_url_2 ?>" target="<?php echo $link_target_2 ?>"><?php echo $link_title_2 ?></a>
            <?php endif; ?>
        </div>
        
    </div>
</section>