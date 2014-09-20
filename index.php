<?php get_header(); ?>
<?php
  if(have_posts()) {
    while(have_posts()) { 
      the_post();
      get_template_part('content', get_post_format());
      /* Scope to add more post formats in future. -- AWDB */
    }
  }	else {
    get_template_part('content', 'none');
  }
?>
<?php get_footer();
