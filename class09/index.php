<?php
	$filename = "counter.txt";
	$fh = fopen($filename,"r");
	$counter = fread($fh,filesize($filename));
	fclose($fh);

	$counter = intval($counter);
	$counter = $counter + 1;

	if(isset($_GET['override'])) {
		$counter = $_GET['override'];
	}

	$fh = fopen($filename,"w+");
	fwrite($fh,$counter);
	fclose($fh);	
?>
<!doctype>
<html>
	<head>
		<title>A simple hit counter</title>
	</head>

	<body>
		<h1>Welcome to our hit counter page</h1>
		<p>This is how many hits we have: <strong><?php echo $counter; ?></strong></p>
	</body>
</html>