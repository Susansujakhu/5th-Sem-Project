
 <?php 
			include 'connect.php';
			$sql = 'SELECT * FROM `products`';
			$result = $con -> query($sql);
			$num = mysqli_num_rows($result);
			for ($i = 1; $i <=$num; $i++){
				$sql = "SELECT * FROM `products` where p_id=$i";
				$res = $con -> query($sql);
				while($row=$res -> fetch_array(MYSQLI_ASSOC)){
					$id = $row['P_ID'];
					
					echo '<a href="productDetails.php?pid='.$id.'">';
					echo "<div class='product_card'>";
					$image = $row['image'];
					$title = $row['Name'];
					$price = $row['price'];
					echo "
					<img src=$image>
					<div class='description'>$title</div>
					<div class='price'>Rs $price</div>

					</div>
					</a>";
					
				}
			}

			?>