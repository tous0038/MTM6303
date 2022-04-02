<?php
/**
 * Template part for displaying page content in page.php
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage MT6303_Assignment
 * @since MT6303 Assignment 1.0
 */
?>
<br>
<div class="">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
               <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()?>./assets/images/page.jpg">
            </div>
        </div>
    </div>
</div>

<div class="section-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                     </div>   
                        <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'mt6303assignment' ),
                                'after'  => '</div>',
                            ) );
                        ?>
               </div>
            </div>
        </div>
    </div>
</div>




