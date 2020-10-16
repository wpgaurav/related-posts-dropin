<div class="related-posts">
	<div class="block-single">
		<h3 class="text-center"><?php echo $settings['title']; ?></h3>
		<div class="columns-<?php echo $settings['columns']; ?> columns-single columns-flex">
			<?php while ( $related->have_posts() ) : $related->the_post(); ?>
				<div class="col mb-mid">
					<div class="alignleft" style="margin-right:5px">
					<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink()?>"><?php md_featured_image( 'above_headline', 'md-thumbnail' ); ?></a>
					<?php endif; ?></div>
						<div><a style="font-size:16px; color:#333!important; border-bottom:0; line-height:1.2!important" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>