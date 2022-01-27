<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

session_start();
$user = $_SESSION['usersession'];
	
if($user==''){
	$_SESSION['logout'] = "Yor sessin has expired. Please login again";
	header('Location: index.php');
}

?>