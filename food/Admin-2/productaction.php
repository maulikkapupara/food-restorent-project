<?php
include ("include/config.php");

/***********************INSERT Action************************************/
//echo "<pre>"; print_r($_POST); exit;
if(isset($_POST['submit']) && isset($_POST['insertproduct'])){
	//echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
	$productname = $_POST['productname'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$specialprice = $_POST['specialprice'];
	$proddiscription = $_POST['productdiscription'];
	$productimg = $_FILES['productimg']['name'];
	$target = "upload/product/".basename($productimg);
    $sql = "INSERT INTO product (categoryid,productname,discription,price,specialprice,productimg) VALUES ('$category','$productname','$proddiscription','$price','$specialprice','$target')";
  	$conn->query($sql);

  	if (move_uploaded_file($_FILES['productimg']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	header("location:product.php");
}

/***********************DELETE Action************************************/

if(isset($_REQUEST['ProductdeletId'])){
	$id = $_REQUEST['ProductdeletId'];
	$img = $_REQUEST['DeleteImg'];
	unlink($img);

	$deleteproduct = "DELETE FROM product WHERE id='$id'";
	$conn->query($deleteproduct);
 	header("location:product.php");

}

/**********************UPDATE Action**************************************/ 

if(isset($_POST['submit']) && isset($_POST['editproduct'])){

	//echo "<pre>"; print_r($_POST); exit;

	$prodid =$_REQUEST['editproduct'];
	$productname = $_POST['productname'];
	
	$category = $_POST['category'];
	$price = $_POST['price'];
	$specialprice = $_POST['specialprice'];
	$productdiscription = $_POST['productdiscription'];
	$productimg = $_FILES['productimg']['name'];
	$target = "upload/product/".basename($productimg);
	$prodimg_temp = $_FILES['productimg']['tmp_name'];

	if($prodimg_temp != ""){
	    move_uploaded_file($prodimg_temp , $target);
	    $updateproduct = "UPDATE product SET categoryid = '$category', productname = '$productname', discription = '$productdiscription', price = '$price', specialprice = '$specialprice', productimg = '$target' WHERE id='$prodid'";   
	}else{
   	 	$updateproduct="UPDATE product SET categoryid='$category', productname='$productname', discription='$productdiscription' , price = '$price', specialprice = '$specialprice' WHERE id='$prodid'"; 
	} //exit;
	$conn->query($updateproduct);
	header("location:product.php");
 }
?>