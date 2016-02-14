<?php
	include "../model/users.php";
	include "bd.php";

	$user = new Users();
	$cn = new cn();

	$user->setName($_POST["username"]);
	$user->setPass($_POST["pass"]);

	$sql = "INSERT INTO user(name, pass) VALUES('".$user->getName()."','".$user->getPass()."')";

	$cn->On();
	$cn->InData($sql);
	$cn->Of();

	header("Location: ../index.php");
?>