<?php include ("include/config.php"); ?>
<?php
session_start();
if(isset($_SESSION['em']))
{
    $userid=$_SESSION['userid'];
    $pid = $_POST['pid'];
    $pimg = $_POST['productimg'];
    $pnm = $_POST['productname'];
    $price =$_POST['price'];
    $qtys = $_POST['qtys'];
    $total = $qtys*$price;
    // echo $userid;
    // echo $pid;
    // echo $pimg;
    // echo $pnm;
    // echo $price;
    // echo $qtys;
    //echo $total; 
    $test = mysqli_query($con,"select * from cart_item where user_id='$userid' and pro_id='$pid' ");
    $tes = mysqli_fetch_array($test);
    $id=$tes['id'];
    if ($id)
    {
        $qty=$tes['pro_qty']+$qtys;
        $total=$tes['total']*$qty;
        // echo $tot;
        // $total=$qtys*$tes['total'];
        $q = mysqli_query($con,"UPDATE cart_item SET pro_qty='$qty',total='$total' WHERE id='$id'");
    }
    else
    {
    
         $q = mysqli_query($con,"insert into cart_item (user_id,pro_id,pro_img,pro_name,pro_price,pro_qty,total)values('$userid','$pid','$pimg','$pnm','$price','$qtys','$total')");
    }

    if($q)
    {
      // echo "string";
      header("location:cart.php");
    }
    else
    {
      echo "error";
    }
?>
<?php
}
else
{
// echo "string";
    header("location:login.php");

?>
<?php
}
?>