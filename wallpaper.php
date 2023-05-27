<!DOCTYPE html>

<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Free Paper</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
	<link rel="icon" href="images/11.jpg">


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<section id="top"></section>
	
<body>
	<body>
	<div id="header">
		<h1><a href="Wallpaper.php">Get Wallpaper for<span>Free</span></a></h1>
		<ul id="navigation">
			<li>
				<a href="index.php">Home</a>
			</li>
			
			<li>
				<a href="Wallpaper.php">Wallpapers</a>
				</li>
					<li>
				<a href="contact.php">Contact</a>
			</li>i><ul>
				</ul>
	</div></section>
	<div id="body">
		<h2>Wallpaper<span style="float: right;cursor: pointer;">
		
			<select id="select">
			<option>Sort by:</option>				
				<a href="6.jpg"><option>Photos</option></a>
				<option>Wallpapers</option>
				<option>Gradients</option>
			</select>
			</span></h2>
		<div class="blog">
			<center>

				<?php
				include"con.php";
				$select=mysqli_query($con,"SELECT * FROM Wallpapers ORDER BY `Id` DESC");
				while ($row=mysqli_fetch_assoc($select)) {
		
		?><div class="blog">			
			<center>
			<span>
			<a href="images/<?php echo $row['Image'];?>"><img src="images/<?php echo $row['Image'];?>" ></a>
			<a href="images/<?php echo $row['Image'];?>" download>
				<button id="btn"><ion-icon name="cloud-download-sharp" id="download"></ion-icon>
			</a></span></center></div>

		
	<?php
		}
		?>


			</center>

		<a href="#top"><ion-icon id="top" name="chevron-up-circle-sharp" title="Back to Top"></ion-icon></a>

			
		</div>		
	</div>
	<div id="footer">
		<div>
			<span>Kigali, Rwanda |(+250) 721295889</span>
			<p>
				&copy; 2023 by Raj_Maker &amp; Free Wallpaper. All rights reserved.
			</p>
		</div>
		<div id="icons">
			<a href="#"><ion-icon id="fb-icon" name="logo-facebook"></ion-icon></a>
			<a href="#"> <ion-icon id="ig-icon" name="logo-instagram"></ion-icon></a>
			<a href="#"><ion-icon id="twitter-icon" name="logo-twitter"></ion-icon></a>


			</div>

		
		</div>
	</div>
</body>

	
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</script>
</html>