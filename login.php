<!DOCTYPE html>
<html lang="en">
<head>
<title>Sean Beardsley's Website</title>
<link rel="stylesheet" href="styles/login-styles.css">
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
  <h1>Login</h1>
</div>

<div class="login-form-container">
  <form action="login_user.php" method="post" class="login-form">
	<p>
	<label for="Username">Username: </label><br/>
	<input type="text" name="user_name" id="username">
	</p>
	<p>
	<label for="Password">Password: </label><br/>
	<input type="password" name="password" id="password">
	</p>
	<p>
	<input type="button" value="Back" class="button" onclick="history.back()">
	<input type="submit" value="Login" class="button">
	</p>
  </form>
</div>

</body>
</html>
