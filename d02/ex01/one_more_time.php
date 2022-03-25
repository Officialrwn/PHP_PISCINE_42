#!/usr/bin/php
<?php
	$weekdays = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
	$months = array(
		"Jan" => "janvier",
		"Feb" => "février",
		"Mar" => "mars",
		"Apr" => "avril",
		"May" => "mai",
		"Jun" => "juin",
		"Jul" => "juillet",
		"Aug" => "août",
		"Sep" => "septembre",
		"Oct" => "octobre",
		"Nov" => "novembre",
		"Dec" => "décembre",
	);
		if ($argc == 2)
		{
			$array = explode(" ", $argv[1]);
			$timepattern = "/(^0[0-9]$|1[0-9]|2[0-3]):(0[0-9]|[0-5][0-9]):(0[0-9]|[0-5][0-9])$/";
			$datepattern = "/(^[1-9]$|^1[0-9]$|^2[0-9]$|^3[0-1])$/";
			$check = 0;
			if (count($array) == 5)
			{
				$check += preg_match($datepattern, $array[1], $date);
				$check += preg_match($timepattern, $array[4], $time);
				$day = array_search(lcfirst($array[0]), $weekdays, 1);
				$month = array_search(lcfirst($array[2]), $months, 1);
				$year = intval($array[3]);
			}
			if ($check == 2 && $day != NULL && $month != NULL && $year >= 1970 && $year <= time())
			{
				$str = "$month $date[0] $year $time[0]";
				$timestamp = strtotime($str);
				echo $timestamp;
			}
			else
				echo "Wrong Format\n";
		}
?>
