<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		.homepage
		{
			border: 2px solid black;
 			padding: 0.5rem 2rem;
 			margin-top: 1.5rem;
 			margin-right: 1.5rem;
 			background-color: #ffffff;
 			color: #000;
 			font-size: 2rem;
		}
		.homepage:hover
		{
			color: #ffffff;
			background: crimson;
		}
	</style>
</head>

<body>
	<?php

	require_once 'connect.php';
	if (isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$pwd = $_POST['pwd'];

		$sql = "SELECT * FROM `registration` WHERE uname='$uname' and pwd='$pwd'";
		$result = mysql_query($sql) or die(mysql_error());
		$count = mysql_num_rows($result);

		if ($count == 1){
			session_start();
			$rows = mysql_fetch_assoc($result);
			$_SESSION['fname']=$rows['fname'];
			echo "You are logged in";
			header("location: index.php");
		}else {
			echo "<center><h1 style='color: red'>Login Failed.</h1></center>";
		}
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12" align="center" style="background: teal;">
				<a href="index.php">
					<div class="pull-right homepage">Homepage</div>
				</a>
				<div style="color: #ffffff;">
					<h1>User Login</h1>
				</div>
			</div>
			
			<div class="col-xs-12" style="margin-top: 5rem;">
				<div id="errorDiv">
					
				</div>
				<form class="form-horizontal" action="userlogin.php" method="post" align="center" >
					<div class="form-group">
					    <label class="control-label col-sm-2" for="uname">Username:</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="uname" id="uname" placeholder="Enter Username">
					    </div>
			  		</div>
					<div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Password:</label>
				    <div class="col-sm-8">
				      <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter Password">
				    </div>
			  	</div>
					<button type="submit" class="btn btn-primary" name="submit" id="submit">Sign In</button> &nbsp; &nbsp;&nbsp;
					<a href="new_reg.php">New User? Register Here</a>
				</form>
			</div>
		</div>
	</div>
	<script>
		function backto()
		{
			window.location.href = 'index.php';
		}
	</script>
	
</body>
</html>
