<?php
/**
 * content template for contact
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
    <div class="text-center">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div> 
    
    <div class="col-xs-12">
        <div class="row">
            <div class="col-md-6">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                        
                        <form action="" class="reveal-content contact-form">  
                            <?php
                                the_content();

                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . __( 'Pages:', 'mt6303final' ),
                                    'after'  => '</div>',
                                ) );
                            ?>
                        </form>
                </div>
            </div>
            

            <div class="col-md-5 col-md-offset-1">
                    
                <h3>Head Office</h3>
                
                <div>
                    <address>
                        <p>
                            <?php echo mtm6303final_get_dynamic_sidebar('mtm6303-sidebar-location'); ?>
                        </p>
                    </address>
                </div>
                <div>
                    <p>contact@mybusiness.com<br>+331 45 31 64 32</p>
                </div>

                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=<?php echo urlencode(strip_tags(mtm6303final_get_dynamic_sidebar ('mtm6303-sidebar-location'))) ?>&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                    <style>
                        .mapouter {
                        position: relative;
                        text-align: right;
                        height: 300px;
                        width: 100%;
                        }
                        .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 300px;
                        width: 100%;
                        }
                    </style>
                    </div>
                </div>
            
                <div>
                    <h3>Employment</h3>
                </div>
                <div>
                    <p>To apply for a job with our team, please feel free to send us your Linkedin profile link
                        ou CV to : employment@mybusiness.com</p>
                </div>  
            </div>  
            
        </div>
    </div>
    </div>
    

</div>

