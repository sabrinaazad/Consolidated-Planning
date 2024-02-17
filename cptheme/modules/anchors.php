<section class="section section--anchors full-width" style="background-color:<?php echo the_sub_field('background_color'); ?>">
    <div class="section-wrapper">
        
        <?php $subheading = get_sub_field('subheading');
            if( $subheading ): ?>
                <div class="subheading align--center"><?php echo $subheading; ?></div>
        <?php endif; ?>
        
        <?php $heading = get_sub_field('heading');
            if( $heading ): ?>
                <h2 class="heading border-bottom align--center"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
            if( $blurb ): ?>
                <?php echo $blurb; ?>
        <?php endif; ?>
        
        <div class="anchor-wrapper">
            <a class="anchor-box heading" href="#<?php echo the_sub_field('anchor_link_1') ?>">
                <img src="<?php echo the_sub_field('icon_1') ?>" alt="icon"/>
                <?php echo the_sub_field('anchor_label_1') ?>
            </a>
            <a class="anchor-box heading" href="#<?php echo the_sub_field('anchor_link_2') ?>">
                <img src="<?php echo the_sub_field('icon_2') ?>" alt="icon"/>
                <?php echo the_sub_field('anchor_label_2') ?>
            </a>     
        </div>
            
    </div>
</section>