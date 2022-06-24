<!DOCTYPE HTML>  
<html>
<head>
<title>Php-Login</title>

	<style type="text/css">
		.red{
			color: red;
		}
	</style>
</head>
<body>  

<?php
// define variables and set to empty values
$usernameErr = $passwordErr = $checkErr = "";
$username =  $password = $check = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
#Name Validation
  if (empty($_POST["username"])) 
  {
    $usernameErr = "User Name is required";
  } 
  else 
  {
    $username = $_POST["username"];
    // check if name only contains letters and period & dash
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) 
    {
      $usernameErr = "Only letters and dash allowed";
    }
    else if (str_word_count($_POST["username"])<2) 
    {
        $usernameErr = "User Name must contain at least 2 words";
    }
  }

  #Password Verification
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
}
else{
    $password = $_POST["password"];

    if (strlen($password) < 8) {
        $passwordErr = "Password must be contain at least 8 characters";
    }
    else if (!preg_match("@[^\w]@",$password))
    {
        $passwordErr = "use one special character";
    }
                
}	
}
  ?>

<div class="container" style="width: 300px;">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<fieldset>
  <legend> <h2>Login</h2></legend> 
                <label>User Name:</label>
				<input type="text" name="username" value="<?php echo $username;?>"><span class="red">*<?php echo $usernameErr ?></span> <br><br>
  <label>Password:</label>
				<input type="text" name="password" value="<?php echo $password;?>"><span class="red">*<?php echo $passwordErr ?></span> <br><br>

				<input type="checkbox" name="check" value="Remember Me<?php echo $check?>">Remember Me<br>

				<hr>

  <input type="submit" name="submit" value="Submit">
  <a href=""> Forgot Password? </a>  
  </fieldset>
</form>
</div>

<?php
if (!empty($_POST["username"]) && !empty($_POST["password"])) 
{echo "<h3>Your Responce is Submitted</h3>";}
?>