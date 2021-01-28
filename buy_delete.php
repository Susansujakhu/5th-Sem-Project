
 <?php 
include 'connect.php';

	$sql = "DELETE FROM buy WHERE id=1";

	if ($con->query($sql) === TRUE) {
		echo "Record deleted successfully";
		$sql1="ALTER TABLE `buy` DROP `id`";
		$con->query($sql1);
		$sql2="ALTER TABLE `buy` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
		$con->query($sql2);
	} else {
		echo "Error deleting record: " . $con->error;
	}

mysqli_close($con);
header('location:./accounts.php');	
?>