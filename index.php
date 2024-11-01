<?php
/*
Plugin Name:  SocialMedia Gallery
Description:  Simple Plugin to fetch Facebook Photo and Video
Version:      1.0.2	
Author:       Sushil Shrestha 
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

function smGallery_register_script() {
  
    wp_register_script( 'imgLiquid', plugins_url('/assets/js/imgLiquid.js', __FILE__), array('jquery') );

    wp_register_script( 'simple_lightbox_js', plugins_url('/assets/js/simple-lightbox.js', __FILE__), array('jquery') );
	
    wp_register_style( 'simple_lightbox_css', plugins_url('/assets/css/simplelightbox.css', __FILE__), false, '1.0.0', 'all');

    wp_register_style( 'simple_lightbox_css', plugins_url('/assets/css/layout.css', __FILE__), false, '1.0.0', 'all');

    wp_register_style( 'smGallery_style', plugins_url('/assets/css/smGallery_style.css', __FILE__), false, '1.0.0', 'all');

    wp_register_style( 'fa_icons', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_register_script( 'fitvids', plugins_url('/assets/js/jquery.fitvids.js', __FILE__), array('jquery') );

    wp_register_script( 'custom_js', plugins_url('/assets/js/custom-js.js', __FILE__), array('jquery') );
}

function smGallery_enqueue_style(){
    wp_enqueue_script('imgLiquid');
   	wp_enqueue_script('simple_lightbox_js');
    wp_enqueue_script('fitvids');
    wp_enqueue_script('custom_js');
   	wp_enqueue_style( 'simple_lightbox_css' );
    wp_enqueue_style('smGallery_style');
    wp_enqueue_style('fa_icons');
 
}

function smGallery_core_function($atts){
   	extract(shortcode_atts(array(
      'fbappid' => 'Undefined App ID',
      'fbappsecret' => 'Undefined App Secret',
      'album_id' => 'undefined Album ID',
      'total_fb_image' => '12'
   	), $atts));

   	include( plugin_dir_path( __FILE__ ) . '/facebook-gallery.php'); 	
}


function smGallery_fb_video($atts){
    extract(shortcode_atts(array(
      'fbappid' => 'Undefined App ID',
      'fbappsecret' => 'Undefined App Secret',
      'page_name' => 'Undefined',
      'total_fb_video' => '4'
    ), $atts));

    include( plugin_dir_path( __FILE__ ) . '/facebook-video.php');  
}

function smGallery_register_shortcodes(){
   add_shortcode('fb-gallery', 'smGallery_core_function');
   add_shortcode('fb-video', 'smGallery_fb_video');
}

/* Action Mania ;-) */
add_action('init', 'smGallery_register_script');
add_action('init', 'smGallery_register_shortcodes');
add_action('wp_enqueue_scripts', 'smGallery_enqueue_style');

