<?php 
include 'include/config.php';
session_start();
if(isset($_SESSION['em']))
{
    // $uid = $_POST['uid'];
    // $pid=$_POST['pid'];
    // $pr=$_POST['price'];
    $qt=$_POST['qt'];
    // echo "uid".$uid;
    // echo "pid".$pid;
    // echo "pr".$pr;
    echo "qt".$qt;
    

    // $tot = $qt*$pr;
    // $r = mysqli_query($conn,"select * from cart_item where pro_id='$id' and user_id='$uid'");

    // if($row=mysqli_fetch_array($r))
    // {
    //     mysqli_query($conn,"update cart_item set pro_qty='$qt', total='$tot' where pro_id='$id' and user_id='$uid'");
    //     header("location:cart.php");
    // }

    //echo "quantity=".$qt;
     //echo "price=".$pr;
     //echo "id=".$id;
     //echo  $uid;

?>
<?php
}
else{
    header("location:login.php");
}