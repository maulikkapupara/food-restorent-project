<?php
//session_start();
include("include/config.php");

$uname = $_POST['uname'];
$pass = $_POST['password'];

$sql="SELECT * FROM admin WHERE username='$uname' AND password='$pass'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$_SESSION['usersession'] = $row['username'];

if ($result->num_rows > 0) {
    header ("location:dashboard.php");
    $_SESSION['success'] = 'you are successfully login..';
}
else
{
    header ("location:index.php");
    $_SESSION['error'] = 'Plese enter correct username and password';
}
?>