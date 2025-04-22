<?php
get_header();
    echo '<br><br>Hello! I wish you productive work ;)';
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       <?php the_content();

        wp_link_pages();

       ?>
       </div>
    <?php endwhile; endif;

get_footer();