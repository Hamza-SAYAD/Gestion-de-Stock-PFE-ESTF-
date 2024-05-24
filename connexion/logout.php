<?php
	session_start();
	
	unset($_SESSION['loggedIn']);
	unset($_SESSION['fullName']);
	session_destroy();
	header('Location: logincs.php');
	
	exit();
?>