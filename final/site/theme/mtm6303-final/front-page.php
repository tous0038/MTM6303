<?php
/**
 * front page template for the theme
 *
 *
 * @package MTM6303 Final
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 */

get_header() ;?>

	
	<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/page/content', 'home' );

		endwhile; // End of the loop.
	?>



<?php get_footer() ; ?> 