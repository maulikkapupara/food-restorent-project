<!DOCTYPE html>
<html lang="en">
<?php 
	// session_start();
	// error_reporting(0);
	include ("include/config.php"); 
?>
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
    
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->


</head>
<body>
	
	<!--PreLoader-->
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> -->
    <!--PreLoader Ends-->
	
	<!-- header -->
	<?php include('header.php'); ?>
	<!-- end header -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Login Your Account Here</p>
						<h1>Login-Registration</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
<!-- main contain -->
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
			<form class="login100-form validate-form flex-sb flex-w" onSubmit = "return checkPassword(this)" action="forgot_db.php" method="post">
				<span class="login100-form-title p-b-32">
					Forgot Password
				</span>

				<span class="txt1 p-b-11">
					Email
				</span>
				<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
					<input class="input100" type="text" name="email" required>
					<span class="focus-input100"></span>
				</div>
				
				<span class="txt1 p-b-11">
					New Password
				</span>
				<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
					<span class="btn-show-pass">
						<i class="fa fa-eye" onclick="newPass()"></i>
					</span>
					<input class="input100" type="password" name="password1" id="newInput" required>
					<span class="focus-input100"></span>
				</div>
                <span class="txt1 p-b-11">
					Confirm Password
				</span>
				<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
					<span class="btn-show-pass">
						<i class="fa fa-eye" onclick="confirmPass()"></i>
					</span>	
					<input class="input100" type="password" name="password2" id="confirmInput" required>
					<span class="focus-input100"></span>
				</div>
				<span style="color:red" id="conmsg"></span>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit" name="submit" onClick="checkPassword" >
						Change Password
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- end main contain -->
	
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
<script>
    function newPass() {
    var x = document.getElementById("newInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function confirmPass() {
    var x = document.getElementById("confirmInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

	 // Function to check Whether both passwords
            // is same or not.
            function checkPassword(form) {
                password1 = form.password1.value;
                password2 = form.password2.value;
  
                // If Not same return False.    
                if (password1 != password2) {
                    document.getElementById('conmsg').innerText="Password does not match";
                    return false;
                }
  
                // If same return True.
                else{
                    alert("Password Match: Welcome to GeeksforGeeks!")
                    return true;
                }
            }
 </script>
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

<!--===============================================================================================-->
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/js/main.js"></script>


</body>
</html>