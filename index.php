<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Test</title>
</head>
<body>

<h2>Sign Up</h2>
<?php
	if(!isset($_SESSION["username"]) && !isset($_SESSION["pass"])) {
?>
<form method="POST" action="data/signup.php">
	<table>
		<tr>
			<td><input type="text" placeholder="Username here." name="username" required></td>
			<td><input type="password" placeholder="Password here." name="pass" required></td>
			<td><input type="submit" value="Enviar"></td>
		</tr>
	</table>
</form>
<?php
	} else {
		echo "<h2>Sesión Iniciada</h2>";
	}
?>
<br><br>
<h2>Login</h2>
<?php
	if(isset($_SESSION["username"]) && isset($_SESSION["pass"])) {
		echo "<h2>Sesión Iniciada.</h2>";
		echo "<br>username: ".$_SESSION["username"]."<br>";
		echo "pass: ".$_SESSION["pass"];
	} else {
?>
<form method="POST" action="data/login.php">
	<table>
		<tr>
			<td><input type="text" placeholder="Username here." name="userlogin" required></td>
			<td><input type="password" placeholder="Password here." name="passlogin" required></td>
			<td><input type="submit" value="Enviar"></td>
		</tr>
	</table>
</form>
<?php } ?>
<br><br>
<h2>Logout</h2>
<?php
	if(isset($_SESSION["username"]) && isset($_SESSION["pass"])) {
?>
<form action="data/logout.php">
	<input type="submit" value="Logout">
</form>
<?php
	} else {
		echo "<h2>Not Logged</h2>";
	}
?>
</body>
</html>