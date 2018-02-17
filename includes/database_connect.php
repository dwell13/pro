<?php
$server="localhost";
$user="root";
$password="";
$database="rajpaperdb";
$conn=mysqli_connect($server, $user, $password, $database);
if(!$conn)
die("Error in database connection".mysqli_connect_error());
?>
