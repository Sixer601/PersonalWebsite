<!DOCTYPE html>
<html lang="en">
<head>
<title>Sean Beardsley's Website</title>
<link rel="stylesheet" href="styles/forgot-password-styles.css">
<link rel="icon" type="images/x-icon" href="/images/globe.ico">
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
  <h1>Forgot Password</h1>
</div>

<div class="forgot-password-form-container">
  <form action="forgot_password_email.php" method="post" class="forgot-password-form">
	<p>
	<label for="Email">Email: </label><br/>
	<input type="text" name="email" id="email">
	</p>
	<p>
	<input type="button" value="Back" class="button" onclick="history.back()">
	<input type="submit" value="Login" class="button">
	</p>
  </form>
</div>

</body>
</html>