<?php
	session_start();

	$servername ="sql.njit.edu";
	$username ="sb657"
	$password ="dIlb5cLl"

	$conn = new mysqli($servername, $username, $password);

	if (isset($_POST['register_BTN'])) {
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		$password2 = mysql_real_escape_string($_POST['password2']);

		if ($password == $password2) {
			$password = md5($password);
			$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "You are logged in";
			$_SESSION['username'] = $username;

		}esle {
			$_SESSION['message'] = "The password does not match";

		}
	}



?>






<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Register for Your To Do List!</title>
</head>
<body>
<div class="header">
	<h1>Register for Your To Do List!</h1>
</div>

<form method="post" action="register.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="texInput"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="texInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="texInput"></td>
		</tr>
		<tr>
			<td>Password2:</td>
			<td><input type="password" name="password" class="texInput"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="register_BTN" value="Register"></td>
		</tr>
	</table>
</body>
</html>