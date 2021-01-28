

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
	<u><h2>Insert in Homepage</h2></u>
	<b>Title :</b><br>
	<textarea name="title" cols="50"></textarea><br>
	<b>Description</b>
	<br>
	P1:<textarea name="p1" cols="50"></textarea><br>
	Where to insert (ID):
	<input type="number" name="id"><br>
	<input type="submit" name="hinsert" value="Insert">
	<br>
	Which To update (ID):
	<input type="number" name="uid"><br>
	<input type="submit" name="hupdate" Value="update">
	<br>
	Which To Delete (ID):
	<input type="number" name="did"><br>
	<input type="submit" name="hdelete" Value="Delete">
</form>
</body>
</html>
<?php
include '../connect.php';
if (isset($_POST['hinsert'])) {
	$id=$_POST['id'];
	$title=$_POST['title'];
	$p1=$_POST['p1'];
	$p2=$_POST['p2'];
	$p3=$_POST['p3'];
	$p4=$_POST['p4'];
	$p5=$_POST['p5'];
	$sql="INSERT INTO `home`(`SN`, `Title`, `Para 1`, `Para 2`, `Para 3`, `Para 4`, `Para 5`) VALUES ('$id','$title','$p1','$p2','$p3','$p5','$p6')";
	if (mysqli_query($con,$sql)) {
		echo "Insert Successful";
	}
	else{
		echo "Insert Failed";
	}
}

elseif (isset($_POST['hupdate'])) {
	$uid=$_POST['uid'];
	$id=$_POST['id'];
	$title=$_POST['title'];
	$p1=$_POST['p1'];
	$p2=$_POST['p2'];
	$p3=$_POST['p3'];
	$p4=$_POST['p4'];
	$p5=$_POST['p5'];
	$sql="UPDATE `home` SET `SN`='$id',`Title`='$title',`Para 1`='$p1',`Para 2`='$p2',`Para 3`='$p3',`Para 4`='$p4',`Para 5`='$p5' WHERE SN=$uid";
	if(mysqli_query($con,$sql)){
		echo "Update Successful";
	}
	else{
		echo "Update Failed";
	}

}
elseif (isset($_POST['hdelete'])) {
	$did=$_POST['did'];
	$sql="DELETE FROM `home` WHERE SN=$did";
	if(mysqli_query($con,$sql)){
		echo "Delete Successful";
		$sql1="ALTER TABLE `home` DROP `SN`";
		mysqli_query($con,$sql1);
		$sql2="ALTER TABLE `home` ADD `SN` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`SN`)";
		mysqli_query($con,$sql2);
	}
		else{
		echo "Delete Failed";
	}

	}
	mysqli_close($con);
	echo "<hr>";
?>