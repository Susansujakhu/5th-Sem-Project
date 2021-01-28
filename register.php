
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="register.css">
	<script src="index.js"></script>
	<title>Registration</title>

</head>

<body>
	<?php
	include 'menu.php';
	?>	

	<div class="container">
		<form action="" method="post" enctype="multipart/form-data">

			<div class="form_container">
				

				<label class="forms"> First Name  </label>
				<input class="txt" type="text" name="first_name" placeholder="First Name" required>

				<label class="forms"> Middle Name  </label> 
				<input class="txt" type="text" name="middle_name" placeholder="Middle Name"> 
				

				<label class="forms">Last Name  </label>
				<input class="txt" type="text" name="last_name" placeholder="Last Name" required>

				<label class="forms">Gender  </label>
				<div class="gender_field">
				<label class='gender'>Male</label>
				<input class="radioo" type=radio name=ans1 value="M" required>
				<label class="gender">
					Female
				</label>
				<input class="radioo" type=radio name=ans1 value="F" required>
				</div>
				
				

				<label class="forms">Permanent Address  </label>
				<input class="txt" type="text" name="permanent" placeholder="Permanent Address" required> 



				<label class="forms">Temporary Address  </label>
				<input class="txt" type="text" name="temporary" placeholder="Temporary Address" required>
				


				<label class="forms">Contact No.</label>
				<input class="txt" type="text" name="contact" placeholder="Contact No.">



				<label class="forms">Mobile  </label>
				<input class="txt" type="text" name="mobile" placeholder="Mobile" required> 
				


				<label class="forms">Email  </label>
				<input class="txt" type="email" name="email" placeholder="Email" id='email' required>

				<label class="forms">Photo  </label>
				<input class="photo" type="file" name="img"> 
				

				<label class="forms">Username  </label> 
				<input class="txt" type="text" name="username" placeholder="Username" required> 


				<label class="forms">Password  </label> 
				<input class="txt" type="password" name="password" placeholder="Password" required> 
				
			
				<div class="buttons">
					<input class="rsubmit" type="submit" name="rsubmit" value="Submit"> 
					<input class="rcancel" type="button" name="cancel" value="Cancel" onclick="window.location.href = './';" formnovalidate> 
				</div>
				
			</div>
		</form>

	</div>
	<?php
	include 'footer.php';
	?>	

	</html>

	<?php
	include 'connect.php';
	if(isset($_POST['rsubmit'])){
		$fname=$_POST['first_name'];
		$mname=$_POST['middle_name'];
		$lname=$_POST['last_name'];
		$gender=$_POST['ans1'];
		$p_add=$_POST['permanent'];
		$t_add=$_POST['temporary'];
		$contact=$_POST['contact'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$raw_password=$_POST['password'];
		$password = password_hash($raw_password, PASSWORD_DEFAULT);
		$photo=$_FILES['img']['name'];

		$sql="INSERT INTO `customer` VALUES ('id','$fname','$mname','$lname','$gender','$p_add','$t_add','$contact','$mobile','$email','$username','$password','$photo')";
		if($con -> query($sql)){
			echo "<script type='text/javascript'>";
			echo "alert('Registration Successful Thankyou $fname $lname')";
			echo "</script>";

		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Registration Failed')";
			echo "</script>";
		}
	}
	mysqli_close($con);
	?>


		