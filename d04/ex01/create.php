<?php
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == "OK")
	{
		$passwd_dir = "../private";
		$passwd_file = "../private/passwd";
		if (!file_exists($passwd_dir))
			mkdir($passwd_dir);
		$db = unserialize(file_get_contents($passwd_file));
		foreach ($db as $account)
		{
			if ($account['login'] == $_POST['login'])
			{
				echo "ERROR\n";
				return ;
			}
		}
		$new_usr['login'] = $_POST['login'];
		$new_usr['passwd'] = hash('whirlpool', $_POST['passwd']);
		$db[] = $new_usr;
		file_put_contents($passwd_file, serialize($db));
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>
