#!/usr/local/bin/php
<?php
/* 	$str = 'Tue Nov 12 2013 12:02:21';
	$timestamp = strtotime($str);
	echo $timestamp; */
	//1384214400
	//1384254141
	$ts = 1384254141;
	$date = new DateTime("@$ts");
	echo $date->format('U = Y-m-d H:i:s');
?>