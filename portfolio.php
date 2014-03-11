<?php
/*
 Template Name Archives
*/
 get_header(); ?>
<div id="container" role="main">
	<?php the_post(); ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php get_search_form(); ?>
	<h2> Archives By Month:</h2>
	<ul><?php wp_get_archives('typemonthly'); ?>
		<h2>
			Archives by Subject:
		</h2>
		<ul>
			<?php wp_list_categories(); ?>
		</ul>
	</ul>
</div> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>

*/