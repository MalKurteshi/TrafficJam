<?php

$target_dir = "uploads";
$target_file =  $target_dir . '/' . basename($_FILES["evidence"]["name"]);
$evidence=$target_file;
$uploadOk = "1";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["evidence"]["tmp_name"]);
    }
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["evidence"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPG"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["evidence"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["evidence"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

   if(isset($_POST['submit'])){
	   
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "extensed";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

        $unittitle = mysqli_real_escape_string($conn,$_POST['unittitle']);
        $unitnumber = mysqli_real_escape_string($conn,$_POST['unitnumber']);
        $cwdeadline = mysqli_real_escape_string($conn,$_POST['cwdeadline']);
        $reqdate = mysqli_real_escape_string($conn,$_POST['reqdate']);
        $reason = mysqli_real_escape_string($conn,$_POST['reason']);

       // $evidence = mysqli_real_escape_string($conn,$_POST['evidence']);

        $sql = "INSERT INTO extension (unitTitle, unitNumber, deadline, request_date, reason, evidence)
        VALUES ( '".$unittitle."', '".$unitnumber."', '".$cwdeadline."', '".$reqdate."', '".$reason."', '".$evidence."')";

        if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
        mysqli_close($conn);
    }  
?>
