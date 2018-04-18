<DOCTYPE html>

<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user']))
{
header("location: admin_page_sidebar.php");
}

?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/style2.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<title>Admin Login</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 header">
					<h1>BLOOD FOR LIFE<h1>
				</div>
			</div>
			
			<div class="log">
				<h4>Admin Login Form</h4>
				<hr>
			</div>
			
			<div class="row">
				<div class="col-md-7 menu">
					<div class="well">
						<form method = "post"  class = "myform">
							<label class ="mylabel"><b>UserName:</b></label><br>
							<input type = "text" name = "username" class = "inputvalues" placeholder = "Enter Username"><br>
							<label class ="mylabel"><b>Password:</b></label><br>
							<input type = "password" name = "password" class = "inputvalues" placeholder = "Enter Password"><br>
							<input type = "submit" name = "adminlogin"  value ="Login" class = "login_btn">
							<span><?php echo $error; ?></span>
						</form>
					</div>
				</div>
			</div>
			
			
			
		</div>
	</body>
</html>		
			
			