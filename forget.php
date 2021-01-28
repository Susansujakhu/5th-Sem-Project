<!DOCTYPE html>
<html>
<head>
	<title>Recovery</title>
</head>
<body>
<form method="post" action="">
	Please enter your valid email to recover your password
	<label>Username</label>
	<input type="text" name="r_username" placeholder="Username">
	<label>Email </label>
	<input type="text" name="recover_email" placeholder="Email" required>
	<input type="submit" name="submit" Value='Submit'>
</form>
</body>
</html>
<?php
session_start();
function random_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    
}
$code=random_code(6);
echo $code;
if(isset($_POST['submit'])){
	$ruser=$_POST['r_username'];
	$remail=$_POST['recover_email'];
	include 'connect.php';
	$sql="SELECT * FROM customer";
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
		for ($i=$num; $i >= 0; $i--) { 
			$row=mysqli_fetch_array($result);
			$email=$row['Email'];
			$user=$row['Username'];
			if($ruser==$user && $remail==$email && $i>0){
				$_SESSION['user']=$user;
				$_SESSION['email']=$email;
				$_SESSION['code']=$code;
				header('location:sendemail.php');
				break;
			}
			elseif($i==0){
				echo "Please Enter Valid Email Address";
				break;
			}
		}
				mysqli_close($con);
}
?>
