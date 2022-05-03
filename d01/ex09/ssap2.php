#!/usr/bin/php
<?php
	$array = array_slice($argv, 1);
	$temp = $alpha = $num = $char = array();
	foreach ($array as $str)
		$temp = array_merge($temp, preg_split('/\s+/', trim($str)));
	foreach($temp as $word)
	{
		if (ctype_alpha($word))
			$alpha[] = $word;
		else if (ctype_digit($word))
			$num[] = $word;
		else
			$char[] = $word;
	}
	natcasesort($alpha);
	sort($num, 2);
	sort($char);
	$result = array_merge($alpha, $num, $char);
	foreach($result as $str)
		echo $str . PHP_EOL;
?>