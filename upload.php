<?php 
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
                Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
                Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
include('config/db_connect.php');
$tn = $_POST["teamname"];
$img = $_POST["image"];
$sql = "INSERT INTO images(teamName, imgString) VALUES ('$tn','$img');";

if(mysqli_query($link,$sql)){
	echo "Record inserted successfully";
}else{
	echo "error";
}

$link->close();