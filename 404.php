<?php
/**
*
* 404 Template
* 
**/
?>	
	<?php get_header(); ?>
	<div class="container">
     <div class="row">
        <div class="column-12">
        	<div class="spacer"></div>
			
			<div class="page page-404 post-<?=get_the_ID();?>">
				<?php get_template_part('content/page', '404'); ?>
			</div>
				<div class="spacer"></div>
			</div>
		</div>
	</div>

			
	<?php get_footer(); ?>
