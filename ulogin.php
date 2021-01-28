
<div class="form-popup" id="myForm">
	<form action="" method="post" enctype="multipart/form-data" class="form-container">
		<h1>Login</h1>

		<label for="email"><b>Email</b></label><br>
		<input type="text" placeholder="Enter Email" name="logemail"  required>

		<label for="psw"><b>Password</b></label><br>
		<input type="password" placeholder="Enter Password" name="logpass" required>

		<input type="submit" name="submit" class="btn" value="Login">
		<input type="button" class="btn cancel" value="Close" onclick="closeForm()">
	</form>
</div>

<div id="login_show">
	<button class="btn login" id="login" onclick="openForm()">Login</button>
	
	<input class="btn register" id="register" type="button" name="register" value="Register" onclick="window.location.href = 'register.php';">
</div>




<?php

if(isset($_POST['submit'])){
	$email = $_POST['logemail'];
	$pass = $_POST['logpass'];
	
	include 'connect.php';
	$sql = "SELECT email FROM customer";
	$result = $con -> query($sql);

	$num = mysqli_num_rows($result);
	
	for ($i = $num; $i >= 0; $i--) { 

		if ($i>0) {
			
			$row=$result -> fetch_array(MYSQLI_ASSOC);

			$demail = $row['email'];	


			if($email==$demail){
				$sqlpass = "SELECT username, password FROM customer WHERE email = '$email'";
				$res = $con -> query($sqlpass);
				$rowpass = $res -> fetch_array(MYSQLI_ASSOC);

				$user = $rowpass['username'];
			$verification = password_verify($pass, $rowpass['password']);//verify textfield password with database password
			
			if ($verification){
				$_SESSION['uname']=$user;
				$_SESSION['upass']=$pass;
				$_SESSION['email']=$email;
			}
			else {
				echo "<script type='text/javascript'>";
				echo "alert('Password Incorrect!')";
				echo "</script>";	
				break;
			}
			header("location:".$_SERVER['HTTP_REFERER']);
			//Header('Location: '.$_SERVER['PHP_SELF']);
		}
	}
	elseif($i==0){
		echo "<script type='text/javascript'>";
		echo "alert('Please Enter valid username and password!')";
		echo "</script>";	

	}
}	

}
?>
