<?php
/**
*
* Template Name: General Page
*
*/
?>
	<?php get_header(); ?>
    	    	
	<section id="main-content" class="page">
		<div class="container">
			<div class="content page page-general post-<?=get_the_ID();?>">

				<?php while (have_posts()) : the_post() ;?>
	            
					<?php get_template_part('content/page', 'general'); ?>
	                                                
	            <?php endwhile; ?>
	            
	        </div> 
		</div>
	</section>
			
	<?php get_footer(); ?>
