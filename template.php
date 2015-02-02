<ul>
	<?php foreach ($pages as $page) { ?>
	<li>
		<a href="<?php echo $page->getLink(); ?>" class="link" >
			<?php echo $page->getTitle(); ?>
		</a>
	</li>
	<?php } ?>
</ul>
<div>
	<?php
    	include($current->getFile());
	?>
</div>