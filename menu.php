<div class="home_image">
	<?php 
		include 'main_image.php';
	 ?>
	
</div>
<div class="top_bar" id="top_bar" >
	
	<div class="header" id="header">
		<div class="logo">
			<img src="logo.png" width="150px">
		</div>
		<div class="search">
			<input type="text" name="search_bar" id="search_bar" placeholder="Search Here">
			<button type="submit">Search</button>
		</div>
		<div class='social_media'>
			<?php

			include 'social.php';

			?>
		</div>



	</div>

	<div class="navbar" id="navbar"> 
		<label class="toggle_area" id="toggle_area" for="toggle">&#9776;</label>
		<input type="checkbox" id="toggle">
		<div class="menu" id="menu">
			<?php
			include 'sitemap.php';
			?>
			<div class="dropdown">
				<button class="dropbtn btn" id="btn">Category</button>
				<div class="dropdown-content">
					<a href="#">Link 1</a>
					<a href="#">Link 2</a>
					<a href="#">Link 3</a>
				</div>
			</div>


			<?php
			session_start();
			if(isset($_SESSION['uname']))
			{
    //  logged in
				echo "<a class='menu_btn' id='menu_btn4' href='accounts.php'>  My Accounts </a>";
				include 'ulogout.php';

			}
			else{
				include 'ulogin.php';
			}
			?>

			


			
		</div>

	</div>

</div>