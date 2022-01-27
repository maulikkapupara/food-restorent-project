<?php
include ("include/config.php");

/***********************INSERT Action************************************/

if(isset($_POST['submit']) && isset($_POST['insertcategory'])){

//echo "<pre>"; print_r($_POST); exit;

	$categoryname = $_POST['categoryname'];
	$categoryimg = $_FILES['categoryimg']['name'];
	$target = "upload/category/".basename($categoryimg);
  	$sql = "INSERT INTO categories (catname,catimg) VALUES ('$categoryname','$target')";
  	$conn->query($sql);

  	if (move_uploaded_file($_FILES['categoryimg']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	header("location:category.php");
}

/***********************DELETE Action************************************/

if(isset($_REQUEST['CategorydeletId'])){
	$id = $_REQUEST['CategorydeletId'];
	$img = $_REQUEST['DeleteImg'];
	unlink($img);

	$deletecategory = "DELETE FROM categories WHERE id='$id'";
	$conn->query($deletecategory);
 	header("location:category.php");

}

/**********************UPDATE Action**************************************/ 

if(isset($_POST['submit']) && isset($_POST['editcategory'])){

	//echo "<pre>"; print_r($_POST); exit;

	$catid =$_REQUEST['editcategory'];
	$categoryname = $_POST['categoryname'];
	
	$categoryimg = $_FILES['categoryimg']['name'];
	
	$target = "upload/category/".basename($categoryimg);
	$categoryimg_temp=$_FILES['categoryimg']['tmp_name'];

	if($categoryimg_temp != ""){
	    move_uploaded_file($categoryimg_temp , $target);
	    $updatecategory = "UPDATE categories SET catname='$categoryname',catimg='$target' WHERE id='$catid'";   
	}else{
   	 	$updatecategory="UPDATE categories SET catname='$categoryname' WHERE id='$catid'"; 
	}
	$conn->query($updatecategory);
	header("location:category.php");
 }
?>