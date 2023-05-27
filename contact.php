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
<section id="top"></section>
<body>
	<div id="header">
		<h1><a href="contact.php">Get Wallpaper for<span>Free</span></a></h1>
		<ul id="navigation">
			<li>
				<a href="index.php">Home</a>
			</li>
			
			<li>
				<a href="Wallpaper.php">Wallpapers</a>
				</li>
					<li>
				<a href="contact.php">Contact</a>
			</li>i>
				</ul>
	</div>
	<div id="body">
		<h2>Contact</h2>
		<div id=" "><center>
			<p style="
			
			position: relative;
			background-color: cadetblue;
			word-wrap: break-word;
			font-size: 25px;

			">

			This Website help you to get easy A wallpaper And images for using in different devices such as Mobile Phones, Computers and other devices
			And it help you to Download a Photos for decolation in Houses or in Album.When you want more Wallpapers And also Any problem You have to Report to us on The Following form  </p>
			</center>

		</div>	
<?php
include"con.php";
if (isset($_POST['submit'])) {

	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Message=$_POST['Message'];
    
    $insert=mysqli_query($con,"INSERT INTO Feedback VALUES('','$Name','$Email','$Message')");

     if ($insert) {echo "<script>alert('Your Feedback Alread Sent')</script>";}

else {echo "<script>alert('❗Your Feedback is not Sent')</script>";}
}
 ?>
				
		<form method="POST">
			<h3>Report Problem</h3>
			<label for="name">
				<span>Name</span>
				<input type="text" id="name" name="Name">
			</label>
			<label for="email">
				<span>Email</span>
				<input type="text" id="email" name="Email">
			</label>
			
			<label for="message">
				<span>Message</span>
				<textarea name="Message" id="message" cols="30" rows="10"></textarea>
			</label>
			<input type="submit" id="send" value="Submit" name="submit">
		</form>

		
		<!-- <a href="#top"><ion-icon id="top" name="chevron-up-circle-sharp" title="Back to Top"></ion-icon></a> -->

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