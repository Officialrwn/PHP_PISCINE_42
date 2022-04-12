#!/usr/bin/php
<?php
	function cmp($a, $b) {
		if ($a == $b)
			return (0);
	}
	$array = array_slice($argv, 1);
	sort($array, 2);
	var_dump($array);
	
/* 	$result = array();
	foreach ($array as $str)
		$result = array_merge($result, preg_split('/\s+/', trim($str)));
	sort($result);
	foreach ($result as $word)
		echo $word . PHP_EOL; */
?>