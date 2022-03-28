<?php
	$array = file("page.html");
	$pattern0 = "/<a.*title=\"(.*?)\"/";
	$pattern1 = "/<a .*>(\s.*?\s)</";
	print_r($array);
	if (preg_match($pattern1, $array[1], $m))
		print_r(array_slice($m, 1));
	echo strtoupper($m[1]);
//	print_r($array);
?>