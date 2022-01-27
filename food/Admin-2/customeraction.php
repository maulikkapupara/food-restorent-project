<?php 
include ("include/config.php");
$id = $_GET['id'];
// echo $id;
mysqli_query($conn,"DELETE FROM  customer WHERE id='$id'");
header("location:customer.php");
?>