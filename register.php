<!DOCTYPE html>
<html lang="en">
<head>
<title>Sean Beardsley's Website</title>
<link rel="stylesheet" href="styles/register-styles.css">
<link rel="icon" type="images/x-icon" href="/images/register.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="topnav">
  <a href="index.php">Home</a>
  <div class="topnav-right">
    <a href="forgot_password.php">Forgot Password?</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
  </div>
</div>

<div class="header">
  <h1>Register</h1>
</div>

<?php
 $username_err = "";
 $username = "";
 $password_err = "";
 $password = "";
 $firstname_err = "";
 $firstname = "";
 $lastname_err = "";
 $lastname = "";
 $email_err = "";
 $email = "";
 
 $isCleanInput = 0;

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
   if(empty($_POST["username"]))
   {
     $username_err = "Username Required";
   }
   else if(!preg_match("^[\w]{0,}", $username))
   {
     $username_err = "Invalid Username";
   }
   else
   {
     $isCleanInput++;
   }
   if(empty($_POST["password"]))
   {
     $password_err = "Password Required";
   }
   else if(!preg_match("^[\S]{8,}", $password))
   {
     $password_err = "Invalid Password";
   }
   else
   {
     $isCleanInput++;
   }
   if(empty($_POST["first_name"]))
   {
     $firstname_err = "First Name Required";
   }
   else if(!preg_match("^[\D]{0,}", $first_name))
   {
     $firstname_err = "Invalid First Name";
   }
   else
   {
     $isCleanInput++;
   }
   if(empty($_POST["last_name"]))
   {
     $lastname_err = "Last Name Required";
   }
   else if(!preg_match("^[\D]{0,}", $last_name))
   {
     $lastname_err = "Invalid Last Name";
   }
   else
   {
     $isCleanInput++;
   }
   if(empty($_POST["email"]))
   {
     $email_err = "Email Required";
   }
   else if(!preg_match("^[a-zA-z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}", $email))
   {
     $email_err = "Invalid Email";
   }
   else
   {
     $isCleanInput++;
   }
   if($isCleanInput == 5)
   {
     header("Location: register_user.php");
   }
 }


?>

<div class="registration-form-container">
  <form action="<?php echo htmlspecialchars($SERVER['PHP_SELF']); ?>" method="post" class="registration-form">
	<p>
	<label for="username">Username: </label><br/>
	<input type="text" name="username" id="username">
	<span>*</span><br/>
	<span class="error"><?php echo $username_err;?> </span>
	</p>
	<p>
	<label for="password">Password: </label><br/>
	<input type="password" name="password" id="password">
	<span>*</span><br/>
	<span class="error"><?php echo $password_err;?> </span>
	</p>
	<p>
	<label for="first_name">First Name: </label><br/>
	<input type="text" name="first_name" id="first_name">
	<span>*</span><br/>
	<span class="error"><?php echo $firstname_err;?> </span>
	</p>
	<p>
	<label for="last_name">Last Name: </label><br/>
	<input type="text" name="last_name" id="last_name">
	<span>*</span><br/>
	<span class="error"><?php echo $lastname_err;?> </span>
	</p>
	<p>
	<label for="email">Email: </label><br/>
	<input type="text" name="email" id="email">
	<span>*</span><br/>
	<span class="error"><?php echo $email_err;?> </span>
	</p>
	<p>
	<input type="button" value="Back" class="button" onclick="history.back()">
	<input type="submit" value="Register" class="button">
	</p>
  </form>
</div>

</body>
</html>
