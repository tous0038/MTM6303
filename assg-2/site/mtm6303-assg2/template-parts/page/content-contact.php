<?php
/**
 * Template part for displaying page content in contact.php
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
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()?>./assets/images/contact.jpg">
            </div>
        </div>
    </div>
</div>

<div class="section-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    
            </div>
        </div>
    </div>
</div>




<div class="section-container no-padding">
    <div class="container">
        <div class="row">
           
            <div class="col-xs-12">

                <div class="row">
                    <div class="col-md-6">
                    
                         <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                      
                        <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'mt6303assignment' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    </div>


                    <div class="col-md-5 col-md-offset-1">
                            
                        <h3>Head Office</h3>
                        
                        <div>
                            <p>1385 Woodroffe Ave<br/>Nepean, ON K2G</p>
                        </div>
                        <div>
                          <p>contact@mybusiness.com<br>+331 45 31 64 32</p>
                        </div>

                        <div class="mapouter">
                          <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                              src="https://maps.google.com/maps?q=Algonquin%20college%20Campus&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
</div>