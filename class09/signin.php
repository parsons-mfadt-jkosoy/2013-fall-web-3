<?php 
	if(isset($_POST['username']) && isset($_POST['password'])) {
		if($_POST['username'] == 'jamie' && $_POST['password'] == 'jamie') {
			$result = "Logged In";
		}
		else {
			$result = "STOP TRYING TO BREAK IN";
		}
	}

?>
<!doctype>
<html>
	<head>
		<title>POST</title>
	</head>

	<body>
		<h1><?php echo $result; ?></h1>

		<form method="post" action="signin.php">
			<input type="text" name="username" placeholder="Username" /><br />
			<input type="password" name="password" placeholder="Password" /><br />

			<input type="submit" />
		</form>
	</body>
</html>