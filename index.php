<?php get_header(); ?>
<main>
<section class="all_posts">
<h1 class="list_section_header">Posts</h1>
<ul class="list_section">
<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>	
 		<a class="list_section_link" href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><li class="list_section_item"><h4><?php the_title(); ?></h4><time class="subheading"><?php the_date(); ?></time></li></a>

 			<?php
endwhile; endif; ?>

</main>
<?php get_footer(); ?>