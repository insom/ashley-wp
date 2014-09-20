<?php

function aaron_setup() {
  //add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',) );
}
add_action( 'after_setup_theme', 'aaron_setup' );

function aaron_wp_title( $title, $sep ) {
  if(is_feed()) {
    return $title;
  }
  global $page, $paged;
  $title .= get_bloginfo('name', 'display');
  $site_description = get_bloginfo('description', 'display');
  if($site_description && (is_home() || is_front_page())) {
    $title .= " $sep $site_description";
  }
  if(($paged >= 2 || $page >= 2) && ! is_404()) {
    $title .= " $sep " . sprintf(__( 'Page %s', '_s'), max($paged, $page));
  }
  return $title;
}
add_filter( 'wp_title', 'aaron_wp_title', 10, 2 );

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
