<?php
/**
*
* Index template | Used for posts archive
*
**/
?>	
	<?php get_header(); ?>
    	    	
	<section id="main-content">
		<div class="container">
			<div class="content archive-content archive-index">

				<h1 class="page-title">
					<?php
						if (is_date())
						{
							?>
								Posts from <?=single_month_title(' ');?>
							<?php
						}
						else if (is_category())
						{
							?>
								Posts in <?=single_cat_title(' ');?>
							<?php
						}
						else
						{
							?>
								Posts
							<?php
						}						
					?>
				</h1>

				<div class="archive-list-container">

					<?php if (have_posts()) : ?>

						<div class="archive-list-container">

							<?php while (have_posts()) : the_post() ;?>

								<?php get_template_part('content/archive', 'default'); ?>
				                                                
				            <?php endwhile; ?>

				        </div>

				        <?php get_template_part('inc/pagination'); ?>	
				        
				    <?php else: ?>

							<p>Sorry, there are currently no case studies to display.</p>               
				    
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>
			
	<?php get_footer(); ?>