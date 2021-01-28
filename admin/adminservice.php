<!DOCTYPE html>
<html>
<head>
	<title>adminservice</title>
</head>
<body>
	<form method="post" action="" enctype='multipart/form-data'>
		<h2>Edit Service</h2>
		<br>
		ID:
		<input type="text" name="id">
		<br>
		Image:
		<input type="file" name="img">
		<br>
		Heading:
		<input type="text" name="heads"><br>
		Description:
		<input type="text" name="desc"><br>
		<input type="submit" name="sinsert" value="Insert">
		<br>
		Enter Service No. to delete:
		<input type="text" name="did">
		<br>
		<input type="submit" name="sdelete" value="Delete">
	</form>
</body>
</html>

<?php
include '../connect.php';
if(isset($_POST['sinsert'])){
	$id=$_POST['id'];
	$image=$_FILES['img']['name'];
	$heads=$_POST['heads'];
	$desc=$_POST['desc'];
	$sql="INSERT INTO `adminservice`(`id`, `image`, `headd`, `description`) VALUES ('$id','$image','$heads','$desc')";
	if(mysqli_query($con,$sql)){
		echo "Insert Success";
	}
	else{
		echo "Insert Failed";
	}
}
elseif (isset($_POST['sdelete'])) {
	$did=$_POST['did'];
	$sql="DELETE FROM `adminservice` WHERE id=$did";
	if(mysqli_query($con,$sql)){
		echo "delete Success";
		$sql1="ALTER TABLE `adminservice` DROP `id`";
		mysqli_query($con,$sql1);
		$sql2="ALTER TABLE `adminservice` ADD `id` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
		mysqli_query($con,$sql2);
	}
	else{
		echo "Delete Failed";
		
	}
}
mysqli_close($con);
echo "<hr>";
?>