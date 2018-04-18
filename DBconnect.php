<?php
	
	include_once('config.php');
	
	class DBconnect
	{
		function DBconnection()
		{
			$con=mysqli_connect(DBHOST,DBUSERNAME,DBPASSWORD,DBNAME);
			
			if(mysqli_connect_errno())
			{
				echo"Failed to connect to MySQL: " . mysqli_connect_error();
			}
			return $con;
		}
	}
?>