<?php
include ("include/config.php");

/***********************INSERT Action************************************/

if(isset($_POST['submit']) && isset($_POST['insertblog'])){

	$blogtitle = $_POST['blogtitle'];
	$blogdiscription = $_POST['blogdiscription'];
	$blogimg = $_FILES['blogimg']['name'];
	$target = "upload/blog/".basename($blogimg);
	$date = date('Y-m-d');
  	$sql = "INSERT INTO blog (blogtitle,blogdescription,blogimg,create_date) VALUES ('$blogtitle','$blogdiscription','$target','$date')";
  	$conn->query($sql);

  	if (move_uploaded_file($_FILES['blogimg']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	header("location:blog.php");
}

/***********************DELETE Action************************************/

if(isset($_REQUEST['BlogdeletId'])){
	$id = $_REQUEST['BlogdeletId'];
	$img = $_REQUEST['DeleteImg'];
	unlink($img);

	$deleteblog = "DELETE FROM blog WHERE id='$id'";
	$conn->query($deleteblog);
 	header("location:blog.php");

}

/**********************UPDATE Action**************************************/ 

if(isset($_POST['submit']) && isset($_POST['editblog'])){

	//	echo "<pre>"; print_r($_POST); exit;

	$blogid =$_REQUEST['editblog'];

	$blogtitle = $_POST['blogtitle'];
	$blogdiscription = $_POST['blogdiscription'];

	$blogimg = $_FILES['blogimg']['name'];
	
	$target = "upload/blog/".basename($blogimg);
	$blogimg_temp=$_FILES['blogimg']['tmp_name'];

	if($blogimg_temp != ""){
	    move_uploaded_file($blogimg_temp , $target);
	    $updateblog = "UPDATE blog SET blogtitle='$blogtitle',blogdescription='$blogdiscription', blogimg='$target' WHERE id='$blogid'";   
	}else{
   	 	$updateblog="UPDATE blog SET blogtitle='$blogtitle' WHERE id='$blogid'"; 
	}
	$conn->query($updateblog);
	header("location:blog.php");
 }
?>