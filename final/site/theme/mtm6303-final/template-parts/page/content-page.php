<?php
/**
 * content template for page 
 * 
 *
 *
 *
 * @package MTM6303 Final
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 */
?>
<?php 

    $featured_img_url = get_the_post_thumbnail_url (); 
        if (empty($featured_img_url)){
            $featured_img_url = get_stylesheet_directory_uri () . "/assets/images/img-home.jpg"; 
        }
?>


<div class="">
    <div class="container">
        <div class="row">

            <!-- <div class="col-xs-12"  data-parallax="scroll" data-image-src=" <?php //$featured_img_url; ?>">
            <?php //echo $featured_img_url; ?>
            </div>  -->

            
            <div class="col-xs-12 background-image-container" style="background-image: url('<?php echo $featured_img_url; ?>)">
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
                                'before' => '<div class="page-links">' . __( 'Pages:', 'mt6303final' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                        
                        <!-- <?php //do_shortcode("[mtm6303finalplugin]");?> -->
               </div>
               
            </div>
        </div>
    </div>
</div>
