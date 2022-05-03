<?php
	session_start();
	if ($_GET['submit'] == "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index</title>
</head>
<body>
	<form action="index.php" method="get">
		Username: <input class="form" type="text" name="login" value="<?php echo $_SESSION['login'] ?>">
		<br />
		Password: <input class="form" type="password" name="passwd" value="<?php echo $_SESSION['passwd'] ?>">
		<input type="submit" name="submit" value="OK">
	</form>
</body>
</html>