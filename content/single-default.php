<article class="post-single-item post-<?=get_the_ID();?>">

	<h1 class="page-title"><?php the_title(); ?></h1>

	<p>By <?=get_the_author();?> | <?=get_the_date('F j, Y');?></p>

	<?php
		if (get_the_post_thumbnail(get_the_ID()))
		{
			echo get_the_post_thumbnail(get_the_ID(), 'single-feature');
		}
	?>

	<?php the_content(); ?>

</article>