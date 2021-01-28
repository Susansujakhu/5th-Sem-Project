
<form action="" method="post">
	<div class="welcome" id="login">
	<?php
	$user=$_SESSION['uname'];
	
	echo "Welcome ".$user;

	?>
	</div>
	<input class="btn register" id="register" type="submit" name="logout" value="Logout">
	
</form>
<?php
//session_start();
if (isset($_POST['logout'])) {
	session_destroy();
 	header("location:".$_SERVER['HTTP_REFERER']);
 	//Header('Location: '.$_SERVER['PHP_SELF']);
}

?>

