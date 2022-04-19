<?php
/**
 * content template for home
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


<div class="white-text-container background-image-container" style="background-image: url('<?php echo $featured_img_url; ?>')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">   
           
            <div class="col-md-6">
                <h1><?php echo get_the_title();?></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
                 <a href="./about.html" title="" class="btn btn-lg btn-primary">About Us</a>
            </div><!------- CHANGE >HTML for php????? ------------------------------->

        </div>
    </div>
</div>


<div class="section-container background-color-container white-text-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                     </div>   
                        <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'mtm6303final' ),
                                'after'  => '</div>',
                            ) );
                        ?>
               </div>
            </div>
        </div>
    </div>
</div>