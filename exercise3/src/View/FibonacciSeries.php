<?php

use src\Controller\FibonacciController; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="FibonacciStyle.css">
	<title>Fibonacci Sequence</title>
</head>

<body>
	<?php $print = new FibonacciController;
	?>
	<div class="fibonacci"><br>
		<h1>Fibonacci Series</h1>
		<form method="POST" action="">
			Enter a number: <input type="number" name="num" required>
			<br> <br>
			<button class="submit" type="submit">Submit</button>
		</form>
		<h4><?php $print->getSeries(); ?></h4>
	</div>
</body>

</html>