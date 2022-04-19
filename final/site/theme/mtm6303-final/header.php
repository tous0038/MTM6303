<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and open <body> everything up till </header>.
 *
 * @package MTM6303 Final
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 */
?><!DOCTYPE html>
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
<meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

<title>MTM6303 Final<?php
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
  
  <link href="<?php echo get_stylesheet_directory_uri()?>/assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?php echo get_stylesheet_directory_uri()?>/assets/favicon.ico" rel="icon">

<!-- <link href="<?php //echo get_stylesheet_directory_uri()?>/assets/css/main.a3f694c0.css" rel="stylesheet"> -->
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
        <a class="navbar-brand" href="./index.html" title=""><!------- CHANGE >HTML for php ------------------------------->
          <img src="<?php echo get_stylesheet_directory_uri()?>./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>  <!------- This image is not available in the assignment stock ------------------------------->
      </div>



            
      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
      <ul class="nav navbar-nav navbar-right">
          <!-- <li><a href="./index.html" title="" class="active">Home</a></li>
          <li><a href="./page.html" title=""> About</a></li>
          <li><a href="./contact.html" title=""> Contact Us </a></li> -->
          
        <?php //Add navigation foreach loop
        $menu_items = mtm6303_getnav("top");
        foreach ($menu_items as $menu_item) {
          ?>
           <!-- add html nav list items-->
           <li><a class="<?php echo ($menu_item["active"]) ? "active" : "" ?>" href="<?php echo $menu_item["url"]?>" title=""><?php echo $menu_item["title"]?></a></li>
        <?php
        }
        ?>
      
        </ul>
      </div>
    </div>
    </nav>
</header>