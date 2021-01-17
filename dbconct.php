<?php


$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="budcares";


$db_connect=mysqli_connect($db_host,$db_username,$db_password,$db_name);


//check conection
if(mysqli_connect_error())
{
	echo "failed to connect to my sqli:".mysqli_connect_error();

}
echo "connection sucessfull";
?>