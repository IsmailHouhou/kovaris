<?php
	require 'parts/header.php';
?>

	<!--HERO IMAGE-->
	<div class="hero-image">
		<div class="hero-text">
			<h1>KOVARIS</h1>
			<button onclick="window.location.href='pages/products.php'">Shop Now</button>
		</div>
	</div>

	<div class="wrapper">
		<!--BEST SELLERS-->
		<div class="best-sellers">
			<h1 class="div_title">Our Best selling Products</h1>
			<div class="container">
				<div class="item">
					<img src="img/1.jpg">
				</div>
				<div class="item">
					<img src="img/2.jpg">
				</div>
				<div class="item">
					<img src="img/3.jpg">
				</div>
			</div>
			<button onclick="window.location.href='pages/products.php'">ALL PRODUCTS</button>
		</div>

		<!--HOME DECOR-->
		<div class="home-decor">
			<div class="container">
				<div class="item" id="c1">
					<h1>Home Decor</h1>
				</div>
				<div class="item" id="c2">
					<p>Starting home decorating can be full of so many emotions. On one hand, you can’t wait to get started and on the other, you can. There is a lot of work to be done and all of it is before you. Sometimes, there is no way of knowing where to start or what to do or even how to decorate.

					June Amis		
					</p>
				</div>
			</div>
		</div>

		<!--CATEGORIES-->
		<div class="categories">
			<h1 class="div_title">Categories</h1>
			<div class="container">
				<div class="item">
					<img src="img/4.jpg">
					<h2>Living Room</h2>
				</div>
				<div class="item">
					<img src="img/5.jpg">
					<h2>Bedroom</h2>
				</div>
				<div class="item">
					<img src="img/6.jpg">
					<h2>Kitchen</h2>
				</div>
			</div>
		</div>
		
	</div>

	<?php
		require 'parts/footer.php';
	?>