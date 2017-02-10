<article class="post-archive-item post-<?=get_the_ID();?>">
	<?php
		if (get_the_post_thumbnail(get_the_ID()))
		{
			echo get_the_post_thumbnail(get_the_ID(), 'archive-thumbnail');
		}
	?>
	<a href="<?php the_permalink();?>">
		<h4 class="margin-bottom-0"><?php the_title(); ?></h4>
	</a>
	<p class="margin-bottom-0">By <?=get_the_author();?> | <?=get_the_date('F j, Y');?></p>
	<?php the_excerpt(); ?>
</article>