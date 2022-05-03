#!/usr/bin/php
<?php
	if ($f = fopen("/var/run/utmpx", "r"))
	{
		date_default_timezone_set("Europe/Helsinki");
		$arr = array();
		while ($line = fread($f, 628)) {
			$temp = unpack("a256user/i1id/a32line/i1pid/s1type/s1unknown/i1time", $line);
			if($temp["type"] == 7)
			{
				printf("%-8s %-8s %s %2s %s\n", 
				trim($temp["user"]), trim($temp["line"]), date('M', $temp['time']), date('j', $temp['time']), date('H:i', $temp['time']));
			}
		}
	}
?>
