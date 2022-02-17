<?php
if(isset($_POST['login']))
{
	session_start();
	include("include/config.php");
	$em = $_POST['em'];
	$ps = $_POST['pass'];

	$qu = mysqli_query($con,"select * from users where email='$em' and password='$ps'");

	if($ok=mysqli_fetch_array($qu))
	{
   		$_SESSION['em']=$em;
   		$_SESSION['userid']=$ok['id'];
		// echo $_SESSION['em'];
		// echo $_SESSION['userid'];                     
    	header("location:index.php");
	}
	else
	{
		echo '<script>alert("please enter proper email or password")</script>';
		header("location:login.php");
	
	}
// header("location:index.php");
}
?>
