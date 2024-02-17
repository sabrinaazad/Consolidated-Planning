<section class="section section--side-by-side full-width no-padded-sides no-padded-top no-padded-bottom" style="background-color:<?php echo the_sub_field('background_color'); ?> ;">
    <div class="two-col">
        <div class="col">
            <div class="section-wrapper">
                <?php $subheading = get_sub_field('subheading');
                if( $subheading ): ?>
                    <span class="subheading"><?php echo $subheading; ?></span>
                <?php endif; ?>

                <?php $heading = get_sub_field('heading');
                if( $heading ): ?>
                    <h2 class="heading border-bottom left-aligned"><?php echo $heading; ?></h2>
                <?php endif; ?>

                <?php $blurb = get_sub_field('blurb');
                if( $blurb ): ?>
                    <?php echo $blurb; ?>
                <?php endif; ?>
                
                <?php $link = get_sub_field('link');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>   
        </div>
        <div class="col" style="background-image: url(<?php the_sub_field('background_image'); ?>)">
            <div class="blue-overlay"></div> 
        </div>
    </div>
</section>