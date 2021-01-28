<!DOCTYPE html>
<html>
<head>
	<title>Maintain Contact</title>
</head>
<body>
<form method="post" action="" enctype='multipart/form-data'>
	<u><h2>Manage Contact</h2></u>
	Enter ID   :
	<input type="text" name="id"><br>
	Enter Name :
	<input type="text" name="nam"><br>
	Enter Phone:
	<input type="text" name="phone"><br>
	Enter Email:
	<input type="text" name="email"><br>
	Select Image:
	<input type="file" name="image"><br>
	Enter Description:
	<input type="text" name="desc"><br>
	<input type="submit" name="submit" value="Submit">
	<u><h2>Delete contact</h2></u>
	Enter ID to be deleted:
	<input type="text" name="did"><br>
	<input type="submit" name="dele" value="Delete">
</form>
</body>
</html>


<?php
include '../connect.php';
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$name=$_POST['nam'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$image=$_FILES['image']['name'];
	$desc=$_POST['desc'];
	$sql="INSERT INTO `aboutus`(`ID`, `Name`, `phone`, `email`, `image`, `qualification`) VALUES ('$id','$name','$phone','$email','$image','$desc')";
	if(mysqli_query($con,$sql)){
		echo "Insert Success";
	}
	else{
		echo "Failed to insert";
	}
}
elseif (isset($_POST['dele'])) {
	$did=$_POST['did'];
	$sql="DELETE FROM `aboutus` WHERE ID=$did";
	if(mysqli_query($con,$sql)){
		echo "delete Success";
		$sql1="ALTER TABLE `aboutus` DROP `ID`";
		mysqli_query($con,$sql1);
		$sql2="ALTER TABLE `aboutus` ADD `ID` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`ID`);";
		mysqli_query($con,$sql2);
	}
	else{
		echo "Failed to delete";
	}
}
mysqli_close($con);
echo "<hr>";
?>