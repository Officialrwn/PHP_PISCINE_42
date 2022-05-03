#!/usr/bin/php
<?php
	if ($argc == 4)
	{
		$op = trim($argv[2]);
		$leftnum = intval(trim(preg_replace('/\s+/', '', $argv[1])));
		$rightnum = intval(trim(preg_replace('/\s+/', '', $argv[3])));
		if (!strcmp($op, "+"))
			$result = $leftnum + $rightnum;
		else if (!strcmp($op, "-"))
			$result = $leftnum - $rightnum;
		else if (!strcmp($op, "*"))
			$result = $leftnum * $rightnum;
		else if (!strcmp($op, "/"))
			$result = $leftnum / $rightnum;
		else if (!strcmp($op, "%"))
			$result = $leftnum % $rightnum;
		echo $result . PHP_EOL;
	}
	else
		echo "Incorrect Parameters" . PHP_EOL;
?>