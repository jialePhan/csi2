<?php 
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
                Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
                Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
	include('config/db_connect.php');
	
	$tn = $_POST["teamName"];
	$path = "https://csi-game.herokuapp.com/uploaded_images/".$tn.".png";
	$image = file_get_contents($path);
	echo $image;


$link->close();
?>
