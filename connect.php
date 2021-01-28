<?php
$con=new mysqli('localhost','root','','project');
if($con -> connect_errno){
	die("Could not connect to database ".$con -> connect_error);
	exit();
}

?>