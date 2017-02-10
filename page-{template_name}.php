<?php
/**
*
* Template Name: {template_name}
*
*/
?>
	<?php get_header(); ?>
    	    	
	<section id="main-content" class="page">
		<div class="container">
			<div class="content page page-{template_name} post-<?=get_the_ID();?>">

				<?php while (have_posts()) : the_post() ;?>
	            
					<?php get_template_part('content/page', '{template_name}'); ?>
	                                                
	            <?php endwhile; ?>
	            
	        </div>
		</div>
	</section>
			
	<?php get_footer(); ?>
