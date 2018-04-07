<div class="linetext"><div class="text">Läs också</div></div>

<div class="related-posts-main">
	<?php

	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
    // the query
	$search = 'cat='.$category_id.'&posts_per_page=10';
	$the_query = new WP_Query($search);
	
	?>
	
	<?php if ($the_query->have_posts()) : ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<div class="related-posts-here">
				<div class="related-post-image">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="related-post-content">
					<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
					<?php the_excerpt(); ?>
				</div>
				<?php //the_content(); ?>
				<?php //the_category(); ?>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php __('No News'); ?></p>
	<?php endif; ?>
</div>
<div style="clear: both;"></div>