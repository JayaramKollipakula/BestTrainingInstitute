<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>New_Reg</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		.error{
			color:red;
		}
		body{
			position:relative;
			top:50px;
			padding-top:50px;
		}
		#topdiv{
			position:fixed;
			top:0px;
			left:0px;
			width:100%;
			color:#000000;
			background:teal;
			padding: 8px;
		}
		#topdiv p{
			text-align:right;
		}
		#topdiv h1
		{
			color: #ffffff;
			line-height: 0;
		}
		#bottomdiv{
			color:#0000EE;
			position:relative;
			bottom:-170px;
			text-align:right;
		}
	</style>
</head>
<body>

	<?php

	$fname_error = $lname_error = $dob_error = $gender_error = $email_error = $uname_error = $pwd_error = $cpwd_error = $mobile_error = "";
	$fname = $lname = $dob = $gender = $email = $uname = $pwd = $cpwd = $mobile = $Date = $Month = $YYYY = "";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["fname"]))
		{
			$fname_error = "Firstname is Required";
		}else
		{
			$fname = test_input($_POST["fname"]);
		}

		if(empty($_POST["lname"]))
		{
			$lname_error = "Lastname is Required";
		}else
		{
			$lname = test_input($_POST["lname"]);
		}

		if(empty($_POST["Month"]) or empty($_POST["Date"]) or empty($_POST["YYYY"]))
		{
			$dob_error = "DOB is Required";
		}else
		{
			$Month = test_input($_POST["Month"]);
			$Date = test_input($_POST["Date"]);
			$YYYY = test_input($_POST["YYYY"]);
		}

		if(empty($_POST["gender"]))
		{
			$gender_error = "gender is Required";
		}else
		{
			$gender = test_input($_POST["gender"]);
		}

		if(empty($_POST["email"]))
		{
			$email_error = "e-mail is Required";
		}else
		{
			$email = test_input($_POST["email"]);
		}

		if(empty($_POST["uname"]))
		{
			$uname_error = "Username is Required";
		}else
		{
			$uname = test_input($_POST["uname"]);
		}

		if(empty($_POST["pwd"]))
		{
			$pwd_error = "Password is Required";
		}else
		{
			$pwd = test_input($_POST["pwd"]);
		}

		if(empty($_POST["cpwd"]))
		{
			$cpwd_error = "Confirm_password is Required";
		}else
		{
			$cpwd = test_input($_POST["cpwd"]);
		}
		if(empty($_POST["mobile"]))
		{
			$mobile_error = "Mobile No. is Required";
		}else
		{
			$mobile = test_input($_POST["mobile"]);
		}
				//echo $fname_error.'sdfsdf';
		if($fname_error == "" and $lname_error  == "" and $dob_error == "" and $gender_error == "" and $email_error == "" and $uname_error == "" and $pwd_error == "" and $cpwd_error == "" and $mobile_error == "")
		{
			include "tabins.php";
			session_start();
			$_SESSION['fname'] = $fname;
			header("location: index.php");
			echo $Month;
			echo $Date;
			echo $YYYY;
		}
	}

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		return $data;
	}


	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form class="form-horizontal" method="post" action="new_reg.php">
					<div class="form-group">
				    <label class="control-label col-sm-2" for="fname">First Name:</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" name="fname" id="fname" value="<?=$fname?>" maxlength="15" placeholder="Enter First Name">
				    </div>
				    <span class="error col-sm-2">* <?php echo $fname_error;?></span>
			  	</div>

					<div class="form-group">
				    <label class="control-label col-sm-2" for="lname">Last Name:</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" name="lname" id="lname" value="<?=$lname?>" maxlength="15" placeholder="Enter Last Name">
				    </div>
				    <span class="error col-sm-2">* <?php echo $lname_error;?></span>
			  	</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="dob">DOB:</label>
						<div class="col-sm-2">
							<select name = "Month" id="Month" class="form-control">
								<option value = "">Select </option>
								<option value = "01" <?php if($Month == "01") echo "selected=selected";?> >January</option>
								<option value = "02" <?php if($Month == "02") echo "selected=selected";?> >February</option>
								<option value = "03" <?php if($Month == "03") echo "selected=selected";?> >March</option>
								<option value = "04" <?php if($Month == "04") echo "selected=selected";?> >April</option>
								<option value = "05" <?php if($Month == "05") echo "selected=selected";?> >May</option>
								<option value = "06" <?php if($Month == "06") echo "selected=selected";?> >June</option>
								<option value = "07" <?php if($Month == "07") echo "selected=selected";?> >July</option>
								<option value = "08" <?php if($Month == "08") echo "selected=selected";?> >August</option>
								<option value = "09" <?php if($Month == "09") echo "selected=selected";?> >September</option>
								<option value = "10" <?php if($Month == "10") echo "selected=selected";?> >October</option>
								<option value = "11" <?php if($Month == "11") echo "selected=selected";?> >November</option>
								<option name = "12" <?php if($Month == "12") echo "selected=selected";?> >December</option>
							</select>
						</div>

						<div class="col-sm-2">
							<select name = "Date" id="date" class="form-control">
								<option value = "">Select</option>
								<?php
									for($i=1; $i<=31; $i++)
									{
								?>
										<option name = "<?php echo $i; ?>" <?php if($Date == $i) echo "selected=selected";?>><?php echo $i; ?></option>	
								<?php
									}
								?>
							</select> 
						</div>
						
						<div class="col-sm-2">
				      <input type="text" class="form-control" name="YYYY" maxlength="4" id="year" value="<?=$YYYY?>" />
				    </div>
				    <span class="error col-sm-2">* <?php echo $dob_error;?></span>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="gender">Gender:</label>
							<div class="col-sm-6">
				    	<label class="radio-inline">
								<input type="radio" name="gender" id="m" value="m" <?php if ($gender == "m") { ?> checked="checked"<?php } ?>  /> Male 
							</label>
							<label class="radio-inline">
								<input type="radio" name="gender" id="f" value="f" <?php if ($gender == "f"){ ?> checked="checked" <?php } ?> />Female
							</label>
							</div>
							<span class="error col-sm-2">* <?php echo $gender_error;?></span>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email:</label> 
							<div class="col-sm-6">
								<input type="email" class="form-control" name="email" id="email" value="<?=$email?>" />
							</div>
							<span class="error col-sm-2">* <?php echo $email_error;?></span>
						</div>

						

				  	<div class="form-group">
							<label class="control-label col-sm-2" for="uname">Username:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="uname" maxlength="15" id="uname" value="<?=$uname?>" />
							</div>
							<span class="error col-sm-2">* <?php echo $uname_error;?></span>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2" for="pwd">Password:</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" name="pwd"  maxlength="15" id="pwd" value="<?=$pwd?>" />
							</div>
							<span class="error col-sm-2">* <?php echo $pwd_error;?></span>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" name="cpwd"  maxlength="15" id="cpwd" value="<?=$cpwd?>"/>
							</div>
							<span class="error col-sm-2">* <?php echo $cpwd_error;?></span>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="mobile">Mobile:</label>
							<div class="col-sm-6">
								<input type="number" class="form-control" name="mobile"  maxlength="10" id="mob" value="<?=$mobile?>" />
							</div>
							<span class="error col-sm-2">* <?php echo $mobile_error;?></span>
						</div>

						<div class="form-group">
							<div class="col-sm-2"></div>
							<div class="col-sm-10">
							<button type="submit" class="btn btn-default" name="Register" value=""> Register </button>
							<button type="reset" class="btn btn-default" name="Reset" value=""> Reset </button>
							</div>
						</div>
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
	<div id="topdiv" align="center"> 
		<h1>User New Registration</h1>
		<p>
			<button type="submit" onClick="backto()" value="index"> Homepage </button>
		</p>
	</div>





</body>
</html>