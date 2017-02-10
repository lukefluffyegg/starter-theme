<?php

	$prevLink = get_previous_posts_link('&lt; Newer Posts');
	$nextLink = get_next_posts_link('Older Posts &gt;','');

	if ($prevLink || $nextLink)
	{
		?>
		    <section class="pagination">
		    	<div class="previous left">
					<?=$prevLink;?>
				</div>
				<div class="next right">
					<?=$nextLink;?>
				</div>
		    </section>
		<?
	}

?>