<?php
	if ($_GET['action'] == 'set' && $_GET['name'] != '');
		setcookie($_GET['name'], $_GET['value']);
	if ($_GET['action'] == 'get' && $_COOKIE[$_GET['name']])
		echo $_COOKIE[$_GET['name']];
	if ($_GET['action'] == 'del' && $_COOKIE[$_GET['name']])
		setcookie($_GET['name'], "", time()-3600); 
?>
