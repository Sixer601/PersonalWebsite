<?php
	
	include 'db.php';

	function register_user($pUsername, $pPassword, $pFirstName, $pLastName, $pEmail)
	{
		
	}

	$conn = OpenCon();
	
	$username = $_REQUEST['username'];
	$password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
	$first_name =  $_REQUEST['first_name'];
     $last_name = $_REQUEST['last_name'];
     $email = $_REQUEST['email'];
	$register_date = time();

	$sql = "SELECT * FROM Users WHERE Username='$username'";
	$result = $conn->query($sql);
	$numrows = $result->num_rows;

	if($numrows == 0)
	{
		$sql = "INSERT INTO Users(Username, Password, FirstName, LastName, Email) VALUES 
							('$username','$password','$first_name','$last_name','$email')";
     
		if(mysqli_query($conn, $sql))
		{
     		header("Location: index.php");
			exit();
	     }
		else
		{
     	     echo "ERROR: Invalid Query: $sql";
     	}
	}
	else
	{
		echo "ERROR: User already exists.";
	}	

	CloseCon($conn);

?>