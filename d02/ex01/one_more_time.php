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
	$array = explode(" ", $argv[1]);
	if (count($array) == 5)
	{
		$day = array_search(lcfirst($array[0]), $weekdays, 1);
		$month = array_search(lcfirst($array[2]), $months, 1);
	}

/* 	$str = 'Tue Nov 12 2013 12:02:21';
	$timestamp = strtotime($str);
	echo $timestamp; */
?>
