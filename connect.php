<?php
$conn = mysql_connect('localhost', 'root', '');
if (!$conn){
    die("Failed to connect Database" . mysql_error());
}
$dbname = mysql_select_db('project');
if (!$dbname){
    die("Selection to database failed" . mysql_error());
}