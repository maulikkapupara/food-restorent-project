<?php
include ("include/config.php");
session_start();


if(isset($_POST['submit'])){

	$email = $_POST['email'];
	$password = $_POST['newpassword'];
	$con_pass = $_POST['confirmpassword'];

	$sql = "UPDATE adminuser SET password==MD5('$password') WHERE email='$email'";
  $conn->query($sql);  	
  $_SESSION['signup_success'] = 'You are successfully forgoted password..please login username and password';
  header("location:index.php");
}
?>