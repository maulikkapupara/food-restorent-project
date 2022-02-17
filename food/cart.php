<?php
// session_start();
include 'include/config.php';
include('header.php');
if(isset($_SESSION['em']))
{
	
?>
<!DOCTYPE html>
<html lang="en">
<?php include ("include/config.php"); ?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Cart</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<script>
function test()
{
	var qt,tot,total;
	qt = document.getElementById('qt').value;
	tot = document.getElementById('tot').value;
	total = qt*tot;
	// alert(qt);
	alert(total);

}
</script>
<body>
	
	<!--PreLoader-->
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> -->
    <!--PreLoader Ends-->
	
	<!-- header -->
	<?php //include('header.php'); ?>
	<!-- end header -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<?php
					$userid=$_SESSION['userid'];
					$test=mysqli_query($con,"select * from cart_item where user_id='$userid'");
					$tes=mysqli_fetch_assoc($test);
					if($tes>0)
					{
				?>
				
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<form action="cartaction.php" method="post" >
							<table class="cart-table">
								<thead class="cart-table-head">
									<tr class="table-head-row">
										
										<th class="product-image">Product Image</th>
										<th class="product-name">Name</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-total">Sub Total</th>
										<th class="product-remove"></th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<td colspan="7">
										<div class="cart-buttons">
											<a href="shop.php" class="boxed-btn">continue shopping</a>
											<input type="submit" name="update" onClick="test()"; value="update cart" class="cart-btn" style="margin-left:358px;">	
										</div>
										<div>
											
										</div>
										</td>
									</tr>
								</tfoot>
								<tbody>
									<?php
										$userid=$_SESSION['userid'];

										$test = mysqli_query($con,"select * from cart_item where user_id='$userid'");
										//$tes = mysqli_fetch_array($test);
										while ($row=mysqli_fetch_array($test)) {
									?>
									<tr class="table-body-row">
										<td class="product-image"><img src="Admin/<?php echo $row['pro_img']; ?>" alt=""></td>
										<td class="product-name" name="pnm"><?php echo $row['pro_name']; ?></td>
										<input type="hidden" name="pid" value="<?php echo $row['pro_id']; ?>">
										<td class="product-price" name="pric">₹<?php echo $row['pro_price']; ?></td>
										<td class="product-quantity" name="qty"><input type="number"  id="qt" placeholder="<?php echo $row['pro_qty'];?>" min="1"></td>
										<td class="product-total" ><?php echo $row['total'];?><input type="hidden"  id="tot" value="<?php echo $row['total'];?>"></td>
										<td class="product-remove"><a href="cartdelete.php?id=<?php echo $row['id']; ?>	" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash fa-lg" style="color:#e64940"></i></a></td>
									
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</form>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
							<?php
                                    $userid=$_SESSION['userid'];
                                    
                                    $test = mysqli_query($con,"select * from cart_item where user_id='$userid'");
                                    $tes = 0;
                                    while ($row=mysqli_fetch_array($test)) {
                                        $tes+=$row['total'];
                                    }
                                ?>
								
								<!-- <tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>$45</td>
								</tr> -->
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>₹<?php echo $tes; ?></td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="checkout.php" class="boxed-btn black">Check Out</a>
						</div>

					</div>
				</div>
				
			<?php
				} else {
			?>
		
        <h1 style="text-align: center; padding-left:180px;">Your cart is currently empty.</h1>
		
				<div class="cart-buttons">
					<a  href="shop.php" class="cart-btn">continue shopping</a>
				</div>
		
		<?php 
			}
		?>
			</div>
			
		</div>
	</div>
	<!-- end cart -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<?php include('footer.php'); ?>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>
<?php
}
else
{
	$ok = $_SERVER['PHP_SELF'];
	header('location:login.php?.$ok.');
}
?>