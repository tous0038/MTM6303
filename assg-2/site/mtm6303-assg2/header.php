<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage MT6303_Assignment
 * @since MT6303 Assignment 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ) );

	?></title>

      <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    
    <link href="<?php echo get_stylesheet_directory_uri()?>./assets/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo get_stylesheet_directory_uri()?>./assets/favicon.ico" rel="icon">

    

    <title>Title page</title>  

    <link href="<?php echo get_stylesheet_directory_uri()?>./assets/css/main.a3f694c0.css" rel="stylesheet">
    </head>
    
    
    <body>

        <!-- Add your content of header -->
        <header>
        <nav class="navbar  navbar-fixed-top navbar-default">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.html" title="">
                <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
            </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="./index.php" title="" class="active">Home</a></li>
                <li><a href="./page.php" title=""> About</a></li>
                <li><a href="./template-contact.php" title=""> Contact Us </a></li>
            </ul>
            </div>
        </div>
        </nav>
        </header>