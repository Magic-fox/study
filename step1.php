<html>
	<body>
		<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" >
			<input name="name" />
			<button type="submit" >POST</button>
		</form>
		<h1>Hello <?php echo isset($_POST['name']) ? $_POST['name'] : 'World' ; ?>!</h1>
		<?php
			if (isset($_POST['name'])) {
				echo $_POST['name'];
			} else {
				echo 'World';
			}

			// ===

			echo isset($_POST['name']) ? $_POST['name'] : 'World';

			// echo strrev('Good'); // string
		?>
			<br />
		<?php
			// echo 111; // int
			// echo '<br />';
			// echo 111.11; // float
			// echo '<br />';
			// echo 10 + true;
			// echo '<br />';
			// echo 10 + '0xkkksdsas';
			// echo 10 + '10dasdasdsad';
		?>
			<br />
		<?php
			// $var = explode(',', 'good,sdad,sadsadas'); // array
			// $var = array('good', 'sdas', 'sadsadas'); // array
			// $var = ['good', 'sdas', 4 => 'sadsadas']; // array
			// $var = ['good', 'sdas', 'some_key' => 'sadsadas']; // array
			// echo $var[0];
			// echo '<br />';
			// $other = print($var[0]);
			// echo '<br />';
			// print_r($var);
			// echo '<br />';
			// echo implode('_', $var);
			// echo '<br />';
			// print($_GET['test']);
			// var_dump($_GET);
			// var_dump($_POST);
			// var_dump($_FILES);
			// var_dump($_);
			// var_dump($_SERVER);
			// var_dump($_COOKIE);
		?>
	</body>
</html>
