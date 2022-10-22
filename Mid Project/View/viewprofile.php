<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Profile</title>
</head>
<body>

	<div>
		<?php include 'header(2).php';?>				
	</div>	

	<br>

	<div>
		<fieldset>
			<form>
				<div>
					<table>
						<tr>
							<td style="width:300px;">
								<label><b>Account</b></label> 
								<hr> <br>
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

							<td>
								<fieldset style="width:600px;">
									<legend><h2>Profile</h2></legend>
									<table>
										<?php 
										session_start();

										if (isset($_SESSION['username'])) {		

										} else {
											header("location:login.php");
										}
									 	?>

									 	<tr>
											<td width="25%">Name</td>
											<td><span>:</span><?= $_SESSION['data']['name']?></td>
											<td rowspan="3" width="100%" align="center"><img src="<?= $_SESSION['data']['profilepicpath'] ?>" height="100" width="100"></td> 
										</tr>

										<tr>
											<td width="25%">Email</td>
											<td><span>:</span><?= $_SESSION['data']['email']?></td>
										</tr>

										<tr>
											<td width="25%">Gender</td>
											<td><span>:</span><?= $_SESSION['data']['gender']?></td>
										</tr>

										<tr>
											<td width="25%">Date of Birth</td>
											<td><span>:</span><?= $_SESSION['data']['dob']?></td>
											<td align="center"><a href="changeprofilepicture.php">Change</a></td>
										</tr>

										
									</table> <br><hr>
									<a href="editprofile.php">Edit Profile</a>
								</fieldset>
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