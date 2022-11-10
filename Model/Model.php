<?php
	require_once('dbconnect.php');
	
	function validate($userName, $Password)
	{
		


		$conn = getConnection();
		$sql = "SELECT * FROM doctor WHERE UserName='".$userName."' and Password='".$Password."'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		
		if(mysqli_num_rows($result) > 0 )
		{
			return $user;
		}
		else
		{
			return false;
		}
	}


?>