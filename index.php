<!DOCTYPE html>
<html>
<head>
	
	<title>Our Products</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="products.css">
	<script src="index.js"></script>
</head>
<body>
	<?php
	include 'menu.php';
	?>	
	<div class="container">
		<div class="feature_bar">
			<div class="each_feature">
				<img src="tick.png">
				<label>Hello World</label>
			</div><div class="each_feature">
				<img src="tick.png">
				<label>Hello World</label>
			</div>
			<div class="each_feature">
				<img src="tick.png">
				<label>Hello World</label>
			</div>
			<div class="each_feature">
				<img src="tick.png">
				<label>Hello World</label>
			</div>
			<div class="each_feature">
				<img src="tick.png">
				<label>Hello World</label>
			</div>
		</div>
		<h2>Products</h2>
		<div class="top_content">

			<?php 
				include 'product_card.php';
			 ?>


		</div>

	</div>

	<?php  
	include 'footer.php';
	?>
</body>
</html>