#!/usr/bin/env php
<?php
	echo "Enter a number: ";
	while (1)
	{
		$input = trim(fgets(STDIN));
		if (feof(STDIN))
		{
			echo "\n";
			exit();
		}
		if (intval($input) != 0 || $input == "0")
		{
			$num = intval($input);
			if ($num % 2 == 0)
				echo "The number ", $num, " is even\n";
			else
				echo "The number ", $num, " is odd\n";
		}
		else
			echo "'$input' is not a number\n";
		echo "Enter a number: ";
	}
?>