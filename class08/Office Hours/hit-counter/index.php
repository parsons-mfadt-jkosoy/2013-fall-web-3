<?php
	require_once('hit-counter.php');
	$counter = get_hit_counter();
?>
<!doctype html>
<html>
	<head>
		<title>Hit Counter</title>
	</head>

	<body>
		<p>Here is how many hits we have:</p>
		<?php if($counter > 100): ?>
		<h1><?php echo $counter; ?></h1>
		<?php else: ?>
		<h2><?php echo $counter; ?></h2>
		<?php endif; ?>
	</body>
</html>