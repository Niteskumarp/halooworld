<?php
//$conn=mysqli_connect('localhost','root','','halooworld');
//if(!$conn)
//{
//  die('Connection failed: '.mysqli_connect_error());
//}
// else{
//echo "done";
//}

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "halooworld";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>