
<!DOCTYPE html>
<html>
<head>
	<title>Contact page</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src="index.js"></script>
</head>
<body>

        <?php
        include 'menu.php';
        ?>

  <div class="background">
	
	   
    <br><br>
	   <div class="image">
        	<?php
        			include 'connect.php';
        			$count = mysqli_query($con,"SELECT * FROM aboutus");
					$num =mysqli_num_rows($count);
                    
					$i=1;
					while ($num!=0) {
        			$sql="SELECT * FROM `aboutus` WHERE ID=$i";
        			$result = mysqli_query($con,$sql) or die("Error: " . mysqli_error($con));
        			while($row = mysqli_fetch_array($result)) {
        				$image=$row['image'];
        				echo "<img style='border-radius: 50%' src=$image height='250px' width='250px'>";
        				
        				echo "<br><br><br><br>";
        			}
        			$i=$i+1;
        			$num=$num-1;
        		}
        			mysqli_close($con)
        		?>
        	</div>
        	<div class="detail">
        		<?php
        			include 'connect.php';
        			$count = mysqli_query($con,"SELECT * FROM aboutus");
					$num =mysqli_num_rows($count);
					$i=1;
					while ($num!=0) {
        			$sql="SELECT * FROM aboutus WHERE ID=$i";
        			$result = mysqli_query($con,$sql) or die("Error: " . mysqli_error($con));
                    while($row = mysqli_fetch_array($result)) {
        				echo $row['Name']."<br>";
        				echo $row['phone']."<br>"; ?>
        				<img src="mail.png" width="80px" class="mail">
        				<?php       			
        				echo $row['email']."<br>";
                        echo $row['qualification'];
        				echo "<br><br><br><br><br>";
        			}
        			$i=$i+1;
        			$num=$num-1;
        		}
        			mysqli_close($con)
        		?>
       		</div>

      </div>
 <?php
        include 'footer.php';
        ?>
	
</body>
</html>
