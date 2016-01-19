<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>welcome</title>
</head>

<body>

<?php
	$uname = $_REQUEST['user'];
?>
<h1 align="center"> Welcome <?php echo ucwords($uname); ?>. This is your homepage</h1>
</body>
</html>
