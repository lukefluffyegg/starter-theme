<?php
/**
*
* Template used for default single posts & single custom post type
*
**/
?>
    <?php get_header(); ?>
                
    <section id="main-content" class="single">
        <div class="container">
			<div class="content single single-default post-<?=get_the_ID();?>">

	            <?php while (have_posts()) : the_post() ;?>
	            
	                <?php get_template_part('content/single', 'default'); ?>
	                                                
	            <?php endwhile; ?>
	            
	        </div>
        </div>
    </section>
            
    <?php get_footer(); ?>
