<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'project';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conn -> connect_error)
{
  die('Could not connect: ' . $conn -> connect_error);
}
$dob = $YYYY."-".$Month."-".$Date;
$sql = "INSERT INTO registration (fname, lname,dob, gender, email,uname, pwd,cpwd,mobile) VALUES('".$fname."','".$lname."','".$dob."','".$gender."','".$email."','".$uname."','".$pwd."','".$cpwd."','".$mobile."')";

if($conn ->query($sql) === TRUE )
{
  echo "Registered Successfully";
}else{
echo "Error: " .$sql. "<br>" .$conn -> error;
}
$conn -> close();

?>