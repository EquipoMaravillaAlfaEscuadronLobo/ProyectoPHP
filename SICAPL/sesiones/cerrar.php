<?php
session_start();
	unset($_SESSION['user']);
	unset($_SESSION['nivel']);
	session_destroy();
	header("Location: ../index.php");
?>