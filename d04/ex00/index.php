<!DOCTYPE html>
<?php
	session_start();
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
	print_r($_SESSION);
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index</title>
	<style>
		.form {
			border: solid 1px;
			border-color: black;
		}
		.labels {
			padding-left: 2px;
		}
	</style>
</head>
<body>
	<form action="index.php" method="get">
		<label class="labels" for="login">Username:</label><br />
		<input class="form" type="text" id="login" name="login" value=""><br />
		<label class="labels" for="passwd">Password:</label><br />
		<input class="form" type="password" id="passwd" name="passwd" value=""><br />
		<input type="submit" name="submit" value="OK">
	</form>
</body>
</html>