<?php
include ("include/config.php");

/***********************INSERT Action************************************/

if(isset($_POST['submit']) && isset($_POST['insertbanner'])){
   
    
    //echo "<pre>"; print_r($_FILES); exit;
	$sldtitle = $_POST['slidertitle'];
	$sldimg = $_FILES['fileUpload']['name'];
	$target = "upload/".basename($sldimg);
  	$sql = "INSERT INTO banner (slidertitel,sliderimg) VALUES ('$sldtitle','$target')";
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

	$deletebanner = "DELETE FROM banner WHERE id='$id'";
	$conn->query($deletebanner);
 	header("location:banner.php");

}

/**********************UPDATE Action**************************************/ 
//echo "<pre>"; print_r($_POST); exit;
if(isset($_POST['submit']) && isset($_POST['editbanner'])){

	$sldid =$_REQUEST['editbanner'];
	$sldtitle = $_POST['slidertitle'];
	
	$sldimg = $_FILES['fileUpload']['name'];
	
	$target = "upload/".basename($sldimg);
	$sldimg_temp=$_FILES['fileUpload']['tmp_name'];

	if($sldimg_temp != ""){
	    move_uploaded_file($sldimg_temp , $target);
	    $updatebanner = "UPDATE banner SET slidertitel = '$sldtitle', sliderimg = '$target' WHERE id='$sldid'";   
	}else{
   	 	$updatebanner="UPDATE banner SET slidertitel='$sldtitle' WHERE id='$sldid'"; 
	}
	$conn->query($updatebanner);
	header("location:banner.php");
 }
?>