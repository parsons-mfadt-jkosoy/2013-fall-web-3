<?php
	$animals = array('giraffe','dog','cat');
?>

<?php foreach($animals as $animal): ?>
<a href="#"><?php echo $animal; ?></a>
<?php endforeach; ?>