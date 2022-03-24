<?php
	function ft_split($input) {
		$array = str_word_count($input, 1);
		sort($array);
		return ($array);
	}
?>