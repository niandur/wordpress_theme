<aside class="right-col">
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Sidebar')) : ?>
		<div class="widget">
			<h3>Search</h3>
			<?php the_category(); ?>
		</div>
		<?php endif; ?>
</aside>
