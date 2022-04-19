<?php
/**
 * Template part for displaying posts in index.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MTM6303 Final
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 */

?>

<div class="col-md-6">   
    <div class="text-center">
      <a href="<?php echo get_permalink(); ?>">
        <h1><?php echo get_the_title(); ?></h1>
        <img class="img-responsive" <?php the_post_thumbnail();?> 
        <br>
        <!-- to get the post feature image use the_post_thumbnail-->
        </a> 
    </div> 

	 <p class="section-container-spacer">
     <?php
     the_excerpt();

     wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'mtm6303final' ),
        'after'  => '</div>',
     ) );
     ?>
	</p>
</div>

