<?php
	if ($f = fopen("/var/run/utmpx", "r")) {

		while ($line = fread($f, 628)) {
			print_r(unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $line));
		}
	}
?>
