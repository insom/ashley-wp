<article id="post-<?php the_ID(); ?>" class="post">
<?php
  if(is_single()) {
    the_title('<h2>', '</h2>');
  } else {
    the_title('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h2>', '</h2></a>');
  }
?>
<?php
  the_content();
?>
</article>
