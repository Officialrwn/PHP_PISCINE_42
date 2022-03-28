<?php
	$str = implode("", file("/var/run/utmpx"));
	//print_r(unpack("C*", $str));
/* 	var_dump($str);
	$pattern = "/ttys000(.*?)ksad/";
	preg_match($pattern, $str[2], $m); */
	//print_r($m[1]);
	print_r(unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $str));
?>
