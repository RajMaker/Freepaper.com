<?php
include"con.php";
if (isset($_POST['send'])) {
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];

	$sql=mysqli_query($con,"SELECT * FROM admin WHERE Email='$Email'");
	if ($row=mysqli_fetch_array($sql)) {	

if ($Password==$row['Password']) {
	header("location:admin.php");
	exit();
}

else echo "<script>alert('Incorrect Password')</script>";}

else echo"<script>alert('Incorrect Email')</script>";


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
	<body>
	<div id="header">
		<h1><a href="Photos.php">Get Wallpaper for<span>Free</span></a></h1>
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
		<h2>Admin Login</h2>
		
<center><fieldset><legend>Admin Login</legend>
	<center>
<form method="POST" >
	<input type="email" name="Email" size="35" id="box" placeholder="Email or Phone number" title="Enter your Email or Phone number" required><br><br>
	<input type="password" name="Password" size="35" id="box" placeholder="Password" title="Enter your Password" required><br><br><center>
		<input type="submit" name="send" id="sennd" value="Login">
	    <input type="reset"  value="Cancel" id="sennd">
	</center>
</form>
<br>
<a href="#" style="float: right;">Forget Password</a>
<br>


<p>I don`t have an Acount <a href="#">Signup</a><p>
</center>
</fieldset>
</center>

			
	
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