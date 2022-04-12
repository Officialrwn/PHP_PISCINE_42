<?php

function ft_is_sort($tab) {
	$temp = $tab;
	sort($temp);
	$temp = implode(" ", $temp);
	$tab = implode(" ", $tab);
	if (strcmp($temp, $tab) == 0)
		return true;
	return false;
}

?>