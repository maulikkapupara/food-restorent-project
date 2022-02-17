<?php
session_start();

?>
<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
		<!-- please enter logo inside -->
								<img src="assets/img/logo.png" alt="Crazy Food Restorent">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item">
									<a href="index.php">Home</a>
								</li>
								<li><a href="about.php">About</a></li>
								<li><a href="news.php">News</a>
									
								</li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="shop.php">Shop</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<?php 
                                        if(isset($_SESSION['em']))
                                        {
                                    ?>
                                    
                                        <a title="logout" href="logout.php"><i  class="fas fa-power-off fa-lg"></i></a>
                                    <?php }else{ ?>
                                    <a title="Login Register" href="login.php"><i class="fas fa-user-circle fa-lg"></i></a>
                                    <?php } ?>
										<!-- <a class="login-registre" href="login.php"><i class="fas fa-user-circle fa-lg"></i></a> -->
										<!-- <a class="logout" href="#"><i class="fas fa-power-off fa-lg"></i></a> -->
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>