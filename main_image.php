
<?php

$url = $_SERVER['REQUEST_URI'];

$res = explode("/", $url);
$req = explode(".", $res[2]);
$bg_img = $req[0];

if ($bg_img == 'service') {
	
	$head = 'Our Services';
}
elseif ($bg_img == '') {
	$bg_img = 'home';	
	$head = 'Physiotherapy';
}
elseif ($bg_img == 'products') {
	$head = 'Our Products';
}

elseif ($bg_img == 'aboutus') {
	$head = 'Contact Us';
}

elseif ($bg_img == 'register'){

	$head = 'Registration';
}

else {
	$bg_img = '';
	$head = "Physiotherapy";

}

if($bg_img == ''){
	echo "<div class='banner_section'>";
	
	echo '</div>';
	

}
else {
	
	include 'connect.php';
	$sql="SELECT * FROM `main_image`";
	$cnt = $con -> query($sql);
	$n = $cnt -> field_count;

	for($i=1;$i<=1;$i++){
		$sqlimg="SELECT * FROM `main_image` where id=$i";
		$res = $con -> query($sqlimg);
		while($row=$res -> fetch_array(MYSQLI_ASSOC)){

			$image=$row[$bg_img];
			echo "<img class='banner' src=$image>";

		}
	}

	echo "<div class='heading'>";
	echo $head;
	echo '</div>';
}

?>