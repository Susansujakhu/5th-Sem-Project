
<form action='' method='post'>
	<div class="main_contain">

		<?php 
		include 'connect.php';
		$username = $_SESSION['uname'];

		$id_query = "SELECT * FROM `customer` WHERE username='$username'";
		$res = $con -> query($id_query);
		if ($res) {
			while($row=$res -> fetch_array(MYSQLI_ASSOC)){
				$user_id = $row['ID'];
			}


			$sql = "SELECT * FROM `cart` WHERE user_id='$user_id'";
			$result = $con -> query($sql);
			$sum = 0;
			while($row=$result -> fetch_array(MYSQLI_ASSOC)){
				$cart_id = $row['id'];
				$p_id = $row['id'];
				$quantity = $row['quantity'];
				$fetchSql = "SELECT * FROM `products` where p_id=$p_id";
				$res = $con -> query($fetchSql);
				while($row=$res -> fetch_array(MYSQLI_ASSOC)){

					$image = $row['image'];
					$title = $row['Name'];
					$price = $row['price'];
					$s_description = $row['short_description'];
					$total = $quantity *$price;
					$sum = $sum + $total;

					echo "<div class='product'>

					<table>
					<tr>
					<td rowspan='3'><img src=$image width='150px'></td>
					<td>$title</td>
					<td>Rs $price</td>
					</tr>
					<tr>
					<td>$s_description</td>
					<td><label id='product_qty'>$quantity</label> * $price</td>
					</tr>
					<tr>
					<td>Quantity: <input class='qty' type='number' name='quantity_value' id='quantity_value' value=$quantity min='1' onchange='call_me(".$cart_id.",".$price.")'>

					<a class='remove_cart' href='cart_delete.php?pid=".$cart_id."'>Remove</a>
					</td>
					<td width=10%><u>Sub Total</u><br> Rs. <label id='sub_total'>$total</label></td>
					</tr>
					</table>

					</div>";

				}

			}
		}
		?>


	</div>
	<div class="sidebar">
		<h3 class="final_total">Total</h3>
		<h4 class="final_total_value"><?php echo "Rs <label id='grand_total'>".$sum."</label>"; ?></h4>

		<button class="checkout" name="checkout">Checkout</button>


	</div>
</form>
<script> 
	function call_me(cart_id, rate) { 
		
		var quantity = document.getElementById('quantity_value').value;
		var sub_total = rate * quantity;
		qty = document.getElementById('product_qty').innerText;
		sum = document.getElementById('grand_total').innerText;
		sum = parseInt(sum);
		
		if (qty < quantity) {
			sum = sum + rate;
		}
		else{
			sum = sum - rate;	
		}

		document.getElementById('product_qty').innerText= quantity;
		document.getElementById('sub_total').innerText = sub_total;
		document.getElementById('grand_total').innerText = sum;
	
		
	} 
</script> 


