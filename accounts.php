

<!DOCTYPE html>
<html>
<head>
	<title>My Accounts</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<link rel='stylesheet' type='text/css' href='account.css'>
	<link rel='stylesheet' type='text/css' href='cart.css'>
	<script src='index.js'></script>
</head>
<body>
	<?php include 'menu.php'; 
	if ($_SESSION['uname'] == '') {
		header("location:./");
	}
	?>
	<div class="big_container">
		<div class="account_bar">
			<button class="active" id="my_cart" onclick="cart_btn()">My Cart</button>
			<button id="my_order" onclick="order_btn()"> My Orders</button>
			<button id="edit_info" onclick="edit_btn()"> Edit Account Info</button>
			<button id="change_password" onclick="change_btn()"> Change Password</button>
		</div>
		<div class="contain">
			
				<section class="cart_section" id="cart_section">
					<?php include 'cart.php' ?>
				</section>

				<section class="order_section" id="order_section">
					This is Order Secton
				</section>

				<section class="edit_info_section" id="edit_info_section">
					Edit account details here
				</section>

				<section class="change_password_section" id="change_password_section">
					Change Your Password Here
				</section>
			
			
		</div>

	</div>
	<?php include 'footer.php'; ?>
</body>
</html>

