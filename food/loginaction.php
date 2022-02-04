<?php
//echo "<pre>"; print_r($_POST); exit;
if(isset($_POST['login'])){
	session_start();
include("include/config.php");
$em = $_POST['em'];
$ps = $_POST['pass'];

$qu = mysqli_query($con,"select * from users where email='$em' and password='$ps'");

// if($ok=mysqli_fetch_array($qu))
// {
//    $_SESSION['em']=$em;
//    $_SESSION['userid']=$ok['id'];
//    // echo $_SESSION['em'];
//    // echo $_SESSION['userid'];                      //manga pasethi sikhavanu 6e
//     header("location:index.php");
// }
// else
// {
// 	header("location:login-register.php");
// }
header("location:index.php");
}
?>