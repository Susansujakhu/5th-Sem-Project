<!DOCTYPE html>
<html>
<head>
	<title>Recovery</title>
</head>
<body>
<form method="post" action="">
	
	<label>New Password :</label>
	<input type="text" name="newpass" placeholder="New Password" required>
	<label>Confirm Password </label>
	<input type="text" name="cpass" placeholder="Confirm Password" required>
	<input type="submit" name="submit" Value='Submit'>
</form>
</body>
</html>

<?php
session_start();
	if (!isset($_SESSION['user'])) {
		echo "<script type='text/javascript'>";
		echo "alert('Failed to change Password...')";
		
		echo "</script>";

	}
	else{
	$user=$_SESSION['user'];
	if (isset($_POST['submit'])) {
		$newpass=$_POST['newpass'];
		$cpass=$_POST['cpass'];
		if ($newpass==$cpass) {
			include 'connect.php';
			$sql="UPDATE `customer` SET `Password` = '$cpass' WHERE `customer`.`Username` = '$user';";
		if(mysqli_query($con,$sql)){
				session_destroy();
				echo "<script type='text/javascript'>";
				echo "alert('Password Changed. Please login to continue')";

				echo "</script>";

	}
	else{
				echo "<script type='text/javascript'>";
				echo "alert('Failed to change Password')";
				echo "</script>";
	}

		}
	}
}
mysqli_close($con);
?>