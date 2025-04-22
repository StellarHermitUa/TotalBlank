<?php get_header(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       <?php the_content();

        wp_link_pages();
        wp_list_comments();
        comment_form(); 
       ?>
       </div>
<?php get_footer(); ?>