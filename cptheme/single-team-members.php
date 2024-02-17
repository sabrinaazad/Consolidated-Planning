<?php get_header(); ?>
<main class="single-template provider">

        <div class="single two-col">
            <?php while (have_posts()) : the_post(); ?>
            <div class="section-wrapper full-width gray-bg">
                <div class="col">
                    <div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
                    <h1 class="heading"><?php the_title(); ?><span class="small"><?php the_field("creds"); ?></span></h1>
                    <div class="content">
                        <div class="position"><?php the_field("title"); ?></div>
                        <div class="phone"><a href="tel:<?php the_field("phone"); ?>"><?php the_field("phone"); ?></a></div>
                        <div class="email"><a href="mailto:<?php the_field("email"); ?>"><?php the_field("email"); ?></a></div>
                        <div class="address">
                            Office Location:
                            <br/>
                            <?php the_field("address_line_1"); ?>
                            <br>
                            <?php the_field("suite"); ?>
                            <br>
                            <?php the_field("address_line_2"); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="col">
                <input class="back-btn desktop-only" type= 'button' onclick='javascript:history.back();return false;' value='Back to Directory'>
                    <?php  if( have_rows('specialty') ): ?>
                        <div class="title">SPECIALTIES:</div>
                        <div class="specialty">
                            <?php while( have_rows('specialty') ) : the_row(); ?> 
                        
                                <div><?php the_sub_field("specialty_title"); ?></div>
                        
                            <?php  endwhile; ?>
                        </div> 
                        <?php else :  endif; ?>
                    
                    <?php the_field("bio"); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

</main>
<?php get_footer(); ?>