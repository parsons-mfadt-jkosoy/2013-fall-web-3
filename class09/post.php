<!doctype>
<html>
	<head>
		<title>POST</title>
	</head>

	<body>
		<pre>
			<?php print_r($_POST); ?>
		</pre>

		<form method="post" action="post.php">
			<input type="text" name="giraffes" placeholder="Giraffes" /><br />
			<input type="submit" />
		</form>
	</body>
</html>