<?php get_header(); ?>
<main>
    <article>
        <?php  while ( have_posts() ) : the_post(); ?>

           <?php get_template_part( 'content-single', get_post_format() ); ?>
 
 
        <?php endwhile; ?>
    </article>
</main>
 
<?php get_footer(); ?>