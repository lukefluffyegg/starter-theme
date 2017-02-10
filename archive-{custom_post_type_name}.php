<?php
/**
*
* Template for specific custom post type archive
* To use change template name to slug of custom post type,  e.g. testimonials post type | archive-testimonials.php
*
**/
?>
	<?php get_header(); ?>
    	    	
	<section id="main-content" class="archive">
		<div class="container">
			<div class="content archive-content archive-{custom_post_type}">

		    	<?php if (have_posts()) : ?>

		    		<div class="archive-list-container">

						<?php while (have_posts()) : the_post() ;?>

							<?php get_template_part('content/archive', '{custom_post_type_name}'); ?>
			                                                
			            <?php endwhile; ?>

			        </div>

			        <?php get_template_part('inc/pagination'); ?>	
		            
		        <?php else: ?>

		   			<p>Sorry, there are currently no posts to display.</p>               
		        
				<?php endif; ?>
			</div>
		</div>
	</section>
			
	<?php get_footer(); ?>