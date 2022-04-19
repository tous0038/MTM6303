<?php
/**
 * Template Name: Contact Page
 * Contact us template for the theme
 * 
 * @package MTM6303 Final
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 */
get_header() ;
?>



<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'contact' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->


<?php get_footer() ; ?> 