

<!DOCTYPE html>
<html>
<head>
	<title>Admin login Page</title>
 </head>
 <style>
div.background {
  background: url(1.jpeg);
  background-size: cover;
  position: fixed; 
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}

div.transbox {
  margin: 210px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox form {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}

</style>
<body>
	<center>
	<div class="background">
  <div class="transbox">
  	<img src="LoginRed.jpg" height="280px" width="400px" align="left">
  	<center><h1>Admin Login</h1></center>
  	<form method="post" action=" " enctype="multipart/form-data">
    <b>Username:</b>
	<input type="text" name="username">
	<br><br>
	<b>Password:</b>
	<input type="password" name="password">	
	<br><br>

	<input type="image" src="login.png" height="25%" width="25%" name="submit" onmouseover="this.src='login2.png'" onmouseout="this.src='login.png'">
	</form>  
  </div>
</div>
	</center>
</body>
</html> 


<?php
session_start();
if(isset($_POST['submit_x'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	include '../connect.php';
	$sql="SELECT Username,Password FROM admin";
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
		for ($i=$num; $i >= 0; $i--) { 
			$row=mysqli_fetch_array($result);
			$duser=$row['Username'];
			$dpass=$row['Password'];
			if($user==$duser && $pass==$dpass && $i>0){
				$_SESSION['name']=$user;
				$_SESSION['pass']=$pass;
				end:header('location:adminpanel.php');
			}
			elseif ($user=="" || $pass==""){
				echo "<script type='text/javascript'>";
				echo "alert('Please Enter valid username and password!')";
				echo "</script>";	
				break;
				}
			elseif ($i==0){
				echo "<script type='text/javascript'>";
				echo "alert('Login Failled!')";
				echo "</script>";	
				break;
				}
			}		
}
?>
