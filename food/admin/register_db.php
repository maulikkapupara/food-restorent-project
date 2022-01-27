<?php
include ("include/config.php");
session_start();

//echo "hello";
if(isset($_POST['submit'])){

	$username = $_POST['uname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO admin (username,email,password) VALUES ('$username', '$email','$password')";
  $conn->query($sql);  	
  $_SESSION['signup_success'] = 'You are successfully signup..please login username and password';
  header("location:index.php");
}

?>