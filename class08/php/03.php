<?php
	$title = 'Foo!'; // a string
	if($title == 'Foo') {

	}

	include('filename.php'); // load a file in.
	require('filename.php'); // load a file or fail.
	isset($title) // true if its anything, false if not
	require_once('filename.php');
	include_once('filename.php');
?>