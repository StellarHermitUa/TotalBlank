<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php endwhile; ?>

	<?php else : ?>

	<?php endif; ?>

<?php get_footer(); ?>