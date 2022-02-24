<?php
if(isset($_POST['log']))
{
	session_start();
	include("include/config.php");
	$em = $_POST['email'];
	$ps = $_POST['password'];

	$qu = mysqli_query($conn,"select * from admin where email='$em' and password='$ps'");

	if($ok=mysqli_fetch_array($qu))
	{
   		$_SESSION['em']=$em;
   		//$_SESSION['userid']=$ok['id'];
		// echo $_SESSION['em'];
		// echo $_SESSION['userid'];                     
    	header("location:dashboard.php");
	}
	else
	{
		echo '<script>alert("Plese Enter Valid Email or Password")</script>';
		header("location:index.php");
	
	}
// header("location:index.php");
}
?>
