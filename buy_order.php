<?php 
$qnty=$_POST['quantity'];
$total = $qnty * $price;

if ($_SESSION['uname'] == '') {
	echo "<script type='text/javascript'>";
	echo "alert('Please Login To Buy Product')";
	echo "</script>";
}
else {
	$username = $_SESSION['uname'];
	$status = 'inProgress';
	$id_query = "SELECT * FROM `customer` WHERE username='$username'";
	$res = $con -> query($id_query);
	if ($res) {
		while($row=$res -> fetch_array(MYSQLI_ASSOC)){
			$user_id = $row['ID'];
		}

		$sql="INSERT INTO `buy` VALUES ('id','$user_id','$pid','$qnty','$status','$total',now())";
		if($con -> query($sql)){
			$stock = $product_stock - $qnty;
			$sql_stock= "UPDATE `products` SET `stock` = $stock WHERE `products`.`id` = $pid;";
			$con -> query($sql_stock);
			include 'sendemail.php';
			echo "<script type='text/javascript'>";
			echo "alert('Verification mail has been sent to your email')";
			echo "</script>";

		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Buy Order Failed')";
			echo "</script>";
		}

	} 
	else {
		echo "<script type='text/javascript'>";
		echo "alert('Buy Order Faileddd')";
		echo "</script>";
	}

}	
?>