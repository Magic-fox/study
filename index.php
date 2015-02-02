<?php

require 'Site.php';
require 'Page.php';

$sites  = [new Site('pages'), new Site('other')];

foreach ($sites as $site) {
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
<?php
	}
?>