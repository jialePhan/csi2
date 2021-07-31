<?php 
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
                Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
                Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
	include('config/db_connect.php');
	

$tn = $_POST["teamName"];
$sql = "SELECT imgString FROM images WHERE teamName = '$tn'";

$result = mysqli_query($link,$sql);

$row = mysqli_fetch_assoc($result);
echo isset($row['imgString']);


$link->close();
