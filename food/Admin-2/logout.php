<?php
	session_unset();
	$_SESSION['logout'] = "You are successfully logout...";
	header('Location: index.php');

?>