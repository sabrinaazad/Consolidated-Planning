<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package missionhealthcare
 */

get_header(); ?>
<main class="archive-template">
    <section class="section section--blog-archive">
        <?php
		$s=get_search_query();
		$args = array(
					's' =>$s
					);
			// The Query
		$the_query = new WP_Query( $args );
		
		if ( $the_query->have_posts() ) { ?>
		
				<?php _e("<h2 class='heading'>Search Results for: ".get_query_var('s')."</h2>");
				while ( $the_query->have_posts() ) {

				$the_query->the_post();
		?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php
				}
			}else{
		?>

            <h2 class='heading'>Nothing Found</h2>
            <div class="alert alert-info">
                <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
            </div>
            <?php } ?>

        </section>
    </main>
</section>
<?php get_footer();