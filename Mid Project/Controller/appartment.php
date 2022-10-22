<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appartment</title>
</head>
<body>

	<div>
		<?php include '../View/header(2).php';?>				
	</div>	

	<br>

	<div>
		<fieldset>
			<form>
            <p style="font-size: 25px;" align='center'><b>Appartment Details</b> </p>
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
                               <th>ID</th> 
                               <th>Price</th> 
                               <th>Location</th> 
                               <th>Appartment</th>   
                               <th>E-mail</th>   
                               <th>Mobile No</th>
                          </tr>  
                          <?php   
                          $data = file_get_contents("../Model/appartment.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {   
                              echo '<tr>
                               <td>'.$row["ID"].'</td>
                               <td>'.$row["Price"].'</td>
                               <td>'.$row["Location"].'</td>
                               <td>'.$row["Apartment"].'</td>
                               <td>'.$row["Email"].'</td>
                               <td>'.$row["phone"].'</td>
                               </tr>'; 
                                
                          }  
                          ?>  
                     </table>  <br>
					 <a href="../Model/appartment.json">Approve </a><br> 
					 <a href="../Model/appartment.json">Delete </a>
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