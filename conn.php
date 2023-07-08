<?php
$server_name="localhost";
$username="root";
$password="";
$db_name="ayo_vegan";

//create connection to db
$connection= mysqli_connect($server_name,$username,$password,$db_name);

//check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>