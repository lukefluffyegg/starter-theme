<?php
/**
*
* Template for specific custom post type single pages
* To use change template name to slug of custom post type,  e.g. testimonials post type | single-testimonials.php
*
**/
?>	

    <?php get_header(); ?>
                
    <section id="main-content" class="single">
        <div class="container">
			<div class="content single single-{custom_post_type} post-<?=get_the_ID();?>">

	            <?php while (have_posts()) : the_post() ;?>
	            
	                <?php get_template_part('content/single', '{custom_post_type_name}'); ?>
	                                                
	            <?php endwhile; ?>
	            
        	</div> 
        </div>
    </section>
            
    <?php get_footer(); ?>
