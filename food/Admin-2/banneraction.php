<?php
include ("include/config.php");

/***********************INSERT Action************************************/

if(isset($_POST['submit']) && isset($_POST['insertbanner'])){

	$sldtitle = $_POST['slidertitle'];
	$sldimg = $_FILES['fileUpload']['name'];
	$target = "upload/".basename($sldimg);
  	$sql = "INSERT INTO addbanner(slidertitle,sliderimg) VALUES ('$sldtitle','$target')";
  	$conn->query($sql);

  	if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	header("location:banner.php");
}

/***********************DELETE Action************************************/

if(isset($_REQUEST['BannerdeletId'])){
	$id = $_REQUEST['BannerdeletId'];
	$img = $_REQUEST['DeleteImg'];
	unlink($img);

	$deletebanner = "DELETE FROM addbanner WHERE id='$id'";
	$conn->query($deletebanner);
 	header("location:banner.php");

}

/**********************UPDATE Action**************************************/ 

if(isset($_POST['submit']) && isset($_POST['editbanner'])){

	//echo "<pre>"; print_r($_POST); exit;

	$sldid =$_REQUEST['editbanner'];
	$sldtitle = $_POST['slidertitle'];
	
	$sldimg = $_FILES['fileUpload']['name'];
	
	$target = "upload/".basename($sldimg);
	$sldimg_temp=$_FILES['fileUpload']['tmp_name'];

	if($sldimg_temp != ""){
	    move_uploaded_file($sldimg_temp , $target);
	    $updatebanner = "UPDATE addbanner SET slidertitle='$sldtitle',sliderimg='$target', WHERE id='$sldid'";   
	}else{
   	 	$updatebanner="UPDATE addbanner SET slidertitle='$sldtitle' WHERE id='$sldid'"; 
	}
	$conn->query($updatebanner);
	header("location:banner.php");
 }
?>