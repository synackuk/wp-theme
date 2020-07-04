<?php get_header(); ?>
<main>
<section class="recent_posts">
<h1 class="rowbox list_section_header">Recent posts
<a href="/blog" class="button">All posts</a>
</h1>
<ul class="list_section">
<?php 
   $the_query = new WP_Query( array(
      'posts_per_page' => 5,
   )); 	
?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
 		<a class="list_section_link" href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><li class="list_section_item"><h4><?php the_title(); ?></h4><time class="subheading"><?php the_date(); ?></time></li></a>

 			<?php
endwhile; endif; ?>
</ul>
</section>
<section class="projects">
<h1 class="list_section_header">Projects</h1>
<ul class="list_section">
<a class="list_section_link" href="https://github.com/synackuk/n1ghtshade" title="Permanent Link to n1ghtshade github page" target="_blank"><li class="list_section_item"><h4>n1ghtshade</h4><div class="subheading">A bootchain jailbreak/downgrade utility for 32 bit iOS devices.</div></li></a>

</ul>
</section>
</main>
<?php get_footer(); ?>
