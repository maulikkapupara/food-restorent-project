<?php 
include ("include/config.php");
$id = $_GET['id'];
// echo $id;
mysqli_query($con,"DELETE FROM  cart_item WHERE id='$id'");
header("location:cart.php");
?>