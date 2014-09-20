<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
    <link href='<?php echo get_stylesheet_uri(); ?>' rel='stylesheet' type='text/css'>
    <meta name=viewport content='width=device-width, initial-scale=1'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="alternate" href="<?php bloginfo('rss2_url'); ?>" type="application/rss+xml" title="RSS">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <h1><a href="<?php echo esc_url(home_url('/') ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
      <p><?php bloginfo('description'); ?></p>
    </header>
    <div class="content wrap">
    <section class="posts">
