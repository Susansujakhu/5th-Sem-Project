<?php
    //$url1=$_SERVER['REQUEST_URI'];
    //header("Refresh: 3; URL=$url1");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="index.js"></script>
	<title>Physiotherapy</title>

</head>
<body>
	<?php
	include 'menu.php';
	?>	
	
	<div class="container">
		<div class="main_section">
			Heading Info Section
		</div>

		<div class="sub_container">

			<?php 
			echo "<div class='image_section'>
				Image Section
			</div>
			<div class='content_section'>
				Content Section
			</div>" ;
			 ?>


		</div>
		

	</div>
	<?php
	include 'footer.php';
	?>


</body>
</html>