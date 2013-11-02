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

	$list['groceries']['ice cream']['quantity']; // 1

	// echo the price of shoes
	// hint: DO NOT DO
	// echo 3.75.
	echo $list['clothes']['shoes']['price'];

	// how much cereal do I have?
	echo $list['groceries']['cereal']['quantity'];

	// what's the grand total of everything put together?
	// hint: don't forget about quantities!
	$total = 0;
	foreach($list as $items) {
		foreach($items as $item) {
			$total += $item['price'] * $item['quantity'];
		}
	}

	echo $total;
?>