<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package MTM6303 Final
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 */
?>
<!--Page footer-->
        <footer>
            <div class="section-container footer-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>About us</h4>
                            <p>
                                <?php echo mtm6303final_get_dynamic_sidebar('MTM6303 Sidebar'); ?>
                            </p>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor</p> -->
                        </div>

                        <?php //Social media menu
                            $social_menu_items = mtm6303_getnav("social");
                            print_r($menu_items);
                        ?>

                        <div class="col-md-4">
                            <h4>Do you like ? Share this !</h4>
                            <p>
                            <?php foreach ($social_menu_items as $social_menu_item) { ?>
                            <a href="<?php echo $social_menu_item['url']?>" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa <?php echo $social_menu_item["classes"]?>" aria-hidden="true"></i>
                            </a>
                            <?php } ?>
                            </p>

                            <p><small>© Untitled 2022| <a href="http://www.unsplash.com/" class="link-like-text" title="Beautiful Free Images">Unsplash</a></small></p>    
                        
                        </div>

                        <div class="col-md-4">
                            <h4>Subscribe to newsletter</h4>
                            
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control footer-input-text">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-newsletter ">OK</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
    
