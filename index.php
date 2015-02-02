<?php

require __DIR__.'/vendor/autoload.php';

$site    = new Site('pages');
$pages   = $site->getPages();
$current = $site->getCurrent();

?>
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
		if (file_exists($current->getFile())) {
			include($current->getFile());
		}
	?>
</div>