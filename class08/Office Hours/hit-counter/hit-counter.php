<?php
	function get_hit_counter($filename = "counter.txt") {
		$fh = fopen($filename,"r");
		$data = fread($fh,filesize($filename));
		fclose($fh);

		$counter = intval($data);
		$counter = $counter + 1;

		$fh = fopen($filename,"w");
		fwrite($fh,$counter);
		fclose($fh);

		return $counter;
	}
?>