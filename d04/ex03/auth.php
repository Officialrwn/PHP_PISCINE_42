<?php
function auth($login, $passwd) {
	$passwd_file = "../private/passwd";
	$db = unserialize(file_get_contents($passwd_file));
	foreach ($db as $key => $value)
	{
		$checkpw = hash('whirlpool', $passwd);
		if ($value['login'] == $login && $value['passwd'] == $checkpw)
			return true;
	}
	return false;
}
?>
