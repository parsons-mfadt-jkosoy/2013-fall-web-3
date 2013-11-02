<?php
	$list = array();
	$list['groceries'] = array(
		'bananas'=>array('price'=>2.00,'quantity'=>3),
		'ice cream'=>array('price'=>4.76,'quantity'=>1),
		'cereal'=>array('price'=>1.99,'quantity'=>1)
	);
	$list['clothes'] = array(
		'shirt'=>array('price'=>25.00,'quantity'=>1),
		'shoes'=>array('price'=>3.75,'quantity'=>3)
	);

	header('Access-Control-Origin: *');
	header('Content-Type: application/json');
	echo json_encode($list);
?>