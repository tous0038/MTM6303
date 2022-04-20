<?php

/**
 * @package MTM6303FinalPlugin
 */
/*
Plugin Name: MTM6303 Final Plugin
Plugin URI: http://algonquincollege.com
Description: This is the plug in created for the MTM6303 final assignment.
Version: 1.0.0
Author: Andrea 
Author URI: http://algonquincollege.com
License: GPLv2 or later
Text Domain: mtm36303finalplugin
*/

/**
 *  Register Custom Slider Image
 * */ 
function mtm6303slider_post_type() {
  //echo mtm36303finalplugin_build_slider();
    $labels = array(
      'name'                  => _x( 'Slider', 'Post Type', 'Slider General Name', 'mtm6303slider' ),
      'singular_name'         => _x( 'Slider', 'Post Type', 'Slider Singular Name', 'mtm6303slider' ),
      'menu_name'             => __( 'Sliders', 'mtm6303slider' ),
      'name_admin_bar'        => __( 'Slider', 'mtm6303slider' ),
      'archives'              => __( 'Item Archives', 'mtm6303slider' ),
      'attributes'            => __( 'Item Attributes', 'mtm6303slider' ),
      'parent_item_colon'     => __( 'Parent Item:', 'mtm6303slider' ),
      'all_items'             => __( 'All Items', 'mtm6303slider' ),
      'add_new_item'          => __( 'Add New Item', 'mtm6303slider' ),
      'add_new'               => __( 'Add New', 'mtm6303slider' ),
      'new_item'              => __( 'New Item', 'mtm6303slider' ),
      'edit_item'             => __( 'Edit Item', 'mtm6303slider' ),
      'update_item'           => __( 'Update Item', 'mtm6303slider' ),
      'view_item'             => __( 'View Item', 'mtm6303slider' ),
      'view_items'            => __( 'View Items', 'mtm6303slider' ),
      'search_items'          => __( 'Search Item', 'mtm6303slider' ),
      'not_found'             => __( 'Not found', 'mtm6303slider' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'mtm6303slider' ),
      'featured_image'        => __( 'Featured Image', 'mtm6303slider' ),
      'set_featured_image'    => __( 'Set featured image', 'mtm6303slider' ),
      'remove_featured_image' => __( 'Remove featured image', 'mtm6303slider' ),
      'use_featured_image'    => __( 'Use as featured image', 'mtm6303slider'),
      'insert_into_item'      => __( 'Insert into item', 'mtm6303slider' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'mtm6303slider' ),
      'items_list'            => __( 'Items list', 'mtm6303slider' ),
      'items_list_navigation' => __( 'Items list navigation', 'mtm6303slider' ),
      'filter_items_list'     => __( 'Filter items list', 'mtm6303slider' ),
    );
    $args = array(
      'label'                 => __( 'Slider', 'mtm6303slider' ),
      'description'           => __( 'Post Type Description', 'mtm6303slider' ),
      'labels'                => $labels,
      'supports'              => array('title', 'editor', 'thumbnail' ),
      'taxonomies'            => array( 'category', 'post_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
      );
  
    register_post_type( 'sliders', $args);
  
  }
  add_action('init', 'mtm6303slider_post_type', 0);
  
  function get_slider_scripts(){
      $file_name = plugins_url('assets/slider.js', __FILE__);
      echo $file_name;
      echo file_get_contents($file_name);
  }
  
  function get_slider_styles(){
      $file_name = plugins_url('assets/slider.css', __FILE__);
      echo $file_name;
      echo file_get_contents($file_name);
  }
  
  /**
   * Build plugin slider
   */
  
  function mtm36303finalplugin_build_slider(){
      $args =array(
          'post_type' => 'sliders',
          'post_per_page' => -1
      );
      $count = 0;
      $loop = new WP_Query($args);
  ?>
  <!-- Slideshow container -->
  <div class="slideshow-container">
  
  <?php
      while ($loop->have_posts()) {
         $loop->the_post();
         $count++;
         $the_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type);
    ?>
      
      <div class="mySlides">
          <!-- Get the content form the Slider post wp dashboard -->
          <!-- count 1/3 2/3 3/3 ... -->
          <?php 
          for($i = 1; $i <= $count; $i++){
              echo '<div class="numbertext">'.$i.' / 3</div>';
          }
          ?>
          <?php echo '<img title="'.get_the_title().'" src="' . $the_image_url[0] . '"  alt="' .get_the_title().'">' ?>
          <!-- <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img-1.jpg" style="width:100%"> -->
          <div class="text">
          <p><b><?php echo get_the_title(); ?></b></p>
          <p><?php echo get_the_content(); ?></p>
          </div>
  
      </div>
  <?php 
  } 
  ?>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <?php 
    for($i = 1; $i <= $count; $i++){
        echo '<span class="dot" onclick="currentSlide('.$i.')"></span>';
    }
    ?>
  
  </div>
  <!-- Styles -->
  <style>
      <?php get_slider_styles() ?>
  </style>
  <!-- Scripts -->
  <script>
      <?php get_slider_scripts() ?>
  </script>
  
      <?php 
  } 
  /**
   * Shortcode function for sliders with images
   */
  function mtm36303finalplugin_func($atts) {
    return mtm36303finalplugin_build_slider();
  }
  add_shortcode( 'mtm6303finalplugin', 'mtm36303finalplugin_func' );
  ?>
  