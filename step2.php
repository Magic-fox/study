<html>
	<body>
		<?php
			$pages = glob('pages/*.html');

			foreach ($pages as $key => $value) {
				$value = str_replace('pages/', '', $value);
				$pages[$key] = $value;
				//$pages[$key] = str_replace('.html', '', $value);
			}

			reset($pages);

			$default = current($pages);
			$page    = isset($_GET['page']) ? $_GET['page'] : $default;
		?>
		<ul>
			<?php foreach ($pages as $value) { ?>
			<li>
				<a href="<?php echo 'index.php?page='.$value; ?>" >
					<?php echo $value; ?>
				</a>
			</li>
			<?php } ?>
		</ul>
		<div>
			<?php
				$file = 'pages/'.$page;
				if (file_exists($file)) {
					include($file);
				} else {
					include('pages/'.$default.'.html');
				}
			?>
		</div>
	</body>
</html>
