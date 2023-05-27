
		<?php
		include"con.php";
        if (isset($_GET['Id'])) {
        	
        
		$id=$_GET['Id'];
		$delete=mysqli_query($con,"DELETE FROM wallpapers WHERE Id='$id'");

if ($delete) {echo "<script>alert('Your Wallpaper Alread Deleted'),location.replace('admin.php')</script>";}

else {echo "<script>alert('❗Your Wallpaper is not Deleted')</script>";}
}	

		?>