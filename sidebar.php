<?php
/**
*
* Default sidebar
*
**/
?>	

	<?php
		if (is_dynamic_sidebar('page_sidebar'))
		{	
			?>
				<aside id="page-sidebar" class="sidebar">
					<?php dynamic_sidebar('page_sidebar'); ?>
				</aside>
			<?php
		}
	?>
