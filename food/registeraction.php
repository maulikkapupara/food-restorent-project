<?php
include ("include/config.php");
//session_start();
//echo "<pre>"; print_r($_POST); exit;
if(isset($_POST['submit'])){
	//  echo "<pre>"; print_r($_POST); exit;
	$username = $_POST['uname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO  users (username,email,password) VALUES ('$username','$email','$password')";
  	
  	$conn->query($sql);  	
	$_SESSION['signup_success'] = 'You are successfully signup..please login username and password';
  header("location:login.php");
}

?>