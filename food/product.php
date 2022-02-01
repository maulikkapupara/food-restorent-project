<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>

			<div class="row">
					<?php                
							$seletProduct = "SELECT *FROM product ORDER BY RAND() limit 3";
							$result = $conn->query($seletProduct);
							while ($row = $result->fetch_assoc()){
					?>
				<div class="col-lg-4 col-md-6 text-center">
					
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php?id=<?php echo $row['id'];?>"><img src="Admin/<?php echo $row['productimg'];?>"alt=""></a>
						</div>
						<h3><?php echo $row['productname'];?></h3>
						<p class="product-price"><span>Per Dish</span>₹<?php echo $row['price'];?></p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>