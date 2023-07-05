<?php

	include 'db.php';
	$conn = OpenCon();
	
	$user_name = $_REQUEST['user_name'];
	$password = $_REQUEST['password'];

	$sql = "SELECT * FROM Users WHERE Username='$user_name'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) 
	{
		$userInfo = $result->fetch_assoc();

		if(password_verify($password, $userInfo['Password']))
		{
			header("Location: index.php");
			exit();
		}
		else
		{
			header("Location: login.php");
		}
	} 
	else 
	{
		header("Location: login.php");
	}

	CloseCon($conn);

?>