<?php
	include "../model/users.php";
	include "bd.php";

	$user = new Users();
	$cn = new cn();

	$user->setName($_POST["userlogin"]);
	$user->setPass($_POST["passlogin"]);

	$sql = "SELECT name, pass FROM user WHERE name = '". $user->getName() . "' AND pass = '". $user->getPass() . "'";

	$cn->On();
	$data = $cn->GetData($sql);
	$cn->Of();

	if($data) {
		session_start();
		$_SESSION["username"] = $data[0];
		$_SESSION["pass"] = $data[1];
	}

	header("Location: ../index.php");
?>