<?php
 /* Template Name: Contact Template */
get_header();

?>

<section class="section section--hero_banner full-width" style="background-image: url(<?php the_field("background_image"); ?>);">
<div class="blue-overlay"></div>
    <div class="section-wrapper">
        <h1 class="heading align--center"><?php the_field("hero_heading"); ?></h1>
    </div>
</section>
<main class="content-wrapper">
    <section class="section section--contact-info full-width">
        <div class="section-wrapper">
        <h3 class="heading align--center"><?php the_field("heading"); ?></h3>
            <div class="panels">
                <div class="panel">
                    <img src="/wp-content/themes/cptheme/assets/icon-location.png" alt="location icon" />
                    <div class="content">
                        <?php the_field("address"); ?>
                        <div><a href="<?php the_field('button_link'); ?>" class="btn btn-secondary" target="_blank">Get Directions</a></div>
                    </div>
                </div>

                <div class="panel">
                    <img src="/wp-content/themes/cptheme/assets/icon-phone.png" alt="phone icon" />
                    <div class="content">
                        PHONE: <a href="tel:<?php the_field("phone"); ?>"><?php the_field("phone"); ?></a><br/><br/>
                        FAX: <a href="tel:<?php the_field("fax"); ?>"><?php the_field("fax"); ?></a>
                    </div>
                </div>
                
                <div class="panel">
                    <img src="/wp-content/themes/cptheme/assets/icon-hours.png" alt="hours icon" />
                    <div class="content">
                        HOURS OF OPERATION:<br/><?php the_field("hours"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--contact-form">
        <div class="section-wrapper">
            <div><?php the_field("form_subheading"); ?></div>
            <h2 class="heading"><?php the_field("form_heading"); ?></h2>
            <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="49"]'); ?>
        </div>
    </section>
</main>
<?php

get_footer();
