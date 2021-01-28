<?php
session_start();
if(!isset($_SESSION['name']))
{
    // not logged in
    
    header('Location:index.php');
    exit();
    
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Admin</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <center>
        My Admin 
        </center>
        <div class="welcome">
        <?php
        	error_reporting(0);
        	
        	$user=$_SESSION['name'];
			echo "<center>";
			echo "Welcome"." ".$user;
			echo "</center>";
			
		
		?>
		</div>
		<div class="logout">
			<a href="logout.php">  Logout </a>
		</div>
		<div class="leftdiv">
			<a href="#home"> <span class="fontcolor"> Home </span> </a>
        	<a href="#notice"> <span class="fontcolor"> Notice </span> </a>
        	<a href="#service"> <span class="fontcolor"> Service </span> </a>
        	<a href="#feedback"> <span class="fontcolor"> Feedback </span></a>
        	<a href="#aboutus">  <span class="fontcolor"> About Us </span> </a>
		</div>
		<div class="detail" id="detail">
		<?php
		echo "<center>";
		echo "<a name='home'> ";
		include 'home.php';
		echo "</a>";
		echo "</center>";
		echo "<a name='notice'> ";
		include 'notice.php';
		echo "</a>";
		echo "<a name='service'> ";
		include 'adminservice.php';
		echo "</a>";
		echo "<a name='feedback'> ";
		include 'feedback.php';
		echo "</a>";

		echo "<a name='aboutus'> ";
		include 'aboutus.php';
		echo "</a>";
		
		?>
			
		</div>
		<div class="foot">
			<br> .....SUSAN SUJAKHU ..... KAJOL DHAUBANJAR .....
		</div>
	</div>

</body>
</html>
