#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$arg = trim(preg_replace('/\s+/', '', $argv[1]));
		preg_match("/(\-[0-9]+|[0-9]+)([+\-*%\/])(\-[0-9]+|[0-9]+)/", $arg, $op);
		if (preg_match("/[^0-9+\-*%\/]/", $arg) || $op == NULL)
			echo "Syntax Error" . PHP_EOL;
		else
		{
			$leftnum = intval($op[1]);
			$rightnum = intval($op[3]);
			if ($op[2] === "+")
				$result = $leftnum + $rightnum;
			else if ($op[2] === "-")
				$result = $leftnum - $rightnum;
			else if ($op[2] === "*")
				$result = $leftnum * $rightnum;
			else if ($op[2] === "/")
			{
				if ($leftnum === 0)
					$result = 0;
				else
					$result = $leftnum / $rightnum;
			}
			else if ($op[2] === "%")
				$result = $leftnum % $rightnum;
			echo $result . PHP_EOL;
		}
	}
	else
		echo "Incorrect Parameters" . PHP_EOL;
?>