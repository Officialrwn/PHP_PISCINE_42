#!/usr/bin/php
<?php
	function url_exist($url) {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		if ($httpcode >= 200 && $httpcode < 400)
			return true;
		return false;
	}
	$url = $argv[1];
	if (url_exist($url) === false)
		die("Not a valid URL\n");
	$page = file_get_contents($url);
	$pattern = '/<img\s+[^>]*src="([^"]*\.\w+)"[^>]*>/is';
	$dir = parse_url($url, PHP_URL_HOST);
	preg_match_all($pattern, $page, $matches);
	if(!is_dir($dir))
		mkdir($dir);
	chdir($dir);
	foreach($matches[1] as $match)
		shell_exec('curl -O ' . $match);
	chdir("..");
?>