<?php 
include 'connect.php';
$pid = $_GET['pid'];
if ($pid == '') {
	header('location:./');
}
else {
	$sql = "DELETE FROM cart WHERE id='$pid'";

	if ($con->query($sql) === TRUE) {
		echo "Record deleted successfully";
		$sql1="ALTER TABLE `cart` DROP `id`";
		$con->query($sql1);
		$sql2="ALTER TABLE `cart` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
		$con->query($sql2);
	} else {
		echo "Error deleting record: " . $con->error;
	}
}
mysqli_close($con);
header('location:./accounts.php');	
?>