<?php
	mysql_connect('localhost','root','root');
	mysql_select_db('Web3000DB');

	$sql = "SELECT * FROM counter LIMIT 1";
	$query = mysql_query($sql);

	// while($data = mysql_fetch_array($query)) {

	// }

	$data = mysql_fetch_assoc($query);

	$id = $data['id'];
	$count = $data['count']+1;
	$sql = "UPDATE counter SET count={$count} WHERE id={$id} LIMIT 1";
	mysql_query($sql);

//	echo mysql_error();

?>
<!doctype>
<html>
	<head>
		<title>A simple hit counter</title>
	</head>

	<body>
		<h1>Welcome to our hit counter page</h1>
		<p>This is how many hits we have: <strong><?php echo $count; ?></strong></p>
	</body>
</html>