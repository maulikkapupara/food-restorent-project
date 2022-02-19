<?php
include ("include/config.php");
session_start();


if(isset($_POST['submit'])){

	$email = $_POST['email'];
	$password = $_POST['password1'];
	$con_pass = $_POST['password2'];

	$sql = "UPDATE admin SET password='$password' WHERE email='$email'";
  $conn->query($sql);  	
  $_SESSION['signup_success'] = 'You are successfully forgoted password..please login username and password';
  header("location:index.php");
}
?>