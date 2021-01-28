<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
</head>
<body>
	<center>
<?php

echo "<u><h2>FEEDBACK</h2></u>";
include '../connect.php';
	$sql="SELECT * FROM feedback";
	$result=mysqli_query($con,$sql);
	
	echo "<table border=1 cellpadding=5px cellspacing=0px>
	<tr>
		<th>SN</th>
		<th>Date</th>
		<th>Email</th>
		<th>Feedback</th>
	</tr>";
	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['SN'].". "."</td>";
        echo "<td>".$row['Date']."</td>";
        echo  "<td>".$row['Email'].".  |"."</td>";
        echo  "<td>".$row['Feedback']."."."</td>";
  		echo "</tr>";
    }
    echo "</table>";
mysqli_close($con);
?>

<form method="post" action="">
	<u><h2>Delete Feedback</h2></u>
	Feedback number to be deleted :
	<input type="text" name="num">
	<br>
	<input type="submit" name="del" value="Delete">

</form>
</center>
</body>
</html>
<?php
if (isset($_POST['del'])) {
$num=$_POST['num'];
include '../connect.php';
$sql="DELETE FROM `feedback` WHERE `feedback`.`SN` = $num";
if(mysqli_query($con,$sql))
{
	echo "delete successful";
	$sql1="ALTER TABLE `feedback` DROP `SN`";
	mysqli_query($con,$sql1);
	$sql2="ALTER TABLE `feedback` ADD `SN` INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`SN`)";
	mysqli_query($con,$sql2);
}
else{
	echo "detete fail";
}
mysqli_close($con);
}
echo "<hr>";

?>