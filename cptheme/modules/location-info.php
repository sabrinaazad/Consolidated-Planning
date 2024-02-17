<section class="section section--location-info full-width gray-bg">
	<div class="section-wrapper">
        <div class="panels">
            <div class="panel">
                <?php if(get_sub_field("icon")) : ?> 
                    <div class="icon">
                        <img src="<?php the_sub_field("icon") ?>" alt="icon" />
                    </div>
                <?php endif; ?>
                <div>
                    <?php if(get_sub_field("phone")) : ?><h4>PHONE:</h4> <?php the_sub_field("phone"); endif; ?>
                    <?php if(get_sub_field("fax")) : ?><h4>FAX:</h4> <?php the_sub_field("fax"); endif; ?>
                    <?php if(get_sub_field("email")) : ?><h4>EMAIL:</h4> <?php the_sub_field("email"); endif; ?>
                </div>
                <a href="tel:<?php the_sub_field("phone"); ?>" class="btn btn-primary">CALL US</a>
            </div>
            <div class="panel">
                <div class="icon"><img src="/wp-content/themes/cptheme/assets/icon-location-blue.png" alt="location icon" /></div>
                <div><h4>ADDRESS:</h4> <?php the_sub_field("add1"); ?><br/><?php the_sub_field("suite"); ?><br/><?php the_sub_field("add2"); ?></div>
                <a href="<?php the_sub_field("directions"); ?>" class="btn btn-primary">GET DIRECTIONS</a>
            </div>
            <div class="panel">
                <div class="icon"><img src="/wp-content/themes/cptheme/assets/icon-hours-blue.png" alt="hours icon" /></div>
                <div><?php the_sub_field("hours"); ?></div>
                <a href="tel:<?php the_sub_field("phone"); ?>" class="btn btn-primary">CONTACT US</a>
            </div>
        </div>
    </div>
</section>