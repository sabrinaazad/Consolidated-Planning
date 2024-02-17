<section class="section section--banner-cta full-width" style="background-color:<?php echo the_sub_field('background_color'); ?>">
    <div class="section-wrapper">
        
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

        <?php $link = get_sub_field('link');
            if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
               
            <a class="btn btn-primary" href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>     
            
        <?php endif; ?>

    </div>
</section>