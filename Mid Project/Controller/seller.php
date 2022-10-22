<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seller</title>
</head>
<body>

	<div>
		<?php include '../View/header(2).php';?>				
	</div>	

	<br>

	<div>
		<fieldset>
			<form>
            <p style="font-size: 25px;" align='center'><b>Seller Details</b> </p>
				<div>
					<table>
						<tr>
							<td style="width:300px;">
								<label><b>Account</b></label> 
								<hr> <br>
								<ul>
									<li><a href="/Mid Project/View/dashboard.php">Dashboard</a></li>
									<li><a href="/Mid Project/View/viewprofile.php">View Profile</a></li>
									<li><a href="/Mid Project/View/editprofile.php">Edit Profile</a></li>
									<li><a href="/Mid Project/View/changeprofilepicture.php">Change Profile Picture</a></li>
									<li><a href="/Mid Project/View/changepassword.php">Change Password</a></li>
									<li><a href="manager.php">Manager Details</a></li>
									<li><a href="seller.php">Seller Details</a></li>
									<li><a href="buyer.php">Buyer Details</a></li>
									<li><a href="appartment.php">Appartment Details</a></li>
			
								</ul>
							</td>

							<td>
                            <div class="container" style="width:500px;">              
                <div class="table-responsive" > 
                     <table class="table table-bordered" border="1px">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th> 
                               <th>Mobile No</th> 
                               <th>User Name</th>   
                               <th>Address</th>   
                               <th>Gender</th>
                               <th>Date of Birth</th>
                          </tr>  
                          <?php   
                          $data = file_get_contents("../Model/seller.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {   
                              echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["mobilenumber"].'</td>
                               <td>'.$row["username"].'</td>
                               <td>'.$row["address"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               </tr>'; 
                                
                          }  
                          ?>  
                     </table>  <br>
                     <a href="../Model/seller.json">Approve</a><br>
					 <a href="../Model/seller.json">Delete</a>

                   </div>
                 </div>
							</td>
						</tr>
					</table>
                    
				</div>
			</form>
		</fieldset>
	</div>

	<br>

	<div align="center">
		<?php include '../View/Footer.php';?>
	</div>
</body>
</html>