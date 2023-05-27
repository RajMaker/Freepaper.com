<?php
include"con.php";
if (isset($_POST['send'])) {
$Id=$_POST['Id'];
	$Titile=$_POST['Titile'];
	$Image=$_POST['Image'];

	$insert=mysqli_query($con,"INSERT INTO Wallpapers VALUES('$Id','$Titile','$Image')");
	
if ($insert) {echo "<script>alert('Your Wallpaper Alread uploaded')</script>";}

else {echo "<script>alert('❗Your Wallpaper is not uploaded')</script>";}
}



?>
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
</head>
<body>
	<section id="section">
	<div id="header">
		<h1><a href="Photos.php">Get Wallpaper for<span>Free</span></a></h1>
		<ul id="navigation">
			<li>
				<a href="admin.php">Upload</a>
			</li>
			
					<li>
				<a href="index.php">Log Out</a>
				
			</li>
				</ul></section>
	</div>
	<div id="body">
		<h2>Admin Upload</h2>
		
<center><fieldset><legend>Upload a Wallpaper</legend>
	<center>
<form method="POST" ><input type="text" name="Id" hidden>
	<input type="text" name="Titile" size="35" id="box" placeholder="Enter a Wallpaper Titile" required><br>
	<label for="img-box" id="img-boxx"><ion-icon id="img-icon" name="images">
		
	</ion-icon><br>Select Wallpaper</label>
	<input type="file" name="Image" size="35" id="img-box" accept="image/*" required hidden><br><br>

	<div id="icons-send"><label for="send" id="seend"><ion-icon id="upload-icon" name="cloud-upload"></ion-icon>Upload</label>
	<input type="submit" name="send" id="send" value="Upload" hidden></div>
	
</form>

</center>
</fieldset>
</center>
<center>
	<?php
	$select=mysqli_query($con,"SELECT * FROM Wallpapers ORDER BY `Id` DESC");

	while ($row=mysqli_fetch_assoc($select)) {
		
		?><div class="blog">			
			<center>
			<span>
			<img src="images/<?php echo $row['Image'];?>" >
			<a href="images/<?php echo $row['Image'];?>" download>
				
			</a></span></center>


		 <a href="delete.php?Id=<?php echo $row['Id']; ?>"> <button id="btn"><ion-icon name="trash" id="delete"></ion-icon></button></a></div>
	<?php
		}
		?>



	</body>
	</div>
	<div id="footer">
		<div>
			<span>Kigali, Rwanda |(+250) 721295889</span>
			<p>
				&copy; 2023 by Raj_Maker &amp; Free Wallpaper. All rights reserved.
			</p>
		<a href="#section"><ion-icon id="top" name="chevron-up-circle-sharp" title="Back to Top"></ion-icon></a>
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