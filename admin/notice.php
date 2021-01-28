<!DOCTYPE html>
<html>
<head>
	<title>Notive Manager</title>
</head>
<body>
<form method="post" action="">
	<center><u>
	<h2>Current Notices</h2>
	</u></center>
	<?php
	include '../connect.php';
	$sql="SELECT * FROM notice";
	$result=mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($result)) {
		echo $row['N_ID'].". |";
		echo $row['Notice'];
		echo "<br>";
	}
	mysqli_close($con);
	?>
	
	<center>
	<u><h2>Insert Notice</h2></u>
	<textarea rows="4" cols="50" name='notice'></textarea>
	<input type="submit" name="insert" Value="Insert">
	
	<u><h2>Delete Notice</h2></u>
	Enter Notice No.:
	<input type="number" name="id">
	<input type="submit" name="delete" Value="delete">
	</center>
	
</form>
</body>
</html>

<?php
include '../connect.php';
if (isset($_POST['insert'])) {
$not=$_POST['notice'];
$sql="INSERT INTO `notice`(`Notice`) VALUES ('$not')";
if(mysqli_query($con,$sql)){
	echo "Notece inserted";
	}
else{
	echo "Insert failed";
}
mysqli_close($con);
}
elseif (isset($_POST['delete'])) {
	$x=$_POST['id'];
	$sql="DELETE FROM `notice` WHERE `notice`.`N_ID` = $x";
if(mysqli_query($con,$sql)){
	echo "Notece deleted";
	$sql1="ALTER TABLE `notice` DROP `N_ID`";
	mysqli_query($con,$sql1);
	$sql2="ALTER TABLE `notice` ADD `N_ID` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`N_ID`)";
	mysqli_query($con,$sql2);
	}
else{
	echo "Delete failed";
}

mysqli_close($con);

}
echo "<hr>";
?>

