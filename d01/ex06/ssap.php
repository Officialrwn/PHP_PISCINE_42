#!/usr/bin/php
<?php
	$array = array_slice($argv, 1);
	if (in_array(" ", $array))
		echo "true";
	sort($array);
	print_r($array);
?>