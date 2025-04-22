<?php
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
 echo 'Hello! I wish you productive work ;)';
endwhile; endif;

get_footer();