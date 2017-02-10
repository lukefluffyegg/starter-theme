<?php
/**
*
* Template used for default custom post type archive
*
**/
?>	
	<?php //$page_content = retrieve_post(); // Try and retrieve fake page based on archive slug ?>

	<?php get_header(); ?>
    	    	
	<section id="main-content" class="archive">
		<div class="container">
			<div class="content archive-content archive-default">
				
		    	<?php if (have_posts()) : ?>

		    		<div class="archive-list-container">

						<?php while (have_posts()) : the_post() ;?>

							<?php get_template_part('content/archive', 'default'); ?>
			                                                
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