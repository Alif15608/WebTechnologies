<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>
	
	<?php 
	session_start();

	if (isset($_SESSION['username'])) {		

	} else {
		header("location:login.php");
	}
 	?>

	<div>
		<?php include 'header(2).php';?>				
	</div>	

	<br>
	
	<div>
		<fieldset>
			<form>
			<p style="font-size: 25px;" align='center'>Welcome to Dream House <b><?php echo $_SESSION['username'];?></b></p>
				<div>
					<table>
						<tr>
							<td style="width: 70%; float: center;">
								<label><b>Account</b></label> 
								 <br>
								<ul>									
									<li><a href="dashboard.php">Dashboard</a></li>
									<li><a href="viewprofile.php">View Profile</a></li>
									<li><a href="editprofile.php">Edit Profile</a></li>
									<li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
									<li><a href="changepassword.php">Change Password</a></li>
									<li><a href="/Mid Project/Controller/manager.php">Manager Details</a></li>
									<li><a href="/Mid Project/Controller/seller.php">Seller Details</a></li>
									<li><a href="/Mid Project/Controller/buyer.php">Buyer Details</a></li>
									<li><a href="/Mid Project/Controller/appartment.php">Appartment Details</a></li>
									
								</ul>
							</td>
							<td align="right">
								<img src="/Mid Project/House_logo.png" width="250px" >
							</td>
						</tr>
					</table>
				</div>
			</form>
		</fieldset>
	</div>

	<br>

	<div align="center">
		<?php include 'Footer.php';?>
	</div>
</body>
</html>