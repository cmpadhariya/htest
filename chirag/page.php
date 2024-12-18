<?php
/**
 * The main template file.
 */

?>
<?php get_header(); ?>
<?php the_content(); ?>
<?php get_sidebar(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    <?php endwhile; ?>
<?php else : ?>
    <p>No content found.</p>
<?php endif; ?>

<?php
wp_footer();
