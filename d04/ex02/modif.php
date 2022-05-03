<?php
	if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] == "OK")
	{
		$passwd_file = "../private/passwd";
		$db = unserialize(file_get_contents($passwd_file));
		foreach ($db as $key => $value)
		{
			$oldpw = hash('whirlpool', $_POST['oldpw']);
			if ($value['login'] == $_POST['login'] && $value['passwd'] == $oldpw)
			{
				$db[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
				file_put_contents($passwd_file, serialize($db));
				echo "OK\n";
				return ;
			}
		}
	}
	echo "ERROR\n";
?>
