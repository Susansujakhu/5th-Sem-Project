<?php 

$pid = $_GET['pid'];
function checkProduct($p_id, $table)
{
	include 'connect.php';
	$sql_cart = "SELECT * FROM `$table`";
	$result = $con -> query($sql_cart);
	$num = mysqli_num_rows($result);
	
	for ($i = $num; $i >=0; $i--){
		$sql_fetch = "SELECT * FROM `$table` where id=$i";
		$res = $con -> query($sql_fetch);
		
		if ($i>0) {

			$row=$res -> fetch_array(MYSQLI_ASSOC);
			$product_id = $row['P_ID'];
			
			if ($p_id == $product_id) {
				return true;
				break;
			}
		}
		
		elseif($i==0){
			return false;
			
		}
	}
}
$check = checkProduct($pid, 'products');
if ($check == false) {
	header('location:./');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Page</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<link rel='stylesheet' type='text/css' href='productDetails.css'>
	<link rel='stylesheet' type='text/css' href='products.css'>
	<script src='index.js'></script>
</head>
<body>

	<?php 
	include 'menu.php';
	?>

	<div class='contain'>

		<?php 
		include 'connect.php';
		$sql = "SELECT * FROM `products` where p_id=$pid";
		$res = $con -> query($sql);

		while($row=$res -> fetch_array(MYSQLI_ASSOC)){

			$product_image = $row['image'];
			$product_name = $row['Name'];
			$s_description = $row['short_description'];
			$l_description = $row['long_description'];
			$price = $row['price'];

			$product_category = $row['Category'];
			$product_stock = $row['stock'];
			if($product_stock>0){
				$inventory = 'In Stock';
				$disable_button = 'enabled';
			}
			else {
				$inventory = 'Out of Stock';
				$disable_button = 'disabled';
			}
			echo "

			<div class='product_image'>
			<img src=$product_image>
			</div>

			<div class='details'>
			<form action='' method='post'>
			<div class='title'>
			$product_name
			</div>	

			<div class='short_description'>
			$s_description
			</div>

			<div class='product_price'>
			Rs $price
			<label>
			$inventory
			</label>
			</div>
			<div class='color_qty'>


			<div class='product_color'>
			<label for='colors'>Color</label>
			<select name='colors' id='colors'>
			<option value='blue'>Blue</option>
			<option value='red'>Red</option>
			<option value='black'>Black</option>
			<option value='green'>Green</option>
			</select>
			</div>

			<div class='quantity'>

			<label>Quantity</label>
			<input class='qty' type='number' name='quantity' value='1' min='1' max=$product_stock>

			</div>
			</div>

			<div class='buttons'>
			
			<input type='submit' name='buy' class='buy_button' value='Buy Now' $disable_button >
			<input type='submit' name='cart' class='cart_button' value='Add To Cart' >
			
			</div>
			</form>
			</div>


			";
		}
		?>
		<div class='sidebar'>

			<?php 
			include 'product_card.php';

			?>

		</div>

	</div>

	<?php 
	include 'footer.php';
	?>

	<?php 
	

	if (isset($_POST['cart'])) {
		$qnty=$_POST['quantity'];

		if ($_SESSION['uname'] == '') {
			echo "<script type='text/javascript'>";
			echo "alert('Please Login To Add to cart')";
			echo "</script>";
		}

		else {
			
			$check_cart = checkProduct($pid, 'cart');

			if ($check_cart == true) {
				echo "<script type='text/javascript'>";
				echo "alert('Already in Cart')";
				echo "</script>";
				

			}

			else {
				$username = $_SESSION['uname'];

				$id_query = "SELECT * FROM `customer` WHERE username='$username'";
				$res = $con -> query($id_query);
				if ($res) {
					while($row=$res -> fetch_array(MYSQLI_ASSOC)){
						$user_id = $row['ID'];
					}

					$sql="INSERT INTO `cart` VALUES ('id','$user_id','$pid','$qnty')";
					if($con -> query($sql)){
						echo "<script type='text/javascript'>";
						echo "alert('Cart Added Successful')";
						echo "</script>";

					}
					else{
						echo "<script type='text/javascript'>";
						echo "alert('Cart Add Failed')";
						echo "</script>";
					}

				} 
				else {
					echo "<script type='text/javascript'>";
					echo "alert('Failed To Add to Cart ')";
					echo "</script>";
				}

			}
		}		
	}

	elseif (isset($_POST['buy'])) {
		include 'buy_order.php';	
	}
	mysqli_close($con);
	?>


</body>
</html>