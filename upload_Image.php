<?php 

Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
                Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
                Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed




if (isset($_FILES['myimage'])){

    $img = $_FILES['myimage']['name'];
    $tmpimg = $_FILES['myimage']['tmp_name'];

    //To get file extension
    //$fileExt = pathinfo($img, PATHINFO_EXTENSION) ;

    move_uploaded_file($tmpimg, "uploaded_images/$img");

    echo "[success] image ($img) uploaded successfully.";
    exit();
}
else{
	echo "[error] there is no data with name [myimage]";
}


?>
