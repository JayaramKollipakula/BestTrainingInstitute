<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style>
		.contentDiv
		{
			background: #ffffff; 
			border-radius: 2rem; 
			border: 2px solid black;
		}
	</style>
</head>

<body>
	<?php
	include 'mainmenu.php';
	?>
	<div class="container">
	<br>
		<div class="row" style="background: #408080; margin-bottom: 2rem">
			<div class="col-xs-6 contentDiv">
				<h4 style="color:#0000FF"> Head Office :</h4><br />
				<p>Plot No. 147/A-2206, Opp. Cyber Gate way, Near Raheja Corp.,Hitech City main road, Hyderabad - 500016. Ph. no. +91-9885012345 Fax. +91-9848012345</p>
				<br />
				<h4 style="color:#0000FF"> Branch Office :</h4><br />
				<p>Plot No. 2206/P-147, Marthali Plaza, Near Electronic City, Kundanahelli main road, Banglore - 652101. Ph.no. +91-9978012345  Fax. +91-9954012345</p>
			</div>
		
			<div class="col-xs-1">
				
			</div>

			<div class="col-xs-5 contentDiv">
				<form>
					First Name: <input type="text" name="fname" id="fname"  /> <br /> <br />
					Last Name: <input type="text" name="lname" id="lname" /><br /><br />
					E-mail: <input type="email" name="email" id="email"  /><br /><br />
					Phone: <input type="text" name="phone" id="phone" maxlength="10" /><br /><br />
					Purpose of Contact: <br /><br />
					<input type="checkbox" name="services"  value="consulting" />&nbsp;Consulting <br /> <br />
					<input type="checkbox" name="services"  value="training" />&nbsp;Training & Placement <br /> <br />
					<input type="checkbox" name="services"  value="development" />&nbsp;Development <br /> <br />
					<input type="checkbox" name="services"  value="hr" />&nbsp;HR <br /> <br />
					Your Message: <br /><br />
					<textarea rows="7" cols="25"> </textarea><br /><br />
					<button type="submit">Submit</button> &nbsp;&nbsp;&nbsp;
					<button type="reset">Reset</button>
				</form>
			</div>
		</div>		
	</div>
</body>
</html>