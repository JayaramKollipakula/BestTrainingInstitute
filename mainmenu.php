<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=no"> -->


<title>Java</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style>	
		
		ul li a
		{
			font-size: 2.5rem;
			text-decoration: none !important;
		}
		.imageMenu
		{
			border: 3px solid black;
			border-radius: 2rem;
			background-color: #fff;
		}
		nav
		{
			background: forestgreen;
		}

		ul#mainnav,ul#subnav,ul#sub,ul#sub2
		{
			list-style-type:none;
			
		}
		ul#mainnav li
		{				
			text-align : center;
			position: relative;
			margin-right:0px;	
		}
		
		ul#mainnav ul#subnav
		{
			border: 1px solid #000;
			background-color: #fff;
			z-index: 1;
			display:none;
			position: absolute;
			

		}
		ul#mainnav ul#sub
		{
			display:none;
			position : absolute;	
			top : 30px;
			left:0px;
			background: #ffffff;
			z-index: 2;
			border: 1px solid #000;
			
		}
		ul#mainnav ul#sub2
		{
			display:none;
			position : absolute;	
			top : 0px;
			
			background: #ffffff;
			z-index: 2;
		}
		ul#mainnav li:hover #subnav
		{
			display:block;
		}
		ul#mainnav li:hover #sub
		{
			display:block;
		}
		ul#mainnav #sub li:hover #sub2
		{
			display:block;
		}
		#subnav li a
		{
			font-size: 2rem;
			text-align: left;
		}
		#sub li a
		{
			font-size: 2rem;
			text-align: left;
		}
		.darrow
		{
			font-size:12px;
			
		}
		.rarrow
		{
			font-size:15px;
			position:absolute;
			top:7px;
			right:4px;	
		}
		.topDiv
		{
			position: fixed;
			top:0px;
			left: 0px;
			background-color: #CCCCCC;
			padding: 8px;
			z-index: 1;
		}
		.spacer
		{
		    width: 100%;
		    height: 95px;
		}
		.topButton
		{
			border: 2px solid black;
 			padding: 0.5rem 2rem;
 			margin-right: 1.5rem;
 			background-color: #ffffff;
 			color: #000;
 			font-size: 2rem;
		}
		.topButton:hover
		{
			background-color: #DC143C;
			color: #fff;
		}
		body
		{
			background-color: #408080;
		}
</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 topDiv">
			<?php
				@session_start();
				if(isset($_SESSION['fname']))
				{
					echo "<h1 style='float:left; line-height:0;'>Welcome ".ucwords($_SESSION['fname'])."!</h1>";
					?>
					<!-- <a href="logout.php" style="margin-top: 1.3rem;" class="btn btn-primary btn-lg pull-right">Logout</a> -->
					<a href="logout.php"><div class="topButton pull-right">Logout</div></a>
					<?php
				}
				else
				{
			?>
					<a href="new_reg.php"><div class="topButton pull-right">Register</div></a>
					<a href="userlogin.php"><div class="topButton pull-right">Sign In</div></a>
			<?php 
				}
			?>
			</div>
		</div>
		<div class="spacer">
    	&nbsp;
		</div>
		<div class="row imageMenu">
		<div class="col-xs-12">
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="img/welcome.jpg" class="img-responsive" width="100%" style="max-height: 200px;" />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<ul id="mainnav">
					<div class="col-xs-3">
						<li><a href="index.php">Home</a></li>
					</div>
					<div class="col-xs-3">
						<li><a href="#">Services<span class="darrow"> &#9660; </span></a>
							<ul id="subnav">
									<li><a href="services.php">Training & Placement</a></li>
									<li><a href="recruit.php">Recruitment Services</a></li>
							</ul>
						</li>
					</div>
					
					<div class="col-xs-3">
						<li><a href="#">Technologies<span class="darrow"> &#9660; </span></a>
							<ul id="sub">
								<li><a href="oracle.php">Oracle</a></li>
								<li><a href="PHP.php">PHP with mySQL</a></li>
								<li><a href="java.php">JAVA</a>								</li>
							</ul>
						</li>	
					</div>
					<div class="col-xs-3">
						<li><a href="contactus.php">Contact Us</a></li>
					</div>
				</ul>
			</div>
		</div>
		</div>
		</div>
	</div>
</body>
</html>