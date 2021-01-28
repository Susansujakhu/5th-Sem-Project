
<!DOCTYPE html>
<html>
<head>
	<title>Our Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="service_style.css">
    
    <script src="index.js"></script>
</head>
<body>
  <?php
  include 'menu.php';

  ?>
  <div class="container">
  <?php
  include 'connect.php';
  $sql="SELECT * FROM `adminservice`";
  $cnt = $con -> query($sql);
  $n = mysqli_num_rows($cnt);
 
  for($i=1;$i<=$n;$i++){
      $sqlimg="SELECT * FROM `adminservice` where id=$i";
      $res = $con -> query($sqlimg);
      while($row=$res -> fetch_array(MYSQLI_ASSOC)){
        if ($i%2!=0) {
            echo "<div class='contain'>";
            echo "<div class='images'> ";
            $image=$row['image'];
            echo "<img class='service_img' src=$image>";
            echo '</div>';

            echo "<div class='lab' >";
            echo "<p class='headd'>";
            echo $row['headd'];
            echo  "</p>";
            echo "<p class='description'>" ;
            echo $row['description'];

            echo '</p></div>';
            echo '</div>';    
        }
        else {
            echo "<div class='contain'>";
            echo "<div class='lab' >";
            echo "<p class='headd'>";
            echo $row['headd'];
            echo  "</p>";
            echo "<p class='description'>" ;
            echo $row['description'];

            echo '</p></div>';


            echo "<div class='images'> ";
            $image=$row['image'];
            echo "<img class='service_img' src=$image>";
            echo '</div>';

            echo '</div>';      
        }
        
    }
}

?>


</div>

<?php
include 'footer.php';
?>

</body>
</html>

