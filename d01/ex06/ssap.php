#!/usr/bin/php
<?php
	$array = array_slice($argv, 1);
	$result = array();
	foreach ($array as $str)
		$result = array_merge($result, preg_split('/\s+/', trim($str)));
	sort($result);
	foreach ($result as $word)
		echo $word . PHP_EOL;
?>