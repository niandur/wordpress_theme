<?php get_header();?>
<?php get_sidebar();?>
<!--<?php get_template_part('loop','index');?>-->
<div id="main" class="group">
	<div id="blog" class="left-col">
		<?php if (have_posts()):while(have_posts()):the_post();?>
		

			
		<div id="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
				<div class="byline"> escrit per <?php the_author_posts_link(); ?> el <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a></div>
				<?php the_content('Llegeix més...'); ?>
				<?php endwhile; else: ?>
		<p><?php _e('Ho hi ha posts. Ho lamento!'); ?></p>
					<?php endif; ?>
					<div class="navi">
						<div class="right">
							<?php previous_posts_link('Anterior'); ?> /<?php next_posts_link('Següent'); ?>
						</div>
					</div>
		</div>
	</div>
	
</div>

<?php get_footer();?>      		