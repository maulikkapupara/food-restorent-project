<?php include ("include/config.php"); ?>
<?php
session_start();
$userid=$_SESSION['userid'];
$nm = $_GET['pnm'];
echo "<script>alert($nm);</script>"
//echo $qtys;
//echo $userid;

$q = mysqli_query($con,"UPDATE cart_item SET pro_qty = '$qtys',total='$total' WHERE user_id='$userid'");
?>